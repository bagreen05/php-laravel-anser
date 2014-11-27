<?php


class Setting extends Eloquent  {

    protected $fillable = array(

    );

    public function scopeWhereId($query, $id) {
        return $query->where('id', '=', (int)$id);
    }

}