<?php

namespace App\Http\Controllers;

use App\Models\GaleriModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        if (auth()->user()->id) {
            $galeri = GaleriModel::join('users', 'galeri.id_user', '=', 'users.id')->orderBy('date', 'desc')->get();
            $data = [
                'galeri' => $galeri,
            ];
            return view('admin.galeri.index', $data);
        } else {
            return view('home');
        }
    }
    public function create()
    {
        if (auth()->user()->id) {
            return view('admin.galeri.create');
        } else {
            return view('home');
        }
    }
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $galeri = new GaleriModel();
        $galeri->judul = $request->judul;

        $galeri->id_user = auth()->user()->id;
        $galeri->date = date("Y-m-d");
        $random = rand(0, 99999);
        $gambar = $random . "." . $request->gambar->extension();
        $request->gambar->move(public_path('image/galeri/'), $gambar);
        $galeri->gambar = $gambar;
        $galeri->save();

        return redirect('galeri');
    }
    public function edit($id)
    {

        $galeri = GaleriModel::find($id);
        if (auth()->user()->id) {
            $data = [
                'galeri' => $galeri,
            ];
            return view("admin.galeri.edit", $data);
        } else {
            return view('home');
        }
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $galeri = GaleriModel::find($id);
        $galeri->judul = $request->judul;

        $random = rand(0, 99999);
        $gambar = $random . "." . $request->gambar->extension();
        $request->gambar->move(public_path('image/galeri/'), $gambar);
        $galeri->gambar = $gambar;
        $galeri->save();

        return redirect('galeri');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $galeri = GaleriModel::find($id);
        $galeri->delete();

        return redirect('galeri');
    }
}
