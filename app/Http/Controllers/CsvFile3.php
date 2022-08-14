<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Scpillars;

use App\Imports\CsvImport3;

use App\Exports\CsvExport3;

use Maatwebsite\Excel\Facades\Excel;

class CsvFile3 extends Controller
{
    public function csv_export3(){
        return Excel::download(new CsvExport3, 'book1.csv');
    }


    public function csv_import3(){
        Excel::import(new CsvImport3, request()->file('file'));
        return redirect()->back()->with('message', 'File uploaded Successfully');
    }
}
