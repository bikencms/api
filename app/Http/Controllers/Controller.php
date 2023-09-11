<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function import() {
        return view('import');
    }

    public function extractFormUpload(Request $request) {
        $movieFile = $request->file('movie_file', '');
        
        print_r($movieFile); die;
    }
}
