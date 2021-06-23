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
                        <h3>Valider un sujet</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/topic-update/{{$topics->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                      <label>Sujet</label>
                                      <input type="text" name="title" value="{{$topics->title}}" class="form-control">
                                    </div>
                                    
                                      <div class="form-group">
                                        <label>Select Status</label>
                                        <select name="isvalidated" class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="1">Accepté</option>
                                            <option value="2">Réfusé</option>
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
