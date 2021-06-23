@extends('layouts.app')

@section('title')
    Mon Profil
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="background-color:yellow">
                        <h4>Mon Profil</h4>
                        <hr>
                        <form action="{{url('my-profile-update')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Nom</label>
                                        <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Prenom</label>
                                        <input type="text" name="lastname" class="form-control" value="{{Auth::user()->lastname}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Téléphone</label>
                                        <input type="text" name="phone" class="form-control" value="{{Auth::user()->phone}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email" class="form-control" readonly value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" name="image" class="form-control"> <br>
                                    <img name ="image" src="{{asset('uploads/profile/'.Auth::user()->image)}}" class="w-75" alt="">
                                </div>
                            </div>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
