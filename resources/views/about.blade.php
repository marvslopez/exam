@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Table') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="card">
                        <div class="card-body p-0">
                                {{$employee}}
                            <table class="table table-bordered table-striped">
                                <thead >
                                    <tr>
                                        <th>ID</th>
                                        <th>Fisrt Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Courty</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th>Hired Date</th>
                                        <th>Department</th>
                                        <th>Division</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->fname }}</td>
                                        <td>{{ $data->mname }}</td>
                                        <td>{{ $data->lname }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->country }}</td>
                                        <td>{{ $data->state }}</td>
                                        <td>{{ $data->city }}</td>
                                        <td>{{ $data->zip }}</td>
                                        <td>{{ $data->age }}</td>
                                        <td>{{ $data->bday }}</td>
                                        <td>{{ $data->dhired }}</td>
                                        <td>{{ $data->dept }}</td>
                                        <td>{{ $data->div }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                       
                    </div>

    </div>
    <!-- /.content -->
@endsection