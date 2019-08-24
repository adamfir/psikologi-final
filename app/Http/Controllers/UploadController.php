<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function userIndex()
    {
        return view('upload.user');
    }
    public function userValidator(array $data)
    {
        return Validator::make($data,[
            'file' => ['required', 'file']
        ]);
    }
    public function userPost(Request $req)
    {
        $this->userValidator($req->all())->validate();
        $uploadFile = $req->file('file');
        // dd($req['file'], $uploadFile->getClientOriginalName());
        $path = $uploadFile->storeAs('public/files',$uploadFile->getClientOriginalName());
        Excel::import(new UsersImport, $path);
        // dd($req['file'], $path);
        return redirect()->back()->with('success', 'Upload berhasil');
    }
}
