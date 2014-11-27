<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{URL::asset('assets/js/gmaps.js')}}"></script>



<h1>Редактирование портфолио</h1>

<form id="form-work" action="{{URL::to('admin/work/update/' . $work->id)}}" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Общие</legend>
        <label>Название обьекта</label>
        <dl class="tabs" data-tab>
            <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
            <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
        </dl>
        <div class="tabs-content">
            <div class="content active" id="panel2-1">
                <input type="text" name="name_ru" value="{{e($work->name_ru)}}">
            </div>
            <div class="content" id="panel2-2">
                <input type="text" name="name_ro" value="{{e($work->name_ro)}}">
            </div>
        </div>

        <label>Показовать на сайте?</label>
        <select name="active">
            <option value="1" @if($work->active) selected @endif>Да</option>
            <option value="0" @if(!$work->active) selected @endif>Нет</option>
        </select>
        <label>Описание обьекта</label>
        <dl class="tabs" data-tab>
            <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
            <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
        </dl>
        <div class="tabs-content">
            <div class="content active" id="panel2-1">
                <textarea class="ckeditor" name="description_ru">
                    {{$work->description_ru}}
                </textarea>
            </div>
            <div class="content" id="panel2-2">
                <textarea class="ckeditor" name="description_ro">
                    {{$work->description_ro}}
                </textarea>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend>Изображения</legend>
        <div class="row">
            <div class="column large-12">
                <input class="image-upload" type="file" name="images[]" multiple>
                @if (isset($work->gallery->images))
                    <ul class="image-gallery large-block-grid-4">
                        @foreach ($work->gallery->images as $image)
                            <li>
                                <div class="row">
                                    <div class="column small-12">
                                        <img @if($image->root) style='border: 2px dashed #5E2204' @endif src="{{URL::asset('/assets/img/site')}}/{{$image->name}}">
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
    <fieldset>
        <legend>Позиция на карте</legend>
        <div class="row">
            <div class="column small-12">
                <div id="map">

                </div>
            </div>
        </div>

        <input id="lat" type="hidden" name="lat" value="{{$work->lat}}">
        <input id="lng" type="hidden" name="lng" value="{{$work->lng}}">

        <script>
            var map = new GMaps({
                div: '#map',
                lat: 47.023154,
                lng: 28.841,
                zoom: 14
            });

            function AddMarker(lat, lng) {
               map.addMarker({
                   lat: lat,
                   lng: lng,
                   draggable: true,
                   dragend: function(e) {
                       ChangeFormPositions(e.latLng.lat(), e.latLng.lng());
                   }
               });
               ChangeFormPositions(lat, lng);
            }

            function ChangeFormPositions(lat, lng) {
                $('#lat').val(lat);
                $('#lng').val(lng);
            }

            @if($work->lat && $work->lng)
                AddMarker({{$work->lat}}, {{$work->lng}});
            @endif

            map.setContextMenu({
                control: 'map',
                options: [{
                    title: 'Add marker',
                    name: 'add_marker',
                    action: function(e) {
                        this.removeMarkers();
                        AddMarker(e.latLng.lat(), e.latLng.lng());
                    }
                }, {
                    title: 'Delete all markers',
                    name: 'delete_markers',
                    action: function(e) {
                        this.removeMarkers();
                    }
                }]
            });
        </script>
    </fieldset>
    <input type="submit" class="button" value="Сохранить">
    <a href="{{URL::to('/admin/work/delete/')}}/{{$work->id}}" class="button alert">
        Удалить
    </a>
</form>


