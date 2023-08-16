@extends('admin.master')
@section('payment')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Payment</a></li>
                    <li class="breadcrumb-item active">Riwayat Pembayaran</li>
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
			    <h2 class="header-title">Riwayat Pembayaran</h2>
			    

			    <table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id" data-page-list="[5, 10, 20]"
			        data-page-size="5" data-pagination="false" data-show-pagination-switch="true" class="">
			        <thead class="" style="background-color:#0FB3EE;">
			            <tr class="text-white">
			                <th>No</th>
			                <th>Username</th>
			                <th>Programs</th>
			                <th>Tanggal transaksi</th>
			                <th>Metode pembayaran</th>
			                <th>Total</th>
			                <th data-field="user-status" class="text-center">Status</th>
			    
			            </tr>
			        </thead>
			    
			    
			        <tbody>
			            <tr>
			            	<td>1</td>
			                <td>Gilang Romy Lesmana</td>
			                <td>Backend Developer</td>
			                <td>02/11/2023</td>
			                <td>BCA Link</td>
			                <td>Rp.90000</td>
			                <td><span class="badge bg-primary">Lunas</span></td>
			            </tr>

			            <tr>
			            	<td>2</td>
			                <td>Aditya Mahendra</td>
			                <td>UI/UX</td>
			                <td>02/11/2023</td>
			                <td>OVO Points</td>
			                <td>Rp.80000</td>
			                <td><span class="badge bg-danger">Pending</span></td>
			            </tr>

			            <tr>
			            	<td>3</td>
			                <td>Abidin fajar</td>
			                <td>DB Enginner</td>
			                <td>02/11/2023</td>
			                <td>Gopay Points</td>
			                <td>Rp.70000</td>
			                <td><span class="badge bg-primary">Lunas</span></td>
			            </tr>

			            <tr>
			            	<td>4</td>
			                <td>Dani</td>
			                <td>FrontEnd Developer</td>
			                <td>02/11/2023</td>
			                <td>OVO Points</td>
			                <td>Rp.60000</td>
			                 <td><span class="badge bg-danger">Pending</span></td>
			            </tr>
			           
			        </tbody>
			    </table>
			</div>
		</div> <!-- end card-->
	</div> <!-- end col-->
</div>
<!-- end row-->
@endsection