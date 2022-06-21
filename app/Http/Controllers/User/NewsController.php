<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

        View::share('nav', 'dashboard');
    }

    public function list(Request $request)
    {
        $limit = 10;
        $newsList = News::orderBy('created_at','Desc')->paginate($limit);
        $admin['newsList'] =$newsList;
        $admin['limit'] =$limit;
        $admin["page"] = $newsList->currentPage();

        return view('admin.pages.news.list', $admin);
    }

    public function create(Request $request)
    {
        return view('admin.pages.news.create');
    }

    public function save(Request $request)
    {
        $title = $request->title;
        $author = $request->author;
        $description = $request->description;
        $activeBanner = $request->activeBanner;

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = preg_replace("/\s+/", "", $filename) . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('public/asset/uploaded', $fileNameToStore);

            $image = $request->root() . '/public/asset/uploaded/' . $fileNameToStore;
        }

        if($activeBanner=='on'){

            if($request->hasFile('bannerImage')){

                $filenameWithExt = $request->file('bannerImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('bannerImage')->getClientOriginalExtension();
                $fileNameToStore = preg_replace("/\s+/", "", $filename) . '_' . time() . '.' . $extension;
                $path = $request->file('bannerImage')->move('public/asset/uploaded', $fileNameToStore);

                $bannerImage = $request->root() . '/public/asset/uploaded/' . $fileNameToStore;
            }
        }


        $newBlog = new News();
        $newBlog->title = $title;
        $newBlog->author = $author;
        if($image!=null && $image!=''){
            $newBlog->image = $image;
        }
        if($activeBanner=='on'){
            $newBlog->banner = 1;
            if($bannerImage!=null && $bannerImage!=''){
                $newBlog->bannerImage = $bannerImage;
            }
        }
        $newBlog->description = $description;
        $newBlog->save();

        Session::flash('alert-success', 'News created successfully');
        return redirect('admin/news/list');
    }

    public function details($id)
    {
        $news = News::where('id',$id)->first();

        $data["news"] = $news;
        return view('admin.pages.news.details',$data);
    }

    public function edit($id)
    {
        $news = News::where('id',$id)->first();
        $data["news"] = $news;
        return view('admin.pages.news.edit',$data);
    }



    public function update(Request $request, $id)
    {
        $title = $request->title;
        $author = $request->author;
        $description = $request->description;
        $image = $request->image;
        $bannerImage = $request->bannerImage;
        $activeBanner = $request->activeBanner;

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = preg_replace("/\s+/", "", $filename) . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move('public/asset/uploaded', $fileNameToStore);

            $image = $request->root() . '/public/asset/uploaded/' . $fileNameToStore;
        }

        if($activeBanner=='on'){

            if($request->hasFile('bannerImage')){

                $filenameWithExt = $request->file('bannerImage')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('bannerImage')->getClientOriginalExtension();
                $fileNameToStore = preg_replace("/\s+/", "", $filename) . '_' . time() . '.' . $extension;
                $path = $request->file('bannerImage')->move('public/asset/uploaded', $fileNameToStore);
                $bannerImage = $request->root() . '/public/asset/uploaded/' . $fileNameToStore;
            }
        }

        $updateNews = News::where('id',$id)->first();
        $updateNews->title = $title;
        $updateNews->author = $author;
        if($image!=null && $image!=''){
            $updateNews->image = $image;
        }
        if($activeBanner=='on'){
            $updateNews->banner = 1;
            if($bannerImage!=null && $bannerImage!=''){
                $updateNews->bannerImage = $bannerImage;
            }
        }else{
            $updateNews->banner = 0;
        }
        $updateNews->description = $description;
        $updateNews->save();

        Session::flash('alert-success', 'News updated successfully');

        return redirect('admin/news/list');
    }

    public function delete($id)
    {
        $news = News::where('id',$id)->first();
        $news->delete();
        Session::flash('alert-success', 'News deleted successfully');

        return redirect('admin/news/list');
    }
}
