<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ContactMessageExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Contact::where('type_contact', Contact::PAGECONTENTUS)->orderBy('id', 'DESC')->get([
            'name',
            'email',
            'type_company',
            'phone',
            'subject',
            'Message',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'البريد الالكتروني',
            'كود الدوله',
            'رقم الهاتف',
            'الموضوع',
            'الرساله',
        ];
    }
}
