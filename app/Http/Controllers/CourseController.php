<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\course;

class CourseController extends Controller
{
    public function indexCourse()
    {

        $data = course::paginate(3);
        $title = 'Are you sure!';
        $text = "Kamu akan menghapus course ini?";
        confirmDelete($title, $text);
        return view('admin.app.course', compact('data'));
    }

    public function addCourse()
    {
        return view('admin.app.add_course');
    }

    public function insertCourse(Request $request)
    {
        // Validasi form
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi_course' => 'required',
            'harga' => 'required|integer',
            'kategori' => 'required',
            'nama_mentor' => 'required',
            'deskripsi_mentor' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'deskripsi_course.required' => 'Deskripsi course harus diisi.',
            'harga.required' => 'Harga harus diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
            'kategori.required' => 'Kategori harus diisi.',
            'nama_mentor.required' => 'Nama mentor harus diisi.',
            'deskripsi_mentor.required' => 'Deskripsi mentor harus diisi.',
            'foto.required' => 'Gambar harus diisi.',
        ]);

        if (auth()->check()) {
            $course = Course::create($validatedData);

            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $gambarName = $gambar->getClientOriginalName();
                $gambar->move('foto_course/', $gambarName);
                
                $course->gambar = $gambarName;
            }

            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $fotoName = $foto->getClientOriginalName();
                $foto->move('foto_mentor/', $fotoName);
                
                $course->foto = $fotoName;
            }

            $course->save();
        } else {
            return back()->withErrors($validatedData)->withInput();
        }

        // dd($course);
        Alert::success('Data berhasil ditambahkan');
        return redirect()->route('indexCourse');
    }

    public function editCourse($id)
    {   
        $data = course::find($id);
        return view('admin.app.edit_course',compact('data'));
    }

    public function updateCourse(Request $request,$id)
    {
        $data = course::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');
                $gambarName = $gambar->getClientOriginalName();
                $gambar->move('foto_course/', $gambarName);
                
                $data->gambar = $gambarName;
            }

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = $foto->getClientOriginalName();
            $foto->move('foto_mentor/', $fotoName);
            
            $data->foto = $fotoName;
        }
        $data->save();
        
        // dd($data);
        Alert::success('Data berhasil diupdate');
        return redirect()->route('indexCourse');
    }

    public function deleteCourse($id)
    {   
        $data = course::findOrFail($id);
        $data->delete();
        // dd($data);
        return redirect()->route('indexCourse');
    }
}
