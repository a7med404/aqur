<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    protected $table = "build";
    protected $fillable = [
        'bu_name', 'bu_price', 'bu_rent', 'bu_square', 'bu_type', 'bu_rooms', 'bu_small_des',
        'bu_meta', 'bu_longitude', 'bn_latitude', 'bu_large_des', 'bu_status','user_id','bu_place',
        'bu_image',
    ];

    public function user(){
        return $this->BelongsTo('App\User', 'user_id', 'id');
    }
}
