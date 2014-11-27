<div class="row">
    <div class="column small-12">
@if(!$banners->isEmpty())
        <div class="banner-container row transparent-block box-shadow">
            <div class="columns large-8  show-for-medium-up">
                <ul data-orbit>
                    @foreach ($banners as $banner)
                    @if($banner->gallery && isset($banner->gallery->images[0]))
                    <li>
                        <img src="{{URL::asset('assets/img/site/' . $banner->gallery->images[0]->name)}}" alt="{{$banner->title_ru}}">
                        <div class="orbit-caption">
                            @if(Session::get('language') == 'ru')
                                {{$banner->title_ru}}
                            @else
                                {{$banner->title_ro}}
                            @endif
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="columns large-4">
                @if(Session::get('language') == 'ru')
                    {{Config::get('description_ru')}}
                @else
                    {{Config::get('description_ro')}}
                @endif
            </div>
        </div>

@endif



@if (!$partners->isEmpty())
<div class="row partners-container box-shadow transparent-block show-for-medium-up">
    <div class="column small-12">
        <h4>{{trans('messages.our-partners')}}</h4>
        <hr>
        <ul class="partners medium-block-grid-3 large-block-grid-5">
            @foreach ($partners as $partner)
            @if($partner->gallery && isset($partner->gallery->images[0]))
            <li>
                <div class="row">
                    <div class="column small-12 image">
                        <img src="{{URL::asset('assets/img/site/')}}/{{{$partner->gallery->images[0]->name}}}" alt="{{trans('messages.our-partners')}}">
                    </div>
                </div>
                <div class="row">
                    <div class="column small-12 name">
                        {{$partner->name}}
                    </div>
                </div>
            </li>
            @endif
            @endforeach
        </ul>
    </div>
</div>
@endif
        </div>
    </div>