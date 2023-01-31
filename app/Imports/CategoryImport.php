<?php

namespace App\Imports;

use App\Models\Category;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CategoryImport implements ToCollection, WithChunkReading, ShouldQueue, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $category = new Category();
            $category->name = ['ar' => $row['name'], 'en' => $row['name_en']];
            $category->notes = ['ar' => $row['notes'], 'en' => $row['notes_en']];
            $category->status = $row['status'] == 1 ? true : false;
            $category->save();
        }
    }

    public function chunkSize(): int
    {
        return 50;
    }
}
