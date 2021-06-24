@extends('layouts.master')


@section('title')
    Dashboard | Web IT
@endsection


@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nouvel Enregistrement</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <form action="/save-register" method="POST">
                    {{ csrf_field() }}

                    <div class="modal-body">

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Utilisateurs
                        <button type="button" class="float-right btn btn-primary" data-toggle="modal"
                            data-target="#exampleModal">Ajouter</button>
                    </h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card card-chart">
                                        <div class="card-header">
                                            <h4 class="card-title">Utilisateurs</h4>
                                        </div>
                                        <hr>
                                        <div class="card-body" style="background-color: rgb(119, 119, 184)">
                                           <h2>
                                            {{$user}}
                                           </h2>
                                            <div class="chart-area">
                                                <canvas id="lineChartExample"></canvas>
                                            </div>                                            
                                        </div>                                       
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-chart">
                                        <div class="card-header">
                                            <h4 class="card-title">Publications</h4>
                                        </div>
                                        <hr>                                        
                                        <div class="card-body" style="background-color: pink">
                                          <h2>
                                            {{$pub}}
                                          </h2>
                                            <div class="chart-area">
                                                <canvas id="barChartSimpleGradientsNumbers"></canvas>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-chart">
                                        <div class="card-header">
                                            <h4 class="card-title">Sujets</h4>
                                        </div>
                                        <hr>                                       
                                        <div class="card-body" style="background-color: orange">
                                          <h2>
                                            {{$topic}}
                                          </h2>
                                            <div class="chart-area">
                                                <canvas id="barChartSimpleGradientsNumbers"></canvas>
                                            </div>
                                        </div>                                        
                                    </div>
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
