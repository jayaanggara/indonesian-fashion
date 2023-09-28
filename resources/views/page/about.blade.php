@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">About</h2>
        </div>
    </div>
</section>

<section class="dabout p-y-100">
    <div class="delimiter">
        <div class="m-b-100" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <img src="{{ asset('/assets') }}/images/logo-oval.png" class="dabout-profil">
            <h2 class="f-28 f-lg-20 c-primary m-b-25 m-t-50 text-center">INDONESIAN FASHION CHAMBER</h2>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership consists of Indonesia’s foremost ladieswear, menswear, and jewelry and accessory designers.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">IFC was born from our member's desire to engage with our government to contribute to Indonesia’s economic growth and prosperity. Through our concerted efforts, Indonesia will become a global fashion capital, while leading the way as a capital for Moslem fashion.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Adhering to the philosophy of <font class="fs-italic f-secondary c-secondary">local inspiration with contemporary spirit,</font> we strive to optimize local resources.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">We also strive to reinforce the foundation of those involved in the fashion industry, namely government bodies, business entities, educational institutions and fashion communities, through programmes such as courses, seminars, forum group discussions, workshops and domestic and international trade fairs.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">It is important to synchronize IFCs work to avoid duplication of programmes and developments. Our synchronized efforts will integrate planning to promote fashion as part of the creative industry.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">The fashion industry is made up of many creative subgroups: design, sourcing, production, distribution, sales, marketing, and the enabling environment and archiving. IFC’s members, leading fashion designers in their own right, will be the first link in this creative chain.</p>
        </div>
        <div class="m-b-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-28 f-lg-20 c-primary m-b-25 text-center text-uppercase">Vision</h2>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Promote Indonesia as a an inspiration to and source of fashion and to promote the country as a leading global fashion capital through the highly competitive works of Indonesian fashion designers and entrepreneurs in international and domestic markets.</p>
        </div>
        <div class="m-b-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-28 f-lg-20 c-primary m-b-25 text-center text-uppercase">Mission</h2>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Supporting creative fashion and design that uses local resources, is environmentally and socially responsible, is innovative and uniquely branded, built on three major pillars: <font class="fs-italic f-secondary c-secondary">research, capacity building and business development</font> to create ready to wear handcrafted fashion.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Developing and creating the <font class="fs-italic f-secondary c-secondary">Indonesia Trend Forecasting</font> to increase national awareness of the richness and potential of Indonesian cultural elements as the inspiration for highly marketable global lifestyle products. Furthermore, it will also place Indonesia on the map as a leading country in fashion.</p>
            <p class="f-18 f-lg-14 m-b-10 t-justify">Innovation and brand development programme to synchronise efforst to position Indonesia as a leader in the global fashion industry</p>
        </div>
    </div>
</section>
@endsection
