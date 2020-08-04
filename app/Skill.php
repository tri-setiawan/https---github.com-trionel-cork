<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';
    protected $fillable = ['kode','nama','season'];
    public $timestamps = false;

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai']);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
