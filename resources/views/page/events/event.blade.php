@extends('layouts.app')
@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">Event</h2>
        </div>
    </div>
</section>

<section class="event p-y-100">
    <div class="event-wrap delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
        <div class="data-event">
            <div class="hdata-event">
                <div class="label-hdata-event sflex">
                    <span class="f-14 f-lg-12 c-neutral">Event</span>
                    <span class="f-14 f-lg-12 c-neutral">23 Juli 2023</span>
                </div>
                <img src="{{ asset('/assets') }}/images/hero.png">
            </div>
            <div class="p-y-30 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the Event</h3>
                <p class="f-14 f-lg-14 c-primary m-b-25">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
                <a href="{{ route('event.detail-event')}}" class="f-14 c-secondary mx-auto">Detail Event →</a>
            </div>
        </div>
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
