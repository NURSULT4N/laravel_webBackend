@extends('layouts.kz')

@section('content')
    <div class="page__main-block main-block">
        @include('inc.notifications')
        <div class="main-block__container _container">
            <div class="main-block__body">
                <h1 class="main-block__title">Beautiful Smiles Are Created Here</h1>
                <div class="main-block__text">
                    Welcome to Dental Clinic Teeth&amp;Smile.
                </div>
{{--                <div class="main-block__buttons">--}}
{{--                    <a href="booking.html" class="main-block__button main-block__button_orange" id="main-block__button__music">Enter</a><audio src="clickSound.mp3" id="backgroundSong"></audio>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="main-block__image _ibg">
            <img src="img/mainblock/dentist_chapnick_general_teeth_whitening_4.jpg" alt="">
        </div>
    </div>
    <section class="page__services services">
        <div class="services__container _container">
            <div class="services__body">
                <div class="services__column" id="services__column_1" onmouseover="scal1()" onmouseout="scalNone1()">
                    <div class="services__item item-service">
                        <div class="item-service__icon"><img src="img/services/dental-crown.png" width="30" height="30" alt="Dental Implant"></div>
                        <h3 class="item-service__title">Dental Implant</h3>
                        <div class="item-service__text">Dental implant, also called tooth implant, is an artificial tooth placed into the jawbone for replacing the root of a tooth. </div>
                    </div>
                </div>
                <div class="services__column" id="services__column_2" onmouseover="scal2()" onmouseout="scalNone2()" style="transform: none; transition-duration: 0.2s;">
                    <div class="services__item item-service item-service_ocean">
                        <div class="item-service__icon"><img src="img/services/orthodontic.png" width="30" height="30" alt="Dental Veneers"></div>
                        <h3 class="item-service__title">Dental Veneers</h3>
                        <div class="item-service__text">Veneers, also called porcelain veneers or laminates, are thin shells of porcelain that are customized to fit perfectly on the existing teeth.</div>
                    </div>
                </div>
                <div class="services__column" id="services__column_3" onmouseover="scal3()" onmouseout="scalNone3()">
                    <div class="services__item item-service item-service_green">
                        <div class="item-service__icon"><img src="img/services/tooth.png" width="30" height="30" alt="Teeth Whitening"></div>
                        <h3 class="item-service__title">Teeth Whitening</h3>
                        <div class="item-service__text">It is a simple effective way to get rid of discolored, stained or dark teeth. Though it cannot change the color of teeth, it may make the present shade light.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--@section('aside')--}}
{{--    @parent--}}
{{--    <p>Text </p>--}}
{{--@endsection--}}
