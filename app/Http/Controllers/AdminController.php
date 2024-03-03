<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Reservasi;
use App\Models\team;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    //USER
    public function users()
    {
        $data=user::orderBy('id','desc')->paginate(10);
        return view('Admin.user', compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    //Menu Makanan
    public function menus()
    {
        $menus=Makanan::all();
        return view('Admin.menu.menu', compact('menus'));
    }

    public function tambahmenu()
    {
        return view('Admin.menu.tambahmenu');
    }

    public function uploadmenu(Request $request)
    {
        $menus = new Makanan;

        $gambar=$request->gambar;

        $imagename= time().'.'.$gambar->getClientOriginalExtension();
        $request->gambar->move('foodimage', $imagename);

        $menus->gambar=$imagename;

        $menus->nama=$request->nama;
        $menus->harga=$request->harga;
        $menus->deskripsi=$request->deskripsi;

        $menus->save();

        return redirect()->back();
    }

    public function menuedit($id)
    {
        $menus=Makanan::find($id);
        return view('Admin.menu.editmenu', compact('menus'));
    }

    public function editmenu(Request $request, $id)
    {
        $menus = Makanan::find($id);

        $gambar=$request->gambar;

        $imagename= time().'.'.$gambar->getClientOriginalExtension();
        $request->gambar->move('foodimage', $imagename);

        $menus->gambar=$imagename;

        $menus->nama=$request->nama;
        $menus->harga=$request->harga;
        $menus->deskripsi=$request->deskripsi;

        $menus->save();

         return redirect()->back();
    }

    public function deletemenu($id)
    {
        $menus=Makanan::find($id);
        $menus->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }

    //Team Restoran
    public function teams()
    {
        $teams=team::all();
        return view('Admin.team.team', compact('teams'));
    }

    public function tambahteam()
    {
        return view('Admin.team.tambahteam');
    }

    public function uploadteam(Request $request)
    {
        $teams = new team;

        $gambar=$request->gambar;

        $imagename= time().'.'.$gambar->getClientOriginalExtension();
        $request->gambar->move('teamimage', $imagename);

        $teams->gambar=$imagename;

        $teams->nama=$request->nama;
        $teams->spesialis=$request->spesialis;

        $teams->save();

        return redirect()->back();
    }

    public function teamedit($id)
    {
        $teams=team::find($id);
        return view('Admin.team.editteam', compact('teams'));
    }

    public function editteam(Request $request, $id)
    {
        $teams = team::find($id);

        $gambar=$request->gambar;

        $imagename= time().'.'.$gambar->getClientOriginalExtension();
        $request->gambar->move('foodimage', $imagename);

        $teams->gambar=$imagename;

        $teams->nama=$request->nama;
        $teams->spesialis=$request->spesialis;

        $teams->save();

        return redirect()->back();
    }

    public function deleteteam($id)
    {
        $teams=team::find($id);
        $teams->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }

    // RESERVASI
    public function booking()
    {
        $data=reservasi::all();
        return view('Admin.reservasi.reservasi', compact('data'));
    }

    public function reservasi(Request $request)
    {
        $data = new Reservasi;

        $data->nama=$request->nama;
        $data->number=$request->number;
        $data->time=$request->time;
        $data->date=$request->date;
        $data->guest=$request->guest;
        $data->message=$request->message;

        $data->save();

        return redirect()->back();
    }

    public function deletebook($id)
    {
        $data=reservasi::find($id);
        $data->delete();
        return redirect()->back()->with('success','Data Berhasil Dihapus');
    }
}
