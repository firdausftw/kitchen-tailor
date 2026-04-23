@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="collaborations-banner" class="container-fluid px-0">
            <div class="row custom-container collaborations-container kimpton-naluria-container align-items-center">
                <h2 class="gothic-font-big font-collaborations-title text-center" style="z-index: 2">KIMPTON NALURIA</h2>
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
                            <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-4.jpg" class="gerobok-img img-left-top kimpton-left-top">
                            <div class="fade-overlay collaborations-content-overlay gerobok-cendayam-overlay"></div>
                            <div class="gerobok-cendayam-text-box d-flex flex-column justify-content-end align-items-center">
                                <div class="gothic-font-big fade-text gerobok-cendayam-text text-title">Kimpton Naluria</div>
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">This piece of furniture draws inspiration from the traditional kitchen furniture of the past, embodying the essence of practicality and craftsmanship that was valued in bygone days. It is a testament to refined craftsmanship and functionality, designed to meet the needs of a young family.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 d-flex flex-column gap-2 collaboration-img-wrapper justify-content-between">
                        <div class="center-top-wrapper kimpton-naluria-container order-1">
                            <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-2.jpg" class="gerobok-img img-center-top">
                            <div class="fade-overlay collaborations-content-overlay gerobok-cendayam-overlay"></div>
                            <div class="gerobok-cendayam-text-box center-box d-flex flex-column justify-content-end align-items-start">
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Two Piece Modular Unit</div>
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Use separately or combine as one</div>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-column flex-lg-row gap-2 center-bottom-wrapper kimpton-naluria-wrapper order-3 order-lg-2">
                            <div class="col-12 col-lg-6">
                                <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-5.jpg" class="gerobok-img img-center-bottom-left">
                            </div>
                            <div class="col-12 col-lg-6">
                                <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-3.jpg" class="gerobok-img img-center-bottom-right">
                            </div>
                        </div>
                        <div class="order-2 order-lg-3">
                            <div class="gothic-font-small gerobok-cendayam-center-bottom-text">This piece of furniture draws inspiration from the traditional kitchen furniture of the past, embodying the essence of practicality and craftsmanship that was valued in bygone days. It is a testament to refined craftsmanship and functionality, designed to meet the needs of a young family.</div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection