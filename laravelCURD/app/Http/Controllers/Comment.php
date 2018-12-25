<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment AS CommentModel;
use App\Models\Product AS ProductModel;

class Comment extends Controller
{
    public function index () {
        $comments = CommentModel::all();
        $data = array();
        $data['comments'] = $comments;

        return view('comment.index', $data);
    }

    public function insert () {
        $products = ProductModel::all();
        $data = array();
        $data['products'] = $products;
        return view( 'comment.insert', $data);
    }

    public function edit ($id) {
        $comment = CommentModel::find($id);
        $products = ProductModel::all();
        $data = array();
        $data['products'] = $products;
        $data['comment'] = $comment;
        return view( 'comment.edit', $data);
    }

    public function delete ($id) {
        $data = array();
        $data['id'] = $id;
        return view( 'comment.delete', $data);
    }

    public function create (Request $request) {
        $input = $request->all();

        $comment = new CommentModel;

        $comment->content = $input['content'];
        $comment->product_id = $input['product_id'];

        $comment->save();

        return redirect('/comment');
    }

    public function destroy ($id) {
        $comment = CommentModel::find($id);
        CommentModel::where('id', $id)->delete();

        $comment->delete();

        return redirect('/comment');

    }

    public function update (Request $request, $id) {
        $input = $request->all();
        $comment = CommentModel::find($id);
        $comment->content = $input['content'];
        $comment->product_id = $input['product_id'];
        $comment->save();

        return redirect('/comment');
    }
}
