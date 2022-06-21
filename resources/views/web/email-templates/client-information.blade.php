<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Email Tamplates</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
</head>

<body>

<!-- Page Content -->
<div class="man-div" style="    width: 50%;margin: auto;background: #ffffff;height: 652px;border: 1px solid #999595;max-height: 613px;">
    <!--image section here-->
    <div class="image-main-div" style="height: 100px;border-bottom: 1px solid #c2c2c2;width: 95%;margin: auto;">
        <div class="image-right" style="width: 100%;background: blue;">
            <!-- <img src="https://i.imgur.com/DnmjEmu.png" style="width: 80px;margin-left: 50px;margin-top: 10px;margin-bottom: 10px;float:left;"> -->
            <div class="image-heading" style="float:left;">
                <h1 style="margin: 0;padding-top: 44px;padding-left: 10px;font-size: 27px;">Luminedge</h1>
{{--                <p style="margin: 0;font-size: 13px;padding-left: 16px;">Passion to visualize</p>--}}
            </div>
        </div>
        <!-- </hr> -->
    </div>
    <!--image section here end-->
    <!--welcome message-->
    <div class="valerejobs-welcome message" style="background: #fac03c;width: 95%;margin: auto;margin-top: 10px;height: 65px;border: 1px solid #a0a0a0;">
        <h1 style="margin: 0;padding: 13px;text-align: center;color: #ffffff;font-size: 25px;padding-top: 20px;">New Client Information</h1>
    </div>

    <!--welcome message-->
    <div class="middle-area" style="margin: auto;margin-top: 15px;width: 95%;height: 280px;border-bottom: 1px solid #b3b0b0;">
        <div class="intro">
            <h1 style="width: 80%;margin: auto;color: #183c7a;font-size: 22px;padding-top: 10px;">Dear Admin,</h1>
        </div>
        <div class="intro-body" style="width: 80%;margin: auto;line-height: 26px;">
            <p style="    color: #000000b3;font-family: initial;">You have new client information. Details are given below:
            </p>
        </div>
        <div class="verify-link" style="width: 80%;margin: auto;line-height: 26px;">
            <h4 style="margin-bottom: 0;">Name: <span>{{$name}}</span></h4>
            <h4 style="margin-bottom: 0;">Email: <span>{{$email}}</span></h4>
            <h4 style="margin-bottom: 0;">DOB: <span>{{$dob}}</span></h4>
            <h4 style="margin-bottom: 0;">Phone: <span>{{$phone}}</span></h4>
            <h4 style="margin-bottom: 0;">Hobby: <span>{{$hobby}}</span></h4>
            <h4 style="margin-bottom: 0;">Area Of Interest: <span>{{$area_of_interest}}</span></h4>
            <h4 style="margin-bottom: 0;">Weather You Like: <span>{{$weather_you_like}}</span></h4>
        </div>


    </div>

    <!--Verify Button message-->

    <!--footer message-->
{{--    <div class="link" style="    margin: auto;margin-top: 20px;width: 80%;">--}}
{{--        <p style="text-align:left;margin: 0;text-align: left;margin: 0;line-height: 35px;color: #525252;">If you are having any issue with your account, Please don't hesitate to <a href="#">contact us</a></p>--}}
{{--        <p style="text-align:left;margin: 0;color: #525252;">Thanks.</p>--}}
{{--    </div>--}}


    <div>


</body>

</html>
