<h1>Настройки сайта</h1>
<div class="row">
    <div class="column large-12">
        <form action="{{URL::to('admin/settings')}}" method="post">
            <fieldset>
                <legend>Общие настройки</legend>
                <label>Имя компании</label>
                <input type="text" name="title" value="{{$title}}">
                <label>Язык по умолчанию</label>
                <select name="language">
                    <option value="ru" @if($language=='ru') selected @endif>Руский</option>
                    <option value="ro" @if($language=='ro') selected @endif>Română</option>
                </select>
                <label>О компании (на главной странице)</label>
                <dl class="tabs" data-tab>
                    <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
                    <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="panel2-1">
                        <textarea class="ckeditor" name="description_ru">
                            {{$description_ru}}
                        </textarea>
                    </div>
                    <div class="content" id="panel2-2">
                        <textarea class="ckeditor" name="description_ro">
                            {{$description_ro}}
                        </textarea>
                    </div>
                </div>

            </fieldset>
            <fieldset>
                <legend>Контакты</legend>
                <label>Офис</label>
                <input type="text" name="phone" value="{{$phone}}">
                <label>Мобильный</label>
                <input type="text" name="mobile" value="{{$mobile}}">
                <label>Email</label>
                <input type="text" name="email" value="{{$email}}">
            </fieldset>
            <fieldset>
                <legend>Вакансии</legend>
                <label>Вакансии</label>
                <dl class="tabs" data-tab>
                    <dd class="active"><a href="#panel2-1"><img src="{{URL::asset('assets/img/icons/ru.png')}}"></a></dd>
                    <dd><a href="#panel2-2"><img src="{{URL::asset('assets/img/icons/md.png')}}"></a></dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="panel2-1">
                        <textarea class="ckeditor" name="vacant_ru">
                            {{$vacant_ru}}
                        </textarea>
                    </div>
                    <div class="content" id="panel2-2">
                        <textarea class="ckeditor" name="vacant_ro">
                            {{$vacant_ro}}
                        </textarea>
                    </div>
                </div>
            </fieldset>
            <input class="button" type="submit" value="Сохранить">
        </form>
    </div>
</div>
