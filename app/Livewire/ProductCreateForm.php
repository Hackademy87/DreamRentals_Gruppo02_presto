<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Image;
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
    public $validate;
    public $description;
    public $img;
    public $images;
    public $temporary_images;


    protected $rules=[
        'name'=>'required|min:3',
        'price'=>'required',
        'description'=>'required|min:5',
        'category_id' => 'required',
        'images.*'=> 'image|max:1024',
        'temporary_images.*'=> 'image|max:1024'
    ];

    protected $messages=[
        'name.required'=>'Il nome non puó essere vuoto',
        'price.required'=>'Il prezzo non puó essere vuoto',
        'description.required'=>'La descrizione non puó essere vuota',
        'category_id.required' => 'La categoria non è stata selezionata',
        'temporary_image.*.required'=> "L\' immagine è richiesta",
        'temporary_image.*.image' => "il file devono essere immagini",
        'temporary_max.*.max' => "L\' immagine dev\' essere massimo di 1mb",
        'images.image' =>"L\' immagine dev\' essere un\' immagine",
        'image.max' =>"L\' immagine dev\' essere massimo di 1mb",

    ];

    public function updatedTemporaryImages(){
        if($this->validate(['temporary_images.*' => 'image|max:1024'])){
            foreach($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store(Request $request){
       $this->user_id=Auth::user()->id;
        $this->validate();
         Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'description'=>$this->description,
            'user_id'=>$this->user_id,
            // 'img' => $this->img != null ? $this->img->store('public/product') : "default.jpg"
        ]);

        if(count($this->images)){
            foreach($this->images as $image){
                $this->product->images()->create(['path' => $image->store('images' , 'public')]);
            }
        }
        return redirect('')->route('product.create')->with('message','BRAVO.., HAI INSERITO UN ARTICOLO');
    }


    public function render()
    {
        return view('livewire.product-create-form');
    }

}
