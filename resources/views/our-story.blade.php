@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="our-story-banner" class="container-fluid px-0">
            <div class="row custom-container our-story-container align-items-end">
                <div class="col-12 col-lg-6 font-kitchen-tailor-black text-center text-lg-start order-2 order-lg-1 mt-lg-0 mt-4">
                    <h2 class="gothic-font-big font-our-story-title">OUR</h2>
                    <h2 class="gothic-font-big font-our-story-title">STORY</h2>
                </div>
                 <div class="col-12 col-lg-6 our-story-top-wrapper order-1 order-lg-2">
                    <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-2.jpg" class="our-story-title-img">
                </div>
            </div>
        </div>

        <div id="our-story-desc" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container our-story-desc-container align-items-center">
                <div class="col-12 col-lg-8 font-kitchen-tailor-black text-center text-lg-start">
                    <h2 class="gothic-font-small font-our-story-desc-text">At the heart of every exceptional home lies a kitchen - not merely as a space, but as a statement of living.</h2>
                </div>
            </div>
        </div>

        <div id="our-story-content" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container d-flex">
                <div class="col-0 col-lg-3">
                </div>
                <div class="col-12 col-lg-3 font-kitchen-tailor-black text-start d-flex flex-column">
                    <h2 class="gothic-font-small font-our-story-content-text">Our story began with a deeply personal inspiration: the purity of home as seen through a child's eyes — where the kitchen is a place of warmth, connection, and quiet moments that shape a lifetime. This perspective became the foundation of our philosophy: to create spaces that are not only functional, but emotionally timeless.</h2>
                    <br>
                    <h2 class="gothic-font-small font-our-story-content-text">From this vision, we established a brand devoted to bespoke luxury kitchen cabinetry — where design is intentional, craftsmanship is meticulous, and every detail is a reflection of refined living.</h2>
                </div>
                <div class="col-12 col-lg-3 font-kitchen-tailor-black text-start d-flex flex-column">
                    <h2 class="gothic-font-small font-our-story-content-text">What's important is that you know the purpose of your booklet, and from there, you'll have millions of ideas ready!</h2>
                    <br>
                    <h2 class="gothic-font-small font-our-story-content-text">Each kitchen we create is entirely custom, tailored with precision to embody individuality and elegance. From the finest materials to the most intricate finishes, our work is guided by an uncompromising pursuit of excellence.</h2>
                </div>
                <div class="col-12 col-lg-3 font-kitchen-tailor-black text-start d-flex flex-column">
                    <h2 class="gothic-font-small font-our-story-content-text">We do not believe in standard solutions. We believe in curation — in understanding our clients' lifestyles, aspirations, and aesthetic sensibilities, then translating them into spaces that feel effortless yet extraordinary.</h2>
                    <br>
                    <h2 class="gothic-font-small font-our-story-content-text">Our kitchens are designed to endure — in quality, in beauty, and in the memories they hold.</h2>
                </div>
            </div>
        </div>

        <div id="our-story-banner" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container our-story-final-container align-items-end">
                <div class="col-12 font-kitchen-tailor-black text-start">
                    <h2 class="gothic-font-big font-our-story-final-text">BECAUSE TRUE LUXURY IS NOT JUST SEEN.</h2>
                    <h2 class="gothic-font-big font-our-story-final-text">IT IX EXPERIENCED, EVERY SINGLE DAY</h2>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection