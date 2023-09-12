<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;

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


    public function create(Request $request)
    {
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }


    public function store(Request $request){
        $this->validate();
        Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'category_id'=>$request->input('category_id'),
            'description'=>$this->description,
        ]);
         $this->reset();
    }


    public function render()
    {
        return view('livewire.product-create-form');
    }

}
