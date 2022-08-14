<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kwpillars;

// use App\Pbpillars;

// use App\Scpillars;

use App\Imports\CsvImport;

use App\Exports\CsvExport;

use Maatwebsite\Excel\Facades\Excel;


class CsvFile extends Controller
{
    // function index(){
    //     $data = kwpillars::all();
    //     return view('csv_file', compact('data'));
    // }

    public function csv_export(){
        return Excel::download(new CsvExport, 'book1.csv');
    }


    public function csv_import(){
        Excel::import(new CsvImport, request()->file('file'));
        return redirect()->back()->with('message', 'File uploaded Successfully');
    }
}
