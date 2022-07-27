<?php

namespace App\Exports;

use App\Models\Madrasa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MadrasaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Madrasa::all();
    }
}
