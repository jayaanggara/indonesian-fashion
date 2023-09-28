@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">Title of the Event</h2>
        </div>
    </div>
</section>

<section class="devent p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="">
            <img src="{{ asset('/assets') }}/images/hero.png" class="m-b-50">
            <h2 class="f-28 f-lg-20 c-primary m-b-25">Title of the Event</h2>
            <p class="f-18 f-lg-14 m-b-10 c-secondary m-b-35">23 Juli 2023</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">IFC was born from our member’s desire to engage with our government to contribute to Indonesia’s economic growth and prosperity. Through our concerted efforts, Indonesia will become a global fashion capital, while leading the way as a capital for Moslem fashion.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">We also strive to reinforce the foundation of those involved in the fashion industry, namely government bodies, business entities, educational institutions and fashion communities, through programmes such as courses, seminars, forum group discussions, workshops and domestic and international trade fairs.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">It is important to synchronize IFCs work to avoid duplication of programmes and developments. Our synchronized efforts will integrate planning to promote fashion as part of the creative industry.</p>
            <ul class="m-0 p-0 m-t-35">
                <li class="f-18 f-lg-14 m-b-10">1. Entrepreneurs working in fashion industry</li>
                <li class="f-18 f-lg-14 m-b-10">2. Indonesian residents</li>
                <li class="f-18 f-lg-14 m-b-10">3. Own an Indonesian registered company or business venture</li>
                <li class="f-18 f-lg-14 m-b-10">4. Pass the selection of IFC curators</li>
                <li class="f-18 f-lg-14 m-b-10">5. Willing to contribute to IFC</li>
                <li class="f-18 f-lg-14 m-b-10">6. Recommended by at least 2 (two) members of IFC</li>
            </ul>
        </div>
    </div>
</section>
@endsection
