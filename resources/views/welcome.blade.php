@extends('layout')

@section('content')
<div class="container-fluid mt-3">
    <div class="col-lg-8 text-center m-auto">
        <div class="col-lg-5 col-md-5 m-auto">
            <h1>SecuApp</h1>
        </div>
    </div>
    <div class="col-lg-6 col-md-7 ml-auto mt-2">
        <h3>Connexion</h3>
        <form action="{{ route('login') }}" method="post" class="form-inline row">
            {{ csrf_field() }}
            <div class="col-4 m-auto">
                <input type="text" name="lgusername" id="lgusername" class="form-control" placeholder="Nom d'utilisater">
            </div>
            <div class="col-4 m-auto">
                <input type="password" name="lgpassword" id="lgpassword" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="col-3 m-auto">
                <button type="submit" class="btn btn-success">Connexion</button>
            </div>
        </form>
    </div>

    <div class="col-lg-6 col-md-7 ml-auto mt-3">
        <h3>Inscription</h3>
        <form action="{{ route('signup') }}" method="post" onsubmit="return checkPasswords()">
            {{ csrf_field() }}
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="name" class="form-label">Nom</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="surname" class="form-label">Pr&eacute;nom</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="text" name="surname" id="surname" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="matricule" class="form-label">Matricule</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="text" name="matricule" id="matricule" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="email" class="form-label">Email</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="password" class="form-label">Mot de passe</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-lg-4 col-md-4 m-auto">
                    <label for="confirm" class="form-label">Confirmation</label>
                </div>
                <div class="col-lg-7 col-md-7 m-auto">
                    <input type="password" name="confirm" id="confirm" class="form-control" required>
                </div>
            </div>
            <div class="input-group row m-1">
                <div class="col-6 m-auto">
                    <button type="reset" class="w-100 btn btn-danger">Annuler</button>
                </div>
                <div class="col-6 m-auto">
                    <button type="submit" class="w-100 btn btn-success">Je m'inscris</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection