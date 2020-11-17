<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $data)
    {
        foreach($data as $row) {
            if($row->filter()->isNotEmpty()){
                $project = new Project([
                    'departement' => $row['departement'],
                    'first_name'=> $row['first_name'],
                    'last_name'=> $row['last_name'],
                    'email'=>$row['email'],
                    'gender'=> $row['gender'],
                    'ip_address'=> $row['ip_address'],
                  ]);
                $project->save();
            }
        }
    }
}
