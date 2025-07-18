@extends('layouts.site')
@section('content')

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Bizning o'quvchilarimiz</h2>
        <p>Islombek Baxromovning "EduPro" o'quv markazi, "Fizika-matematika" xususiy maktabi, "Umbrella IT" o'quv markazi, "Alicoder School" online o'quv markazidagi dasturlash kursining faol o'quvchilari haqida ma'lumot</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            @foreach ($students as $student)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <img  class="card-img-top" src="{{ asset('/storage/' . $student->photo) }}" alt="img error">
                    <a href="{{ route('site.student.show',$student->id ) }}" class="stretched-link">
                        <h3>{{ $student->name ?? '' }}</h3>
                    </a>
                    <p>{{ $student->about ?? '' }}</p>
                </div>
            </div><!-- End Service Item -->
            @endforeach


        </div>

    </div>

</section><!-- /Services Section -->


@endsection
