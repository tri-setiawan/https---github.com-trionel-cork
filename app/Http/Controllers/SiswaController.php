<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use App\Skill;
use PDF;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_siswa = Siswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_siswa = Siswa::all();
        }
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'avatar' => 'mimes:jpg,png',
        ]);

        //Insert ke tabel user
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('asu');
        $user->remember_token = str_random(60);
        $user->save();

        //Insert ke Table Siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }

        return redirect('/siswa')->with('sukses','Data Berhasil Diinput');
    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit',['siswa'=>$siswa]);
    }

    public function update(Request $request,Siswa $siswa)
    {
        $siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar = $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('siswa')->with('sukses','Data berhasil diupdate');
    }

    public function delete(Siswa $siswa)
    {
        $siswa->delete();
        return redirect('siswa')->with('sukses','Data berhasil dihapus');
    }

    public function profile(Siswa $siswa)
    {
        $skills = Skill::all();
        // dd($skills);

        //Menyiapkan Data Chart
        $categories = [];
        $data = [];


        foreach($skills as $s){
            if ($siswa->skill()->wherePivot('skill_id',$s->id)->first()){
                $categories[] = $s->nama;
                $data[] = $siswa->skill()->wherePivot('skill_id',$s->id)->first()->pivot->nilai;
            }
        }

        return view('siswa.profile',['siswa'=>$siswa, 'skills'=>$skills, 'categories'=>$categories, 'data'=>$data]);
    }

    public function addnilai(Request $request, $idsiswa)
    {
        // dd($request->all());
        $siswa = Siswa::find($idsiswa);
        if($siswa->skill()->where('skill_id',$request->skill)->exists()){
            return redirect('siswa/'.$idsiswa.'/profile')->with('error','Data nilai sudah ada');
        }
        $siswa->skill()->attach($request->skill,['nilai'=>$request->nilai]);

        return redirect('siswa/'.$idsiswa.'/profile')->with('sukses','Data berhasil diinput');
    }

    public function deletenilai($idsiswa, $idskill)
    {
        $siswa = Siswa::find($idsiswa);
        $siswa->skill()->detach($idskill);
        return redirect()->back()->with('sukses','Data nilai berhasil dihapus');
    }

    public function excel() 
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }

    // public function pdf()
    // {
    //     $pdf = PDF::$pdf->loadHTML('<h1>Data Siswa</h1>');
    //     return $pdf->download('siswa.pdf');
    // }
}
