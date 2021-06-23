@extends('layouts.master')


@section('title')
    Dashboard | Web IT
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sujets de discussion</h4>
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
                                   Titre
                                </th>
                                <th>
                                   Description
                                </th>
                                <th>
                                   Action
                                </th>
                                <th>
                                    Status
                                </th>
                                
                                
                            </thead>
                            <tbody>
                                @foreach ($topics as $row)
                                    <tr>
                                        <td>
                                            {{ $row->id }}
                                        </td>
                                        
                                        <td>
                                            {{ $row->title }}
                                        </td>
                                        <td>
                                            {{ $row->content }}
                                        </td>
                                        
                                        <td>
                                            <a href="/topic-edit/{{$row->id }}" class="btn btn-success">EDITER</a>
                                        </td>
                                        <td>
                                            @if ($row->isvalidated == '0')
                                                <label class="btn btn-warning">A valider</label>
                                            @elseif ($row->isvalidated == '1')
                                                <label class="btn btn-warning" style="color: white"><strong>Accepté</strong>  </label>
                                            @elseif($row->isvalidated == '2')
                                                <label class="px-3 py-2 badge-btn-primary">Réfusé </label>                                                                                          
                                            @endif
                                        </td>
                                       <!-- <td>                                           
                                            <a href="#" class="btn btn-warning">DESACTIVER</a>
                                        </td>-->
                                                                               
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
