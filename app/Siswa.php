<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_depan','nama_belakang','tanggal_lahir','jenis_kelamin','agama','alamat','avatar','user_id'];
    // public $timestamps = false;

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.png');
        }

        return asset('images/'.$this->avatar);
    }

    public function skill()
    {
        return $this->belongsToMany(Skill::class)->withPivot(['nilai']);
    }

    public function nilai()
    {
        //Ambil Nilai
        $total = 0;
        $hitung = 0;
        foreach($this->skill as $skill){
            $total += $skill->pivot->nilai;
            $hitung++;
        }

        // return round($total/$hitung);
    }

    public function nama_lengkap()
    {
        return $this->nama_depan." ".$this->nama_belakang;
    }
}
