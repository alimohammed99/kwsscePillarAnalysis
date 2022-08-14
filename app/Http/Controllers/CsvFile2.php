<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pbpillars;

use App\Imports\CsvImport2;

use App\Exports\CsvExport2;

use Maatwebsite\Excel\Facades\Excel;

class CsvFile2 extends Controller
{
    public function csv_export2(){
        return Excel::download(new CsvExport2, 'book1.csv');
    }


    public function csv_import2(){
        Excel::import(new CsvImport2, request()->file('file'));
        return redirect()->back()->with('message', 'File uploaded Successfully');
    }
}
