<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\GaleriModel;
use App\Models\PaketModel;
use App\Models\TrackModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $client = ClientModel::all();
        $galleri = GaleriModel::all();
        $data = [
            'clients' => $client,
            'gallery' => $galleri,
        ];
        return view('home', $data);
    }

    public function track(Request $request)
    {
        $paket = PaketModel::where(['no_resi' => $request->no_resi])->first();
        $track = $paket == null ? collect([]) : TrackModel::where(['package_id' => $paket->id])->orderBy('id', 'desc')->get();
        $data = [
            'paket' => $paket == null ? collect([]) : $paket,
            'track' => $track,
        ];
        return view('track', $data);
    }
}
