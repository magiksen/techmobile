
     @php
$setting = App\Models\SiteSetting::find(1);
        @endphp

 <footer class="main">
        <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Quédate en casa y cubre tus <br />
                                    necesidades en nuestra tienda
                                </h2>
                                <p class="mb-45">Empieza a comprar lo mejor en tecnología con <span class="text-brand">Techmobile</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Ingresa tu email" />
                                    <button class="btn" type="submit">Subscribir</button>
                                </form>
                            </div>
                            <img src="{{ asset('frontend/assets/imgs/banner/banner-9.png') }}" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-1.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Los mejores precios y ofertas</h3>
                                <p>Ordena 50$ o mas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-2.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Delivery gratis</h3>
                                <p>Servicio 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-3.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Gran oferta diaria</h3>
                                <p>Cuando te registres</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-4.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Gran variedad</h3>
                                <p>Mega Descuentos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-5.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Garantía</h3>
                                <p>Desde 30 días</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                        <div class="banner-left-icon d-flex align-items-center wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                            <div class="banner-icon">
                                <img src="{{ asset('frontend/assets/imgs/theme/icons/icon-6.svg') }}" alt="" />
                            </div>
                            <div class="banner-text">
                                <h3 class="icon-box-title">Envio seguro</h3>
                                <p>rápido</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col">
                        <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="logo mb-30">
   <a href="index.html" class="mb-15"><img src="{{ asset($setting->logo ) }}" alt="logo" /></a>
                                <p class="font-lg text-heading">Tecnología en tus manos</p>
                            </div>
<ul class="contact-infor">
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-location.svg') }}" alt="" /><strong>Dirección: </strong> <span> {{ $setting->company_address }} </span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-contact.svg') }}" alt="" /><strong>Llamanos: </strong><span>{{ $setting->phone_one }}</span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-email-2.svg') }}" alt="" /><strong>Email: </strong><span>{{ $setting->email }}</span></li>
    <li><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-clock.svg') }}" alt="" /><strong>Horario: </strong><span>LUN-SAB 10am a 5.30pm</span></li>
</ul>
                        </div>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class=" widget-title">Compañia</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Sobre nosotros</a></li>
                            <li><a href="#">Información de envios</a></li>
                            <li><a href="#">Politica de privacidad</a></li>
                            <li><a href="#">Terminos y condiciones</a></li>
                            <li><a href="#">Contactanos</a></li>
                            <li><a href="#">Soporte</a></li>
                            <li><a href="#">Empleo</a></li>
                        </ul>
                    </div>
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="widget-title">Cuenta</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Iniciar sesión</a></li>
                            <li><a href="#">Ver carrito</a></li>
                            <li><a href="#">Lista de deseos</a></li>
                            <li><a href="#">Rastrear pedido</a></li>
                            <li><a href="#">Ticket de ayuda</a></li>
                            <li><a href="#">Detalles de envio</a></li>
                            <li><a href="#">Comparar productos</a></li>
                        </ul>
                    </div>
{{--                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".3s">--}}
{{--                        <h4 class="widget-title">Corporate</h4>--}}
{{--                        <ul class="footer-list mb-sm-5 mb-md-0">--}}
{{--                            <li><a href="{{ route('become.vendor') }}">Become a Vendor</a></li>--}}
{{--                            <li><a href="#">Affiliate Program</a></li>--}}
{{--                            <li><a href="#">Farm Business</a></li>--}}
{{--                            <li><a href="#">Farm Careers</a></li>--}}
{{--                            <li><a href="#">Our Suppliers</a></li>--}}
{{--                            <li><a href="#">Accessibility</a></li>--}}
{{--                            <li><a href="#">Promotions</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="footer-link-widget col wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                        <h4 class="widget-title">Popular</h4>
                        <ul class="footer-list mb-sm-5 mb-md-0">
                            <li><a href="#">Celulares</a></li>
                            <li><a href="#">Computadoras</a></li>
                            <li><a href="#">Videojuegos</a></li>
                            <li><a href="#">Camaras</a></li>
                            <li><a href="#">Audifonos</a></li>
                            <li><a href="#">Televisores</a></li>
                            <li><a href="#">Seguridad</a></li>
                        </ul>
                    </div>

                </div>
        </section>
        <div class="container pb-30 wow animate__animated animate__fadeInUp" data-wow-delay="0">
            <div class="row align-items-center">
                <div class="col-12 mb-30">
                    <div class="footer-bottom"></div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <p class="font-sm mb-0">{{ $setting->copyright }}</p>
                </div>
                <div class="col-xl-4 col-lg-6 text-center d-none d-xl-block">

                    <div class="hotline d-lg-inline-flex">
                        <img src="{{ asset('frontend/assets/imgs/theme/icons/phone-call.svg') }}" alt="hotline" />
                        <p>{{ $setting->support_phone }}<span>Soporte 24/7</span></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-end d-none d-md-block">
                    <div class="mobile-social-icon">
    <h6>Síguenos</h6>
    <a href="{{ $setting->facebook }}" target="_blank"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}" alt="" /></a>
    <a href="{{ $setting->twitter }}" target="_blank"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}" alt="" /></a>
    <a href="#" target="_blank"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}" alt="" /></a>
    <a href="#" target="_blank"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}" alt="" /></a>
    <a href="{{ $setting->youtube }}" target="_blank"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-youtube-white.svg') }}" alt="" /></a>
</div>
                    <p class="font-sm">Gana 15% de descuento al suscribirte por primera vez</p>
                </div>
            </div>
        </div>
    </footer>
