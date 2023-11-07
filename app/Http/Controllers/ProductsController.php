<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    
    public function index(){
        $products = products::all();
        return view("admin.product", compact("products"));
    }
    
    public function store(Request $request){
        
        $this->validate($request, [
            "product_name"=> "required|string|min:3",
            "image" => "required | image  ",
            "description" => "required",
            "prices" => "required | numeric ",
            "stock" => "required | numeric ",
            "category" => "required|alpha_num",
            "discount" => "required | numeric ",
        ]);
        
        if($request->hasFile("image")){ 
            $image = $request->file("image");
            $filename = time().".".$image->getClientOriginalExtension();
            $filepath = public_path('product-image');
            $request->file("image")->move($filepath, $filename);
        }
        
        $products = Products::where('product_id', $request->input('product_id'))->first();
        
        if($products)
        {
            return redirect()->back()->withInput()->withErrors(['custom_error' => 'Product with SUK number already exists']);
        }else
        {
            $products = products::create($request->all());
            return redirect("admin/addproduct")->with("success","Product Added");
            
        }
        
        
        
    }
    
    public function show($id){ }
    public function edit($id){
        return $id;
        // return view("a", compact("id"));
     }
    
    public function update(Request $request, $id){ }
    
    public function destroy($id){ }
    
    
    
}
