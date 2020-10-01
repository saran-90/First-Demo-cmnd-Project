@include('common.header')
        <!--Start breadcrumb area-->

        <section class="breadcrumb-area style2 contact-page"  style='background-image:url("{{ asset('themeassets/images/resources/breadcrumb-bg-2.jpg') }}")'>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                                <span>Contact Us</span>
                                <h1>Get In Touch With Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <section class="contact-address-area">
            <div class="container">
                <div class="row">
                  
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-global"></span>
                            <h3>Visit Our Office</h3>
                            <p>5/991, 1st Floor, Gandhi Nagar II nd Street, Kalingarayanpalayam, Bhavani - 638 301.</p>
                        </div>
                    </div>
                  
                  
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-support1"></span>
                            <h3>Call Us</h3>
                            <p>99762 42404 <br><span>Mon - Friday:</span> 10.00am to 6.00pm</p>
                        </div>
                    </div>
                  
                  
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box">
                            <span class="icon-shipping-and-delivery"></span>
                            <h3>Mail Us</h3>
                            <p>vishagobi@gmail.com<br> info@vishainterior.com</p>
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bottom-text text-center">
                            <p>We’re here to help with any question of our customers, <a href="#">Go to FAQ’s</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       

      
        <section class="contact-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="sec-title with-text">
                                <p>Drop Us a Line</p>
                                <div class="title">Send Your <span>Message</span></div>
                                <p class="bottom-text">If you have question or would like more information on our works, Please complete the form and we’ll aim get back to you with in 24 hours.</p>
                            </div>
                            <div class="inner-box">
                                <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="First Name" required="">
                                                <div class="icon">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_name" value="" placeholder="Last Name" required="">
                                                <div class="icon">
                                                    <i class="fa fa-user" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" placeholder="Phone">
                                                <div class="icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="form_phone" value="" placeholder="subject">
                                                <div class="icon">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <input type="email" name="form_email" value="" placeholder="Email Address" required="">
                                                <div class="icon">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-box">
                                                <textarea name="form_message" placeholder="Your Message..." required=""></textarea>
                                                <div class="icon envelop">
                                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="button-box">
                                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                <button class="btn-one" type="submit" data-loading-text="Please wait...">Send Your Message<span class="flaticon-next"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 clearfix">
                        <div class="contact-form-image-box">
                            <img src="{{url('themeassets/images/resources/contact.png')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
     

@include('common.footer')