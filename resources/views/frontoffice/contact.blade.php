@include('frontoffice.header')
<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Contact</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="i/">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->
<!-- start wpo-contact-pg-section -->
<section class="wpo-contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-10 offset-lg-1">
                <div class="office-info">
                    <div class="row">
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-location"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Address</h2>
                                    <p>16/2, Daben Babu Road, Khulna</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-mail"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Email Us</h2>
                                    <a href="mailto: sabbiriph4@gmail.com">Send Email</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-xl-4 col-lg-6 col-md-6 col-12">
                            <div class="office-info-item">
                                <div class="office-info-icon">
                                    <div class="icon">
                                        <i class="fi flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="office-info-text">
                                    <h2>Call Now</h2>
                                    <p>+880 1715 039303</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-contact-title">
                    <h2>Have Any Question?</h2>
                </div>
                <div class="wpo-contact-form-area">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Your Name*">
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email*">
                        </div>
                        <div>
                            <input type="text" class="form-control" name="phone" id="adress"
                                placeholder="Your Phone">
                        </div>
                        <div>
                            <select name="project_type" class="form-control">
                                <option disabled="disabled" selected="">Project Type</option>
                                <option value="e-commerce">E-commerce</option>
                                <option value="inventory">Inventory</option>
                                <option value="oms">OMS</option>
                                <option value="blog">Blog</option>
                                <option value="crypto">Crypto</option>
                                <option value="mlm">MLM</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="fullwidth">
                            <textarea class="form-control" name="message" id="note" placeholder="Message..."></textarea>
                        </div>
                        <div class="submit-area">
                            <button type="submit" class="theme-btn-s2">Get in Touch</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you</div>
                            <div id="error"> Error occurred while sending email. Please try again later. </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
    <div class="shape-1">
        <svg width="1038" height="938" viewBox="0 0 1038 938" fill="none">
            <g opacity="0.5" filter="url(#filter0_f_39_4392)">
                <circle cx="290.5" cy="282.5" r="247.5"></circle>
            </g>
            <defs>
                <filter id="filter0_f_39_4392" x="-457" y="-465" width="1495" height="1495"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                    <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4392"></feGaussianBlur>
                </filter>
            </defs>
        </svg>
    </div>
</section>
<!-- end wpo-contact-pg-section -->

<!--  start wpo-contact-map -->
<section class="wpo-contact-map-section">
    <h2 class="hidden">Contact map</h2>
    <div class="wpo-contact-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m11!1m3!1d591.4206540025418!2d89.55845589812517!3d22.814927360436652!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjLCsDQ4JzUzLjQiTiA4OcKwMzMnMjkuOCJF!5e1!3m2!1sen!2sbd!4v1691779164538!5m2!1sen!2sbd"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- end wpo-contact-map -->
@include('frontoffice.footer')
@include('frontoffice.script')
