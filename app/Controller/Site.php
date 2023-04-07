<?php

namespace Controller;

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
    public function Subvision(): string
    {
        $Subvision= Subvision::all();
        return (new View())->render('site.subvision', ['Subvision' => $Subvision]);
    }

    public function SubvisionAdd(Request $request): string
    {
        $view = Subvision::all();
        $SubvisionAdd= Subvision::all();
       if ($request->method === 'POST') {
    
           $validator = new Validator($request->all(), [
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
       return (new View())->render('site.subvisionAdd', ['SubvisionAdd' => $SubvisionAdd, 'view'=>$view]);
    }

    //должность
    public function JobTitle(): string
    {
        $JobTitle= JobTitle::all();
        return (new View())->render('site.jobTitle', ['JobTitle' => $JobTitle]);
    }
    //дисциплина
    public function Discipline(): string
    {
        $Discipline= Discipline::all();
        return (new View())->render('site.discipline', ['Discipline' => $Discipline]);
    }
    //сотрудники
    public function User(): string
    {
        $User= User::all();
        return (new View())->render('site.users', ['User' => $User]);
    }
    

    
}