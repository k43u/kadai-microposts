<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id)
    {   
        //認証済みのユーザがidのユーザをお気に入りする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($id)
    {
        // 認証済みユーザが、 idのユーザのお気に入りを外す
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
