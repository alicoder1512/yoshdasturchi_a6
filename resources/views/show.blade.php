@extends('layouts.site')
@section('content')

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ $student->name }}</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 text-center">
                <img width="300px" height="300px" src="{{ asset('/storage/' . $student->photo) }}" class="img-fluid m-auto" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2>{{ $student->job }}</h2>
                <p class="fst-italic py-3">
                    {{ $student->about }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $student->birthday }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $student->website }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $student->phone }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $student->city }}</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>

                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $student->degree }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $student->email }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Telegram Username:</strong> <span>{{ $student->telegram_username }}</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            @foreach ($student->skills as $skill)
            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill"><span>{{ $skill->title }}</span> <i class="val">{{ $skill->procent }}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->procent }}" aria-valuemin="0" aria-valuemax="{{ $skill->procent }}"></div>
                    </div>
                </div><!-- End Skills Item -->
            </div>
            @endforeach

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Stats Section -->
<section id="stats" class="stats section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Facts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Clients</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Workers</p>
                </div>
            </div><!-- End Stats Item -->

        </div>

    </div>

</section><!-- /Stats Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true
                    , "speed": 600
                    , "autoplay": {
                        "delay": 5000
                    }
                    , "slidesPerView": "auto"
                    , "pagination": {
                        "el": ".swiper-pagination"
                        , "type": "bullets"
                        , "clickable": true
                    }
                }

            </script>
            <div class="swiper-wrapper">

                @foreach ($student->testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>{{ $testimonial->name }}</h3>
                        <h4>{{ $testimonial->position }}</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{ $testimonial->comment }}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach


            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

@endsection
