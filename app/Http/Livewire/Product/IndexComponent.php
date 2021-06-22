<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class IndexComponent extends Component
{
    public $result;
    public $url;

    public function render() { return 
        view('livewire.product.index-component');
    }

    public function index() 
    { 
        $this->result = Product::all();
    }

    public function dehydrate() 
    {
        $this->fill([
            'result' => '',
            'url' => 'https://demo-laravel-api.herokuapp.com/api/products',
        ]);
    }
}
