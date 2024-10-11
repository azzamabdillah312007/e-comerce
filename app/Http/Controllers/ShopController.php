<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(){
        $products = Product::where('user_id', Auth::id())->get();
        return view('my-shop.my-shop', ['products' => $products]);
    }

    public function showAddProduct(){
        return view('my-shop.add-product');
    }
    
    public function addProduct(Request $request){
        $request->validate([
            'name' =>  'required|string',
            'brand' => 'required|string',
            'color' => 'required|string',
            'category' => 'required|string',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2098',
        ],[
            'name.required' => ',mohon isi kolom nama produk , karna ini penting',
            'brand.required' => 'mohon isi kolom brand sesuai brand produk anda',
            'color.required' => 'mohon isi kolom warna produk anda karna ini penting',
            'category.required' => 'mohon pilih kategori barang anda',
            'quantity.required' => 'mohon isi kolom stok barang anda agar costumer bisa tahu',
            'price.required' => 'mohon tentukan harga barang anda',
            'description.required' => 'mohon deskripsikan barang anda se jelas mungkin',
            'image.required' => 'mohon masukan gambar produk anda',
            'image.mimes' => 'Format gambar harus jpeg , png , jpg , atau gif',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB'
        ]);

        $imagesName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('product_images'),$imagesName);

        $userId = Auth::id();

        Product::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'color' => $request->color,
            'category' => $request->category,
            'quantity' => $request->quantity,
            'size' => $request->size,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagesName,
            'user_id' => $userId
        ]);

        return redirect()->route('my-shop');
    }

    public function showContact(){
        return view('contact.contact');
    }

    public function showAbout(){
        return view('about.about');
    }
}
