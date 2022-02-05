<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class itemController extends Controller
{
    public function item_index_get(Request $request){
        //商品情報表示画面
        if(isset($request->item_check_flg)){
            $item_select = item::find($request->id);
            return view('item.index', compact('item_select'));
        }
        return view('item.index');

    }
    public function item_index_post(){
        return view('item.index');
    }
    public function item_create_get(){
        return view('item.index');
    }
    public function item_create_post(){
        return view('item.index');
    }
    public function item_edit_get(){
        return view('item.index');
    }
    public function item_edit_post(){
        return view('item.index');
    }
}
