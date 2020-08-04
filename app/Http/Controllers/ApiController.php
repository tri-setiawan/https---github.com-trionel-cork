<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class ApiController extends Controller
{
    function editnilai(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->skill()->updateExistingPivot($request->pk,['nilai' => $request->value]);
    }
}
