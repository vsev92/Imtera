<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function showForm()
    {
        return view('excel.upload');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv|max:2048',
        ]);

        $file = $request->file('excel_file');

        // Обработка файла с помощью Laravel Excel
        Excel::import(new YourDataImport, $file);

        return back()->with('success', 'Файл успешно загружен и обработан!');
    }
}
