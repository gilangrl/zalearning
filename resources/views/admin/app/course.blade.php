@extends('admin.master')
@section('course')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Course</a></li>
                    <li class="breadcrumb-item active">Data Course</li>
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
                <h4 class="header-title">Data Manajemen Course</h4>
                <div class="tombol" style="margin-bottom:-5vh;">
	                <a href="{{route('addCourse')}}" class="btn btn-primary text-center mt-3"> 
	                    <span class="btn-label"><i class="fe-plus fs-5"></i></span>Tambah Course
	                </a>
                </div>
                <table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id"  data-pagination="false" data-show-pagination-switch="true" class="table-borderless">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Deskripsi Course</th>
                            <th>Kategori</th>
                            <th>Nama Mentor</th>
                            <th>Deskripsi Mentor</th>
                            <th>Harga</th>
                            <th>Action</th>
                
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($data as $index => $datas)
                        <tr>
                            <td>{{$data->firstItem() + $index }}</td>
                            <td>
                                <img src="{{asset('foto_course/'. $datas->gambar)}}" alt="Gambar" width="100">
                            </td>
                            <td>
                                <img src="{{asset('foto_mentor/'. $datas->foto)}}" alt="Gambar" class="rounded-circle" width="50">
                            </td>
                            <td>{{$datas->judul}}</td>
                            <td>{{$datas->deskripsi_course}}</td>
                            <td>{{$datas->kategori}}</td>
                            <td>{{$datas->nama_mentor}}</td>
                            <td>{{$datas->deskripsi_mentor}}</td>
                            <td>Rp. {{number_format($datas->harga)}}</td>
                            <td>
                            
                                <a class="btn btn-info" type="button" href="{{route('editCourse', ['id' => $datas->id])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-danger" data-confirm-delete="true" href="{{route('deleteCourse', ['id' => $datas->id])}}">
                                 <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-->
        <div class="ms-auto" style="margin-right: 20px;">
            {{ $data->links() }}
        </div>
    </div> <!-- end col-->
</div>
@include('sweetalert::alert')
<!-- end row-->
@endsection