<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\RecallExport;
use App\Exports\JawabanPernyataanExport;
use App\Exports\SheetExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(){
        return Excel::download(new SheetExport, 'Hasil reading.xlsx');
    }
}
