@extends('web.layouts.app')

{{--@push('custom_styles')--}}
{{--@endpush--}}

@section('content')
    <!--Page Header Start-->
    <section class="page-header clearfix" style="background-image: url({{URL::to('public/asset/web/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="page-header__wrapper clearfix">
                        <div class="page-header__title">
                            <h2>Contact</h2>
                        </div>
                        <div class="page-header__menu">
                            <ul class="page-header__menu-list list-unstyled clearfix">
                                <li><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Start Contact Details One-->
    <section class="contact-details-one">
        <div class="container">
            <div class="row">
                <!--Start Single Contact Details One-->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-chat"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="tel:+61481847866">+61481847866</a></h4>
                            <p>Call Anytime</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->

                <!--Start Single Contact Details One-->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-message-1"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4><a href="mailto:info@luminedge.com.au">info@luminedge.com.au</a></h4>
                            <p>Send Email</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->

                <!--Start Single Contact Details One-->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-address"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4>Level 35, Tower one, International Tower 100 Barangaroo Avenue, Sydney, NSW 2000, Australia</h4>
                            <p>Virtual office</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->
                <!--Start Single Contact Details One-->
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-details-one__single">
                        <div class="contact-details-one__single-icon">
                            <span class="icon-address"></span>
                        </div>
                        <div class="contact-details-one__single-text">
                            <h4>
                                SUITE 2, LEVEL 14, 189 KENT STREET, SYDNEY 2000
                                <span style="font-size: 12px;">(5 minutes walking distance from Wynyard station through Barangaroo Exit)</span>
                            </h4>
                            <p>Address</p>
                        </div>
                    </div>
                </div>
                <!--End Single Contact Details One-->
            </div>
        </div>
    </section>
    <!--End Contact Details One-->

    <!--Contact Page Start-->
    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="contact-page__left">
                        <div class="section-title">
                            <span class="section-title__tagline">Send a Message</span>
                            <h2 class="section-title__title">We are Always <br>Ready to Hear <br>From You</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="contact-page__right">
                        <form id="SubmitForm">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Your name" name="name" id="name" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="email" placeholder="Email address" name="email" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Phone number" name="phone" id="email" required>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Subject" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="comment-form__input-box">
                                        <textarea name="message" id="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn comment-form__btn">Submit Comment</button>
                                </div>
                            </div>
                            <div class="alert alert-success" role="alert" id="successMsg" style="display: none; margin-top: 5px" >
                                Thank you for getting in touch! We will contact you soon
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Page End-->

    <!--Contact Page Google Map Start-->
    <!-- <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section> -->
    <!--Contact Page Google Map End-->

@endsection

@push('custom_scripts')
    <script>
        var BASE_URL = $("#base_url").val();
        var CSRF_TOKEN = $("#_token").val();
        $('#SubmitForm').on('submit',function(e){
            e.preventDefault();

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var subject = $('#subject').val();
            var message = $('#message').val();


            $.ajax({
                url: BASE_URL+"/contact-message",
                type:"POST",
                data:{
                    "_token": CSRF_TOKEN,
                    name:name,
                    email:email,
                    phone:phone,
                    subject:subject,
                    message:message,
                },
                success:function(response){
                    $('#successMsg').show()
                    setTimeout(function() {
                        $('#successMsg').fadeOut('slow');
                        // $('.flash-message').fadeOut('slow');
                    }, 3000);

                    $('#SubmitForm').trigger("reset");
                    console.log(response);
                },
                // error: function(response) {
                //     $('#nameErrorMsg').text(response.responseJSON.errors.name);
                //     $('#emailErrorMsg').text(response.responseJSON.errors.email);
                //     $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                //     $('#messageErrorMsg').text(response.responseJSON.errors.message);
                // },
            });
        });
    </script>
@endpush
