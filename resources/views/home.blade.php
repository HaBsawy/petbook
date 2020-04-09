<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Pet Book</title>
        <link rel="stylesheet" href="{{ url('css/all.min.css') }}" />
        <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}" />
        @if(session('locale') != 'ar')
        <link rel="stylesheet" href="{{ url('css/style.css') }}" />
        @else
            <link rel="stylesheet" href="{{ url('css/style-ar.css') }}" />
        @endif
        @stack('css')
        <link rel="stylesheet" href="{{ url('css/media.css') }}" />
        <link rel="icon" href="{{ url('images/icon.jpg') }}" />
    </head>

        <!-- Start Model -->

        <section class="modal" id="login">
            <div class="modal-body">
                <div class="head">
                    <h3>{{ trans('website.login') }}</h3>
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="body">
                    <form>
                        <div>
                            <input type="email" class="form-control" placeholder="{{ trans('website.email') }}">
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="{{ trans('website.password') }}">
                        </div>
                        <div>
                            <button type="submit">{{ trans('website.login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="modal" id="register">
            <div class="modal-body">
                <div class="head">
                    <h3>{{ trans('website.register') }}</h3>
                    <div class="close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="body">
                    <form method="post" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <input type="text" name="firstName" class="form-control" placeholder="{{ trans('website.firstName') }}">
                        </div>
                        <div>
                            <input type="text" name="lastName" class="form-control" placeholder="{{ trans('website.lastName') }}">
                        </div>
                        <div>
                            <input type="email" name="email" class="form-control" placeholder="{{ trans('website.email') }}">
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="{{ trans('website.password') }}">
                        </div>
                        <div>
                            <input type="password" name="password-conformation" class="form-control" placeholder="{{ trans('website.password-conformation') }}">
                        </div>
                        <div>
                            <button type="submit">{{ trans('website.register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- End Model -->

        <!-- Start Header -->

        <header>
            <div class="opacity">
                <nav>
                    <div class="container">
                        <div class="logo">
                            <img src="{{ url('/images/logo.png') }}" alt="logo">
                            <span>PetBook</span>
                        </div>
                        <div class="menu">
                            <a href="{{ route('lang', (session('locale') != 'ar') ? 'ar' : 'en') }}"><button>{{ (session('locale') != 'ar') ? "عربى" : "English" }}</button></a>
                            <a href="{{ route('login') }}" class="modal-popup" data-modal="login"><button>{{ trans('website.login') }}</button></a>
                        </div>
                    </div>
                </nav>

                <div class="contain">
                    <div class="container">
                        <h5>{{ trans('website.header-subtitle') }}</h5>
                        <h2>{{ trans('website.header-title') }}</h2>
                        <a href="{{ route('register') }}" class="modal-popup" data-modal="register"><button>{{ trans('website.register-now') }}</button></a>
                    </div>
                </div>
            </div>
        </header>

        <!-- End Header -->

        <!-- Start Services -->

        <section class="services">
            <div class="container">
                <h2 class="text-center">Why PetBook ?</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="cont">
                            <div class="circle">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Big community</h3>
                            <h5>There are more than 1k pet owner in PetBook</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cont">
                            <div class="circle">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3>Pet shop</h3>
                            <h5>You can buy/sell your pet easily</h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cont">
                            <div class="circle">
                                <i class="fas fa-notes-medical"></i>
                            </div>
                            <h3>Daily advices</h3>
                            <h5>Daily veterinorian advices to keep the health of your pet</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Services -->

        <!-- Start Footer -->

        <footer>
            <div class="cover">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>PetBook</h2>
                            <p>The first social media for vets which offer many services to pets owners</p>
                            <a href="{{ route('login') }}" class="modal-popup" data-modal="login"><button>Login</button></a>
                            <a href="{{ route('register') }}" class="modal-popup" data-modal="register"><button>Register</button></a>
                        </div>
                        <div class="col-md-6">
                            <h3>Follow Us</h3>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    &copy; Copyright HaBsawy | All Right Reserved
                </div>
            </div>
        </footer>

        <!-- End Footer -->

        <script src="{{ url('js/jquery.min.js') }}"></script>
        <script src="{{ url('js/popper.min.js') }}"></script>
        <script src="{{ url('js/bootstrap.min.js') }}"></script>
        <script src="{{ url('js/plugin.js') }}"></script>
    @stack('js')
    </body>
</html>

