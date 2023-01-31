<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Customer::orderBy('id', 'DESC')->get([
            'name',
            'email',
            'code',
            'phone',
            'address',
        ]);
    }


    public function headings(): array
    {
        return [
            'الإسم',
            'البريد الالكتروني',
            'كود الدوله',
            'رقم الهاتف',
            'العنوان',
        ];
    }
}
