<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class testController extends Controller
{

    public function get_data(){
        $cats = Category::All();
        $products = Product::with('category')->get();

        return view('home',compact('cats','products'));
    }
   
   
    public function add_category(Request $request){
        $data= new Category;
        $data->name=$request->catname;
        $data->save();
        return redirect()->back();
    }
    

    public function add_product(Request $request){

        $product = new Product();
        $product->name = $request->input('prodname');
        $product->slug = $request->input('slug');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category');
        $product->save();
        return redirect()->back();

    }
    public function delete_product($id)
{
    $prod=Product::find($id);
    $prod->delete();

    return redirect()->back();
}


public function edit_product($id)
{
    $p=Product::find($id);
    $cats = Category::All();

    return view('edit',compact('p','cats'));
}


public function update_product(Request $request,$id)
{
    $p=Product::find($id);
    $p->name = $request->input('prodname');
    $p->slug = $request->input('slug');
    $p->stock = $request->input('stock');
    $p->category_id = $request->input('category');
    $p->save();
    return redirect()->route('home');
}
}
