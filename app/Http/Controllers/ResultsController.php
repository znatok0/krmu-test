<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResultsController extends Controller
{   
    public function insertForm(){
        return view('main');
    }
    public function insert(Request $request){
        $full_name = $request->input('full_name');
        $email = $request->input('email');
        $iin = $request->input('iin');
        $result = '54543';
        $created_at = date('d.m.Y');
        $request->validate([
            'full_name' => 'required|max:255',
            'email' => 'required|email',
            'iin' => 'required|min:12|max:12',
        ]);
        date_default_timezone_set('Asia/Almaty');
        $data = array('iin'=>$iin, 'full_name'=>$full_name, 'email'=>$email, 'result'=>$result, 'created_at'=>$created_at);
        DB::table('results')->insert($data);
        echo "Спасибо, ваши результаты записаны<br/>";
        echo "Теперь вы можете покинуть эту страницу<br/>";
    }
}
