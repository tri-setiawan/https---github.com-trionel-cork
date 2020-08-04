<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'mentor';
    protected $fillable = ['nama','telepon','alamat'];

    public function skill()
    {
        return $this->hasMany(Skill::class);
    }
}
