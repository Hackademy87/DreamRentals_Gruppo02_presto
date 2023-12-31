<?php

namespace App\Livewire;

use App\Models\Image;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProductCreateForm extends Component
{

    use WithFileUploads;

    public $category_id;
    public $name;
    public $price;
    public $user_id;
    public $validate;
    public $description;
    public $images;
    public $temporary_images;
    public $place_id;


    protected $rules=[
        'name'=>'required|min:3',
        'price'=>'required',
        'description'=>'required|min:5',
        'category_id' => 'required',
        'images.*'=> 'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',
        'place_id'=>'required'
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
        'place.required'=>'Il luogo non è stato selezionato'

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
        $product = Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'category_id'=>$this->category_id,
            'description'=>$this->description,
            'user_id'=>$this->user_id,
            'place_id'=>$this->place_id
        ]);

        if(count($this->images)){
            foreach($this->images as $image){
                // $product->images()->create(['path' => $image->store('images' , 'public')]);
                $newFileName="products/{$product->id}";
                $newImage=$product->images()->create(['path' => $image->store($newFileName , 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 390, 490),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));

        }
        return redirect('')->route('product.create')->with('message','BRAVO.., HAI INSERITO UN ARTICOLO');
    }


    public function render()
    {
        return view('livewire.product-create-form');
    }

}
