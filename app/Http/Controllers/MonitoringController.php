<?php

namespace App\Http\Controllers;

use App\Models\RequestKendaraan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MonitoringController extends Controller
{
    public function index() {
        if (request()->ajax()) {
            return DataTables::of(RequestKendaraan::RequestKendaraan())
                ->editColumn('status', function($data) {
                    $html = "";
                    if ($data->status == 1) {
                        $html = '<span class="badge badge-success">Ready</span>';
                    } else if ($data->status == 0) {
                        $html = '<span class="badge badge-warning">Booking</span>';
                    }
                    return $html;
                })
                ->editColumn('status_unit', function($data) {
                    $html = "";
                    if ($data->status == 1) {
                        $html = '<span class="badge badge-success">Ready</span>';
                    } else if ($data->status == 0) {
                        $html = '<span class="badge badge-warning">Use</span>';
                    } else {
                        $html = '<span class="badge badge-danger">Broken</span>';
                    }
                    return $html;
                })
                ->rawColumns(['_', 'status', 'status_unit'])
                ->make(true);
        }
        return view('monitoring.index');
    }
}
