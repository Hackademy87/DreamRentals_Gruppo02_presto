<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Place;
use App\Models\Profile;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name','price','description','category','category_id', 'profile_id', 'user_id','place','place_id'];



    public function toSearchableArray():array{
        $place = $this->place;
        $category = $this->category;
        $array =[
            'id'=> $this->id,
            'name'=> $this->name,
            'description'=>$this->description,
            "category"=> $category,
            "place"=> $place
        ];
        return $array;
    }


    public function category(){

    return $this->belongsTo(Category::class);
    }

    public function place(){

        return $this->belongsTo(Place::class);
        }

    public function profile(){
        return $this->belongsTo(Profile::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

public function setAccepted($value){


    $this->is_accepted = $value;
    $this->save();
    return true;

}

public function setReverse()
{
    $this->setAccepted(null);
    return redirect()->route('revisor.index');
}

public static function toBeRevisionedCount(){

    return Product::where('is_accepted',null)->count();

}

public function images(){
    return $this->hasMany(Image::class);
}





}
