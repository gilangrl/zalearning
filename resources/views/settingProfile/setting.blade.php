@extends('user.master')

@section('setting')
<div class="row py-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="nav nav-pills flex-column  nav-pills-tab">
                                    <p class="py-2 fs-4"
                                        aria-selected="true">
                                        <i class="mdi mdi-account-circle d-block font-24" style="margin-left: 5vh;"></i>
                                        Profile Setting
                                    </p>

                                </div>  
                            </div> <!-- end col-->

                            <div class="col-lg-8">
                                <div class="tab-content pt-3">
                                    <div class="">
                                        <div>

                                            <div class="col text-center">
                                                <img src="#" alt="image" name="gambar" 
                                                    class="img-fluid rounded-circle" width="120"/>
                                                <div class="tombol p-2">
                                                	<button type="submit" class="btn btn-primary">Simpan</button>
                                                	<button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>


                                            <form action="{{route('insertSettingProfile')}}" method="POST" class="pt-2" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="billing-first-name" class="form-label">Foto Profile</label>
                                                            <div class="input-group">
                                                                <input type="file" class="form-control" name="gambar" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" 
                                                                aria-label="Upload">
                                                                <span class="input-group-text">
                                                                  <i class="fas fa-camera"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>                                                 
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="billing-first-name" class="form-label">Username</label>
                                                            <input class="form-control" type="text" value="{{$data->name}}" placeholder="Masukan username" name="name" id="billing-first-name"/>
                                                        
                                                        </div>
                                                    </div>                                                 
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="example-textarea" class="form-label">Bio</label>
                                                            <textarea class="form-control" id="example-textarea" name="bio" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="billing-first-name" class="form-label">Alamat</label>
                                                            <input class="form-control" type="text" placeholder="Masukan alamat" name="alamat" id="billing-first-name" />
                                                        </div>
                                                    </div>                                                 
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label for="billing-address" class="form-label">Tanggal lahir</label>
                                                            <input class="form-control" type="date" placeholder="Enter full address" name="tanggal_lahir" id="billing-address">
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="billing-first-name" class="form-label">Pengalaman Bekerja</label>
                                                            <input class="form-control" type="text" placeholder="Masukan pengalaman bekerja" name="pengalaman_kerja" id="billing-first-name" />
                                                        </div>
                                                    </div>                                                 
                                                </div> <!-- end row -->
                                                <div class="row mt-2 text-center">
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            </form>
                                        </div>    
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container -->
</div> <!-- content -->

@endsection