<section class="newsletter-one">
        <div class="container">
            <div class="row">
                <!--Start Newsletter One Left-->
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter-one__left">
                        <div class="section-title">
                            <h2 class="section-title__title">What is Hybrid Service Model?</h2>
                        </div>
                        <p class="model-text">
                            You can connect with us any time anywhere virtually as we
                            understand how busy our life can be. Appointments are available
                            within your finger tip throughout the process. Our mobile
                            application is coming soon to provide ultimate seamless service.
                        </p>
                    </div>
                </div>
                <!--End Newsletter One Left-->

                <!--Start Newsletter One Right-->
                <div class="col-xl-6 col-lg-6">
                    <div class="newsletter-one__right">
                        <div class="shape1 zoom-fade"><img src="{{URL::to('public/asset/web/assets/images/shapes/thm-shape2.png')}}" alt="" /></div>
                        <div class="shape2 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"><img
                                src="{{URL::to('public/asset/web/assets/images/shapes/thm-shape3.png')}}" alt="" /></div>
                        <div class="newsletter-form wow slideInDown" data-wow-delay="100ms"
                             data-wow-duration="1500ms">
                            <form id="SubscriptionSubmitForm">
                                <input type="text" name="subscriptionEmail" id="subscriptionEmail" placeholder="Enter your email to subscribe" required>
                                <button type="submit"><span class="icon-paper-plane"></span></button>
                            </form>
                            <div class="newsletter-one__right-checkbox">
                                <input type="checkbox" name="agree " id="agree" checked required>
                                <label for="agree"><span></span>I agree to all terms and policies of the
                                    company</label>
                            </div>
                        </div>
                        <div class="alert alert-success" role="alert" id="subscriptionSuccessMsg" style="display: none" >
                                        Thank you for getting in touch! 
                                    </div>
                    </div>
                </div>
                <!--End Newsletter One Right-->
            </div>
        </div>
    </section>

    