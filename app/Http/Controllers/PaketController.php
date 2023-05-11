<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        if (auth()->user()->id) {
            $paket = PaketModel::all();
            $data = [
                'paket' => $paket,
            ];
            return view('admin.paket.index', $data);
        } else {
            return view('pages.index');
        }
    }
    public function create()
    {
        if (auth()->user()->id) {
            return view('admin.paket.create');
        } else {
            return view('pages.index');
        }
    }
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $paket = new PaketModel();
        $paket->no_resi = $request->no_resi;
        $paket->package_desc = $request->package_desc;
        $paket->receiver_name = $request->receiver_name;
        $paket->receiver_address = $request->receiver_address;
        $paket->sender_name = $request->sender_name;
        $paket->sender_address = $request->sender_address;
        $paket->weight = $request->weight;
        $paket->price = $request->price;
        $paket->save();

        return redirect('paket');
    }
    public function edit($id)
    {

        $paket = PaketModel::find($id);
        if (auth()->user()->id) {
            $data = [
                'paket' => $paket,
            ];
            return view("admin.paket.edit", $data);
        } else {
            return view('pages.index');
        }
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $paket = PaketModel::find($id);
        $paket->no_resi = $request->no_resi;
        $paket->package_desc = $request->package_desc;
        $paket->receiver_name = $request->receiver_name;
        $paket->receiver_address = $request->receiver_address;
        $paket->sender_name = $request->sender_name;
        $paket->sender_address = $request->sender_address;
        $paket->weight = $request->weight;
        $paket->price = $request->price;
        $paket->save();

        return redirect('paket');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $paket = PaketModel::find($id);

        $paket->delete();

        return redirect('paket');
    }
}
