@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="col-lg-2 col-md-2">
                <h1>SecuApp</h1>
            </div>
            <div class="col-lg-5 col-md-5 m-auto text-center">
                Poster ou Commenter
            </div>
            <div class="col-lg-4 col-md-4 text-right">
                <div>
                    {{ Auth::user()->name }}  {{ Auth::user()->surname }}
                </div>
                <div>
                    <a href="{{ route('signout') }}" class="text-danger">Deconnexion</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <ul>
                    @foreach ($users as $user)
                        <li>{{ $user->name." ".$user->surname }} </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection