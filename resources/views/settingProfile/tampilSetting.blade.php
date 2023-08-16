@extends('user.master')

@section('tampilSetting')
<div class="row p-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="tab-content pt-3">
                                    <div class="">
                                        <div>
                                            <form action="">
                                                <div class="col text-center">
                                                    @foreach ($datas as $data)
                                                        @if ($data->gambar)
                                                            <img src="{{ asset('foto_profile/' . $data->gambar) }}" alt="Gambar" class="img-fluid rounded-circle" width="120">
                                                        @endif
                                                    @endforeach

                                                    <h3>{{Auth::user()->role}}</h3>
                                                </div>
                                            </form>

                                            <div class="text-profile">
                                                @if ($datas->isNotEmpty())
                                                    <p class="text-center mb-4">{{ $datas->first()->bio }}</p>
                                                @else
                                                    <p>Data tidak tersedia.</p>
                                                @endif
                                                <hr>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="mx-auto">Alamat</label>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    @if ($datas->isNotEmpty())
                                                        <p>{{ $datas->first()->alamat }}</p>
                                                    @else
                                                        <p>Data tidak tersedia.</p>
                                                    @endif
                                                </div>
                                            </div> <!-- end row -->
                                            <hr width="50%">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="mx-auto">Tanggal Lahir</label>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    @if ($datas->isNotEmpty())
                                                        <p>{{ $datas->first()->tanggal_lahir }}</p>
                                                    @else
                                                        <p>Data tidak tersedia.</p>
                                                    @endif
                                                </div>
                                            </div> <!-- end row -->
                                            <hr width="50%"> 
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="mx-auto">Pengalaman Bekerja</label>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    @if ($datas->isNotEmpty())
                                                        <p>{{ $datas->first()->pengalaman_kerja }}</p>
                                                    @else
                                                        <p>Data tidak tersedia.</p>
                                                    @endif
                                                </div>
                                            </div> <!-- end row -->
                                            <hr width="50%">    
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
    @include('sweetalert::alert')
</div> <!-- content -->

@endsection