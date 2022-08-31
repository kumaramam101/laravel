<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
class productController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product.index', compact('product'));
    }
    public function create(){
        return view('product.add');
    }
    public function add(Request $request){

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extenstion;
            $file->move('uploads/product',$fileName);
            $product->image = $fileName;
        }
        
        $product->save();

        return redirect()->back()->with('status','product added successfuly.');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        
        if($request->hasfile('image')){
            $destination = 'uploads/product'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extenstion;
            $file->move('uploads/product',$fileName);
            $product->image = $fileName;
        }
        $product->update();

        return redirect()->back()->with('status','product updated successfuly.');
    }

    public function delete($id){
        $product = Product::find($id);
            $destination = 'uploads/product'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }  
        $product->delete();
        
        return redirect()->back()->with('status','product deleted successfuly.');
    }
}
