<?php

namespace Controller;

use Model\ViewSubvision;
use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Admin 
{
    public function signup(Request $request): string
    {
        if ($request->method==='POST' && User::create($request->all())){
            app()->route->redirect('/hello');
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