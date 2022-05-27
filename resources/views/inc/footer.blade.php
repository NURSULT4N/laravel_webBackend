<section class="page__subscribe subscribe" id="contactUs">
    <div class="subscribe__container _container">
        <div class="subscribe__body element-show"><!-- data-aos="fade-left" -->
            <h4 class="subscribe__title">Subscribe For Latest Newsletter</h4>
            <form action="{{ route('subscribes') }}" method="post" class="subscribe__form">
                @csrf
                <input autocomplete="off" type="text" name="email" placeholder="Your Email" class="subscribe__input">
                <button type="submit" class="subscribe__button" id="laka" onclick="backgroundMusic()">Subscribe</button>
            </form>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="footer__top">
        <div class="footer__main _container">
            <div class="footer__column">
                <div class="footer__label">Get In Touch</div>
                <div class="footer__contacts contacts-footer">
                    <a href="" class="contacts-footer__item contacts-footer__item_phone">+777 777 77 77</a>
                    <a target="blank" href="https://goo.gl/maps/92YWxnnCMWZ9eD3S6" class="contacts-footer__item contacts-footer__item_map">AITU,Astana,Kazakhstan</a>
                    <a href="https://mail.google.com/" class="contacts-footer__item contacts-footer__item_email">teethandsmile@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
