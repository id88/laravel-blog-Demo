<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class IndexController extends Controller
{
    public function index(){
        $pdo = DB::connection() -> getPdo();
        // $pdo = DB::table('blog_user') -> get();
        // $pdo = DB::table('user') -> get();//不需要写前缀blog_ 因为这个在.env文件中配置了
        dd($pdo);
    }
}
