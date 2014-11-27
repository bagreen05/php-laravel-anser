<h1>Слайдер</h1>
<fieldset>
    <legend>Добавить слайд</legend>
    <a href="{{URL::to('admin/banner/add')}}">
        <h5><img src="{{URL::asset('assets/img/icons/add.png')}}">Добавить</h5>
    </a>
</fieldset>
<fieldset>
    <legend>Все слайды</legend>
    <div class="row">
        <div class="column large-12 block-grid">
            @foreach ($banners as $banner)
            <div class="row">
                <div class="columns large-3">
                    <a href="{{URL::to('/admin/banner/edit/')}}/{{$banner->id}}">
                        <img src="{{URL::asset('assets/img/icons/edit.png')}}" alt="Редактировать">
                        Редактировать
                    </a>
                </div>
                <div class="columns large-9">
                    {{$banner->title_ru}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</fieldset>

