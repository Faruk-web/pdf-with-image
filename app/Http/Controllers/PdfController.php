<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index() 
    {
        $pdf = PDF::loadView('pdf.sample-with-image', [
            'title' => 'CodeAndDeploy.com Laravel Pdf with Image Example',
            'description' => 'This is an example Laravel pdf with Image tutorial.',
            'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
        ]);

        return $pdf->download('sample-with-image.pdf');
    }
}
