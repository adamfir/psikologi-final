<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\RecallExport;
use App\Exports\JawabanPernyataanExport;
use App\Exports\SheetExport;
use App\Exports\ArraySpanTaskExport;
use App\Exports\MoodQuizsExport;
use App\Exports\PerthEmotionalExport;
use App\Exports\SheetExportRyan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function export(){
        return Excel::download(new SheetExport, 'Hasil reading.xlsx');
    }

    public function exportRyan(){
        return Excel::download(new SheetExportRyan, 'Hasil Array Span Task and Quizs.xlsx');
    }
}
