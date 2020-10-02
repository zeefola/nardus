<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Faq;

class FaqExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Faq::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'QUESTION',
            'ANSWER',
            'CREATED_AT',
            'UPDATED_AT',
        ];
    }
}
