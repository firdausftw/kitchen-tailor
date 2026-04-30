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

        <div id="kitchen-tailor-designer-1" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container gerobok-designer-container">
                <div class="col-12 d-flex flex-column flex-lg-row gap-2">
                    <div class="col-12 col-lg-5 collaboration-img-wrapper">
                        <div class="designer-wrapper">
                            <img src="/images/kitchen-tailor/IDr-Norshafina.png" class="gerobok-img img-designer">
                            <div class="fade-overlay collaborations-content-overlay gerobok-cendayam-overlay"></div>
                            <div class="gerobok-cendayam-text-box designer-text-box d-flex flex-column justify-content-end align-items-center">
                                <div class="gothic-font-big fade-text gerobok-cendayam-text text-title">IDr. Norshafina Binti Ibrahim</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7 font-kitchen-tailor-black px-4">
                        <h2 class="gothic-font-big font-designer text-center text-lg-start pt-4 pt-lg-0">Meet the</h2>
                        <h2 class="gothic-font-big font-designer text-center text-lg-start font-kitchen-tailor">Designer</h2>
                        <div class="d-flex flex-column pt-4 font-kitchen-tailor-black">
                            <h2 class="gothic-font-small font-designer-content-text">
                                Norshafina, a graduate of MARA University of Technology in Interior Architecture, began her career by gaining experience with renowned design firms in Kuala Lumpur, working on hospitality and institutional projects
                            </h2>
                            <br>
                            <h2 class="gothic-font-small font-designer-content-text">
                                In 2003, at the age of 25, she co-founded Skala Design Consult Sdn Bhd, where she now serves as CEO. Under her leadership, Skala has become a leading interior design practise in Malaysia, specialising in public spaces and institutional design. The firm's portfolio includes iconic projects such as the Parliament House, KLIA T2, Seri Perdana and The National Palace. Skala has been recognised with numerous awards, including the REKA Awards, International Property Awards, and the Kuala Lumpur Mayor Award for Best Interior Design.
                            </h2>
                        </div>
                        <div class="d-flex flex-column justify-content-center align-items-start gap-4 pt-4">
                            <div class="d-flex gap-4">
                                <i class="fa-solid fa-envelope font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">fina@skaladc.com.my</h2>
                            </div>
                            <div class="d-flex gap-4">
                                <i class="fa-solid fa-globe font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">www.skaladc.com.my</h2>
                            </div>
                            <div class="d-flex gap-4">
                                <i class="fa-brands fa-facebook-f font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">facebook.com/fina.ibrahim.9</h2>
                            </div>
                            <div class="d-flex gap-4">
                                <i class="fa-brands fa-instagram font-kitchen-tailor-icon inquiry-icon"></i>
                                <h2 class="gothic-font-small gerobok-cendayam-center-bottom-text">instagram.com/norshafinaibrahim1</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="gerobok-cendayam" class="container-fluid px-lg-0 px-4">
            <div class="row custom-container gerobok-cendayam-img-container no-padding">
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