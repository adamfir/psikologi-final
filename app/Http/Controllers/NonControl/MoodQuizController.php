<?php

namespace App\Http\Controllers;

use App\moodQuizs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MoodQuizController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function instruksi(){

        return view('pages/tester/moodQuiz/Instruksi');
    }

    public function question(){
        return view('pages/tester/moodQuiz/Question');
    }



    protected function post(Request $request)
    {
        $validatedData = Validator::make($request->all(),[
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

            'q190' => 'required',
            'q191' => 'required',

            'q200' => 'required',
            'q201' => 'required',

            'q210' => 'required',
            'q211' => 'required',

            'q220' => 'required',
            'q221' => 'required',

            'q230' => 'required',
            'q231' => 'required',

            'q240' => 'required',
            'q241' => 'required',

            'q250' => 'required',
            'q251' => 'required',

            'q260' => 'required',
            'q261' => 'required',

            'q270' => 'required',
            'q271' => 'required',

            'q280' => 'required',
            'q281' => 'required',
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        $user = auth()->user();

        // dd($request->q230);
        moodQuizs::create([
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
            'q181' => $request ->q181,

            'q190' => $request ->q190,
            'q191' => $request ->q191,

            'q200' => $request ->q200,
            'q201' => $request ->q201,

            'q210' => $request ->q210,
            'q211' => $request ->q211,

            'q220' => $request ->q220,
            'q221' => $request ->q221,

            'q230' => $request ->q230,
            'q231' => $request ->q231,

            'q240' => $request ->q240,
            'q241' => $request ->q241,

            'q250' => $request ->q250,
            'q251' => $request ->q251,

            'q260' => $request ->q260,
            'q261' => $request ->q261,

            'q270' => $request ->q270,
            'q271' => $request ->q271,

            'q280' => $request ->q280,
            'q281' => $request ->q281,
        ]);

        return redirect()->route('tester.perthEmotional.instruksi');
    }
}
