<!-- start of wpo-work-area -->
<div class="wpo-work-area section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="wpo-section-title">
                    <h2>My Work Experience</h2>
                </div>
            </div>
        </div>
        <div class="wpo-work-wrap">
            @foreach ($workExperiences as $workExperience)
                <div class="wpo-work-item">
                    <ul>
                        <li class="date">{{ $workExperience->start_date }} -
                            {{ $workExperience->end_date }}</li>
                        <li class="logo"><img class="rounded-circle shadow-4-strong" src="{{ asset($workExperience->logo) }}" alt="logo" width="80px">
                        </li>
                        <li class="position">{{ $workExperience->designation }}
                            <span>{{ $workExperience->company_name }}, {{ $workExperience->city_name }}.</span>
                        </li>
                        <li class="link"><a href="{{ $workExperience->website }}" target="_blank">Go to website</a>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
    <div class="shape-wk">
        <svg width="1500" height="1500" viewBox="0 0 1500 1500" fill="none">
            <g opacity="0.45" filter="url(#filter0_f_39_4214)">
                <circle cx="750" cy="750" r="200" />
            </g>
            <defs>
                <filter id="filter0_f_39_4214" x="0" y="0" width="1500" height="1500"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="275" result="effect1_foregroundBlur_39_4212" />
                </filter>
            </defs>
        </svg>
    </div>
</div>
<!-- end of wpo-work-area -->
