@include('navigation')

<div id="kitchen-tailor-header" class="container-fluid px-0">
    <div class="row custom-container kitchen-tailor-header-container align-items-center">
        <div class="col-12 d-flex-center">
            <div class="col-2 col-md-3 col-lg-4 d-flex-center">
                <button id="open-nav-btn" class="navigation-button">
                    <i class="fa-solid fa-bars font-kitchen-tailor-icon"></i>
                </button>
            </div>
            <div class="col-10 col-md-6 col-lg-8 font-kitchen-tailor d-flex justify-content-start px-2 justify-content-md-center px-md-0">
                <a href="{{ route('home-page') }}" class="text-decoration-none">
                    <h2 class="gothic-font font-kitchen-tailor kitchen-tailor-font-header text-center" style="margin: 0px 20px;">THE KITCHEN TAILOR</h2>
                </a>
            </div>
            <div class="col-md-3 col-lg-4 d-md-flex d-none justify-content-center align-items-center">
                <button class="inquire-button">
                    <a href="{{ route('inquiry-page') }}" class="text-decoration-none">
                        <h3 class="gothic-font kitchen-tailor-font-button text-center mb-0">INQUIRE</h2>
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>