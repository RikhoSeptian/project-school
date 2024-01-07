@extends('layouts.admin')

@section('content')
    
<div>
    <div>
        <div class="row">
            <div class="col-md-12">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3>Mata Kuliah
                            <a href="{{ url('admin/matkul/create') }}" class="btn btn-primary btn-sm float-end">Add
                                Mata Kuliah</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>SKS</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($matkul as $mk)
                                    <tr>
                                        <td>{{ $mk->id }}</td>
                                        <td>{{ $mk->name }}</td>
                                        <td>{{ $mk->sks }}</td>
                                        <td>{{ $mk->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                        <td>
                                            <a href="{{ url('admin/matkul/' . $mk->id . '/edit') }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ url('admin/matkul/'.$mk->id.'/delete')}}" onclick="return confirm('Are you sure, you want to delete this data?')" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $matkul->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection