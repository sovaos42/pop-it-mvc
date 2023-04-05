<?php

namespace Controller;

use Model\EmployeesHome;
use Model\ViewSubvision;
use Model\Discipline;
use Model\JobTitle;
use Model\Subvision;

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
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method==='POST' && User::create($request->all())){
            app()->route->redirect('/hello');
        }
        return new View('site.signup');
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
    //сотрудник
    // public function Employees(): string
    // {
    //     $Employees= Employees::all();
    //     return (new View())->render('site.employees', ['Employees' => $Employees]);
    // }
    //подразделение
    public function Subvision(): string
    {
        $Subvision= Subvision::all();
        return (new View())->render('site.subvision', ['Subvision' => $Subvision]);
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
    //вид подразделения
    public function ViewSubvision(): string
    {
        $ViewSubvision= ViewSubvision::all();
        return (new View())->render('site.viewSubvision', ['ViewSubvision' => $ViewSubvision]);
    }
    //личный кабинет
    public function User(): string
    {
        $User= User::all();
        return (new View())->render('site.users', ['User' => $User]);
    }
}
