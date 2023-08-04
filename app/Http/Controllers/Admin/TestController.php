<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        echo 'Controller TestController: method controller';
    }
   public function get() {
    echo 'router /post: metod GET';
   }
   public function post() {
    echo 'router /post: metod POST';
   } 
   public function update() {
    echo 'router /update: metod GET || POST || DELETE || PUT';
   }
   public function any() {
    echo 'router /update: any metod';
   }
}
