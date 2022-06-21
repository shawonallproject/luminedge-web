<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        View::share('nav', 'dashboard');
    }

    public function list(Request $request)
    {
        $limit = 10;
        $careerList = Career::orderBy('createdAt','Desc')->paginate($limit);
        $admin['careerList'] =$careerList;
        $admin['limit'] =$limit;
        $admin["page"] = $careerList->currentPage();

        return view('admin.pages.career.list', $admin);
    }

    public function create(Request $request)
    {
        return view('admin.pages.career.create');
    }

    public function save(Request $request)
    {
        $title = $request->title;
        $vacancy = $request->vacancy;
        $deadLine = $request->deadLine;
        $jobType = $request->jobType;
        $description = $request->description;
        $salary = $request->salary;
        $location = $request->location;
        
        $newJob = new Career();
        $newJob->title = $title;
        $newJob->vacancy = $vacancy;
        $newJob->deadLine = $deadLine;
        $newJob->jobType = $jobType;
        $newJob->description = $description;
        $newJob->salary = $salary;
        $newJob->location = $location;
        $newJob->save();

        Session::flash('alert-success', 'Career post created successfully');
        return redirect('admin/career/list');
    }

    public function details($id)
    {
        $career = Career::where('id',$id)->first();

        $data["career"] = $career;
        return view('admin.pages.career.details',$data);
    }

    public function edit($id)
    {
        $career = Career::where('id',$id)->first();

        $data["career"] = $career;
        return view('admin.pages.career.edit',$data);
    }



    public function update(Request $request, $id)
    {
        $title = $request->title;
        $vacancy = $request->vacancy;
        $deadLine = $request->deadLine;
        $jobType = $request->jobType;
        $description = $request->description;
        $salary = $request->salary;
        $location = $request->location;

        $updateCareer = Career::where('id',$id)->first();
        $updateCareer->title = $title;
        $updateCareer->vacancy = $vacancy;
        $updateCareer->deadLine = $deadLine;
        $updateCareer->jobType = $jobType;
        $updateCareer->description = $description;
        $updateCareer->salary = $salary;
        $updateCareer->location = $location;
        $updateCareer->save();

        Session::flash('alert-success', 'Career updated successfully');

        return redirect('admin/career/list');
    }

    public function delete($id)
    {
        $career = Career::where('id',$id)->first();
        $career->delete();
        Session::flash('alert-success', 'Career deleted successfully');

        return redirect('admin/career/list');
    }
}
