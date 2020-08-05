<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return '/storage/'. ($this->image ? $this->image : 'profile/vgGxMry5kok7TSw7Vz7m7bdyfY6ql3Mk8jSiKjPD.png');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
