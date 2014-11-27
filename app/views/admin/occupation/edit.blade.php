<h1>Редактирование рода занятий</h1>
<form action="{{URL::to('admin/occupation/update/' . $occupation->id)}}" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Общие</legend>
        <label>Наименование рода занятий</label>
        <dl class="tabs" data-tab>
            <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
            <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
        </dl>
        <div class="tabs-content">
            <div class="content active" id="panel2-1">
                <input type="text" name="name_ru" value="{{$occupation->name_ru}}">
            </div>
            <div class="content" id="panel2-2">
                <input type="text" name="name_ro" value="{{$occupation->name_ro}}">
            </div>
        </div>
        <label>Показовать на сайте</label>
        <select name="active">
            <option value="1" @if($occupation->active) selected @endif>Да</option>
            <option value="0" @if(!$occupation->active) selected @endif>Нет</option>
        </select>
        <label>Описание</label>
        <dl class="tabs" data-tab>
            <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
            <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
        </dl>
        <div class="tabs-content">
            <div class="content active" id="panel2-1">
                <textarea class="ckeditor" name="description_ru">{{$occupation->description_ru}}</textarea>
            </div>
            <div class="content" id="panel2-2">
                <textarea class="ckeditor" name="description_ro">{{$occupation->description_ro}}</textarea>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Родительская категория</legend>
        <label>Родительская категория</label>
        <select name="parent">
            @foreach ($occupations_names as $occupation_item)
                @if ($occupation->parent == 0 && $occupation_item->id == $occupation->id)
                    <option value="0" selected>Это и есть родительская категория</option>
                @else
                    @if($occupation_item->id == $occupation->id)
                        <option value="0">Это и есть родительская категория</option>
                    @else
                        <option @if ($occupation_item->id == $occupation->parent) selected @endif value="{{$occupation_item->id}}">{{$occupation_item->name_ru}}</option>
                    @endif
                @endif
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <legend>Изображения</legend>
        <div class="row">
            <div class="column large-12">
                <input class="image-upload" type="file" name="images[]" multiple>
                @if (isset($occupation->gallery->images))
                <ul class="image-gallery large-block-grid-4">
                    @foreach ($occupation->gallery->images as $image)
                    <li>
                        <div class="row">
                            <div class="column small-12">
                                <img @if($image->root) class="root" @endif src="{{URL::asset('/assets/img/site')}}/{{$image->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="column small-12 text-center">
                                <a href="{{URL::to('/admin/image/root/' . $image->id)}}">Зделать главной</a>
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
    <a href="{{URL::to('/admin/occupation/delete/')}}/{{$occupation->id}}" class="button alert">
        Удалить
    </a>
</form>



