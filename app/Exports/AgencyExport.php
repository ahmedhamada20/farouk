<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AgencyExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Contact::where('type_contact', Contact::AGENCY)->orderBy('id', 'DESC')->get([
            'name',
            'type_company',
            'phone',
            'subject',


            'name_comppany',

            'Message',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'كود الدوله',
            'رقم الهاتف',
            'النشاط',

            'اسم الشركه',

            'الرساله',

        ];
    }
}
