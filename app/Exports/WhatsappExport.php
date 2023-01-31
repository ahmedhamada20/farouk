<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WhatsappExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Contact::where('type_contact', Contact::WHATSAPP)->orderBy('id', 'DESC')->get([


            'phone',

        ]);
    }


    public function headings(): array
    {
        return [

            'رقم الهاتف',


        ];
    }
}
