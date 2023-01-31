<?php

namespace App\Exports;

use App\Models\RequestSercice;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubcraptionExport implements FromCollection, WithHeadings , WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return RequestSercice::orderBy('id', 'DESC')->get();
    }


    public function map($registration) : array {

        return [
            $registration->courses->name ?? null,
            $registration->packages->name ?? null,
            $registration->name,
            $registration->email,
            $registration->country,
            $registration->phone,
        ] ;


    }


    public function headings(): array
    {
        return [
            'اسم الخدمه',
            'اسم الباقه',
            'الإسم',
            'البريد الالكتروني',
            'كود الدوله',
            'رقم الهاتف',

        ];
    }
}
