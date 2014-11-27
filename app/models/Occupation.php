<?php


class Occupation extends Eloquent  {

    protected $fillable = array(
        'gallery_id',
    );

    public function gallery() {
        return $this->hasOne('Gallery', 'id', 'gallery_id');
    }

    public function scopeParentFunction($query) {
        return $query->select('id', 'name_ru', 'parent');
    }

    public function scopeOnlyParent($query) {
        return $query->where('parent', '=', 0);
    }

    public function scopeWhereId($query, $id) {
        return $query->where('id', '=', (int)$id);
    }

    public function scopeActive($query) {
        return $query->where('active', '=', 1);
    }

}