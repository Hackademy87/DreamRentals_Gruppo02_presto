<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class ProductCreateForm extends Component
{
    use WithFileUploads;
    public $category_id;
    public $name;
    public $price;
    public $user_id;
    public $description;
    public $img;

    protected $rules=[
        'name'=>'required|min:3',
        'price'=>'required',
        'description'=>'required|min:5',
        'category_id' => 'required',
    ];

    protected $messages=[
        'name.required'=>'Il nome non puó essere vuoto',
        'price.required'=>'Il prezzo non puó essere vuoto',
        'description.required'=>'La descrizione non puó essere vuota',
        'category_id.required' => 'La categoria non è stata selezionata',

    ];



    public function store(){

        $this->validate();
        $this->user_id=Auth::user()->id;
         Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'description'=>$this->description,
            'user_id'=>$this->user_id,
            'img' => $this->img != null ? $this->img->store('public/product') : "default.jpg"
        ]);

        return redirect('')->route('product.create')->with('message','BRAVO.., HAI INSERITO UN ARTICOLO');
    }


    public function render()
    {
        return view('livewire.product-create-form');
    }

}
