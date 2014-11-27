<?php

class BannerController extends BaseController
{

    protected $layout = 'admin.layouts.index';

    public function bannerAdd() {

        $banner = Banner::create(array(
            'gallery_id' => Gallery::create(array())->id,
        ));

        return Redirect::to('/admin/banner/edit/' . $banner->id);

    }

    public function bannerEdit($bannerId) {

        $this->layout->title = 'Banner edit';

        $banner = Banner::whereId($bannerId)->with('gallery.images')->first();

        //var_dump($banner->images); exit();

        $this->layout->content = View::make('admin.banner.edit', array(
            'banner' => $banner,
        ));

    }

    public function bannerUpdate($bannerId) {

        $banner = Banner::find($bannerId);
        $banner->title_ru = Input::get('title_ru');
        $banner->title_ro = Input::get('title_ro');
        $banner->active = Input::get('active');


        $banner->save();

        $images = Input::file('images');

        if ($images[0]) {

            $imageUploadPath = "../public_html/assets/img/site/";

            foreach ($images as $image) {

                $imageUploadName = str_random(5) . $image->getClientOriginalName();

                $image->move($imageUploadPath, $imageUploadName);

                Image::create(array(
                    'name' => $imageUploadName,
                    'gallery_id' => $banner->gallery_id,
                ));

            }

        }

        return Redirect::to('/admin/banner/edit/' . $banner->id);

    }

    public function bannerDelete($bannerId) {

        Banner::find($bannerId)->delete();

        return Redirect::to('/admin/banners/view');

    }


    public function bannersViewPage() {

        $this->layout->title = "Banners view";

        $banners = Banner::with(array(
            'gallery.images' => function($query) {
                    $query->root();
                }
            ))->get();

        $this->layout->content = View::make('admin.banner.view', array(
            'banners' => $banners,
        ));

    }

}