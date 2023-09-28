@extends('layouts.app')

@section('content')
<section class="head">
    <!-- Image -->
    <img src="{{ asset('/assets') }}/images/hero.png">
    <div class="chead cflex text-center">
        <div class="delimiter" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="line-title mx-auto"></div>
            <h2 class="f-40 f-lg-24 c-neutral text-uppercase">Contact</h2>
        </div>
    </div>
</section>

<section class="contact p-y-100">
    <div class="delimiter" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
        <div class="m-b-100">
            <div class="line-title"></div>
            <h2 class="f-28 f-lg-20 c-primary text-uppercase m-b-35">Our Address</h2>
            <p class="f-18 f-lg-14 m-b-10">Butik lenny Agustin, Jl. Taman Setia Budi II No.500, Kuningan, Setia Budi, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12910</p>
            <p class="f-18 f-lg-14 m-b-10">ouremail@gmail.com</p>
            <p class="f-18 f-lg-14 mb-0">+628199 8888 7777</p>
        </div>
        <div class="m-b-100">
            <div class="line-title"></div>
            <h2 class="f-28 f-lg-20 c-primary text-uppercase m-b-35">Get in touch</h2>
            <form class="form" action="">
                <input type="text" name="full_name" placeholder="Full name" class="m-b-25">
                <input type="text" name="email" placeholder="Email" class="m-b-25">
                <input type="text" name="phone" placeholder="Phone" class="m-b-45">
                <textarea name="message" placeholder="Message" class="m-b-35"></textarea>
                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>
        <div class="">
            <div class="line-title"></div>
            <h2 class="f-28 f-lg-20 c-primary text-uppercase m-b-35">Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.409044645507!2d106.82473297468832!3d-6.209657260824924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f405a85bfc17%3A0xc9b8b74c38478ddb!2sIndonesian%20Fashion%20Chamber!5e0!3m2!1sen!2sid!4v1691564938421!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection
