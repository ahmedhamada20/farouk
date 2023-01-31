<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class domload_affterSalreesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return  DB::table('after_sales')->orderBy('id', 'DESC')->get([
            'name',
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

        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',

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
        

        ];
    }
}
