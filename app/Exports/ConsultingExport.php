<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ConsultingExport implements FromCollection , WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Contact::where('type_contact', Contact::PAGECONSULTING)->orderBy('id', 'DESC')->get([
            'name',
            'type_company',
            'phone',
            'activity',
            'name_comppany',
            'data',
            'Message',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'كود الدوله',
            'رقم الهاتف',
            'المسمي الوظيفي',
            'النشاط',
            'تاريخ الطلب',
            'نوع المشكله',

        ];
    }
}
