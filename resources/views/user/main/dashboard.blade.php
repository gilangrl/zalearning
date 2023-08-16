@extends('user.master')


@section('dashboard')

<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        margin-top:20vh;
    }

    .card {
        cursor: pointer;
    }
</style>



<div class="row" style="background: #0E5DC4; margin-top:5rem; border-radius: 5px; padding: 20px 0px;">
    <div class="col-sm-6">
        
        <h4 class="title">Hi,Selamat Datang Kembali {{Auth::user()->name}}</h4>
        <p class="title1">Kamu telah menyelesaikan <b>65%</b> dari total pembelajaran di e-course kamu. Keep it up and improve your progress!</p>
    </div>
    <div class="col-sm-5">
        <img src="{{asset('../assets/images/lingkaran.png')}}" alt="" width="35%" style="opacity: 1;">
        <img src="{{asset('../assets/images/lingkaran.png')}}" width="35%" alt="" style="opacity: 0.4; margin-left: -20%;">
        <img src="{{asset('../assets/images/lingkaran.png')}}" width="35%" alt="" style="opacity: 0.3; margin-left: -20%;">
        <img src="{{asset('../assets/images/saly.png')}}"  alt="" style="width: 20rem; margin-left: -15%; margin-top: -7rem;">

    </div>
</div>     
<!-- end page title --> 
<div style="padding-top:5rem;">
    <h1  class="judul" >Program kelas kamu</h1>
</div>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="false">
    <!-- Slides -->
    <div class="carousel-inner">
        
        <!-- membagi data dengan ukuran potongan 3 didalam slider -->
        @php
        $chunkedData = $data->chunk(3);
        @endphp
        
        @foreach($chunkedData as $index => $chunk)
        <div class="carousel-item @if($index === 0) active @endif">
            <div class="row pt-2">
                @foreach($chunk as $dat)
                <div class="col-md-6 col-xl-4">
                    <a href="{{route('showDashboard', ['id' => $dat->id]) }}" class="card">
                        <img class="card-img-top img-fluid" src="{{asset('foto_course/'. $dat->gambar)}}" alt="Card image cap">
                        <div class="card-body">
                            <h1 class="desain card-title">{{$dat->judul}}</h1>
                            <div class="col-md-4">
                                <img src="../assets/images/users/user-7.jpg" alt="image" class="img-fluid avatar-xs rounded-circle me-2"/>
                                <span style="font-family: 'Poppins'; font-style: normal; font-weight: 500; font-size: 15px; line-height: 18px; color:#000;">{{$dat->nama_mentor}}</span>
                            </div>
                        </div>
    
                        <div class="mb-4 p-3">
                            <h6 class="text-muted progres">Proggres kelas <span class="float-end">45%</span></h6>
                            <div class="progress progress-xs ">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
  
    <!-- Navigation buttons -->
    <div class="carousel-control-wrapper">
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
@endsection
