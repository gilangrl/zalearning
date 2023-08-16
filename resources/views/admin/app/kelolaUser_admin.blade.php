@extends('admin.master')
@section('kelolaUser')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Course</a></li>
                    <li class="breadcrumb-item active">Manage User</li>
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
                <h4 class="header-title">Manage User</h4>
                <table data-toggle="table" data-search="true" data-show-refresh="true" data-sort-name="id"  data-pagination="false" data-show-pagination-switch="true" class="table-borderless">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Joined By</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($data as $index => $row)
                        <tr>
                            <td>{{$data->firstItem() + $index }}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{ date('d-m-Y', strtotime($row["created_at"])) }}</td>
                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                            <td>
                                <a href="{{route('deleteKelolaUser', ['id' => $row->id])}}" class="btn btn-danger" data-confirm-delete="true">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="ms-auto" style="margin-right: 20px;">
                {{ $data->links() }}
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
@include('sweetalert::alert')
<!-- end row-->
@endsection