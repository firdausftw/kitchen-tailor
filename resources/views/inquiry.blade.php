@extends('layouts.app')
@section('body-class', 'content-body-kitchen-tailor') 
@section('content')
    <div id="kitchen-tailor-content" style="overflow-x:clip; overflow-y:visible;">

        @include('header')

        <div id="kitchen-tailor-inquiry-bg" class="container-fluid px-lg-0 px-5 d-flex-center">
            <div class="row custom-container kitchen-tailor-inquiry-container d-flex-center flex-column gap-4">
                <div class="col-12 font-kitchen-tailor d-flex-center">
                    <h2 class="gothic-font kitchen-tailor-font-inquiry-1 text-center">Let's Connect</h2>
                </div>
                <div class="col-12 font-kitchen-tailor d-flex-center flex-wrap flex-md-nowrap gap-4 gap-md-2">
                    <div class="col-12 col-md-6 d-flex-center font-kitchen-tailor gap-2">
                        <i class="fa-solid fa-phone font-kitchen-tailor-icon inquiry-icon"></i>
                        <h2 class="gothic-font kitchen-tailor-font-inquiry-2 text-center">+603 4256 7171</h2>
                    </div>
                    <div class="col-12 col-md-6 d-flex-center font-kitchen-tailor gap-2">
                        <i class="fa-solid fa-envelope font-kitchen-tailor-icon inquiry-icon"></i>
                        <h2 class="gothic-font kitchen-tailor-font-inquiry-2 text-center">hello@thekitchentailor.com</h2>
                    </div>
                </div>
                <div class="col-12 font-kitchen-tailor-black d-flex-center">
                    <h2 class="gothic-font kitchen-tailor-font-inquiry-3 text-center">If you're interested in an in-depth meeting where we go over the specific details and make a quote for your new kitchen project, we're always happy to help.</h2>
                </div>
                <div class="col-12 font-kitchen-tailor-black d-flex-center flex-wrap gap-2 w-full">
                    <div class="col-12">
                        <form action="" class="w-100 d-flex flex-column gap-2">
                            <div class="d-flex-center flex-wrap flex-md-nowrap w-100 gap-2">
                                <input type="text" name="name" id="firstname" placeholder="First Name" class="input-half">
                                <input type="text" name="name" id="lastname" placeholder="Last Name" class="input-half">
                            </div>
                            <div class="d-flex-center flex-wrap flex-md-nowrap w-100 gap-2">
                                <input type="text" name="name" id="email" placeholder="Email" class="input-half">
                                <input type="text" name="name" id="phone" placeholder="Phone" class="input-half">
                            </div>
                            <div class="d-flex w-100">
                                <textarea name="name" id="inquiry" placeholder="Describe your Project and General Location" class="input-half textarea"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 d-flex justify-content-start">
                        <button class="submit-inquire-button">
                            <a href="#" target="_blank" class="text-decoration-none">
                                <h3 class="gothic-font kitchen-tailor-font-button text-center mb-0">Submit</h2>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection