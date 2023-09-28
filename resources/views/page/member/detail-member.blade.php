@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">John Doe</h2>
        </div>
    </div>
</section>

<section class="dmember p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="m-b-100 w-full">
            <img src="{{ asset('/assets') }}/images/profil.png" class="dmember-profil">
            <table class="m-t-50">
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Name</td>
                    <td class="f-16 f-lg-14">Ali Charisma</td>
                </tr>
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Address</td>
                    <td class="f-16 f-lg-14">Tengah No. 52 Street, Br. Anyar Kelod, Kerobokan</td>
                </tr>
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Phone</td>
                    <td class="f-16 f-lg-14">+62 811-3808-023</td>
                </tr>
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Email</td>
                    <td class="f-16 f-lg-14">alicharismad@gmail.com</td>
                </tr>
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Instagram</td>
                    <td class="f-16 f-lg-14">@officialalicharisma</td>
                </tr>
                <tr>
                    <td class="f-16 f-lg-14 c-secondary p-lg-r-50">Website</td>
                    <td class="f-16 f-lg-14">www.alicharisma.com</td>
                </tr>
            </table>
        </div>
        <div class="dmember-wrap flex-wrap">
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
            <div class="dmember-ov">
                <img src="{{ asset('/assets') }}/images/fashion.png">
            </div>
        </div>
    </div>
</section>
@endsection
