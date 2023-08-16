@extends('user.master')
@section('course')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Course</a></li>
                    <li class="breadcrumb-item active">Task & Materi</li>
                </ol>
            </div>
            <h4 class="page-title">Belajar MySQL</h4>
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
<!-- start chat users-->
<div class="col-xl-4 col-lg-4">
    <div class="card">
        <div class="card-body" style="min-height:100vh;">

            <!-- users -->
            <div class="row">
                <div class="col">
                    <div data-simplebar style="max-height: 375px;">
                      <div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <div id="sidebar-menu">
                                <div class="judul_course">
                                    <i class="icon-book-open" style="color: #007c9b;"></i>
                                    <span> Task dan Materi Belajar </span>
                                </div>

                                <ul id="side-menu" class="mt-4">
                                @foreach($datas as $index => $course) 
                                    <li>
                                        <a href="#sidebarDashboards{{$course->id}}" data-bs-toggle="collapse" style="border-bottom: 1px solid #B3B3B3;">
                                            <span class="menu-arrow"></span>
                                            <span class="intro fs-4"> {{$course->judul_bab}}</span>
                                        </a>
                                        <div class="collapse" id="sidebarDashboards{{$course->id}}">
                                            <ol class="nav-second-level">
                                                @foreach($datas as $quiz)
                                                    <li>
                                                        <a class="navbar-light" id="custom-v-pills-billing-tab" data-bs-toggle="pill" href="#custom-v-pills-billing" role="tab" aria-controls="custom-v-pills-billing" aria-selected="true" style="color: #000;">{{$quiz->judul_quiz}}</a>
                                                        <div class="form-check float-end" style="margin-top:-30px;">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ol>
                                        </div>
                                    </li>
                                @endforeach
                                </ul>

                           
                                    
                            </div>  
                       </div>
                    </div>
               
                </div>
                <!-- End col -->
            </div>                                        
           
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>


<!-- chat area -->
<div class="col-xl-8 col-lg-4">
        <div class="card" style="height:100vh;">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="custom-v-pills-billing" role="tabpanel" aria-labelledby="custom-v-pills-billing-tab">
                    <div class="card-body">
                        <div class="ratio ratio-21x9 mb-4">
                            <iframe src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                        </div>
                        <ul class="nav nav-bordered">
                            <li class="nav-item course_right">
                                <a href="#deskripsi" data-bs-toggle="tab" class="nav-link active">
                                    Deskripsi
                                </a>
                            </li>
                            
                            <li class="nav-item course_right">
                                <a href="#mentor" data-bs-toggle="tab" class="nav-link">
                                    Mentor
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="deskripsi">
                                <p>{{$data->deskripsi_course}}</p>
                            </div>
                            
                            <div class="tab-pane" id="mentor">
                                 <div class="card-body">
                                    <div class="col-md-4">
                                        <img src="{{asset('foto_course/'. $data->gambar)}}" alt="image" class="img-fluid avatar-lg rounded-circle me-2"/>
                                        <span style="font-family: 'Poppins';  font-weight: 500; font-size: 25px; line-height: 18px; color:#000;">{{$data->nama_mentor}}</span>
                                        <span class="ui d-block">{{$data->judul}}</span>
                                       
                                    </div>
                                    <div class="col-md-12 p-2">
                                         <p>{{$data->deskripsi_mentor}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
       
        </div>
    </div> <!-- end col -->
          
                                    
    </div> <!-- end card -->
</div>
<!-- end chat area-->

</div> <!-- end row-->
      
@endsection