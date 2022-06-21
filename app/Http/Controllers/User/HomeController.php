<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Career;
use App\Models\About;
use App\Models\News;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->toEmail ="info@luminedge.com.au";
    }

    public function home(Request $request)
    {
        $about = About::first();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $hotNews = News::where('banner',1)->orderBy('id', 'desc')->take(3)->get();
        $data['about'] = $about;
        $data['news'] = $news;
        $data['hotNews'] = $hotNews;
        return view('web.pages.home',$data);
    }

    public function about(Request $request)
    {
        $about = About::first();
        $news = News::orderBy('id', 'desc')->take(3)->get();
        $data['about'] = $about;
        $data['news'] = $news;
        return view('web.pages.about',$data);
    }

    public function career(Request $request)
    {
        $limit = 6;
        $date = today()->format('Y-m-d');
        $careerList = Career::where('deadLine', '>=', $date)->orderBy('createdAt','Desc')->paginate($limit);
        $data['career'] = $careerList;
        return view('web.pages.career',$data);
    }

    public function services(Request $request)
    {

        return view('web.pages.services');
    }

    public function careerDetails(Request $request,$id)
    {
        $career = Career::where('id',$id)->first();
        $data['career'] = $career;
        return view('web.pages.career-details',$data);
    }

    public function news(Request $request)
    {
        $limit = 6;
        $newsList = News::orderBy('created_at','Desc')->paginate($limit);
        $data['news'] = $newsList;
        return view('web.pages.news',$data);
    }

    public function newsDetails(Request $request,$id)
    {
        $news = News::where('id',$id)->first();
        $recentList = News::orderBy('id', 'desc')->take(6)->get();
        $data['news'] = $news;
        $data['recentList'] = $recentList;
        return view('web.pages.news-details',$data);
    }

    public function contact(Request $request)
    {
        return view('web.pages.contact');
    }

    public function clientInformation(Request $request){
        $name = $request->name;
        $email = $request->email;
        $dob = $request->dob;
        $phone = $request->phone;
        $area_of_interest = $request->area_of_interest;
        $hobby = $request->hobby;
        $weather_you_like = $request->weather_you_like;

        $pageData['name'] = $name;
        $pageData['email'] = $email;
        $pageData['dob'] = $dob;
        $pageData['phone'] = $phone;
        $pageData['hobby'] = $hobby;
        $pageData['area_of_interest'] = $area_of_interest;
        $pageData['weather_you_like'] = $weather_you_like;

        $messageContent = view('web.email-templates.client-information',$pageData);
//        return $message;

        $subject="Client Information";
        $sender= $email;
        $view = 'web.email-templates.client-information';
        
        $this->sendAllEmail($view, $pageData, $this->toEmail, $subject, $messageContent, $sender);

        return "success";
    }

    public function contactMessage(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        $subject = $request->subject;

        $pageData['name'] = $name;
        $pageData['email'] = $email;
        $pageData['message'] = $message;
        $pageData['phone'] = $phone;
        $pageData['subject'] = $subject;


        $messageContent = view('web.email-templates.contact-information',$pageData);

        $subject="Contact Information";
        $sender= $email;
        $view = 'web.email-templates.contact-information';
        
        $this->sendAllEmail($view, $pageData, $this->toEmail, $subject, $messageContent, $sender);

        return "success";
    }
    
    
    public function subscribe(Request $request){
        $email = $request->email;
       
        $subscription = new Subscription();
        $subscription->email = $email;
        $subscription->save();        

        $pageData['email'] = $email;
        
        $messageContent = view('web.email-templates.subscription',$pageData);
        
        $subject="Luminedge Subscription";
        $sender= $email;
        $view = 'web.email-templates.subscription';
        $this->sendAllEmail($view, $pageData, $this->toEmail, $subject, $messageContent, $sender);
        return "success";
    }

    public function sendAllEmail($view, $pageData, $to, $subject, $message,$sender) {
 
        // Mail::send($view, $pageData, function($message) use ($sender, $to,$subject) {
        //     $message->to($to, $to)
        //             ->subject($subject);
        //     $message->from($sender,$sender);
        // });
        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        // Additional headers
        $headers[] = 'To:  Admin '. $to;
        $headers[] = 'From: '.$sender;
        $headers[] = 'Cc: m.hassan@luminedge.com.au';
        // $headers[] = 'Bcc: birthdaycheck@example.com';
        
        // Mail it
        if(mail($to, $subject, $message, implode("\r\n", $headers))){
            echo 'Your mail has been sent successfully.';
        } else{
            echo 'Unable to send email. Please try again.';
        }
        
    }


}
