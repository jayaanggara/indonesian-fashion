@extends('layouts.app')

@section('content')
<section class="title">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/assets') }}/images/hero.png" class="d-block w-100">
                <div class="abs sflex">
                    <div class="container">
                        <div class="title-data max-w-750 mx-auto text-center m-t-50" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <img src="{{ asset('/assets') }}/images/f-logo.png">
                            <h1 class="font-primary f-40 f-lg-24 c-neutral m-t-25">INDONESIAN FASHION CHAMBER</h1>
                            <p class="font-tertiary c-neutral f-18 f-lg-14 m-t-15 m-b-25 max-w-550 mx-auto">Indonesia as one of fashion center in the world by optimizing our cultural wealth and local source</p>
                            <div class="cflex">
                                <a href="{{ route('events.index') }}" class="btn-primary m-r-10">Show Event</a>
                                <a href="{{ route('member.index') }}" class="btn-secondary">Member List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets') }}/images/hero-2.jpg" class="d-block w-100">
                <div class="abs sflex">
                    <div class="container">
                        <div class="title-data max-w-750 mx-auto text-center m-t-50" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <img src="{{ asset('/assets') }}/images/f-logo.png">
                            <h1 class="font-primary f-40 f-lg-24 c-neutral m-t-25">INDONESIAN FASHION CHAMBER</h1>
                            <p class="font-tertiary c-neutral f-18 f-lg-14 m-t-15 m-b-25 max-w-550 mx-auto">Indonesia as one of fashion center in the world by optimizing our cultural wealth and local source</p>
                            <div class="cflex">
                                <a class="btn-primary m-r-10">Show Event</a>
                                <a class="btn-secondary">Brand List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="cflex">
            <h2 class="c-secondary m-r-50 m-lg-r-25">2025</h2>
            <p class="f-36 f-lg-18 lh-normal">Indonesia as one of fashion center in the world by optimizing our cultural wealth and local source</p>
        </div>
        <div class="cflex m-t-75 m-md-t-25 ai-start ff-md-column">
            <ul>
                <li class="f-18 f-lg-14 m-b-5">Local Content, Social, Environment Responsibility</li>
            </ul>
            <div class="line"></div>
            <ul>
                <li class="f-18 f-lg-14 m-b-5">Innovation & Branding</li>
            </ul>
            <div class="line"></div>
            <ul>
                <li class="f-18 f-lg-14 m-b-5">Research & Development</li>
                <li class="f-18 f-lg-14 m-b-5">Capacity Building</li>
                <li class="f-18 f-lg-14 m-b-5">Business</li>
            </ul>
            <div class="line"></div>
            <ul>
                <li class="f-18 f-lg-14 m-b-5">Ready To Wear Craft Fashion</li>
            </ul>
        </div>
    </div>
</section>

