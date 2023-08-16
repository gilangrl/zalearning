@extends('admin.master')

@section('editVideoMateri_soalQuiz')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">Quiz</a></li>
                    <li class="breadcrumb-item disabled"><a href="#">Add video & materi</a></li>
                </ol>
            </div>
        </div>                          
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

   <!-- Form row -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body" id="Informasi">
                    <h4 class="header-title" style="color: #0E5DC4; font-family: Poppins; font-size: 20px; font-weight: 500; ">Add Video Materi,Bab Materi & Soal Quiz</h4>
                    <p>Unggah video materi, bab materi serta kuis untuk pembelajaran pada course</p>
                    
                    <form action="{{ route('updateVideoMateri', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <ul>
                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <li style="list-style-type: none;">
                                    <div class="nomor">
                                        <img src="{{asset('../assets/images/nomor1.png')}}" alt="" width="25" style="margin-left:-4vh;">
                                        <h4 class="d-inline-block" style="margin-left:5px;">Video Materi</h4>
                                    </div>
                                </li>
                                <ol>
                                    <label for="text" class="col-sm-2 col-form-label">Video Materi</label>
                                    <div class="col-sm-6">
                                        <div class="input-group" style="margin-left: 22vh; margin-top: -5vh;">
                                            <input type="file" class="form-control" name="video_materi" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                            aria-label="Upload">
                                            <span class="input-group-text">
                                              <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <p style="margin-left:32vh;">{{('video_quiz / '. $data->video_materi)}}</p>
                                    </div>
                                </ol>
                            </div>
                            
                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <li style="list-style-type: none;">
                                    <div class="nomor">
                                        <img src="{{asset('../assets/images/nomor2.png')}}" alt="" width="25" style="margin-left:-4vh;">
                                        <h4 class="d-inline-block" style="margin-left:5px;">Bab Materi</h4>
                                    </div>
                                </li>
                                <ol>        
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Nama Mentor</label>
                                    <div class="col-sm-4 py-2">
                                        <select class="form-select" aria-label="Default select example" name="nama_mentor" style="margin-left: 22vh; margin-top: -5vh;">
                                            <option value="{{$data->id_course}}">{{$data->course->nama_mentor}}</option>
                                            @foreach ($course as $row)
                                            <option value="{{$row->id}}">{{$row->nama_mentor}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </ol>
                                <ol>        
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Judul Bab</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul_bab" value="{{$data->judul_bab}}" id="floatingInput" placeholder="masukan judul bab" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </ol>
                            </div>

                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <li style="list-style-type: none;">
                                    <div class="nomor">
                                        <img src="{{asset('../assets/images/nomor3.png')}}" alt="" width="25" style="margin-left:-4vh;">
                                        <h4 class="d-inline-block" style="margin-left:5px;">Soal Quiz</h4>
                                    </div>
                                </li>
                                <ol>
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10" style="margin-top: -30px;">
                                        <input type="text" class="form-control" name="judul_quiz" value="{{$data->judul_quiz}}" id="floatingInput" placeholder="masukan judul quiz" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </ol>
                            </div>

                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <ol>
                                    <div class="nomor">
                                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Soal Quiz</label>
                                    </div>
                                    <div class="col-sm-10" style="margin-top: -30px;">
                                        <input type="text" class="form-control" name="soal_quiz" value="{{$data->soal_quiz}}" id="floatingInput" placeholder="masukan soal quiz" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </ol>
                            </div>

                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <ol>
                                    <div class="nomor">
                                        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Pilihan Jawaban</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                             <input type="text" class="form-control" name="jawaban_1" value="{{$data->jawaban_1}}" id="floatingInput" placeholder="pilih jawaban" style="margin-left: 22vh; margin-top: -5vh;">
                                        </div>
                                        <div class="col-3">
                                             <input type="text" class="form-control" name="jawaban_2" value="{{$data->jawaban_2}}" id="floatingInput" placeholder="pilih jawaban" style="margin-left: 22vh; margin-top: -5vh;">
                                        </div>
                                    </div>
                                </ol>
                            </div>

                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <ol>
                                    <div class="row mt-3">
                                        <div class="col-3">
                                             <input type="text" class="form-control" name="jawaban_3" value="{{$data->jawaban_3}}" id="floatingInput" placeholder="pilih jawaban" style="margin-left: 22vh; margin-top: -5vh;">
                                        </div>
                                        <div class="col-3">
                                             <input type="text" class="form-control" name="jawaban_4" value="{{$data->jawaban_4}}" id="floatingInput" placeholder="pilih jawaban" style="margin-left: 22vh; margin-top: -5vh;">
                                        </div>
                                    </div>
                                </ol>
                            </div>

                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <ol>
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Jawaban Tepat</label>
                                    <div class="col-3">
                                        <div class="col-sm-10" style="margin-top: -30px;">
                                            <input type="text" class="form-control" name="jawaban_benar" value="{{$data->jawaban_benar}}" id="floatingInput" placeholder="jawaban yang tepat" style="margin-left: 22vh; margin-top: -5vh;">
                                        </div>
                                    </div>
                                </ol>
                            </div>
                            
                            <div class="mt-4 mb-3 row"  style="font-family: Poppins; ">
                                <li  style="list-style-type: none;">
                                    <div class="nomor">
                                        <img src="{{asset('../assets/images/nomor4.png')}}" alt="" width="25" style="margin-left:-4vh;">
                                        <h4 class="d-inline-block" style="margin-left:5px;">Sertifikat</h4>
                                    </div>
                                </li>
                                <ol>
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">E-Certificate</label>
                                    <div class="col-sm-6">
                                        <div class="input-group" style="margin-left: 22vh; margin-top: -5vh;">
                                            <input type="file" class="form-control" name="sertifikat" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                            aria-label="Upload">
                                            <span class="input-group-text">
                                              <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <p style="margin-left:32vh;">{{('foto_sertifikat/ '. $data->sertifikat)}}</p> 
                                    </div>
                                </ol>
                            </div>

                        </ul>
                        <button type="submit" class="btn btn-lg float-end text-white" style="background-color:#0E5DC4; margin-right:6vh;">Submit</button>
                        <a href="" class="btn btn-lg float-end text-white" style="background-color:#FF5151; margin-right:2vh;">Cancel</a>
                        
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>       
<!-- end page title -->
@endsection