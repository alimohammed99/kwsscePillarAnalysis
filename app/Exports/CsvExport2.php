<?php

namespace App\Exports;

use App\Pbpillars;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport2 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pbpillars::all();
    }
}
