<?php

namespace App\Imports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PegawaiImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {   
        foreach($rows as $row) {
            if($row->filter()->isNotEmpty()){
                $pegawai = new Pegawai([
                    'departement' => $row['departement'],
                    'first_name'=> $row['first_name'],
                    'last_name'=> $row['last_name'],
                    'email'=>$row['email'],
                    'gender'=> $row['gender'],
                    'ip_address'=> $row['ip_address'],
                  ]);
                $pegawai->save();
            }
        }
    }
}
