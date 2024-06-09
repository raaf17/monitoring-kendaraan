<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perusahaan;
use App\Models\RequestKendaraan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $perusahaans = Perusahaan::count();
        $kendaraans = Kendaraan::count();
        $request_kendaraans = RequestKendaraan::count();

        if (request()->ajax()) {
            return RequestKendaraan::DashboardRequestKendaraan()->get();
        }
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'user' => $users,
            'perusahaan' => $perusahaans,
            'kendaraan' => $kendaraans,
            'request_kendaraan' => $request_kendaraans
        ]);
    }
}
