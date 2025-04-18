<?php

namespace Jrfs22\LaravelPostmodule\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = PostModel::orderBy("created_at","desc")->paginate(10);

        return view("PostModule::after-login.posts.index", compact("posts"));
    }
}
