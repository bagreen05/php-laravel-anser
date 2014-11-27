<div class="work-show-container row transparent-block box-shadow">
    <div class="column small-12">
        <div class="row">
            <div class="column small-12">
                <h2>
                    @if(Session::get('language') == 'ru')
                        {{$work->name_ru}}
                    @else
                        {{$work->name_ro}}
                    @endif
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="columns small-12 root">
                <p>
                    <img src="{{URL::asset('assets/img/site/')}}/{{$work->gallery->images[0]->name}}"
                    @if(Session::get('language') == 'ru')
                        {{$work->description_ru}}
                    @else
                        {{$work->description_ro}}
                    @endif
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column small-12">
                <ul class="large-block-grid-6 small-block-grid-1 medium-block-grid-3 clearing-thumbs" data-clearing>
                    @foreach($work->gallery->images as $image)
                        <li>
                            <a class="th" href="{{URL::asset('assets/img/site')}}/{{$image->name}}">
                                <img src="{{URL::asset('assets/img/site')}}/{{$image->name}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script>

</script>