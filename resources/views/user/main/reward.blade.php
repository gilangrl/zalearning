@extends('user.master')

@section('reward')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reward</a></li>
                    <li class="breadcrumb-item active">Certificate</li>
                </ol>
            </div>
        </div>
    </div>
</div>     
<!-- end page title -->
<div class="row pt-4">
	<div class="col-lg-12">
		<div class="card" style="height:100vh;">
			<div class="card-body">
				<h2 class="reward">Reward</h2>
				<p  class="title-reward mb-4">claim sertifikat anda jika anda telah menyelesaikan seluruh ujian di course anda</p>
               	<div class="garis" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
               		<div class="row">
                   		<div class="col-lg-3">
							<p class="premium">Premium Class - UI/UX Design</p>
						</div>
						<div class="col-lg-2">
							<img src="" alt="Gambar">
						</div>
						<div class="col-lg-2">
							<span class="badge bg-success">Selesai</span>
						</div>
						<div class="col-lg-5">
							<a href="" class="btn btn-success float-end" style="border-radius:10px; width:30%;">Download Sertifikat</a>
						</div>
					</div>
					<div class="row pt-2">
						<div class="col-lg-12">
							<a href="" class="btn btn-warning float-end" style="border-radius:10px; width:12%;">Lihat Kelas</a>
						</div>
					</div>
				</div>  
			</div>
		</div>
	</div>
</div>
@endsection
				