@if($occupation)
    <div class="row transparent-block box-shadow">
        <div class="column small-12 medium-12 large-3">
            <ul class="small-block-grid-1" data-clearing>
                @foreach($occupation->gallery->images as $image)
                    <li>
                        <a href="{{URL::asset('/assets/img/site/' . $image->name)}}">
                            <img src="{{URL::asset('/assets/img/site/' . $image->name)}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="column small-12 medium-12 large-9">
            <div class="row">
                <div class="column small-12 name">
                    <h2>
                        @if(Session::get('language') == 'ru')
                            {{$occupation->name_ru}}
                        @else
                            {{$occupation->name_ro}}
                        @endif
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="column small-12 description">
                    @if(Session::get('language') == 'ru')
                        {{$occupation->description_ru}}
                    @else
                        {{$occupation->description_ro}}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1 occupation-container">
            @foreach($occupation_childs as $occupation)
                <li>
                    <a class="box-shadow transparent-block" href="{{URL::to('/occupation/' . $occupation->id)}}">
                        <div class="row">
                            <div class="column small-12">
                                <img src="{{URL::asset('/assets/img/site/' . $occupation->gallery->images[0]->name)}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12 name">
                                @if(Session::get('language') == 'ru')
                                    {{$occupation->name_ru}}
                                @else
                                    {{$occupation->name_ro}}
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endif