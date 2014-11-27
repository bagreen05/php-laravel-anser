@section('meta-header-start')
    <!doctype html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>{{$root_title}} | {{$title}}</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('assets/css/foundation.min.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('assets/css/animate.css')}}"/>
        <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}"/>
        <link href="{{URL::asset('/assets/img/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />

        <script type="text/javascript" src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
@show

@section('meta-header-end')
    </head>
    <body>
@show

@section('body-start')
        <div id="page-container" class="row">
            <div class="column small-12">

                <div id="header-container" class="row">

                    <div id="logo-container" class="column small-12 medium-4 large-4">
                        <a id="logo" href="{{URL::to('/')}}">
                            <img id="logo-image" src="{{URL::asset('/assets/img/logo.png')}}" alt="{{Config::get('title')}}">
                        </a>
                    </div>
                    <div id="header-about" class="columns large-4 show-for-large-up text-center">
                        <h3 id="header-about-header" class="header">{{trans('messages.header-header-1')}}</h3>
                        <h5 id="header-about-span" class="span">{{trans('messages.header-header-2')}}</h5>
                    </div>

                    <div id="header-contact" class="columns small-12 medium-8 large-4 text-center">
                        <h2 class="phone">
                            <span>22</span> {{Config::get('phone')}}
                        </h2>
                        <h5 class="email">{{Config::get('email')}}</h5>
                    </div>
                </div>

                <div id="top-menu-container" class="row">
                    <div class="columns large-10">
                        <ul id="top-menu" class="large-block-grid-4 medium-block-grid-2 small-block-grid-1">
                            <li>
                                <a class="menu-home @if (Request::path() == '/') active @endif " href="{{URL::to('/')}}">{{trans('messages.menu-home')}}</a>
                            </li>
                            <li>
                                <a class="menu-occupation @if (Request::path() == 'occupations') active @endif " href="{{URL::to('/occupations')}}">{{trans('messages.menu-occupations')}}</a>
                            </li>
                            <li>
                                <a class="menu-works @if (Request::path() == 'works') active @endif " href="{{URL::to('/works')}}">{{trans('messages.menu-works')}}</a>
                            </li>
                            <li>
                                <a class="menu-contacts @if (Request::path() == 'contacts') active @endif " href="{{URL::to('/contacts')}}">{{trans('messages.menu-contacts')}}</a>
                            </li>
                        </ul>
                    </div>
                    <div id="language-container" class="columns large-2">
                        <div class="row">
                            <div class="column small-12 text-center">
                                <a @if(Session::get('language') == 'ru') class="active" @endif href="{{URL::to('language/ru')}}">
                                    <img src="{{URL::asset('assets/img/icons/ru.png')}}" alt="Русский">Русский
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12 text-center">
                                <a @if(Session::get('language') == 'ro') class="active" @endif href="{{URL::to('language/ro')}}">
                                    <img src="{{URL::asset('assets/img/icons/md.png')}}" alt="Română">Română
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
@show

@section('content')
                {{$content}}
@show

@section('body-end')
                <div class="row transparent-block box-shadow">
                    <div class="small-12 column">
                        <div class="row">
                            <div class="columns medium-4 small-12">
                                <h4>{{trans('messages.our-contacts')}}</h4>
                                <hr>
                                <ul class="small-block-grid-1">
                                    <li>Молдова Кишинев Тигина 12</li>
                                    <li>тел/факс (+37322) 54-55-14</li>
                                    <li>моб. (+373) 68121171</li>
                                    <li>e-mail: anserconstruct@mail.ru</li>
                                </ul>
                            </div>
                            <div class="columns medium-8 show-for-medium-up">
                                <h4>{{trans('messages.vacant')}}</h4>
                                <hr>
                                <h5>Наша компания предлагает работу следующим специалистам:</h5>
                                <ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1">
                                    <li>Штукатур</li>
                                    <li>Отделочник</li>
                                    <li>Каменщики</li>
                                    <li>Сантехник</li>
                                    <li>Сварщик</li>
                                    <li>Экскаваторщик</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
@show

@section('meta-footer')
    <script src="{{URL::asset('assets/js/foundation.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/app.js')}}"></script>


    </body>
    </html>
@show
