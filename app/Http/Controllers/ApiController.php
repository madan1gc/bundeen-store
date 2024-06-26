<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ApiController extends Controller
{
    public function index(){
        $products = ProductModel::all();
        $data = [];
        foreach($products as $product){
            $data[] = [
                'price' => $product->price,
                'description' => $product->description,
                'image' => $product->getImage(),
                'from_date' => $product->from_date,
                'to_date' => $product->to_date,
                'category' => $product->category,
                'publish' =>$product->publish,

            ];

        }
        return response(['title'=>'Success','message'=>'Product Data','data'=>$data],200);
       

    }
}
