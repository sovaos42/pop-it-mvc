<?php

namespace Controller;

use Src\Validator\Validator;
use Model\JobTitle;
use Model\ViewSubvision;
use Model\Discipline;
use Model\Subvision;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Admin 
{
    public function signup(Request $request): string
    {
        $jobTitle = JobTitle::all();
        $subvision = Subvision::all();
        $discipline = Discipline::all();
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
       return new View('site.signup', ['jobTitle' => $jobTitle, 'subvision'=>$subvision, 'discipline'=>$discipline]);
    }
    
    public function ViewSubvisionAdd(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'title' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.viewSubvisionAdd',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (ViewSubvision::create($request->all())) {
               app()->route->redirect('/viewSubvision');
           }
       }
       return new View('site.viewSubvisionAdd');
    }


    // public function ViewSubvisionDelete(): string
    // {
    //     $ViewSubvisionDelete= ViewSubvisionDelete::all();

    //     if (ViewSubvision::delete($request->all())) {
    //         app()->route->redirect('/viewSubvision');
    //         }

    //     return (new View())->render('site.viewSubvisionAdd', ['ViewSubvisionDelete' => $ViewSubvisionDelete]);
    // }

    
    
    //вид подразделения
    public function ViewSubvision(): string
    {
        $ViewSubvision= ViewSubvision::all();
        return (new View())->render('site.viewSubvision', ['ViewSubvision' => $ViewSubvision]);
    }

    // public function ViewSubvisionAdd(): string
    // {
    //     $ViewSubvisionAdd= ViewSubvisionAdd::all();
    //     return (new View())->render('site.viewSubvisionAdd', ['ViewSubvisionAdd' => $ViewSubvisionAdd]);
    // }
}