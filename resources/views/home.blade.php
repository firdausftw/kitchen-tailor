@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="kitchen-tailor-full-banner" class="container-fluid px-0">
            <div class="row custom-container kitchen-tailor-full-banner-container align-items-center">
                <div class="d-flex-center">
                    <h2 class="gothic-font font-kitchen-tailor kitchen-tailor-font-full-banner text-center">THE KITCHEN TAILOR</h2>
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-banner" class="container-fluid px-0">
            <div class="row custom-container kitchen-tailor-home-container align-items-center">
                <div class="fade-slider">
                    <img src="/images/kitchen-tailor/Homepage-Banner-8.jpg" class="slide active">
                    <img src="/images/kitchen-tailor/bathroom/Bathroom-9.jpeg" class="slide">
                    <img src="/images/kitchen-tailor/Homepage-Banner-9.jpg" class="slide">
                    <img src="/images/kitchen-tailor/bathroom/Bathroom-4.jpeg" class="slide">
                    <img src="/images/kitchen-tailor/Homepage-Banner-17.jpeg" class="slide">
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-title-1" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container kitchen-tailor-title-1-container align-items-center">
                <div class="col-12 font-kitchen-tailor d-flex-center">
                    <div class="accent-line"></div>
                    <h2 class="gothic-font kitchen-tailor-font-title-1 text-center" style="margin: 0px 20px;">CRAFTSMANSHIP. HERITAGE. EXCELLENCE.</h2>
                    <div class="accent-line"></div>
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-fade" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container kitchen-tailor-fade-container">
                <div class="col-12 d-flex flex-column flex-md-row gap-2 gap-md-0 justify-content-between">
                    <div class="col-12 col-md-4 fade-wrapper">
                        <img src="/images/kitchen-tailor/kitchen/Kitchen-3.jpeg" class="fade-img">
                        <div class="fade-overlay"></div>
                        <div class="gothic-font fade-text">KITCHEN</div>
                    </div>
                    <div class="col-12 col-md-4 fade-wrapper">
                        <img src="/images/kitchen-tailor/bathroom/Bathroom-3.jpeg" class="fade-img">
                        <div class="fade-overlay"></div>
                        <div class="gothic-font fade-text">BATHROOM</div>
                    </div>
                    <div class="col-12 col-md-4 fade-wrapper">
                        <img src="/images/kitchen-tailor/wardrobe/Wardrobe-1.jpeg" class="fade-img">
                        <div class="fade-overlay"></div>
                        <div class="gothic-font fade-text">WARDROBE</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-title-1" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container kitchen-tailor-title-1-container align-items-center">
                <div class="col-12 font-kitchen-tailor d-flex-center">
                    <div class="accent-line"></div>
                    <h2 class="gothic-font kitchen-tailor-font-title-1 text-center" style="margin: 0px 20px;">A MODERN PERSPECTIVE</h2>
                    <div class="accent-line"></div>
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-end-banner" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container kitchen-tailor-end-container align-items-center">
                <div class="col-12 d-flex flex-column flex-lg-row gap-2 gap-lg-0 justify-content-between">
                    <div class="col-12 col-lg-6 d-flex-center">
                        <img src="/images/kitchen-tailor/Homepage-Banner-15.jpeg" class="end-image">
                    </div>
                    <div class="col-12 col-lg-6 d-flex-center">
                        <img src="/images/kitchen-tailor/Homepage-Banner-16.jpeg" class="end-image">
                    </div>
                </div>
                
            </div>
        </div>

        @include('footer')
    </div>
@endsection