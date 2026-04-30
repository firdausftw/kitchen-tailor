@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="collaborations-banner" class="container-fluid px-0">
            <div class="row custom-container collaborations-container our-story-container align-items-center">
                <h2 class="gothic-font-big font-collaborations-title text-center" style="z-index: 2">OUR STORY</h2>
            </div>
        </div>

        <div id="our-story-desc" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container our-story-desc-container d-flex justify-content-center align-items-center">
                <div class="col-12 col-lg-8 font-kitchen-tailor-black text-center">
                    <h2 class="gothic-font-small font-our-story-desc-text">At the heart of every exceptional home lies a kitchen - not merely as a space, but as a statement of living.</h2>
                </div>
            </div>
        </div>

        <div id="our-story-content" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container our-story-text-container">
                <div class="col-12 font-kitchen-tailor-black text-start d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4">
                    <div class="col-12 col-lg-6 d-flex-center">
                        <img src="/images/kitchen-tailor/Gerobok-Cendayam/Collaborations-5.jpeg" class="end-image our-story-img">
                    </div>
                    <div class="col-12 col-lg-6 font-kitchen-tailor-black text-start d-flex flex-column pt-4 pt-lg-0">
                        <h2 class="gothic-font-small font-our-story-content-text">Our story began with a deeply personal inspiration: the purity of home as seen through a child's eyes — where the kitchen is a place of warmth, connection, and quiet moments that shape a lifetime. This perspective became the foundation of our philosophy: to create spaces that are not only functional, but emotionally timeless.</h2>
                        <br>
                        <h2 class="gothic-font-small font-our-story-content-text">From this vision, we established a brand devoted to bespoke luxury kitchen cabinetry — where design is intentional, craftsmanship is meticulous, and every detail is a reflection of refined living.</h2>
                        <br>
                        <h2 class="gothic-font-small font-our-story-content-text">What's important is that you know the purpose of your booklet, and from there, you'll have millions of ideas ready!</h2>
                    </div>
                </div>
                <div class="col-12 font-kitchen-tailor-black text-start d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4">
                    <div class="col-12 col-lg-6 font-kitchen-tailor-black text-start d-flex flex-column pb-4 pb-lg-0">
                        <h2 class="gothic-font-small font-our-story-content-text">Each kitchen we create is entirely custom, tailored with precision to embody individuality and elegance. From the finest materials to the most intricate finishes, our work is guided by an uncompromising pursuit of excellence.</h2>
                        <br>
                        <h2 class="gothic-font-small font-our-story-content-text">We do not believe in standard solutions. We believe in curation — in understanding our clients' lifestyles, aspirations, and aesthetic sensibilities, then translating them into spaces that feel effortless yet extraordinary.</h2>
                        <br>
                        <h2 class="gothic-font-small font-our-story-content-text">Our kitchens are designed to endure — in quality, in beauty, and in the memories they hold.</h2>
                    </div>
                    <div class="col-12 col-lg-6 d-flex-center">
                        <img src="/images/kitchen-tailor/kitchen/Kitchen-5.jpeg" class="end-image our-story-img">
                    </div>
                </div>
            </div>
        </div>

        <div id="our-story-desc" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container our-story-desc-container final-container d-flex justify-content-center align-items-center">
                <div class="col-12 font-kitchen-tailor-black text-center">
                    <h2 class="gothic-font-small font-our-story-desc-text">Because true luxury is not just seen.</h2>
                    <h2 class="gothic-font-small font-our-story-desc-text">It is experienced, every single day</h2>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection