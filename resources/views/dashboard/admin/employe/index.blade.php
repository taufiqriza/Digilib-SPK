@extends('dashboard.master')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">E-DDC </br> <span style="color:#0093FF" class="small">Electronic-Dewey Decimal Classification</span></h1>
  </div>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header font-weight-bold text-primary">List Subjek
                <a href="{{route('employe.create')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus-square"></i> Tambah Subjek</a></a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-bordered" id="data" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Subjek</th>
                                    <!-- <th>Gender</th> -->
                                    <th>Kampus</th>
                                    <th>Data Input</th>
                                    <th>Jenis</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employes as $index => $employe)
                                <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$employe->full_name}}</td>
                                <!-- <td>{{$employe->gender}}</td> -->
                                <td>{{$employe->birth_place}}</td>
                                <td>{{$employe->birth_date}}</td>
                                <td>{{$employe->address}}</td>
                                <td>{{$employe->position}}</td>
                                <td>
                                <a href="{{route('employe.show',['id'=>$employe->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-th-list"></i></a>
                                    <a href="/dashboard/employe/{{$employe->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="/dashboard/employe/{{$employe->id}}/delete" method="post" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger float" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></button>
                                      </form>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script src="{{asset('sbadmin2\vendor\datatables\jquery.dataTables.js')}}"></script>
<script src="{{asset('sbadmin2\vendor\datatables\dataTables.bootstrap4.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#data').DataTable();
} );
</script>
@endpush