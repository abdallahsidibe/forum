@extends('layouts.master')


@section('title')
    Dashboard | Web IT
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Utilisateurs</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Photo
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Role Utilisateur
                                </th>
                                <th>
                                    Editer
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Supprimer
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    <tr>
                                        <td>
                                            {{ $row->id }}
                                        </td>
                                        <td>
                                            photo
                                        </td>
                                        <td>
                                            {{ $row->name }}
                                        </td>
                                        <td>
                                            {{ $row->email }}
                                        </td>
                                        <td>
                                            -{{ $row->usertype }}
                                        </td>
                                        <td>
                                            <a href="/role-edit/{{$row->id }}" class="btn btn-success">EDITER</a>
                                        </td>
                                       <!-- <td>                                           
                                            <a href="#" class="btn btn-warning">DESACTIVER</a>
                                        </td>-->
                                        <td>
                                            @if ($row->isban == '0')
                                                <label class="btn btn-warning">Activé </label>
                                            @elseif($row->isban == '1')
                                                <label class="px-3 py-2 badge-btn-primary">Désactivé </label>                                                                                          
                                            @endif
                                        </td>
                                        <td>
                                            <form action="/role-delete/{{$row->id }}" method="POST">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger">SUPPRIMER</button>
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
    @endsection


    @section('scripts')

    @endsection
