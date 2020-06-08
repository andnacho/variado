<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'files' => 'required'
        ]);

        if ($files = $request->file('files')) {
            foreach ($files as $file) {
                \Storage::putFileAs('/files', $file, $file->getClientOriginalName());
            }
        } else {
            return back()->with('status', 'No hay ningún archivo');
        }

        return back()->with('status', 'Subido');
    }
}
