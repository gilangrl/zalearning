<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\course;
use App\Models\videoMateri;

class videoMateri_soalQuizController extends Controller
{
    public function indexVideoMateri()
    {
        $data = videoMateri::paginate(3);
        $title = 'Are you sure!';
        $text = "Kamu akan menghapus course ini?";
        confirmDelete($title, $text);
        return view('admin.app.videoMateri_soalQuiz', compact('data'));
    }

    public function addVideoMateri(){
        $data = course::all();
        return view('admin.app.addVideoMateri_soalQuiz',compact('data'));
    }

    public function insertVideoMateri(Request $request)
    {
        $validatedData = $request->validate([
            'judul_bab'     => 'required',
            'judul_quiz'    => 'required',
            'soal_quiz'     => 'required',
            'jawaban_1'     => 'required',
            'jawaban_2'     => 'required',
            'jawaban_3'     => 'required',
            'jawaban_4'     => 'required',
            'jawaban_benar' => 'required',
        ], [
            'judul_bab.required'     => 'Judul Bab harus diisi.',
            'judul_quiz.required'    => 'Judul Quiz course harus diisi.',
            'soal_quiz.required'     => 'Soal Quiz harus diisi.',
            'jawaban_1.required'     => 'Jawaban 1 harus diisi.',
            'jawaban_2.required'     => 'Jawaban 2 harus diisi.',
            'jawaban_3.required'     => 'Jawaban 3 harus diisi.',
            'jawaban_4.required'     => 'Jawaban 4 harus diisi.',
            'jawaban_benar.required' => 'Jawaban Benar harus diisi.',
        ]);
        // Menyimpan video ke direktori yang ditentukan
        if ($request->hasFile('video_materi')) {
            $video = $request->file('video_materi');
            
            // Memeriksa tipe file yang diunggah
            if ($video->getClientOriginalExtension() == 'mp3' || $video->getClientOriginalExtension() == 'mp4') {
                $videoName = $video->getClientOriginalName();
                $video->move('video_quiz/', $videoName);
            } else {
                return back()->withErrors(['video_materi' => 'File harus berupa tipe mp3 atau mp4.'])->withInput();
            }
        }

        // Menyimpan gambar ke direktori yang ditentukan
        if ($request->hasFile('sertifikat')) {
            $gambar = $request->file('sertifikat');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_sertifikat/', $gambarName);
        }

        $courseId = $request->input('nama_mentor');
        
        // perintah insert
        $datas = new videoMateri(); 
        $datas->video_materi        = $videoName ?? null; // Jika tidak ada file video diunggah
        $datas->id_course           = $courseId;
        $datas->judul_bab           = $request->input('judul_bab');
        $datas->judul_quiz          = $request->input('judul_quiz');
        $datas->soal_quiz           = $request->input('soal_quiz');
        $datas->jawaban_1           = $request->input('jawaban_1');
        $datas->jawaban_2           = $request->input('jawaban_2');
        $datas->jawaban_3           = $request->input('jawaban_3');
        $datas->jawaban_4           = $request->input('jawaban_4');
        $datas->jawaban_benar       = $request->input('jawaban_benar');
        $datas->sertifikat          = $gambarName ?? null; // Jika tidak ada file gambar diunggah

        // Simpan data ke database
        $datas->save();
        // dd($datas);
        Alert::success('Data berhasil ditambahkan!');
        return redirect()->route('videoMateri');
    }

    public function editVideoMateri($id)
    {
        $course     = course::all();
        $data       = videoMateri::find($id);
        return view('admin.app.editVideoMateri_soalQuiz', compact('data','course'));
    }

    public function updateVideoMateri(Request $request, $id)
    {
        $validatedData = $request->validate(
        [
        'judul_bab'     => 'required',
        'judul_quiz'    => 'required',
        'soal_quiz'     => 'required',
        'jawaban_1'     => 'required',
        'jawaban_2'     => 'required',
        'jawaban_3'     => 'required',
        'jawaban_4'     => 'required',
        'jawaban_benar' => 'required',
        ], 
        [
        'judul_bab.required'     => 'Judul Bab harus diisi.',
        'judul_quiz.required'    => 'Judul Quiz course harus diisi.',
        'soal_quiz.required'     => 'Soal Quiz harus diisi.',
        'jawaban_1.required'     => 'Jawaban 1 harus diisi.',
        'jawaban_2.required'     => 'Jawaban 2 harus diisi.',
        'jawaban_3.required'     => 'Jawaban 3 harus diisi.',
        'jawaban_4.required'     => 'Jawaban 4 harus diisi.',
        'jawaban_benar.required' => 'Jawaban Benar harus diisi.',
    ]);

        // Menyimpan video ke direktori yang ditentukan
        if ($request->hasFile('video_materi')) {
            $video = $request->file('video_materi');
            
            // Memeriksa tipe file yang diunggah
            if ($video->getClientOriginalExtension() == 'mp3' || $video->getClientOriginalExtension() == 'mp4') {
                $videoName = $video->getClientOriginalName();
                $video->move('video_quiz/', $videoName);
            } else {
                return back()->withErrors(['video_materi' => 'File harus berupa tipe mp3 atau mp4.'])->withInput();
            }
        }

        // Menyimpan gambar ke direktori yang ditentukan
        if ($request->hasFile('sertifikat')) {
            $gambar = $request->file('sertifikat');
            $gambarName = $gambar->getClientOriginalName();
            $gambar->move('foto_sertifikat/', $gambarName);
        }

        $courseId = $request->input('nama_mentor');

        // Menemukan data yang akan diedit berdasarkan ID
        $datas = videoMateri::find($id);

        // Memperbarui data yang ada
        $datas->video_materi    = $videoName ?? $datas->video_materi; // Jika tidak ada file video diunggah
        $datas->id_course       = $courseId;
        $datas->judul_bab       = $request->input('judul_bab');
        $datas->judul_quiz      = $request->input('judul_quiz');
        $datas->soal_quiz       = $request->input('soal_quiz');
        $datas->jawaban_1       = $request->input('jawaban_1');
        $datas->jawaban_2       = $request->input('jawaban_2');
        $datas->jawaban_3       = $request->input('jawaban_3');
        $datas->jawaban_4       = $request->input('jawaban_4');
        $datas->jawaban_benar   = $request->input('jawaban_benar');
        $datas->sertifikat      = $gambarName ?? $datas->sertifikat; // Jika tidak ada file gambar diunggah

        // Simpan perubahan data ke database
        $datas->save();
        // dd($datas);  
        Alert::success('Data berhasil diperbarui!');
        return redirect()->route('videoMateri');
    }

    public function deleteVideoMateri($id)
    {   
        $data = videoMateri::findOrFail($id);
        $data->delete();
        // dd($data);
        return redirect()->route('videoMateri');
    }
}
