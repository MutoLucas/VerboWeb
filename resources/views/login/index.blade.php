@extends('layouts.default')
@section('title', 'login VerboWeb')

@section('content')

    <div class="bg-white container p-5 position-absolute translate-middle top-50 start-50 rounded-5 shadow"
        style="max-width: 400px ">
        <img src="{{ asset('') }}" alt="" height="40" class="d-block mx-auto mb-4">

        <form action="" class="row g-3" method="POST">
            @csrf
            <div>
                <label for="email" class="form-label fs-5">E-mail</label>
                <input type="text" id="email" name="email" class="form-control form-control-lg bg-light">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg bg-light">
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Entrar</button>
        </form>
    </div>

@endsection
