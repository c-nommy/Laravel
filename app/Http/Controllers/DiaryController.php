<?php

namespace App\Http\Controllers;

use App\Diary; // App/Diaryクラスを使用する宣言
use Illuminate\Http\Request;

class DiaryController extends Controller
{
public function index()
{
    $diaries = Diary::all();

    // view/diaries/index.blade.phpを表示
    return view('diaries.index',['diaries' => $diaries]);
}
}
