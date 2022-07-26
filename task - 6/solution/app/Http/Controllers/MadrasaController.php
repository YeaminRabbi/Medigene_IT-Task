<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Madrasa;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

use Illuminate\Support\Str;
class MadrasaController extends Controller
{
    function import(Request $request)
    {

        $this->validate($request, [
            'uploaded_file' => 'required|file|mimes:xls,xlsx',
          
        ]);
        $the_file = $request->file('uploaded_file');

        try{
            $spreadsheet = IOFactory::load($the_file->getRealPath());
            $sheet        = $spreadsheet->getActiveSheet();
            $row_limit    = $sheet->getHighestDataRow();
            $column_limit = $sheet->getHighestDataColumn();
            $row_range    = range( 2, $row_limit );
            $column_range = range( 'F', $column_limit );
            $startcount = 1;
            $user_list = array();
            foreach ( $row_range as $row ) {

                // echo $sheet->getCell( 'A' . $row )->getValue().'--'.$sheet->getCell( 'B' . $row )->getValue().'--'.$sheet->getCell( 'C' . $row )->getValue().'--'.$sheet->getCell( 'D' . $row )->getValue().'--'.$sheet->getCell( 'E' . $row )->getValue().'--'.$sheet->getCell( 'F' . $row )->getValue().'--'.$sheet->getCell( 'G' . $row )->getValue().'--'.$sheet->getCell( 'H' . $row )->getValue().'--'.$sheet->getCell( 'I' . $row )->getValue().'--'.$sheet->getCell( 'J' . $row )->getValue().'--'.$sheet->getCell( 'K' . $row )->getValue().'--'.$sheet->getCell( 'L' . $row )->getValue().'--'.$sheet->getCell( 'M' . $row )->getValue().'--'.$sheet->getCell( 'AI' . $row )->getValue();

                $firstData = $sheet->getCell( 'A' . $row )->getValue();
                // if( is_numeric($firstData))
                // {
                //     echo $sheet->getCell( 'A' . $row )->getValue().'--|--'.$sheet->getCell( 'B' . $row )->getValue().'--|--'.$sheet->getCell( 'E' . $row )->getValue().'-------|-------'.$sheet->getCell( 'X' . $row )->getValue().'-------|-------'.$sheet->getCell( 'AE' . $row )->getValue();     
                // }

                if(Str::contains($firstData, 'Division')){
                    echo $sheet->getCell( 'A' . $row )->getValue().'--|--'.$sheet->getCell( 'C' . $row )->getValue();
                }
                echo '<br>';

              
            }

           

        } catch (Exception $e) {
            $error_code = $e->errorInfo[1];
            return back()->withErrors('There was a problem uploading the data!');
        }

      
    }
}
