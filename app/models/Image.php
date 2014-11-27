<?php

class Image extends Eloquent {

    protected $fillable = array(
        'name',
        'gallery_id',
    );

    public function imageable() {
        return $this->morphTo();
    }

    public function scopeRoot($query) {
        return $query->where('root', '=', '1');
    }

    public function scopeOrderByRoot($query) {
        return $query->orderBy('root', 'desc');
    }



}