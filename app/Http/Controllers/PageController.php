<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        return view('blade.about',[
            'a' => 'Method'
        ]);
    }
    public function list() {
        return view('blade.list',[
            'months' => ['January', 'February', 'March', 'April', 
            'May', 'June', 'July']
        ]);
    }
    public function class() {
        return view('blade.class',[
            'isActive' => true,
        ]);
    }
    public function style() {
        return view('blade.style',[
            'isRed' => false,
            'isBlue' => true,
        ]);
    }
    public function checked() {
        return view('blade.checked',[
            'isChecked' => 5,
           
        ]);
    }
    public function selected() {
        return view('blade.selected',[
            'months' => ['January', 'February', 'March', 'April', 
            'May', 'June', 'July'],
            'currentMonth' => 'July'
]);
    }
}
