<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreateForm extends Component
{   
    public $name;
    public $price;
    public $description;

    public function store(){
        Product::create([ 
            'name'=>$this->name,   
            'price'=>$this->price, 
            'description'=>$this->description,
        ]);
         $this->reset(); 
    }
    

    public function render()
    {
        return view('livewire.product-create-form');
    }
    
}
