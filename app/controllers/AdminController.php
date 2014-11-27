<?php

class AdminController extends BaseController
{

    protected $layout = 'admin.layouts.index';

    public function logPage()
    {
        $this->layout = View::make('admin.layouts.login');
        $this->layout->root_title = Config::get('title');
        $this->layout->title = "Anser Admin Panel";
        $this->layout->content = View::make('admin.log');
    }

    public function indexPage()
    {
        $this->layout->title = "Anser Admin Panel";
        $this->layout->content = View::make('admin.index');
    }

    public function settingsPage()
    {
        $this->layout->title = "Global Settings";

        $settings = Setting::get();

        $contentArray = array();

        foreach($settings as $setting) {
            $contentArray[$setting->name] = $setting->value;
        }

        $this->layout->content = View::make('admin.settings', $contentArray);

    }

    public function settings() {

        //Setting::where('name', '=', 'title')->update(array('value' => Input::get('title')));
        foreach(Input::all() as $name => $value) {
            Setting::where('name', '=', $name)->update(array('value' => $value));
        }

        return Redirect::to('admin/settings');

    }

    public function occupationViewPage()
    {

        $this->layout->title = "Occupation";

        $occupations = Occupation::with(array(
            'gallery.images' => function ($query) {
                    $query->root();
                }
            ))->
            orderBy('parent')->
            orderBy('position')->
            get();

        $this->layout->content = View::make('admin.occupation.view', array(
            'occupations' => $occupations,
        ));


    }

    public function occupationEditPage($occupationId = null)
    {

        $occupation = Occupation::
            whereId($occupationId)->
            with('gallery.images')->
            first();

        Debugbar::info($occupation->gallery->images);
        //var_dump($occupation); exit();

        $occupations_names = Occupation::parentFunction()->get();

        $this->layout->title = 'Occupation';
        $this->layout->content = View::make('admin.occupation.edit', array(
            'occupation' => $occupation,
            'occupations_names' => $occupations_names,
        ));
    }

    public function occupationAdd()
    {

        $occupation = Occupation::create(array(
            'gallery_id' => Gallery::create(array())->id,
        ));

        return Redirect::to('/admin/occupation/edit/' . $occupation->id);

    }

    public function occupationUpdate($occupationId)
    {

        $inputFields = Input::get();

        $occupation = Occupation::whereId($occupationId)->first();
        $occupation->name_ru = $inputFields['name_ru'];
        $occupation->name_ro = $inputFields['name_ro'];
        $occupation->description_ru = $inputFields['description_ru'];
        $occupation->description_ro = $inputFields['description_ro'];
        $occupation->parent = $inputFields['parent'];
        $occupation->active = $inputFields['active'];

        $occupation->save();

        $images = Input::file('images');

        if ($images[0]) {

            $imageUploadPath = "../public_html/assets/img/site/";

            foreach ($images as $image) {

                $imageUploadName = str_random(5) . $image->getClientOriginalName();

                $image->move($imageUploadPath, $imageUploadName);

                Image::create(array(
                    'name' => $imageUploadName,
                    'gallery_id' => $occupation->gallery_id,
                ));

            }

        }



        return Redirect::to('/admin/occupation/edit/' . $occupationId);
    }

    public function occupationDelete($occupationId) {

        Occupation::find($occupationId)->delete();

        return Redirect::to('/admin/occupation/view');

    }

    public function occupationActive($occupationId) {

        $occupation = Occupation::find($occupationId);
        if($occupation->active == true)
            $occupation->active = false;
        else
            $occupation->active = true;
        $occupation->save();

        return Redirect::to('/admin/occupation/view');

    }

    public function login()
    {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            return Redirect::to('admin');
        } else {
            return Redirect::to('/');
        }
    }

    public function logout()
    {
        if (Auth::check())
            Auth::logout();
        return Redirect::to('admin/login');
    }

}