@extends('templates.default')

@section ('content')
    <div class="row">
        <div class="col-lg-5">
            <!-- User Infromation and Statuses -->
            @include('user.partials.userblock')
            <hr class="m-l-50">
        </div>
        <div class="col-lg-4 col-lg-offset-3">
            <!-- Friends, & Friend Requests -->
        </div>
    </div>
@stop