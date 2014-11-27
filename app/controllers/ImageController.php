<?php

class ImageController extends BaseController {

    public function imageUpload() {

    }

    public function imageRoot($imageId) {

        $image = Image::find($imageId);

        Image::where('gallery_id', '=', $image->gallery_id)->update(array(
                'root' => 0,
            )
        );

        $image->root = 1;

        $image->save();

        return Redirect::back();

    }

    public function imageDelete($imageId) {

        $image = Image::find($imageId);

        File::delete(public_path() . '/assets/img/site/' . $image->name);

        $image->delete();

        return Redirect::back();

    }

}