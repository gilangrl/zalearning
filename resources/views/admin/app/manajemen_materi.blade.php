@extends('admin.master')

@section('manajemen_materi')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Quiz</a></li>
                    <li class="breadcrumb-item active">Manajemen Materi</li>
                </ol>
            </div>
        </div>
    </div>
</div>     
<!-- end page title -->


<div class="row py-2">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body"> 
			    <h1 class="header-title" style="font-family: Poppins; font-size: 25px; font-weight: 300; color: #0E5DC4; ">Manajemen Materi & Quiz</h1>
				<p style="font-family: Poppins; font-size: 17px; font-weight: 200; ">Kelola semua materi dan soal terkait course yang tersedia</p>

			   	<div class="pilihan">
				   	<h2 class="mt-5" style="margin-left: 50vh; color: #0E5DC4; font-family: Poppins; font-size: 35px; font-weight: 500; ">Pilih Course</h2>
				   	<p style="margin-left: 50vh; font-family: Poppins; font-size: 15px;  font-weight: 200; ">Pilih Course yang tersedia dan ingin ditambahkan materi & quiz</p>
			   	</div>
			   	<div style="margin-left: 50vh; width: 25%;">
			   		<form action="{{route('search_materi')}}" method="get">
			   			@csrf
					    <div class="input-group">
					      <div class="input-group-prepend">
						       <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
						       		<i class="fas fa-search"></i>
						       </button>
					      </div>
					      <input type="search" name="search" class="form-control" placeholder="Search" aria-label="Search">
					    </div>
				    </form>
				</div>
				
		        @if(!empty($searchJudul) && count($data) > 0)
					    @foreach($data as $datas)
					        <div class="row text-center pt-5">
					            <div class="col-lg-3">
					                <img src="{{asset('foto_course/'. $datas->gambar)}}" alt="Gambar" width="100" class="float-end">
					            </div>
					            <div class="col-lg-3">
					                <p>{{$datas->judul}}</p>
					                <p>{{$datas->nama_mentor}}</p>
					            </div>
					            <div class="col-lg-2">
					                <p style="margin-left: -15rem;">{{$datas->harga}}</p>
					            </div>
					            <div class="col-lg-2">
					                <p style="margin-left: -22rem;">{{$datas->kategori}}</p>
					            </div>
					            <div class="col-lg-2">
					                <input class="form-check-input" type="radio" name="radioBox" id="flexRadioDefault1" style="margin-left: -30rem;">
					                <label class="form-check-label" for="flexRadioDefault2"></label>
					            </div>
					        </div>
					    @endforeach
					@elseif(empty($searchJudul))
					    <p style="margin-left: 55vh; padding-top:10px;">Anda belum melakukan pencarian judul.</p>
					@else
					    <p style="margin-left: 55vh; padding-top:10px;">Tidak ada data yang cocok dengan pencarian judul.</p>
					@endif
					    

			</div>
		</div> <!-- end card-->
	</div> <!-- end col-->
</div>

<!-- end row-->
@endsection