<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view('add-product');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => ['required','numeric'],
            'rating' => ['required','numeric'],
            'image_path' => 'required|image'
        ]);

        $imageName = time().'.'.$request->image_path->extension();  
     
        $request->image_path->move(public_path('img'), $imageName);

       $data = [
            'name' => $request->name,
            'price' => $request->price,
            'rating' => $request->rating,
            'image_path' => $imageName
        ];

        Product::create($data);
        return redirect()->route('create.product');
    }
}
