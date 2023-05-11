<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use App\Models\TrackModel;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index()
    {
        if (auth()->user()->id) {
            $track_paket = TrackModel::with('paket')->get();
            $data = [
                'track_paket' => $track_paket,
            ];
            return view('admin.track_paket.index', $data);
        } else {
            return view('pages.index');
        }
    }
    public function create()
    {
        if (auth()->user()->id) {
            $no_resi = PaketModel::all();
            $data = [
                'no_resi' => $no_resi,
            ];
            return view('admin.track_paket.create', $data);
        } else {
            return view('pages.index');
        }
    }
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $track_paket = new TrackModel();
        $track_paket->package_id = $request->package_id;
        $track_paket->status = $request->status;
        $track_paket->description = $request->description;
        $track_paket->time = $request->time;
        $track_paket->save();

        return redirect('track_paket');
    }
    public function edit($id)
    {

        $track_paket = TrackModel::find($id);
        if (auth()->user()->id) {
            $data = [
                'track_paket' => $track_paket,
            ];
            return view("admin.track_paket.edit", $data);
        } else {
            return view('pages.index');
        }
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $track_paket = TrackModel::find($id);
        $track_paket->no_resi = $request->no_resi;
        $track_paket->package_desc = $request->package_desc;
        $track_paket->receiver_name = $request->receiver_name;
        $track_paket->receiver_address = $request->receiver_address;
        $track_paket->sender_name = $request->sender_name;
        $track_paket->sender_address = $request->sender_address;
        $track_paket->weight = $request->weight;
        $track_paket->price = $request->price;
        $track_paket->save();

        return redirect('track_paket');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $track_paket = TrackModel::find($id);

        $track_paket->delete();

        return redirect('track_paket');
    }
}
