<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        View::share('nav', 'dashboard');
    }

    public function about()
    {

        $about = About::first();

        $content['about'] = $about;
        return view('admin.pages.content.about.list',$content);
    }

    public function editAbout(Request $request,$type){
        $about = About::first();
        $content['about'] = $about;
        $content['type'] = $type;

        return view('admin.pages.content.about.edit',$content);
    }

    public function updateAbout(Request $request,$type){
        $content = $request->description;
        $about = About::first();
        $about->$type = $content;
        $about->save();

        return redirect('admin/content/about');
    }

    public function list(Request $request)
    {
        $userId = Auth::user()->id;
        $limit = 10;
        $adminList = Admin::where('id','!=',$userId)->orderBy('created_at','Desc')->paginate($limit);
        $admin['adminList'] =$adminList;
        $admin['limit'] =$limit;
        $admin["page"] = $adminList->currentPage();

        return view('admin.pages.users.list', $admin);
    }

    public function create(Request $request)
    {
        return view('admin.pages.users.create');
    }

    public function save(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        /**
         * Duplicate Email Checking
         */
        $checkAdmin = Admin::where('email',$email)->first();

        if($checkAdmin){
            Session::flash('alert-danger', 'Email already exist');
            return redirect()->back()->withInput();
        }


        /**
         * Password Confirmation Match
         */
        if($password!=$confirmPassword){
            Session::flash('alert-danger', 'Confirm Password Did Not Match');
            return redirect()->back()->withInput();
        }



        $newUser = new Admin();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = bcrypt($password);
        $newUser->save();

        Session::flash('alert-success', 'Admin created successfully');
        return redirect('admin/list');
    }

    public function edit($id)
    {
        $user = Admin::where('id',$id)->first();

        $data["user"] = $user;
        return view('admin.pages.users.edit',$data);
    }



    public function update(Request $request, $id)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if($password!='' || $confirmPassword!='' ){
            if($password!=$confirmPassword){
                Session::flash('alert-danger', 'Confirm Password Did Not Match');
                return redirect()->back()->withInput();
            }
        }
        $checkAdmin = Admin::where('email',$email)
                            ->where('id','!=',$id)->first();

        if($checkAdmin){
            Session::flash('alert-danger', 'Email already exist');
            return redirect()->back()->withInput();
        }

        $updateUser = Admin::where('id',$id)->first();
        $updateUser->name = $name;
        $updateUser->email = $email;
        if($password!=''){
            $updateUser->password = bcrypt($password);
        }

        $updateUser->save();

        Session::flash('alert-success', 'Admin updated successfully');

        return redirect('admin/list');
    }

    public function profileEdit(Request $request)
    {
        $user = Admin::where('id',Auth::user()->id)->first();

        $data["user"] = $user;
        return view('admin.pages.profile.edit',$data);
    }

    public function profileUpdate(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if($password!='' || $confirmPassword!='' ){
            if($password!=$confirmPassword){
                Session::flash('alert-danger', 'Confirm Password Did Not Match');
                return redirect()->back()->withInput();
            }
        }
        $checkAdmin = Admin::where('email',$email)
            ->where('id','!=',Auth::user()->id)->first();

        if($checkAdmin){
            Session::flash('alert-danger', 'Email already exist');
            return redirect()->back()->withInput();
        }

        $updateUser = Admin::where('id',Auth::user()->id)->first();
        $updateUser->name = $name;
        $updateUser->email = $email;
        if($password!=''){
            $updateUser->password = bcrypt($password);
        }

        $updateUser->save();

        Session::flash('alert-success', 'Profile updated successfully');
        return redirect('admin/profile');
    }

    public function delete($id)
    {
        $user = Admin::where('id',$id)->first();
        $user->delete();
        Session::flash('alert-success', 'Admin deleted successfully');

        return redirect('admin/list');
    }
}
