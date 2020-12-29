@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<div class="container">
    <form action="/admin/user/{{ Auth::user()->id }}" method="POST">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h1 class="mb-5">Mettre à jour votre profil</h1>
        <div class="form-group w-25">
            <label for="exampleInputPassword1">Nom</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group w-25">
            <label for="exampleInputPassword1">E-mail</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group w-25">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                value="{{ $user->password }}">
        </div>

        {{-- <div class="form-group">

            <select class="form-control" name="role_id">
                @foreach ($roles as $i)

                    <option value="{{ $i->id }}">{{ $i->name }}</option>

        @endforeach
        </select>
</div> --}}

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop