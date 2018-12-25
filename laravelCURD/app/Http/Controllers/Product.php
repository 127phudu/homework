<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category AS CategoryModel;
use App\Models\Product AS ProductModel;

class Product extends Controller
{
    public function index () {
        $products = ProductModel::all();
        $cats = CategoryModel::all();

        $categoryName = array();

        foreach ($cats as $cat) {
            $categoryName[$cat['id']] = $cat['name'];
        }

        $data = array();
        $data['categoryName'] = $categoryName;
        $data['products'] = $products;

        return view('product.index', $data);
    }

    public function insert () {
        $cats = CategoryModel::all();
        $data = array();
        $data['cats'] = $cats;
        return view( 'product.insert', $data);
    }

    public function edit ($id) {
        $product = ProductModel::find($id);
        $cats = CategoryModel::all();
        $data = array();
        $data['cats'] = $cats;
        $data['product'] = $product;
        return view( 'product.edit', $data);
    }

    public function delete ($id) {
        $data = array();
        $data['id'] = $id;
        return view( 'product.delete', $data);
    }

    public function create (Request $request) {
        $input = $request->all();

        $product = new ProductModel;

        $product->name = $input['name'];
        $product->price = $input['price'];
        $product->cat_id = $input['cat_id'];

        $product->save();

        return redirect('/product');
    }

    public function destroy ($id) {
        $product = ProductModel::find($id);
        ProductModel::where('id', $id)->delete();

        $product->delete();

        return redirect('/product');

    }

    public function update (Request $request, $id) {
        $input = $request->all();
        $product = ProductModel::find($id);
        $product->name = $input['name'];
        $product->cat_id = $input['cat_id'];
        $product->price = $input['price'];
        $product->save();

        return redirect('/product');
    }

}
