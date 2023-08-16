@extends('admin.master')

@section('editCourse')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">Course</a></li>
                    <li class="breadcrumb-item disabled"><a href="#">Edit course</a></li>
                </ol>
            </div>
        </div>                          
    </div>

   <!-- Form row -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body" id="Informasi">
                    <h4 class="header-title">Edit Course</h4>
                    
                    <form action="{{ route('updateCourse', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <ul>
                            <div class="mt-4 mb-3 mt-3 row">
                                <li>
                                    <div class="text">
                                        <label for="text" class="col-sm-2 col-form-label">Judul Course</label>
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control " id="floatingInput" name="judul" value="{{$data->judul}}" placeholder="masukan judul course" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </li>
                            </div>
                            
                            <div class="mt-4 mb-3 row">
                                <li>
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi Course</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" placeholder="masukan deskripsi course" name="deskripsi_course" id="floatingTextarea2" style="height: 100px;
                                       margin-left: 22vh; margin-top: -5vh;">{{$data->deskripsi_course}}</textarea>
                                    </div>
                                </li>
                            </div>

                            <div class="mt-4 mb-3 row">
                                <li>
                                    <label for="text" class="col-sm-2 col-form-label">Harga Course</label>
                                    <div class="col-sm-10" style="margin-top: -30px;">
                                        <input type="text" class="form-control" name="harga" value="{{$data->harga}}" id="floatingInput" placeholder="masukan judul course" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </li>
                            </div>

                            <div class="mt-4 mb-3 row">
                                <li>
                                    <label for="text" class="col-sm-2 col-form-label">Kategori Course</label>
                                    <div class="col-sm-10" style="margin-top: -30px;">
                                        <div class="form-check form-check-inline" style="margin-left: 22vh;">
                                        <input type="radio" name="kategori" id="freeC" value="free" class="form-check-input" @if($data->kategori == 'free') checked @endif>
                                        <label for="freeC">Free Class</label>
                                    </div>
                                    <div class="form-check form-check-inline" style="margin-left: 5vh;">
                                        <input type="radio" name="kategori" id="premiumC" value="premium" class="form-check-input" @if($data->kategori == 'premium') checked @endif>
                                        <label for="premiumC">Premium Class</label>
                                    </div>
                                    </div>
                                </li>
                            </div>

                            <div class="mt-4 mb-3 row">
                                <li>
                                    <label for="text" class="col-sm-2 col-form-label">Nama Mentor</label>
                                    <div class="col-sm-10" style="margin-top: -30px;">
                                        <input type="text" class="form-control" name="nama_mentor" value="{{$data->nama_mentor}}" id="floatingInput" placeholder="masukan nama mentor" style="margin-left: 22vh; margin-top: -5vh;">
                                    </div>
                                </li>
                            </div>

                            <div class="mt-4 mb-3 row">
                                <li>
                                    <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi Mentor</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" placeholder="masukan deskripsi mentor" name="deskripsi_mentor" id="floatingTextarea2" style="height: 100px;
                                       margin-left: 22vh; margin-top: -5vh;">{{ $data->deskripsi_mentor}}</textarea>
                                    </div>
                                </li>
                            </div>

                            <div class="mt-4 mb-3 row">
                                <li>
                                    <div class="text">
                                        <label for="text" class="col-sm-2 col-form-label">Banner Course</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group" style="margin-left: 22vh; margin-top: -5vh;">
                                            <input type="file" class="form-control" name="gambar" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                            aria-label="Upload">
                                            <span class="input-group-text">
                                              <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                            <p style="margin-left:32vh;">{{('foto_course / '. $data->gambar)}}</p> 
                                    </div>
                                </li>
                            </div>
                            <div class="mt-4 mb-3 row">
                                <li>
                                    <div class="text">
                                        <label for="text" class="col-sm-2 col-form-label">Foto Mentor</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group" style="margin-left: 22vh; margin-top: -5vh;">
                                            <input type="file" class="form-control" name="foto" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                            aria-label="Upload">
                                            <span class="input-group-text">
                                              <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                            <p style="margin-left:32vh;">{{('foto_mentor / '. $data->foto)}}</p> 
                                    </div>
                                </li>
                            </div>
                        </ul>
                        <button type="submit" class="btn btn-primary btn-lg float-end">Submit</button>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>       
<!-- end page title -->
@endsection