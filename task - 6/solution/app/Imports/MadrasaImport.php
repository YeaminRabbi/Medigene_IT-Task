<?php

namespace App\Imports;

use App\Models\Modrasa;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class MadrasaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if()
        return new Modrasa([
            'division'     => $row[0],
            'district'    => $row[1], 
            'thana' => $row[2],
            'eiin' => $row[3],
            'name' => $row[4],
            'post_office' => $row[5],
            'address' => $row[6],
            'mobile' => $row[7],
        ]);
    }
}
