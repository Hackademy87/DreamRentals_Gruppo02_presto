<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductCreateForm extends Component
{
    public $category_id;
    public $name;
    public $price;
    public $description;

    protected $rules=[
        'name'=>'required|min:3',
        'price'=>'required',
        'description'=>'required|min:5',
        'category_id' => 'required'
    ];

    protected $messages=[
        'name.required'=>'Il nome non puó essere vuoto',
        'price.required'=>'Il prezzo non puó essere vuoto',
        'description.required'=>'La descrizione non puó essere vuota',
        'category_id.required' => 'La categoria non è stata selezionata'
    ];



    public function store(Request $request){
       
        $this->validate();
       
        Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'description'=>$this->description,
        ]);
         
        return redirect('')->route('product.create')->with('message','BRAVO.., HAI INSERITO UN ARTICOLO');
    }


    public function render()
    {
        return view('livewire.product-create-form');
    }

}
