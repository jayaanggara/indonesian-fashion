@extends('layouts.app');

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">Member</h2>
        </div>
    </div>
</section>

<section class="member p-y-100">
    <div class="member-wrap delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
        <a href="{{ route('member.detail-member')}}" class="data-member">
            <img src="{{ asset('/assets') }}/images/profil.png">
            <h3 class="f-18 f-16 m-b-10 c-primary m-t-35">John Doe</h3>
            <p class="f-14 f-lg-14 c-secondary mb-0">Position</p>
        </a>
    </div>
    <div class="delimiter m-t-75">
        <div class="pagination cflex">
            <ul>
                <li>
                    <a href="" class="active-pagination">1</a>
                </li>
                <li>
                    <a href="">2</a>
                </li>
                <li>
                    <a href="">3</a>
                </li>
                <li>
                    <a href="">4</a>
                </li>
                <li>
                    <a href="">5</a>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection
