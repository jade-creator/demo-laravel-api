<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class DestroyComponent extends Component
{
    public $base = 'https://demo-laravel-api.herokuapp.com/api/products/', $url;
    public $productId = '';
    public $result = '';

    public function mount()
    {
        $this->url = $this->base;
    }

    public function render() { return 
        view('livewire.product.destroy-component');
    }

    public function delete() {
        $this->validate([
            'productId' => 'required'
        ]);
        
        try {
            $product = Product::findOrFail($this->productId);
            $product->delete();

            $this->result = [
                [
                  "message" => "Product ID: ".$this->productId." successfully deleted.",
                ],
                200,
            ];
        } catch (\Throwable $th) {
            $this->result = [
                [
                  "message" => "Action Failed!.",
                ],
                400,
            ];
        }
    }

    public function updatedProductId($value) { 
        $this->fill([
            $this->result = '',
            $this->url = $this->base.$value,
        ]);
    }
}
