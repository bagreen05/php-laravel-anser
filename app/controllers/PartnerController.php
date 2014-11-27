<?php

class PartnerController extends BaseController
{

    protected $layout = 'admin.layouts.index';

    public function partnersViewPage()
    {

        $this->layout->title = "Partners";

        $partners = Partner::with(array(
            'gallery.images' => function ($query) {
                    $query->root();
                }
        ))->
            get();

        $this->layout->content = View::make('admin.partner.view', array(
            'partners' => $partners,
        ));

    }

    public function partnerAdd()
    {

        $partner = Partner::create(array(
            'name' => Input::get('name'),
            'gallery_id' => Gallery::create(array())->id,
        ));

        return Redirect::to('/admin/partner/edit/' . $partner->id);

    }

    public function partnerEditPage($partnerId)
    {

        $this->layout->title = 'Partner edit';

        $partner = Partner::whereId($partnerId)->with('gallery.images')->first();

        //var_dump($partner); exit();

        $this->layout->content = View::make('admin.partner.edit', array(
            'partner' => $partner,
        ));

    }

    public function partnerUpdate($partnerId) {

        $partner = Partner::find($partnerId);

        $partner->active = Input::get('active');
        $partner->name = Input::get('name');
        $partner->description = Input::get('description');

        $partner->save();

        $images = Input::file('images');


        if ($images[0]) {

            $imageUploadPath = "../public_html/assets/img/site/";

            foreach ($images as $image) {

                $imageUploadName = str_random(5) . $image->getClientOriginalName();

                $image->move($imageUploadPath, $imageUploadName);

                Image::create(array(
                    'name' => $imageUploadName,
                    'gallery_id' => $partner->gallery_id,
                ));

            }

        }

        return Redirect::to('/admin/partner/edit/' . $partnerId);

    }

    public function partnerDelete($partnerId) {

        Partner::find($partnerId)->delete();

        return Redirect::to('/admin/partners/view');

    }


    public function partnerActive($partnerId) {

        $partner = Partner::find($partnerId);
        if($partner->active == true)
            $partner->active = false;
        else
            $partner->active = true;
        $partner->save();

        return Redirect::to('/admin/partners/view');

    }



}