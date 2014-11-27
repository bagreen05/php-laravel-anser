<h1>Наши услуги</h1>
<fieldset>
    <legend>Добавить род занятий</legend>
    <a href="{{URL::to('admin/occupation/add')}}">
        <h5><img src="{{URL::asset('assets/img/icons/add.png')}}">Добавить</h5>
    </a>
</fieldset>
<fieldset>
    <legend>Все чем мы занимаемся</legend>
    <div class="row">
        <div class="column large-12 block-grid">
            @foreach ($occupations as $occupation)
                <div class="row">
                    <div class="columns large-3">
                        <a href="{{URL::to('/admin/occupation/edit/')}}/{{$occupation->id}}">
                            <img src="{{URL::asset('assets/img/icons/edit.png')}}" alt="Edit">
                            Редактировать
                        </a>
                    </div>
                    <div class="columns large-9">
                        {{$occupation->name_ru}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</fieldset>

