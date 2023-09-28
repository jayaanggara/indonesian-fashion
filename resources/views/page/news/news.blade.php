@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">News</h2>
        </div>
    </div>
</section>

<section class="news p-y-100">
    <div class="news-wrap delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
        </a>
        <a href="{{ route('news.detail-news')}}" class="data-related">
            <img src="{{ asset('/assets') }}/images/hero.png">
            <div class="p-y-20 p-x-25 text-center">
                <h3 class="f-18 f-16 m-b-10 c-primary">Title of the News</h3>
                <p class="f-14 f-lg-14 c-primary mb-0">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership</p>
            </div>
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
