<?php

namespace App\Exports;
use App\Distributor;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DistributorExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Distributor::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'SURNAME',
            'OTHER NAME',
            'PHONE NUMBER',
            'EMAIL',
            'DATE OF BIRTH',
            'OCCUPATION',
            'GENDER', 
            'BUSINESS ADDRESS',
            'HOME ADDRESS',
            'CREATED_AT',
            'UPDATED_AT',
        ];
    }
}
