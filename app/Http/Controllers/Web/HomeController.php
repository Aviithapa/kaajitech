<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'web/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        if ($file_path) {
            // switch ($slug) {
            //     case 'index' || '':
            //         return view('web.pages.index');
            //         break;
            //     case 'contact':
            //         return view('web.pages.contact');
            //         break;
            // }

            return view('web.pages.' . $slug);
        }
    }
}