<section class="point p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="cflex">
            <div class="data-point ai-start ai-md-center p-0 bg-transparent">
                <div class="line-title"></div>
                <h2 class="f-28 f-lg-20 c-primary text-uppercase">The Program</h2>
            </div>
            <div class="data-point ai-center">
                <svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M42.614 48.0715V42.8413C42.614 40.0671 41.5179 37.4064 39.5669 35.4447C37.6158 33.4831 34.9697 32.381 32.2105 32.381H11.4035C8.64432 32.381 5.99815 33.4831 4.04711 35.4447C2.09608 37.4064 1 40.0671 1 42.8413V48.0715" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.807 22.1481C27.6469 22.1481 32.381 17.4139 32.381 11.574C32.381 5.73416 27.6469 1 21.807 1C15.9671 1 11.2329 5.73416 11.2329 11.574C11.2329 17.4139 15.9671 22.1481 21.807 22.1481Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Education through various training, workshop, and knowledge sharing</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.5358 41.0108L41.0108 24.5358L48.0715 31.5965L31.5965 48.0715L24.5358 41.0108Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M38.6572 26.8894L35.1269 9.23752L1 1L9.23752 35.1269L26.8894 38.6572L38.6572 26.8894Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1L18.8542 18.8542" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.1822 26.8894C24.7819 26.8894 26.8893 24.7819 26.8893 22.1823C26.8893 19.5826 24.7819 17.4751 22.1822 17.4751C19.5825 17.4751 17.475 19.5826 17.475 22.1823C17.475 24.7819 19.5825 26.8894 22.1822 26.8894Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Young Designers Incubator Program</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="69" height="50" viewBox="0 0 69 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M34.2823 31.194C37.9594 31.194 40.9402 28.2132 40.9402 24.5361C40.9402 20.859 37.9594 17.8782 34.2823 17.8782C30.6052 17.8782 27.6244 20.859 27.6244 24.5361C27.6244 28.2132 30.6052 31.194 34.2823 31.194Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M48.3973 10.421C50.2544 12.276 51.7277 14.4789 52.7328 16.9037C53.738 19.3284 54.2554 21.9276 54.2554 24.5524C54.2554 27.1773 53.738 29.7764 52.7328 32.2012C51.7277 34.626 50.2544 36.8288 48.3973 38.6839M20.1677 38.6506C18.3106 36.7956 16.8374 34.5927 15.8322 32.1679C14.8271 29.7431 14.3097 27.144 14.3097 24.5191C14.3097 21.8943 14.8271 19.2951 15.8322 16.8704C16.8374 14.4456 18.3106 12.2427 20.1677 10.3877M57.8183 1C64.0591 7.24273 67.5651 15.7086 67.5651 24.5358C67.5651 33.363 64.0591 41.8288 57.8183 48.0715M10.7468 48.0715C4.50591 41.8288 1 33.363 1 24.5358C1 15.7086 4.50591 7.24273 10.7468 1" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Local & International Trade Shows</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="44" height="50" viewBox="0 0 44 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.3333 1L1 29.8H22L19.6667 49L43 20.2H22L24.3333 1Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Export Training</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="55" height="50" viewBox="0 0 55 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48.0715 1H6.23017C3.34163 1 1 3.34163 1 6.23017V32.381C1 35.2696 3.34163 37.6112 6.23017 37.6112H48.0715C50.9601 37.6112 53.3017 35.2696 53.3017 32.381V6.23017C53.3017 3.34163 50.9601 1 48.0715 1Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.6905 48.0715H37.6112" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M27.1508 37.6112V48.0715" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Management & taxes training</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M47.3893 22.074V24.2079C47.3865 29.2097 45.7669 34.0765 42.7721 38.0826C39.7772 42.0887 35.5677 45.0193 30.7712 46.4375C25.9747 47.8557 20.8483 47.6854 16.1565 45.952C11.4647 44.2186 7.45891 41.015 4.73657 36.819C2.01422 32.623 0.72118 27.6595 1.05028 22.6685C1.37938 17.6776 3.31299 12.9268 6.56273 9.12462C9.81247 5.32243 14.2042 2.67258 19.083 1.57029C23.9618 0.467992 29.0662 0.972307 33.6349 3.00802" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M47.3893 5.65259L24.1947 28.8705L17.2363 21.9121" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Indonesia Trend Forecasting</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.5358 48.0715C37.5342 48.0715 48.0715 37.5342 48.0715 24.5358C48.0715 11.5373 37.5342 1 24.5358 1C11.5373 1 1 11.5373 1 24.5358C1 37.5342 11.5373 48.0715 24.5358 48.0715Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M29.9727 15.1215L43.4822 38.516" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.0989 15.1215H46.1179" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13.6623 24.5359L27.1718 1.14136" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.0989 33.9502L5.58936 10.5557" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M29.9727 33.9501H2.95365" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M35.4093 24.5358L21.8998 47.9303" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">Marketing, Branding & Digital Media Training</h3>
            </div>
            <div class="data-point ai-center">
                <svg width="55" height="50" viewBox="0 0 55 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.87937 37.8386H6.25291C4.85975 37.8386 3.52365 37.2841 2.53854 36.2972C1.55343 35.3103 1 33.9717 1 32.5759V6.26266C1 4.86691 1.55343 3.52834 2.53854 2.5414C3.52365 1.55446 4.85975 1 6.25291 1H48.2762C49.6694 1 51.0055 1.55446 51.9906 2.5414C52.9757 3.52834 53.5291 4.86691 53.5291 6.26266V32.5759C53.5291 33.9717 52.9757 35.3103 51.9906 36.2972C51.0055 37.2841 49.6694 37.8386 48.2762 37.8386H45.6497" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M27.2646 32.381L40.5674 48.0715H13.9617L27.2646 32.381Z" stroke="#DD9243" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="f-18 f-lg-14 c-primary">E-Commerce Activation</h3>
            </div>
        </div>
    </div>
</section>

<section class="about p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="max-w-650 mx-auto text-center">
            <div class="line-title mx-auto"></div>
            <h2 class="f-28 f-lg-20 c-primary text-uppercase m-b-50">Background</h2>
            <p class="f-18 f-lg-14 m-b-10">Indonesian Fashion Chamber (IFC) is a non profit organization whose membership consists of Indonesia's foremost ladieswear, menswear, and jewelry and accessory designers.</p>
            <p class="f-18 f-lg-14 m-b-50">IFC was born from our member's desire to engage with our government to contribute to Indonesia's economic growth and prosperity. Through our concerted efforts, Indonesia will become a global fashion capital, while leading the way as a capital for Moslem fashion.</p>
            <a href="{{ route('web.about') }}" class="f-14 c-secondary mx-auto">Learn more in about us →</a>
        </div>
    </div>
</section>

<section class="mship">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="cmship">
        <div class="delimiter bflex ff-md-column ai-md-start" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">
            <div class="max-w-600 m-r-25 m-md-r-0 m-md-b-25">
                <div class="line-title"></div>
                <h2 class="f-28 f-lg-20 c-neutral text-uppercase m-b-20">Join our Membership</h2>
                <p class="f-18 f-lg-14 c-neutral m-b-10">Let's join us and become a member to unlock exclusive benefits and be part of a thriving community!</p>
            </div>
            <a class="btn-primary" style="white-space: nowrap;">Join Now</a>
        </div>
    </div>
</section>

<section class="related p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
        <div class="m-b-50 text-center">
            <div class="line-title mx-auto"></div>
            <h2 class="f-28 f-lg-20 c-primary text-uppercase m-b-50">News</h2>
        </div>
        <div class="related-wrap">
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
    </div>
</section>
@endsection
