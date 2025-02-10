<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\StorePostRequest;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
        $products = Product::latest()->paginate(6);
        return view("products.index", compact("products"))->with("products", $products);
    }

    public function create()
    {
        $teams = Team::all();
        return view("products.create", compact("teams"))->with("teams", $teams);
    }

    public function store(StorePostRequest $request)
    {
        if ($request->hasFile("image")) {
        $name = $request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs("images", $name);
        }

        $product = Product::create([
            "team_id" => $request->team_id,
            "name" => $request->name,
            "short_description" => $request->short_description,
            "price"=> $request->price,
            "image" => $path ?? null
        ]);

        return redirect()->route("products.index");
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view("products.show")->with("product", $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $teams = Team::all();
        return view("products.edit")->with(["product" => $product, "teams" => $teams]);
    }

    public function update( Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->hasFile("image")) {
            if(isset($product->image)) {
                Storage::delete($product->image);
            }

            $name = $request->file("image")->getClientOriginalName();
        $path = $request->file("image")->storeAs("images", $name);
        }

        $product->update([
            "team_id" => $request->team_id,
            "name" => $request->name,
            "short_description" => $request->short_description,
            "price"=> $request->price,
            "image" => $path ?? $product->image
        ]);

        return redirect()->route("products.show", ["product" => $product->id]);
            
    }

    public function destroy(Product $product)
    {
        if(isset($product->image)) {
            Storage::delete($product->image);
        }
        $product->delete();
        return redirect()->route("products.index");
    }

}
