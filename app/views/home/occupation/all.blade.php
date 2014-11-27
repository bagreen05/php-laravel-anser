<div class="row">
    <div class="column small-12">

    </div>
</div>
@if(!$occupations->isEmpty())
    <div class="row occupation-container">
        <div class="column small-12">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                @foreach($occupations as $occupation)
                <li>
                    <a class="box-shadow transparent-block" href="{{URL::to('/occupation/' . $occupation->id . '')}}">
                        <div class="row">
                            <div class="column small-12">
                                <img src="{{URL::asset('/assets/img/site/' . $occupation->gallery->images[0]->name)}}" />
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
    </div>
@endif