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
                                <div class="gothic-font-small fade-text gerobok-cendayam-text">Kimpton Naluria Kuala Lumpur is Malaysia's first Kimpton luxury lifestyle hotel, strategically located in Tun Razak Exchange (TRX), Kuala Lumpur's premier financial and lifestyle district. Surrounded by upscale retail, dining, and direct MRT connectivity, the hotel offers modern luxury, premium comfort, and exceptional hospitality in the heart of the city.</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7 d-flex flex-column gap-2 collaboration-img-wrapper justify-content-between">
                        <div class="center-top-wrapper kimpton-naluria-container order-1">
                            <img src="/images/kitchen-tailor/kimpton-naluria/Collaborations-2.jpg" class="gerobok-img img-center-top">
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
                            <div class="gothic-font-small gerobok-cendayam-center-bottom-text">At Kimpton Naluria, The Kitchen Tailor delivered bespoke kitchen and buffet solutions that combine refined aesthetics with everyday functionality. Designed to complement the hotel's premium hospitality concept, each installation was carefully tailored to enhance guest experience while maintaining operational efficiency. <br>
                            Our scope included custom modular kitchen islands, buffet counters, display cabinetry, and integrated service stations, all crafted with precision detailing and durable materials suitable for high-traffic hospitality environments. <br>
                            The result is a sophisticated culinary space that reflects modern luxury, seamless workflow, and timeless craftsmanship — showcasing The Kitchen Tailor's expertise in creating functional spaces with elevated design.</div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection