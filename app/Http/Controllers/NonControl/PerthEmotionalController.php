<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\perthEmotionals;
use Illuminate\Support\Facades\Validator;



class PerthEmotionalController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function instruksi(){

        return view('pages/tester/perthEmotional/Instruksi');
    }

    public function question(){
        return view('pages/tester/perthEmotional/Question');
    }

    protected function post(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'q10' => 'required',
            'q11' => 'required',

            'q20' => 'required',
            'q21' => 'required',

            'q30' => 'required',
            'q31' => 'required',

            'q40' => 'required',
            'q41' => 'required',

            'q50' => 'required',
            'q51' => 'required',

            'q60' => 'required',
            'q61' => 'required',

            'q70' => 'required',
            'q71' => 'required',

            'q80' => 'required',
            'q81' => 'required',

            'q90' => 'required',
            'q91' => 'required',

            'q100' => 'required',
            'q101' => 'required',

            'q110' => 'required',
            'q111' => 'required',

            'q120' => 'required',
            'q121' => 'required',

            'q130' => 'required',
            'q131' => 'required',

            'q140' => 'required',
            'q141' => 'required',

            'q150' => 'required',
            'q151' => 'required',

            'q160' => 'required',
            'q161' => 'required',

            'q170' => 'required',
            'q171' => 'required',

            'q180' => 'required',
            'q181' => 'required',
        ]);

        // dd($validatedData);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        $user = auth()->user();

        perthEmotionals::create([
            'userId' => $user->id,
            'q10' => $request ->q10,
            'q11' => $request ->q11,

            'q20' => $request ->q20,
            'q21' => $request ->q21,

            'q30' => $request ->q30,
            'q31' => $request ->q31,

            'q40' => $request ->q40,
            'q41' => $request ->q41,

            'q50' => $request ->q50,
            'q51' => $request ->q51,

            'q60' => $request ->q60,
            'q61' => $request ->q61,

            'q70' => $request ->q70,
            'q71' => $request ->q71,

            'q80' => $request ->q80,
            'q81' => $request ->q81,

            'q90' => $request ->q90,
            'q91' => $request ->q91,

            'q100' => $request ->q100,
            'q101' => $request ->q101,

            'q110' => $request ->q110,
            'q111' => $request ->q111,

            'q120' => $request ->q120,
            'q121' => $request ->q121,

            'q130' => $request ->q130,
            'q131' => $request ->q131,

            'q140' => $request ->q140,
            'q141' => $request ->q141,

            'q150' => $request ->q150,
            'q151' => $request ->q151,

            'q160' => $request ->q160,
            'q161' => $request ->q161,

            'q170' => $request ->q170,
            'q171' => $request ->q171,

            'q180' => $request ->q180,
            'q181' => $request ->q181
        ]);
        // return redirect()->route('tester.perthEmotional.instruksi');
    }


    public function finish(){

        return view('pages/tester/perthEmotional/Finish');
    }
}
