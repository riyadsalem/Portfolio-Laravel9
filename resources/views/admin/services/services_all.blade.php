@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Services All</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Services All Data</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Services Title</th>
                                <th>Services Code</th>
                                <th>Services Price</th>
                                <th>Services Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>

                        @php($i = 1)
                        @foreach($services as $item)
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $item->services_title }}</td>
                                <td>{{ $item->service_code  }}</td>
                                <td>{{ $item -> selling_price}}$</td>
                                <td><img src="{{ asset($item->services_image) }}" alt="" style="width:60px; height:60px"></td>
                                <td>
                                    <a href="{{ route('edit.service',$item->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('delete.service',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete" ><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection