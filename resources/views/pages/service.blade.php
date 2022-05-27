@extends('layouts.kz')

@section('content')
    <section class="page__advantages advantages">
        <div class="advantages__container _container">
            <div class="advantages__header header-block">
                <h2 class="header-block__title">Our Achievements</h2>
                <div class="header-block__sub-title">
                    Everytime you smile at someone, it is an action of love, a gift to that person, a beautiful thing.
                </div>
            </div>
            <div class="advantages__body">
                <div class="advantages__column" id="advantages__item_1" onmouseover="scall1()" onmouseout="scallNone1()">
                    <div class="advantages__item">
                        <div class="advantages__value">13</div>
                        <div class="advantages__text" id="advantages__text_1"> </div>
                    </div>
                </div>
                <div class="advantages__column" id="advantages__item_2" onmouseover="scall2()" onmouseout="scallNone2()">
                    <div class="advantages__item">
                        <div class="advantages__value">5</div>
                        <div class="advantages__text" id="advantages__text_2"></div>
                    </div>
                </div>
                <div class="advantages__column" id="advantages__item_3" onmouseover="scall3()" onmouseout="scallNone3()">
                    <div class="advantages__item">
                        <div class="advantages__value">99%</div>
                        <div class="advantages__text" id="advantages__text_3"></div>
                    </div>
                </div>
                <div class="advantages__column" id="advantages__item_4" onmouseover="scall4()" onmouseout="scallNone4()">
                    <div class="advantages__item">
                        <div class="advantages__value">20 +</div>
                        <div class="advantages__text" id="advantages__text_4"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page__practice practice">
        <div class="practice__container _container" id="aboutUs">
            <div class="practice__header header-block">
                <h2 class="header-block__title">Our Dentists</h2>
                <div class="header-block__sub-title">
                    Smiling is definitely one of the best beauty remedies.<br> If you have a good sense of humor and a good approach to life, that’s beautiful.
                </div>
            </div>
            <div class="practice__body">
                <div class="practice__column">
                    <article class="practice__item item-practice">
                        <div class="item-practice__content">
                            <h4 class="item-practice__title">Dr. Marina</h4>
                            <div class="item-practice__text">
                                Dr. Marina Kuznetsov has over 30 years of experience doing what she loves most - offering quality dental care to patients of all ages.
                            </div>
                        </div>
                        <a href="" class="item-practice__image _ibg">
                            <img src="img/practice/001.jpg" alt="#">
                        </a>
                    </article>
                </div>
                <div class="practice__column">
                    <article class="practice__item item-practice">
                        <div class="item-practice__content">
                            <h4 class="item-practice__title">Dr. Nurlan</h4>
                            <div class="item-practice__text">
                                Dr. Nurlan’s goal is simple - remove any predispositions you may have about visiting the dentist. He loves his craft, and wants to make sure his patients feel comfortable with the dental care they receive.
                            </div>
                        </div>
                        <a href="" class="item-practice__image _ibg">
                            <img src="img/practice/002.jpg" alt="#">
                        </a>
                    </article>
                </div>
                <div class="practice__column">
                    <article class="practice__item item-practice">
                        <div class="item-practice__content">
                            <h4 class="item-practice__title">Dr. Sergey</h4>
                            <div class="item-practice__text">
                                A devoted practitioner, Dr. Sergey keeps it no frills. His sole focus is on making sure his patient’s receive the dental care they deserve.
                            </div>
                        </div>
                        <a href="" class="item-practice__image _ibg">
                            <img src="img/practice/003.jpg" alt="#">
                        </a>
                    </article>
                </div>
                <div class="practice__column">
                    <article class="practice__item item-practice">
                        <div class="item-practice__content">
                            <h4 class="item-practice__title">Dr. Olzhas</h4>
                            <div class="item-practice__text">
                                Dr. Olzhas’ specialty is in implant dentistry, completing a surgical residency program in oral implantology at Montefiore Medical Center in 2009, as well as an implantology seminar course.
                            </div>
                        </div>
                        <a href="" class="item-practice__image _ibg">
                            <img src="img/practice/004.jpg" alt="#">
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
