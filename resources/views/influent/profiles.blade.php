@extends('layouts.base')
@section('title')
    Dashboard | Web IT
@endsection


@section('content')
    <section class="companies-info">
        <div class="container">
            <div class="company-title">
                <h3>Comptes influents</h3>
            </div>
            <div class="companies-list">
                <div class="row">
                    @foreach ($users as $row)
                        @if ($row->usertype == 'influent')
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="company_profile_info">
                                    <div class="company-up-info">
                                       
                                        <img src="{{ asset('assetss/images/resources/pf-icon1.png') }}" alt="">
                                        <h3>{{ $row->name }}</h3>
                                        <h4>{{ $row->description }}</h4>
                                        <h4>Graphic Designer</h4>
                                        <ul>
                                            <li><a href="#" title="" class="follow">Follow</a></li>
                                            <li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a>
                                            </li>
                                            <li><a href="#" title="" class="hire-us">Hire</a></li>
                                        </ul>
                                    </div>
                                    <a href="{{route('profile.show', $row)}}" title="" class="view-more-pro">View Profile</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
             
                </div>
            </div>
            <div class="process-comm">
                <div class="spinner">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                </div>
            </div>
        </div>
    </section>
    
@endsection


@section('scripts')

@endsection
