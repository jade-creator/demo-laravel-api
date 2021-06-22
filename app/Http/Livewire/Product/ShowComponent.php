<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ShowComponent extends Component
{
    public $url;
    public $productId = '';
    public $result;

    public function mount() {
        $this->updatedProductId($this->productId);
    }

    public function render() { return 
        view('livewire.product.show-component');
    }

    public function show() 
    {
        $this->validate([
            'productId' => 'required'
        ]);
        
        try {
            $this->result = Product::findOrFail($this->productId);
        } catch (\Throwable $th) {
            $this->result = [
                [
                  "message" => "Product not Found.",
                ],
                400,
            ];
        }
    }

    public function dehydrate() 
    {
        $this->fill([
            'result' => '',
            'url' => 'https://demo-laravel-api.herokuapp.com/api/products/'.$this->productId,
        ]);
    }

    public function updatedResult() { $this->resetPage(); }
}
