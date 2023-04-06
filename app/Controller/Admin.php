<?php

namespace Controller;

use Src\Validator\Validator;
use Model\ViewSubvision;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Admin 
{
    public function signup(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'name' => ['required'],
               'login' => ['required', 'unique:users,login'],
               'password' => ['required']
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.signup',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (User::create($request->all())) {
               app()->route->redirect('/login');
           }
       }
       return new View('site.signup');
    }
    
    //вид подразделения
    public function ViewSubvision(): string
    {
        $ViewSubvision= ViewSubvision::all();
        return (new View())->render('site.viewSubvision', ['ViewSubvision' => $ViewSubvision]);
    }
}