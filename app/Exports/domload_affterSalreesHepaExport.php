<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class domload_affterSalreesHepaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return  DB::table('servieus_hepas')->orderBy('id', 'DESC')->get([
            'name',
            'phone',
            'server_phone',
            'name_1',
            'server_1',
            'name_2',
            'server_2',
            'name_3',
            'server_3',
            'name_4',
            'server_4',
            'name_5',
            'server_5',
            'name_6',
            'server_6',
            'name_7',
            'server_7',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'كود الدوله',
            'رقم الهاتف',
            'السؤال الأول',
            'الإجابة الأولى',
            'السؤال الثاني',
            'الإجابة الثانيه',
            'السؤال الثالث',
            'الإجابة الثالثه',
            'السؤال الرابع',
            'الإجابة الرابعه',
            'السؤال الخامس',
            'الإجابة الخامسه',
            'السؤال السادس',
            'الإجابة السادسه',
            'السؤال السابع',
            'الإجابة السابعه',

        ];
    }
}
