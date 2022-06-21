@extends('layouts.public')
@section('title', 'Login')

@section('title')
    Cadastrar
@stop

@section('content')
<div class="login-form-bg h-100" style="background: #303030">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">

                            <a class="text-center" href="{{route('login')}}"> <h4>Klan Team</h4></a>

                            <form class="mt-5 mb-5 login-input">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <button class="btn login-form__btn submit w-100">Cadastrar</button>
                            </form>
                            <p class="mt-5 login-form__footer">Possui uma conta?
                                <a href="{{route('login')}}" class="text-primary">Entre </a> agora.
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
