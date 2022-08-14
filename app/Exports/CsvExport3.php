<?php

namespace App\Exports;

use App\Scpillars;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport3 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Scpillars::all();
    }
}
