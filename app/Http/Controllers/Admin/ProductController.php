<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'ASC')->paginate(10);

        if (empty($products)) {
            return view('admin.product.index');
        } else {
            return view('admin.product.index', compact('products'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required|string|max:30',
            'description'   => 'max:300',
            'image'         => 'required|image|mimes:png,jpeg,jpg',
            'price'         => 'required|integer',
            'weight'        => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/products', $image);
        }

        Product::create([
            'name'          => $request->name,
            'slug'          => strtolower($request->name),
            'description'   => $request->description,
            'image'         => $image,
            'price'         => $request->price,
            'weight'        => $request->weight,
            'status'        => $request->status,
        ]);

        return redirect()->route('product.index')->with('success', 'Product is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with(['success' => 'Product is successfully deleted']);
    }
}
