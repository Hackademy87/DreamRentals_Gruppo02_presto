<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreateForm extends Component
{   
    public $name;
    public $price;
    public $description;
    protected $rules=[
        'name'=>'required|min:3',
        'price'=>'required',
        'description'=>'required|min:5'
    ];

    protected $messages=[
        'name.required'=>'Il nome non puó essere vuoto',
        'price.required'=>'Il prezzo non puó essere vuoto',
        'description.required'=>'La descrizione non puó essere vuota',
    ];
    public function store(){
        $this->validate();
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
