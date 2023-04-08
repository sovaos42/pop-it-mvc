<?php

namespace Controller;

use Src\Validator\Validator;
use Model\EmployeesHome;
use Model\Discipline;
use Model\JobTitle;
use Model\Subvision;
use Model\ViewSubvision;
use Model\User;
use Model\Post;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Вы вошли!']);
    }

    
    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }
    //подразделение
    // public function Subvision(): string
    // {
    //     $Subvision= Subvision::all();
    //     return (new View())->render('site.subvision', ['Subvision' => $Subvision]);
    // }
    public function Subvision(Request $request): string
    {
            $Subvision = Subvision::all();
            $User = User::all();
            if($request->method === "GET"){
                return (new View())->render('site.subvision', ['Subvision' => $Subvision, 'User' => $User]);
            }
            elseif($request->method === "POST" && $request->get("type_form") == "filter_IDSubvision"){
                $Subvision = Subvision::where("IDSubvision", "=", $request->get("IDSubvision"))->get();
                return (new View())->render('site.subvision', ['Subvision' => $Subvision, 'User' => $User]);
            }
            elseif($request->method === "POST" && $request->get("type_form") == "search_users"){
            $Subvision = Subvision::where("IDSubvision", "=", $request->get("search"))->get();
            return (new View())->render('site.subvision', ['Subvision' => $Subvision]);
        }
    }

    public function SubvisionAdd(Request $request): string
    {
        $vieww = ViewSubvision::all();
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
                'IDView' => ['required'],
               'title' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.subvisionAdd',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (Subvision::create($request->all())) {
               app()->route->redirect('/subvision');
           }
       }
       return new View('site.subvisionAdd', ['vieww'=>$vieww]);
    }

    //должность
    public function JobTitle(): string
    {
        $JobTitle= JobTitle::all();
        return (new View())->render('site.jobTitle', ['JobTitle' => $JobTitle]);
    }

    public function JobTitleAdd(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'title' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.jobTitleAdd',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (JobTitle::create($request->all())) {
               app()->route->redirect('/jobTitle');
           }
       }
       return (new View())->render('site.jobTitleAdd');
    }
    //дисциплина
    public function Discipline(): string
    {
        $Discipline= Discipline::all();
        return (new View())->render('site.discipline', ['Discipline' => $Discipline]);
    }

    public function DisciplineAdd(Request $request): string
    {
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
               'title' => ['required'],
           ], [
               'required' => 'Поле :field пусто',
               'unique' => 'Поле :field должно быть уникально'
           ]);
    
           if($validator->fails()){
               return new View('site.disciplineAdd',
                   ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
           }
    
           if (Discipline::create($request->all())) {
               app()->route->redirect('/discipline');
           }
       }
       return (new View())->render('site.disciplineAdd');
    }

    //сотрудники
    public function User(): string
    {
        $User= User::all();
        return (new View())->render('site.users', ['User' => $User]);
    }
    
    // public function User(Request $request): string
    // {
    //     $User= User::all();
    //      if($request->method === "GET"){
    //      return (new View())->render('site.users', ['User' => $User]);
    //      }
    //      elseif($request->method === "POST" && $request->get("type_form") == "search_users"){
    //         $User = User::where("name", "=", $request->get("search"))->get();
    //         return (new View())->render('site.users', ['User' => $User]);
    //     }

    // }

}