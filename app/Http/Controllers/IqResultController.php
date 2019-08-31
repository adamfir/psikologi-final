<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\IqResult;

class IqResultController extends Controller
{
    public function index(){
        return view('search_iq_result');
    }
    public function validator(array $data){
        return Validator::make($data,[
            'email'=> ['required', 'string', 'email']
        ]);
    }
    public function search(Request $request){
        $this->validator($request->all())->validate();
        $result = IqResult::where('email','=',strtolower($request['email']))->first();
        // dd($result);
        return redirect()->back()->with('result',$result);
    }
}
