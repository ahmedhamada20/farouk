<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactExport implements FromCollection , WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Contact::where('type_contact', Contact::HOMECONTECT)->orderBy('id', 'DESC')->get([
            'name',
            'activity',
            'name_comppany',
            'type_company',
            'phone',
            'Message',
            'notes',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'النشاط',
            'اسم الشركه',
            'كود الدوله',
            'رقم الهاتف',
            'الرساله',
            'نوع المشكله',
        ];
    }
}
