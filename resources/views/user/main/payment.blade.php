@extends('user.master')

@section('payment')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Payment</a></li>
                    <li class="breadcrumb-item active">History</li>
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
				 <h4 class="header-title mb-4">Payment History</h4>
                    <ul class="nav nav-pills navtab-bg">
                        <li class="nav-item">
                            <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                Semua
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                Lunas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                Pending
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="home1">
                           	<div class="garis" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-danger">Belum Lunas</span><span class="mx-2">Pembayaran belum dilakukan</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-danger float-end" style="border-radius:10px; width:25%;">Lanjutkan transaksi</a>
									</div>
								</div>
							</div>

							<div class="garis mt-2" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-primary">Lunas</span><span class="mx-2">Pembayaran Sukses</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-primary float-end" style="border-radius:10px; width:25%;">Kelas Saya</a>
									</div>
								</div>
							</div>

							<div class="garis mt-2" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-primary">Lunas</span><span class="mx-2">Pembayaran Sukses</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-primary float-end" style="border-radius:10px; width:25%;">Kelas Saya</a>
									</div>
								</div>
							</div>
                        </div>
                        <div class="tab-pane show active" id="profile1">
                            <div class="garis mt-2" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-primary">Lunas</span><span class="mx-2">Pembayaran Sukses</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-primary float-end" style="border-radius:10px; width:25%;">Kelas Saya</a>
									</div>
								</div>
							</div>

							<div class="garis mt-2" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-primary">Lunas</span><span class="mx-2">Pembayaran Sukses</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-primary float-end" style="border-radius:10px; width:25%;">Kelas Saya</a>
									</div>
								</div>
							</div>
                        </div>
                        <div class="tab-pane" id="messages1">
                            <div class="garis" style="border: 2px solid #D9D9D9; border-radius:10px; padding: 50px;">
                           		<div class="row">
	                           		<div class="col-lg-12">
										<p class="premium">Premium Class - UI/UX Design</p>
										<p class="premium1">20 mei 2023</p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<span class="badge bg-danger">Belum Lunas</span><span class="mx-2">Pembayaran belum dilakukan</span>
									</div>
									<div class="col-lg-6">
										<a href="" class="btn btn-danger float-end" style="border-radius:10px; width:25%;">Lanjutkan transaksi</a>
									</div>
								</div>
							</div>
                        </div>
                    </div>
			</div>
		</div>
	</div>
</div>
@endsection
				