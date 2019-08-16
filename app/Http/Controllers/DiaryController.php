<?php

namespace App\Http\Controllers;

use App\Diary; // App/Diaryクラスを使用する宣言
use App\Http\Requests\CreateDiary; // 追加

class DiaryController extends Controller
{
public function index()
{
    $diaries = Diary::all();

    // view/diaries/index.blade.phpを表示
    return view('diaries.index',['diaries' => $diaries]);
}
public function create()
{
    // views/diaries/create.blade.phpを表示する
    return view('diaries.create');
}
public function store(CreateDiary $request) 
{
    $diary = new Diary(); //Diaryモデルをインスタンス化

    $diary->title = $request->title; //画面で入力されたタイトルを代入
    $diary->body = $request->body; //画面で入力された本文を代入
    $diary->save(); //DBに保存

    return redirect()->route('diary.index'); //一覧ページにリダイレクト
}

}
