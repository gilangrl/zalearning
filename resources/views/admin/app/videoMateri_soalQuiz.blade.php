@extends('admin.master')
@section('videoMateri_soalQuiz')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Course</a></li>
                    <li class="breadcrumb-item active">Data VideoMateri</li>
                </ol>
            </div>
        </div>
    </div>
</div>     
                    
<!-- end page title -->

<div class="row pt-4">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Manage Video Materi</h4>
                <div class="tombol" style="margin-bottom:-5vh;">
	                <a href="{{route('addVideoMateri')}}" class="btn btn-primary text-center mt-3 mb-5"> 
	                    <span class="btn-label"><i class="fe-plus fs-5"></i></span>Tambah Materi
	                </a>
                </div>
                <table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id"  data-pagination="false" data-show-pagination-switch="true" class="table-borderless">
                    <thead class="table-light text-center">
                        <tr>
                            <th>No</th>
                            <th>Video</th>
                            <th>Judul Bab</th>
                            <th>Judul Quiz</th>
                            <th>Soal Quiz</th>
                            <th colspan="4">Pilihan Jawaban</th>
                            <th>Jawaban Benar</th>
                            <th>Sertifikat</th>
                            <th>Action</th>
                
                        </tr>
                    </thead>
                
                
                    <tbody class="text-center">
                        @foreach ($data as $index => $datas)    
                        <tr>
                            <td>{{$data->firstItem() + $index }}</td>
                            <td>
                                <video width="100" height="50" controls>
                                    <source src="{{ asset('video_quiz/' . $datas->video_materi) }}" type="video/mp4">
                                </video>
                            </td>
                            <td>{{$datas->judul_bab}}</td>
                            <td>{{$datas->judul_quiz}}</td>
                            <td>{{$datas->soal_quiz}}</td>
                            <td>{{$datas->jawaban_1}}</td>
                            <td>{{$datas->jawaban_2}}</td>
                            <td>{{$datas->jawaban_3}}</td>
                            <td>{{$datas->jawaban_4}}</td>
                            <td>{{$datas->jawaban_benar}}</td>
                            <td>
                                <img src="{{asset('foto_sertifikat/'. $datas->sertifikat)}}" alt="Gambar" width="50">
                            </td>
                            <td>
                                <a class="btn btn-info btn-xs" type="button" href="{{ route('editVideoMateri', ['id' => $datas->id]) }}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="{{ route('deleteVideoMateri', ['id' => $datas->id]) }}" class="btn btn-danger btn-xs" data-confirm-delete="true">
                                 <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
            </div>
            <div class="ms-auto" style="margin-right: 20px;">
                {{ $data->links() }}
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
@include('sweetalert::alert')
<!-- end row-->
@endsection