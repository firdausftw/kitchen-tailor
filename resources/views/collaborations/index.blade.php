@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="collaborations-banner" class="container-fluid px-0">
            <div class="row custom-container collaborations-container align-items-center">
                <h2 class="gothic-font font-collaborations-title text-center" style="z-index: 2">COLLABORATIONS</h2>
            </div>
        </div>

        <div id="kitchen-tailor-title-1" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container collaborations-text-container align-items-center">
                <div class="col-12 font-kitchen-tailor d-flex-center">
                    <h2 class="gothic-font font-collaborations-text text-center">OUR WORK HAS TAKEN US ACROSS THE GLOBE. NO MATTER WHERE YOU LIVE OR HOW FAR YOU MAY BE FROM A SHOWROOM, WE HAVE THE ABILITY TO WORK WITH YOU. WE ENCOURAGE YOU TO VISIT ONE OF OUR SHOWROOMS TO SEE OUR CABINETRY FIRSTHAND, BUT PLEASE REACH OUT IF YOU CAN'T MAKE THE TRIP. WHEREVER YOU ARE, WE CAN BE THERE FOR YOU AND WE CAN WORK WITH YOU.</h2>
                </div>
            </div>
        </div>

        <div id="kitchen-tailor-fade" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container collaborations-content-container">
                <div class="col-12 d-flex flex-column flex-lg-row gap-2 gap-md-4 justify-content-between">
                    <div class="col-12 col-lg-6 fade-wrapper">
                        <a href="{{ route('collaboration-gerobok-cendayam-page') }}">
                            <img src="/images/kitchen-tailor/gerobok-cendayam/Collaborations-1.jpeg" class="fade-img collaborations-img">
                            <div class="fade-overlay collaborations-content-overlay"></div>
                            <div class="gothic-font fade-text collaborations-fade-text">GEROBOK CENDAYAM</div>
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 fade-wrapper">
                        <a href="{{ route('collaboration-kimpton-naluria-page') }}">
                            <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-1.jpg" class="fade-img collaborations-img">
                            <div class="fade-overlay collaborations-content-overlay"></div>
                            <div class="gothic-font fade-text collaborations-fade-text">KIMPTON NALURIA</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection