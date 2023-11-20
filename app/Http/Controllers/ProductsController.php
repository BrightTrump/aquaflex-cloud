<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductItem;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop.products', ['products' => Product::with('productItems')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {

        // Extract the data from the request
        $product = new Product([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'measurement' => $request->input('measurement'),
            'desc' => $request->input('desc'),
            'thumbnail' => $request->file('thumbnail')->store('products-thumbnail', 'public'),
        ]);

        // Save the data to database
        $product->save();

        // if ($request->hasFile('variant')) {
        //     foreach ($request->file('variant') as $file) {

        //         // Extract and store the variant in storage path
        //         $productImage = new ProductImage([
        //             'image' => $file->store('products-variant', 'public')
        //         ]);

        //         // Link to the main product
        //         $productImage->product()->associate($product);

        //         // Save the variant to database
        //         $productImage->save();
        //     }
        // }
        return back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productItem = ProductItem::findOrFail($id);
        return view('admin.edit-product', ['productItem' => $productItem->with('product')->first()]);
    }

}
