<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        // 変数に値をセット
        $first_name = "Luke";
        $last_name = "Skywalker";
 
        // view関数の第２引数に compact関数を使う
        return view('pages.about', compact('first_name', 'last_name'));        
        
        //return view('pages.about'); //pagesフォルダ内のabout.blade.php
    }

    public function contact(){
        return view('contact');
    }

    public function place(Place $place){

        //$member = Auth::user();
        //if ($member->isParent() && $member->getChild() === null) {
          //  return redirect()->to('/invite/index');
        //}

        //$data = [
            //初期値
            //'isParent' => $member->isParent(),
            //'gotPoint' => $member->getChild()->point,
            //'goodsPoint' => null,
            //'totalPoint' => 0,
            //'doneQuestList' => ['name','point','quest_id'],
            //'allQuestList' => ['name','point','quest_id'],
            //'gotGoodsList' => ['picture','name','gotDate'],
            //'pastQuestList' => ['name','point','count'],
            //'firstGet'  =>  Session::get('getFlag')? Session::get('getFlag'):false,
        //];
        
        $data['place_name'] = $place->get('place_name');
        $data['place_ward'] = $place->get('place_ward');
        $data['place_able'] = $place->get('place_able');
        $data['mirror'] = $place->get('mirror');
        $data['cost'] = $place->get('cost');

        return view('place',$data);
    }
    //public function use(){
      //  return view('選んだとしよう');
    //}
}
