<!-- start of wpo-project-area -->
<div class="wpo-project-area section-padding">
    <div class="container">
        <div class="wpo-section-title-s2">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12">
                    <div class="title">
                        <h2>Recent Work.</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-2">
                    <div class="sec-title-icon">
                        <i class="fi flaticon-self-growth"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpo-project-wrap wpo-project-slide owl-carousel">
            @foreach ($recentWorks as $recentWork)
            <div class="wpo-project-item">
                <div class="wpo-project-img">
                    <img  src="{{ asset($recentWork->thumbnail) }}" alt="image" width="80px">
                </div>
                <div class="wpo-project-text">
                    <h2><a href="portfolio-single.html">{{ $recentWork->title }}</a></h2>
                    <span>{{ $recentWork->description }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="shape-p">
        <svg width="1325" height="1687" viewBox="0 0 1325 1687" fill="none">
            <g filter="url(#filter0_f_39_4166)">
                <circle cx="481.5" cy="843.5" r="343.5" fill-opacity="0.27" />
            </g>
            <defs>
                <filter id="filter0_f_39_4166" x="-362" y="0" width="1687" height="1687"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4166" />
                </filter>
            </defs>
        </svg>
    </div>
    <div class="line-shape-1">
        <img src="{{ asset('storage/images/project/line-1.png') }}" alt="">
    </div>
    <div class="line-shape-2">
        <img src="{{ asset('storage/images/project/line-2.png') }}" alt="">
    </div>
</div>
<!-- end of wpo-project-area -->