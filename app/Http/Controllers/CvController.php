<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    public function index()
    {
        $cvs = Storage::files('cvs'); // Fetch files in the 'cvs' directory
        return view('dashboard.cv_storage', ['cvs' => $cvs]);
    }

    public function destroy($filename)
    {
        // Use basename to get just the file name
        $filePath = 'cvs/' . basename($filename);

        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
            return redirect()->route('cvs.index')->with('success', 'CV deleted successfully.');
        }

        return redirect()->route('cvs.index')->with('error', 'CV not found.');
    }
}
