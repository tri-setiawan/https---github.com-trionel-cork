<?php

use \App\Siswa;
use \App\Mentor;
use \App\Skill;

function topmember()
{
    $siswa = Siswa::all();
    $siswa->map(function($s){
        $s->nilai = $s->nilai();
        return $s;
    });
    $siswa = $siswa->sortByDesc('nilai')->take('5');
    return $siswa;
}

function totalmember()
{
    return Siswa::count();
}

function totalmentor()
{
    return Mentor::count();
}

function totalskill()
{
    return Skill::count();
}