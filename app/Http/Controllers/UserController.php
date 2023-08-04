<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get(Request $request)
    {
        dump($request->method()); // получить метод, которым пришел запрос
        if ($request->isMethod('get')) {
        } // проверка, пришел ли запрос с указанным методом
        if ($request->method() == 'get') {
        } // то же самое, только сравнением
        if ($request->is('request/method')) {
        } // проверка, что сейчас мы находимся на странице request/method
        if ($request->is('request/*')) {
        } // проверка, что сейчас мы находимся на любой вложенной странице внутри request/
        if ($request->routeIs('request.method')) {
        } // проверка, что сейчас мы находимся на роутере с названием request.method
        if ($request->routeIs('request.*')) {
        } // проверка, что сейчас мы находимся на роутере у которого название начинается на request.
    }
    public function getUserDetails(Request $request, $id){

    }
}
