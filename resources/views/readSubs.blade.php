@extends('layouts.adminlayout')

@section('content')

@if(isset($subscribers_emails))
    <div class="row text-center">
        <div position="center">
            <div class="col-md-4">
                <button><a href="/admin">Nazad</a></button>
            </div>
            <div class="col-md-4">
                <ul class="list-group">
                    @foreach($subscribers_emails as $subscribers)
                            <li class="list-group-item">{{ $subscribers->email }}</li>
                            <br />
                    @endforeach 
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endif

@endsection
