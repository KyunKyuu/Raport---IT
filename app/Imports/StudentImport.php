<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Student;

class StudentImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
        	if ($key >=3) {
                
            Student::create([
        		'nama' => $row[0],
        		'nis' =>  $row[1],
                'kelas' => $row[2]

        	]);
            }
        }
    }
}
