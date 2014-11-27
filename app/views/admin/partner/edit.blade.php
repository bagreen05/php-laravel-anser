<h1>Редактирование партнера</h1>
<form action="{{URL::to('admin/partner/update/' . $partner->id)}}" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Общие</legend>
        <label>Наименование партнера</label>
        <input type="text" name="name" value="{{e($partner->name)}}">
        <label>Показовать на сайте?</label>
        <select name="active">
            <option value="1" @if($partner->active) selected @endif>Да</option>
            <option value="0" @if(!$partner->active) selected @endif>Нет</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Логотип</legend>
        <div class="row">
            <div class="column large-12">
                <input class="image-upload" type="file" name="images[]" multiple>
                @if (isset($partner->gallery->images))
                    <ul class="image-gallery large-block-grid-4">
                        @foreach ($partner->gallery->images as $image)
                            <li>
                                <div class="row">
                                    <div class="column small-12 text-center">
                                        <img @if($image->root) class="root" @endif src="{{URL::asset('/assets/img/site')}}/{{$image->name}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column small-12 text-center">
                                        <a href="{{URL::to('/admin/image/root/' . $image->id)}}">Сделать главной</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="column small-12 text-center">
                                        <a href="{{URL::to('/admin/image/delete/' . $image->id)}}">Удалить</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </fieldset>
    <input type="submit" class="button" value="Сохранить">
    <a href="{{URL::to('/admin/partner/delete/')}}/{{$partner->id}}" class="button alert">
        Удалить
    </a>
</form>



