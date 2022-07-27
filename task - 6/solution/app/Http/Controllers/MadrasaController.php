<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Madrasa;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

use App\Exports\MadrasaExport;
use Maatwebsite\Excel\Facades\Excel;
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
            $row_range    = range( 1, $row_limit );
            $column_range = range( 'F', $column_limit );
            $startcount = 1;
            $user_list = array();

            $divisionCount = 1;

            $division = "";
            $district = "";
            $thana = "";

            foreach ( $row_range as $row ) {

                
                // echo $sheet->getCell( 'A' . $row )->getValue().'--'.$sheet->getCell( 'B' . $row )->getValue().'--'.$sheet->getCell( 'C' . $row )->getValue().'--'.$sheet->getCell( 'D' . $row )->getValue().'--'.$sheet->getCell( 'E' . $row )->getValue().'--'.$sheet->getCell( 'F' . $row )->getValue().'--'.$sheet->getCell( 'G' . $row )->getValue().'--'.$sheet->getCell( 'H' . $row )->getValue().'--'.$sheet->getCell( 'I' . $row )->getValue().'--'.$sheet->getCell( 'J' . $row )->getValue().'--'.$sheet->getCell( 'K' . $row )->getValue().'--'.$sheet->getCell( 'L' . $row )->getValue().'--'.$sheet->getCell( 'M' . $row )->getValue().'--'.$sheet->getCell( 'AI' . $row )->getValue();

                $firstData = $sheet->getCell( 'A' . $row )->getValue();
                if(Str::contains($firstData, 'Division')){
                    //echo $sheet->getCell( 'A' . $row )->getValue().'--|--'.$sheet->getCell( 'C' . $row )->getValue();

                    $ValDic = $sheet->getCell( 'C' . $row )->getValue();
                    $arrDiv = explode(' ', $ValDic);

                    $division = $arrDiv[0];
                    $district = $arrDiv[1];
                    $thana = str_replace(($arrDiv[0].' '.$arrDiv[1]).' ', "", $ValDic); ;

                    echo $division.'--|--'.$district.'--|--'.$thana;

                    echo '<br>';
                }

                if( is_numeric($firstData))
                {
                    echo $sheet->getCell( 'A' . $row )->getValue().'--|--'.$sheet->getCell( 'B' . $row )->getValue().'--|--'.$sheet->getCell( 'E' . $row )->getValue().'-------|-------'.$sheet->getCell( 'X' . $row )->getValue().'-------|-------'.$sheet->getCell( 'AE' . $row )->getValue();     
                    echo '<br>';
                    $madrasa = new Madrasa;
                    $madrasa->eiin = $sheet->getCell( 'B' . $row )->getValue();
                    $madrasa->name = $sheet->getCell( 'E' . $row )->getValue();
                    $madrasa->address = $sheet->getCell( 'X' . $row )->getValue();
                    $madrasa->mobile = $sheet->getCell( 'AE' . $row )->getValue();
                    $madrasa->division =  $division;
                    $madrasa->district =  $district;
                    $madrasa->thana =  $thana;
                    $madrasa->save();
                }

                
               

              
            }

           

        } catch (Exception $e) {
            $error_code = $e->errorInfo[1];
            return back()->withErrors('There was a problem uploading the data!');
        }

      
    }

    public function export() 
    {
        return Excel::download(new MadrasaExport, 'madrasa.xlsx');
    }
}
