<?php

namespace App\Http\Controllers;

use App\Models\Tambang;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class TambangController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            return DataTables::of(Tambang::select('*'))
                ->addColumn('_', function ($data) {
                    return '<button type="button" class="btn btn-info" onclick="view(' . $data->id . ')"><i class="fa fa-eye"></i></button>
                <button type="button" class="btn btn-warning text-light" onclick="edit(' . $data->id . ')"><i class="fa fa-edit"></i></button>
                <button type="button" class="btn btn-danger" onclick="destroy(' . $data->id . ')"><i class="far fa-trash-alt"></i></button>';
                })
                ->editColumn('alamat', function ($data) {
                    return ucwords($data->alamat);
                })
                ->rawColumns(['_', 'alamat'])
                ->make(true);
        }
        return view('tambang.index', [
            'title' => 'Tambang'
        ]);
    }

    public function create()
    {
        return view('tambang.create');
    }

    public function store()
    {
        $post = request()->all();
        $validator = FacadesValidator::make($post, [
            'nama_tambang' => 'required',
            'alamat' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'  => 'Terjadi kesalahan input',
                'errors' => $validator->errors()
            ], 400);
        }

        $post['created_by'] = auth()->user()->username;
        if (Tambang::create($post)) {
            return response()->json([
                'success' => true,
                'message' => 'data berhasil di simpan'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data gagal di simpan'
            ]);
        }
    }

    public function edit($id)
    {
        $model = Tambang::find($id);
        return view('tambang.edit', compact('model'));
    }

    public function view($id)
    {
        $model = Tambang::find($id);
        return view('tambang.view', compact('model'));
    }

    public function update($id)
    {
        $post = request()->all();
        $validator = FacadesValidator::make($post, [
            'nama_tambang' => 'required|unique:tambang,id,' . $id,
            'alamat' => 'required',
        ], [
            'required' => ':attribute harus diisi'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message'  => 'Terjadi kesalahan input',
                'errors' => $validator->errors()
            ], 400);
        }

        $post['updated_by'] = auth()->user()->username;
        $model = Tambang::find($id);
        if ($model->update($post)) {
            return response()->json([
                'success' => true,
                'message' => 'data berhasil di diubah'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data gagal di diubah'
            ]);
        }
    }

    public function delete($id)
    {
        $model = Tambang::find($id);
        if ($model) {
            if ($model->delete()) {
                return response()->json([
                    'success' => true,
                    'message' => 'data berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'data gagal dihapus'
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan'
            ]);
        }
    }
}
