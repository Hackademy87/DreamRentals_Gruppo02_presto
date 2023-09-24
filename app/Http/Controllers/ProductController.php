<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function home()
    {

        $products = Product::where('is_accepted', true)->orderBy('created_at','desc')->take(4)->get();

        return view('welcome',compact('products'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('is_accepted',true)->paginate(8);

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $places = Place::all();
        $categories = Category::all();
        return view('product.create');
        // return redirect()->route('product.create')->with('message', 'Prodotto aggiunto con successo.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show' ,compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }


    public function byCategory(Category $category){

        return view('product.byCategory', compact('category'));

    }


    public function indexByCategory(Category $category){

        $products = $category->products;

     return view('product.categorie',compact('products'));

    }

    public function byPlace(Place $place){

        return view('product.byplace', compact('place'));

    }

    public function indexByPlace(Place $place){

        $products = $place->products;

     return view('product.località',compact('products'));

    }



    public function searchProducts(Request $request){

        $products = Product::search($request->searched)->where('is_accepted', true)->paginate(6);

    return view('product.index', compact('products'));

    }


public function setLanguage($lang){
    session()->put('locale',$lang);
    return redirect()->back();
}

}






