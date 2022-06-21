<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Career;
use App\Models\News;
use App\Models\Subscription;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        View::share('nav', 'dashboard');
    }

    public function index()
    {
        $date = today()->format('Y-m-d');
        $career = Career::where('deadLine', '>=', $date)->count();
        $news = News::count();
        $subscription = Subscription::count();
        $admin = Admin::count();
        
        $data['career'] = $career;
        $data['news'] = $news;
        $data['subscription'] = $subscription;
        $data['admin'] = $admin;

        return view('admin.pages.dashboard',$data);
    }

}
