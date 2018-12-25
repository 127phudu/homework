<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category AS CategoryModel;
use App\Models\Product AS ProductModel;

class Category extends Controller
{

    public function index () {
        $cats = CategoryModel::all();
        $data = array();
        $data['cats'] = $cats;

        return view('category.index', $data);
    }

    public function insert () {
        $data = array();
        return view( 'category.insert', $data);
    }

    public function edit ($id) {
        $cat = CategoryModel::find($id);
        $data = array();
        $data['cat'] = $cat;
        return view( 'category.edit', $data);
    }

    public function delete ($id) {
        $data = array();
        $data['id'] = $id;
        return view( 'category.delete', $data);
    }

    public function create (Request $request) {
        $input = $request->all();

        $cat = new CategoryModel;

        $cat->name = $input['name'];

        $cat->save();

        return redirect('/category');
    }

    public function destroy ($id) {
        $cat = CategoryModel::find($id);
        CategoryModel::where('id', $id)->delete();

        $cat->delete();

        return redirect('/category');

    }

    public function update (Request $request, $id) {
        $input = $request->all();
        $cat = CategoryModel::find($id);
        $cat->name = $input['name'];
        $cat->save();

        return redirect('/category');
    }

}
