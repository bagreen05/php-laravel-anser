<?php


class Banner extends Eloquent  {

    protected $fillable = array(
        'gallery_id',
    );

    public function gallery() {
        return $this->hasOne('Gallery', 'id', 'gallery_id');
    }

    public function scopeWhereId($query, $id) {
        return $query->where('id', '=', (int)$id);
    }

    public function scopeActive($query) {
        return $query->where('active', '=', 1);
    }

}