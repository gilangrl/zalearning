<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = course::orderBy('judul', 'asc')->get();
        return response()->json([
            'status' =>true,
            'message' =>'Data ditemukan',
            'data' =>$data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'judul' => 'required',
            'deskripsi_course' => 'required',
            'harga' => 'required|integer',
            'kategori' => 'required',
            'nama_mentor' => 'required',
            'deskripsi_mentor' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status' =>false,
                'message' =>'Gagal menambahkan data',
                'data' => $validator->errors()
            ]);
        }

       course::create($request->all());

        return response()->json([
            'status' =>true,
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = course::find($id);
        if($data){
            return response()->json([
                'status' => true,
                'message' => 'Data ditemukan',
                'data' => $data
            ],200);
        }else{
            return response()->json([
                'status' =>false,
                'message' => 'Data tidak ditemukan',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = course::find($id);
        if(empty($data)){
            return response()->json([
                'status' =>false,
                'message' =>'Data tidak ditemukan',
            ],404);
        }

        $rules =[
            'judul' => 'required',
            'deskripsi_course' => 'required',
            'harga' => 'required|integer',
            'kategori' => 'required',
            'nama_mentor' => 'required',
            'deskripsi_mentor' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return response()->json([
                'status' =>false,
                'message' =>'Gagal mengupdate data',
                'data' => $validator->errors()
            ]);
        }

        $data->judul            = $request->judul;
        $data->deskripsi_course = $request->deskripsi_course;
        $data->harga            = $request->harga;
        $data->kategori         = $request->kategori;
        $data->nama_mentor      = $request->nama_mentor;
        $data->deskripsi_mentor = $request->deskripsi_mentor;
        $data->gambar           = $request->gambar;
        $data->foto             = $request->foto;
        $data->gambar           = $request->gambar ?? null;
        $data->foto             = $request->foto ?? null;

        $post = $data->save();
      

        return response()->json([
            'status' =>true,
            'message' => 'Data berhasil diupdate'
        ]);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = course::find($id);
        if(empty($data)){
            return response()->json([
                'status' =>false,
                'message' =>'Data tidak ditemukan',
            ],404);
        }

        $post = $data->delete();
      

        return response()->json([
            'status' =>true,
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
