<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        $uploadedFiles = []; // Định nghĩa biến để lưu trữ danh sách các tệp đã tải lên (nếu cần)

        return view('upload', compact('uploadedFiles'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads'); // Lưu trữ tệp tin trong thư mục 'storage/app/uploads'
            // Do something with the uploaded file path, like saving to a database
        }

        return redirect()->route('upload.index');
    }
}
