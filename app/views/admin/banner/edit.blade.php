<h1>Редактирование слайда</h1>
<form action="{{URL::to('admin/banner/update/' . $banner->id)}}" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Общие</legend>
        <label>Текст слайда</label>
        <dl class="tabs" data-tab>
            <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
            <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
        </dl>
        <div class="tabs-content">
            <div class="content active" id="panel2-1">
                <input type="text" name="title_ru" value="{{$banner->title_ru}}">
            </div>
            <div class="content" id="panel2-2">
                <input type="text" name="title_ro" value="{{$banner->title_ro}}">
            </div>
        </div>
        <label>Показывать</label>
        <select name="active">
            <option value="1" @if($banner->active) selected @endif>Да</option>
            <option value="0" @if(!$banner->active) selected @endif>Нет</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Изображения</legend>
        <div class="row">
            <div class="column large-12">
                <input class="image-upload" type="file" name="images[]" multiple>
                @if (isset($banner->gallery) && isset($banner->gallery->images))
                    <ul class="image-gallery large-block-grid-4">
                        @foreach ($banner->gallery->images as $image)
                            <li>
                                <div class="row">
                                    <div class="column small-12">
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
    <a href="{{URL::to('/admin/banner/delete/')}}/{{$banner->id}}" class="button alert">
        Удалить
    </a>
</form>
