<?php

namespace App\Imports;

use App\Kwpillars;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kwpillars([
            'plan_number' => $row["plan_number"],
            'name' => $row["name"],
            'location' => $row["location"],
            'size' => $row["size"],
            'pillar_number' => $row["pillar_number"],
            'eastings' => $row["eastings"],
            'northings' => $row["northings"],
            'origin' => $row["origin"],
            'height' => $row["height"],
            'remarks' => $row["remarks"],
        ]);
     
    }

}
