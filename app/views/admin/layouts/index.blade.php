@extends('admin.layouts.default')

@section('body-start')
    <div class="row">
        <div class="columns large-2">
            <div class="row">
                <div id="admin-panel-logo" class="column small-12">
                    <a href="{{URL::to('admin')}}">
                        <img src="{{URL::asset('assets/img/logo.png')}}" alt="Anser Construct">
                    </a>
                </div>
            </div>
            <ul id="admin-sidebar-menu" class="small-block-grid-1">
                <li>
                    <a href="{{URL::to('/admin/works/view')}}">
                        <img src="{{URL::asset('assets/img/icons/work.png')}}" alt="Наши работы">
                        <span>Наши работы</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/admin/occupation/view')}}">
                        <img src="{{URL::asset('assets/img/icons/occupation.png')}}" alt="Наши услуги">
                        <span>Наши услуги</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/admin/partners/view')}}">
                        <img src="{{URL::asset('assets/img/icons/partners.png')}}" alt="Партнеры">
                        <span>Партнеры</span>
                    </a>
                </li>
                <li>
                    <a href="{{URL::to('/admin/banners/view')}}">
                        <img src="{{URL::asset('assets/img/icons/banner.png')}}" alt="Слайдер">
                        <span>Слайдер</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="admin-content-container" class="columns large-10">
            <div class="row">
                <div class="columns large-12">
                    <ul id="admin-menu" class="small-block-grid-8">
                        <li>
                            <a href="{{URL::to('/')}}">
                                <img src="{{URL::asset('assets/img/icons/home.png')}}" alt="На сайт">
                                <span>На сайт</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('admin/settings')}}">
                                <img src="{{URL::asset('assets/img/icons/settings.png')}}" alt="Настройки">
                                <span>Настройки</span>
                            </a>
                        </li>
                        <li class="right">
                            <a href="{{URL::to('admin/logout')}}">
                                <img src="{{URL::asset('assets/img/icons/logout.png')}}" alt="Выйти">
                                <span>Выйти</span>
                            </a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="column large-12">
                            {{$content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop