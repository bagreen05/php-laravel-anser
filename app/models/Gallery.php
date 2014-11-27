<?php

class Gallery extends Eloquent {

    protected $table = 'galleries';

    public function occupation() {
        return $this->belongsTo('Occupation');
    }

    public function work() {
        return $this->belongsTo('Work');
    }

    public function banner() {
        return $this->belongsTo('Banner');
    }

    public function partner() {
        return $this->belongsTo('Partner');
    }

    public function images() {
        return $this->hasMany('Image', 'gallery_id', 'id');
    }

}