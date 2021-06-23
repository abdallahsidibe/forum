 @extends('layouts.master')


@section('title')
    endsection Registered | Web IT
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Role for register</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/role-register-update/{{$users->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                      <label>Name</label>
                                      <input type="text" name="username" value="{{$users->name}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Give Role</label>
                                        <select name="usertype" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="influent">Influent</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>Select Status</label>
                                        <select name="isban" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="0">Activé</option>
                                            <option value="1">Desactivé</option>
                                        </select>
                                      </div>
                                      <button type="submit" class="btn btn-success">Update</button>
                                      <a href="/role-register" class="btn btn-danger">Cancel</a>                  
                                  </form>
                            </div>
                        </div> 
                    </div>
                </div>              
            </div>
        </div>

    </div>


@endsection


@section('scripts')

@endsection
