@if(!$works->isEmpty())
<div class="row occupation-container">
    <div class="column small-12">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
            @foreach($works as $work)
            <li>
                <a class="box-shadow transparent-block" href="{{URL::to('/work/show/' . $work->id . '')}}">
                    <div class="row">
                        <div class="column small-12 text-center">
                            <img src="{{URL::asset('/assets/img/site/' . $work->gallery->images[0]->name)}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="column small-12 name">
                            @if(Session::get('language') == 'ru')
                                {{$work->name_ru}}
                            @else
                                {{$work->name_ro}}
                            @endif
                        </div>
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endif