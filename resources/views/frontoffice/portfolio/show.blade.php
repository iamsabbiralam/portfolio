@include('frontoffice.header')
<!-- start wpo-page-title -->
<section class="wpo-page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Portfolio Single</h2>
                    <ol class="wpo-breadcumb-wrap">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Portfolio</li>
                    </ol>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->

<!-- wpo-project-single-area start -->
<div class="wpo-project-single-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="wpo-project-single-wrap">
                    <div class="wpo-project-single-item">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="wpo-project-single-title">
                                    <h3>Softwere Development</h3>
                                </div>
                                <p>{{ $portfolio->description }}</p>
                            </div>
                            <div class="col-lg-5">
                                <div class="wpo-project-single-content-des-right">
                                    <ul>
                                        <li>Project Type :<span>{{ $portfolio->types }}</span></li>
                                        <li>Duration :<span>{{ $portfolio->duration }}</span></li>
                                        <li>Completion :<span>{{ $portfolio->completion_date->format('Y-m-d') }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-project-single-main-img owl-carousel mt-2">
                            <img src="{{ asset('storage/' . $portfolio->thumbnail) }}" alt="">
                            <img src="{{ asset('storage/' . $portfolio->cover_image) }}" alt="">
                            <img src="{{ asset('storage/' . $portfolio->sub_image) }}" alt="">
                        </div>
                    </div>
                    <div class="wpo-project-single-item">
                        <div class="wpo-project-contact-area">
                            <div class="wpo-contact-title">
                                <h2>Have project in mind? Let's discuss</h2>
                                <p>Get in touch with us to see how we can help you with your project</p>
                            </div>
                            <div class="wpo-contact-form-area">
                                <form method="post" class="contact-validation-active" id="contact-form-main">
                                    <div class="row">
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Your Name*">
                                        </div>
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email*">
                                        </div>
                                        <div class="col col-lg-12 col-12">
                                            <select name="service" class="form-control">
                                                <option disabled="disabled" selected="">Services</option>
                                                <option>Furniture</option>
                                                <option>Complete Interior</option>
                                                <option>Exterior Design</option>
                                            </select>
                                        </div>
                                        <div class="fullwidth col col-lg-12 col-12">
                                            <textarea class="form-control" name="note" id="note" placeholder="Message..."></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-area">
                                        <button type="submit" class="theme-btn-s2">Send Massege</button>
                                        <div id="loader">
                                            <i class="ti-reload"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix error-handling-messages">
                                        <div id="success">Thank you Massage Sended</div>
                                        <div id="error"> Error occurred while sending email. Please try again
                                            later. </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wpo-service-single-area end -->
<!-- wpo-partners-area-start -->
<section class="partners-section">
    <h2 class="hidden">partner</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partner-grids partners-slider owl-carousel clearfix">
                    <div class="grid">
                        <img src="assets/images/partners/1.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/2.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/3.png" alt="">
                    </div>
                    <div class="grid">
                        <img src="assets/images/partners/4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end contianer -->
</section>
<!-- partners-area-end -->
@include('frontoffice.footer')
@include('frontoffice.script')
