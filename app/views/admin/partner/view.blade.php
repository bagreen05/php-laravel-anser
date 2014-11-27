<h1>Партнеры</h1>
<fieldset>
    <legend>Добавить партнера</legend>
    <form action="{{URL::to('/admin/partner/add')}}" method="post">
        <div class="row">
            <div class="columns large-10">
                <input type="text" name="name" placeholder="Имя партнера">
            </div>
            <div class="columns large-2">
                <input type="submit" class="button small" value="Добавить">
            </div>
        </div>
    </form>
</fieldset>
<fieldset>
    <legend>Все партнеры</legend>
    <div class="row">
        <div class="column large-12 block-grid">
            @foreach ($partners as $partner)
                <div class="row">
                    <div class="columns large-3">
                        <a href="{{URL::to('/admin/partner/edit/')}}/{{$partner->id}}">
                            <img src="{{URL::asset('assets/img/icons/edit.png')}}" alt="Редактировать">
                            Редактировать
                        </a>
                    </div>
                    <div class="columns large-9">
                        {{$partner->name}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</fieldset>

