@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br><h2>TELKOM </h2>
            </div>
            <div class="pull-right"><br><br>
                <button type="button" class="btn btn-warning" ><a href="/upload">IMPORT EXCEL</a></button>
                <button class="btn btn-danger"><a href="/export">Export Excel</a></button>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Departement</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>IP_Address</th>
          </tr>
        @foreach ($projects as $project)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $project->departement }}</td>
                <td>{{ $project->first_name }}</td>
                <td>{{ $project->last_name }}</td>
                <td>{{ $project->email }}</td>
                <td>{{ $project->gender }}</td>
                <td>{{ $project->ip_address }}</td>
            </tr>
        @endforeach
    </table>

    {!! $projects->links() !!}

@endsection
