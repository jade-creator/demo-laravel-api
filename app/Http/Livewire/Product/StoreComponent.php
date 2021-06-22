<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class StoreComponent extends Component
{
    public Product $product;
    public $result;
    public $base = 'https://demo-laravel-api.herokuapp.com/api/products', $url;

    public function rules() 
    {
        return [
            'product.name' => ['required', 'string'],
            'product.description' => ['required', 'string'],
            'product.price' => ['required', 'integer'],
        ];
    }

    public function mount()
    {
        $this->refresh();
    }

    public function render() { return 
        view('livewire.product.store-component');
    }

    public function store() 
    {
        $this->refresh();

        $this->validate();

        $this->product->save();

        $this->fill([
            'url' => $this->base.'?name='.$this->product->name.'&description='.$this->product->description.'&price='.$this->product->price,
            'result' => $this->product,
        ]);
    }

    public function refresh()
    {
        $this->fill([
            'url' => $this->base,
            'result' => '',
        ]);
    }

    public function dehydrate() 
    {
        $this->fill([
            'product' => new Product,
        ]);
    }
}
