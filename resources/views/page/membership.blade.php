@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">Membership</h2>
        </div>
    </div>
</section>

<section class="devent p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="">
            <h2 class="f-28 f-lg-20 c-primary m-b-25">Membership Prerequisites</h2>
            <ul class="m-0 p-0 m-t-35">
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Entrepreneurs working in fashion industry</li>
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Indonesian residents</li>
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Own an Indonesian registered company or business venture</li>
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Pass the selection of IFC curators</li>
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Willing to contribute to IFC</li>
                <li class="f-18 f-lg-14 m-b-10 ls-inside">Recommended by at least 2 (two) members of IFC</li>
            </ul>
        </div>
    </div>
</section>
@endsection
