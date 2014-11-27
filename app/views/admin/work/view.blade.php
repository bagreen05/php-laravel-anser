<h1>Выполненые обьекты</h1>
<fieldset>
    <legend>Добавить обьект</legend>
    <a href="{{URL::to('admin/work/add')}}">
        <h5><img src="{{URL::asset('assets/img/icons/add.png')}}">Добавить обьект</h5>
    </a>
</fieldset>
<fieldset>
    <legend>Все обьекты</legend>
    <div class="row">
        <div class="column large-12 block-grid">
            @foreach ($works as $work)
            <div class="row">
                <div class="columns large-3">
                    <a href="{{URL::to('/admin/work/edit/')}}/{{$work->id}}">
                        <img src="{{URL::asset('assets/img/icons/edit.png')}}" alt="Редактировать">
                        Редактировать
                    </a>
                </div>
                <div class="columns large-9">
                    {{$work->name_ru}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</fieldset>

