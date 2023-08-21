<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Display the about us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutUs()
    {
        return view('home-layout.about-us');
    }
    /**
     * Display the contato page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contato()
    {
        return view('home-layout.contato');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboardP()
    {
        return view('professor.dashboardP');
    }

    public function perfil()
    {
        return view('home-layout.perfil');
    }

    public function editProfile()
    {
        return view('home-layout.edit-profile');
    }

    public function newClass()
    {
        return view('professor.new-class');
    }
}