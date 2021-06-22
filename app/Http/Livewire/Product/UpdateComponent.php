<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class UpdateComponent extends Component
{
    public $product, $base = 'https://demo-laravel-api.herokuapp.com/api/products/', $url;
    public $productId, $name = '', $description = '', $price = '';
    public $attributes = [];
    public $result;

    public function rules()
    {
        return [
            'productId' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'integer'],
        ];
    }

    public function mount()
    {
        $this->url = $this->base;
    }

    public function render() { return 
        view('livewire.product.update-component');
    }

    public function update() 
    {
        $this->validate();

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->fill([
            'result' => $this->product,
            'url' => $this->base.$this->product->id.'?name='.$this->name.'&description='.$this->description.'&price='.$this->price,
        ]);
    }

    public function updatedProductId($value) 
    { 
        $this->product = Product::find($value);

        if ($this->product) {
            $this->fill([
                'name' => $this->product->name,
                'description' => $this->product->description,
                'price' => $this->product->price,
            ]);
            $this->resetValidation();
        } else {
            $this->fill([
                'name' => '',
                'description' => '',
                'price' => '',
                'url' => $this->base,
            ]);
            $this->addError('query', 'Unable to find a record');
            $this->result = '';
        }
    }
}
