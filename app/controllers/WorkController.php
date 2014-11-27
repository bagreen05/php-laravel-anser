<?php

class WorkController extends BaseController
{

    protected $layout = 'admin.layouts.index';

    public function worksViewPage() {

        $this->layout->title = 'Works view';

        $works = Work::all();

        $this->layout->content = View::make('admin.work.view', array(
            'works' => $works,
        ));

    }

    public function workAdd() {

        $work = Work::create(array(
            'gallery_id' => Gallery::create(array())->id,
        ));

        return Redirect::to('/admin/work/edit/' . $work->id);

    }

    public function workEditPage($workId) {

        $this->layout->title = 'Work edit page';

        $work = Work::whereId($workId)->with(array(
            'gallery.images',
        ))->first();

        $this->layout->content = View::make('admin.work.edit', array(
            'work' => $work,
        ));

    }

    public function workUpdate($workId) {

        $work = Work::find($workId);
        $work->name_ru = Input::get('name_ru');
        $work->name_ro = Input::get('name_ro');
        $work->active = Input::get('active');
        $work->description_ru = Input::get('description_ru');
        $work->description_ro = Input::get('description_ro');
        $work->lat = Input::get('lat');
        $work->lng = Input::get('lng');

        $work->save();

        $images = Input::file('images');

        if ($images[0]) {

            $imageUploadPath = "../public_html/assets/img/site/";

            foreach ($images as $image) {

                $imageUploadName = str_random(5) . $image->getClientOriginalName();

                $image->move($imageUploadPath, $imageUploadName);

                Image::create(array(
                    'name' => $imageUploadName,
                    'gallery_id' => $work->gallery_id,
                ));

            }

        }


        return Redirect::to('/admin/work/edit/' . $work->id);

    }

    public function workDelete($workId) {

        Work::find($workId)->delete();

        return Redirect::to('/admin/works/view');

    }


}