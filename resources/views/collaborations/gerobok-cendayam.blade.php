@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="collaborations-banner" class="container-fluid px-0">
            <div class="row custom-container collaborations-container gerobok-cendayam-container align-items-center">
                <h2 class="gothic-font-big font-collaborations-title text-center" style="z-index: 2">GEROBOK CENDAYAM</h2>
            </div>
        </div>

        <div id="kitchen-tailor-title-1" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container collaborations-text-container align-items-center">
                <div class="col-12 font-kitchen-tailor d-flex-center">
                    <h2 class="gothic-font font-collaborations-text text-center">OUR WORK HAS TAKEN US ACROSS THE GLOBE. NO MATTER WHERE YOU LIVE OR HOW FAR YOU MAY BE FROM A SHOWROOM, WE HAVE THE ABILITY TO WORK WITH YOU. WE ENCOURAGE YOU TO VISIT ONE OF OUR SHOWROOMS TO SEE OUR CABINETRY FIRSTHAND, BUT PLEASE REACH OUT IF YOU CAN'T MAKE THE TRIP. WHEREVER YOU ARE, WE CAN BE THERE FOR YOU AND WE CAN WORK WITH YOU.</h2>
                </div>
            </div>
        </div>

        <div id="gerobok-cendayam" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container gerobok-cendayam-img-container">
                <div class="col-12 d-flex flex-column flex-lg-row justify-content-center align-items-start gap-2">
                    <div class="col-12 col-lg-5 collaboration-img-wrapper">
                        <div class="left-top-wrapper">
                            <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-4.jpeg" class="gerobok-img img-left-top">
                            <div class="fade-overlay collaborations-content-overlay gerobok-cendayam-overlay"></div>
                            <div class="gerobok-cendayam-text-box d-flex flex-column justify-content-end align-items-center">
                                <div class="gothic-font-big fade-text gerobok-cendayam-text text-title">Gerobok Cendayam</div>
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Gerobok Cendayam is a contemporary reimagining of a cherished piece of Malay heritage, blending traditional craftsmanship with modern functionality. Rooted in the classical Malay language, the term translates to “Almari Cantik” or “Beautiful Cupboard,” symbolising both elegance and practicality.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 d-flex flex-column gap-2 collaboration-img-wrapper justify-content-between">
                        <div class="center-top-wrapper">
                            <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-2.jpeg" class="gerobok-img img-center-top">
                            <div class="fade-overlay collaborations-content-overlay gerobok-cendayam-overlay"></div>
                            <div class="gerobok-cendayam-text-box center-box d-flex flex-column justify-content-end align-items-start">
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Two Piece Modular Unit</div>
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Use separately or combine as one</div>
                            </div>
                        </div>
                        <div class="col-12 d-flex gap-2 center-bottom-wrapper">
                            <div class="col-6">
                                <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-5.jpeg" class="gerobok-img img-center-bottom-left">
                            </div>
                            <div class="col-6">
                                <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-3.jpeg" class="gerobok-img img-center-bottom-right">
                            </div>
                        </div>
                        <div class="">
                            <div class="gothic-font-small gerobok-cendayam-center-bottom-text">This piece of furniture draws inspiration from the traditional kitchen furniture of the past, embodying the essence of practicality and craftsmanship that was valued in bygone days. It is a testament to refined craftsmanship and functionality, designed to meet the needs of a young family seeking compact and versatile kitchen furniture. This beautiful cupboard is not only multi-functional but also portable, making it an ideal companion for families on the move.</div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 d-flex flex-column gap-2 collaboration-img-wrapper justify-content-between">
                        <div class="right-top-wrapper">
                            <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-6.jpeg" class="gerobok-img">
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-start gap-4 right-bottom-wrapper">
                            <div class="d-flex gap-4">
                                <i class="fa-solid fa-user font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">IDr. Norshafina Binti Ibrahim</h2>
                            </div>
                            <div class="d-flex gap-4 align-items-center">
                                <i class="fa-solid fa-tape font-kitchen-tailor-icon inquiry-icon"></i>
                                <div>
                                    <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">900mm x 600mm x 1800mm</h2>
                                    <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">1500mm x 500mm x 1800mm</h2>
                                </div>
                            </div>
                            <div class="d-flex gap-4">
                                <i class="fa-solid fa-tree font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">Semangkuk</h2>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection