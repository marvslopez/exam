@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Add Employee Form -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Employee Info') }}</div>

                    <div class="card-body" style="background-color: #f2f2f2;">
                        <form action = "{{url('employee/'.$employee_edit -> id'/edit')}}" method="POST">
                         @csrf
                         @method('PUT')
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" value ="{{$employee_edit -> fname}}" class="form-control" id="fname" name="fname"  placeholder="Enter first name">
                                
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="lname" name = "lname" value ="{{$employee_edit -> lname}}" placeholder="Enter last name">
                            </div>

                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" value ="{{$employee_edit -> mname}}" id="mname" name = "mname" placeholder="Enter middle name">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" value ="{{$employee_edit -> address}}"  id="address" name="address" placeholder="Enter address">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select class="form-control" id="country" name="country"
                                value ="{{$employee_edit -> country}}" > 
                                  
                                    <option selected="selected">Select Country</option>
                    <option value="Alaska">Alaska</option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                                    <!-- Add options for countries -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control" id="state" name = "state" value ="{{$employee_edit -> state}}" >
                                    <option value="">Select State</option>
                                    <!-- Add options for states -->
                                    <option value="Alaska">Alaska</option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <select class="form-control" id="city" name="city"value ="{{$employee_edit -> city}}">
                                    <option value="">Select City</option>
                                    <!-- Add options for cities -->
                                    <option value="Alaska">Alaska</option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="zip">ZIP</label>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter ZIP"value ="{{$employee_edit -> zip}}">
                            </div>

                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age"name="age" placeholder="Enter age" value ="{{$employee_edit -> age}}">
                            </div>

                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" id="bdate" name="bdate" value ="{{$employee_edit -> bdate}}">
                            </div>

                            <div class="form-group">
                                <label for="hired_date">Hired Date</label>
                                <input type="date" class="form-control" id="dhired" name="dhired" value ="{{$employee_edit -> dhired}}">
                            </div>

                            <div class="form-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="dept" name="dept"value ="{{$employee_edit -> dept}}">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->        
                                    <option value="Alaska">Alaska</option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                                </select>
                            </div>  <div class="form-group">
                                <label for="division">division</label>
                                <select class="form-control" id="div" name="div"value ="{{$employee_edit -> div}}">
                                    <option value="general_management">General Management</option>
                                    <!-- Add other department options -->
                                    <option value="Alaska">Alaska</option>
                    <option value="California">California</option>
                    <option value="Delaware">Delaware</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Washington">Washington</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection