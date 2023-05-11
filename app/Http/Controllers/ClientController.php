<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        if (auth()->user()->id) {
            $client = ClientModel::all();
            $data = [
                'client' => $client,
            ];
            return view('admin.client.index', $data);
        } else {
            return view('pages.index');
        }
    }
    public function create()
    {
        if (auth()->user()->id) {
            return view('admin.client.create');
        } else {
            return view('pages.index');
        }
    }
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $galeri = new ClientModel();
        $random = rand(0, 99999);
        $gambar = $random . "." . $request->gambar->extension();
        $request->gambar->move(public_path('image/client/'), $gambar);
        $galeri->images = $gambar;
        $galeri->save();

        return redirect('client');
    }
    public function edit($id)
    {

        $galeri = ClientModel::find($id);
        if (auth()->user()->id) {
            $data = [
                'client' => $galeri,
            ];
            return view("admin.client.edit", $data);
        } else {
            return view('pages.index');
        }
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $galeri = ClientModel::find($id);
        $random = rand(0, 99999);
        $gambar = 'client-'.$random . "." . $request->gambar->extension();
        $request->gambar->move(public_path('image/client/'), $gambar);
        $galeri->images = $gambar;
        $galeri->save();

        return redirect('client');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $galeri = ClientModel::find($id);

        $galeri->delete();

        return redirect('client');
    }
}
