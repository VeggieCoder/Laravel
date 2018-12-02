@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>

        <!-- Default form login -->
        <form class="text-center border border-light p-5">

            <p class="h4 mb-4">Sign in</p>

            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="">Forgot password?</a>
                </div>
            </div>

            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

            <!-- Register -->
            <p>Not a member?
                <a href="">Register</a>
            </p>

            <!-- Social login -->
            <p>or sign in with:</p>

            <a type="button" class="light-blue-text mx-2">
                <i class="fa fa-facebook"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fa fa-twitter"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fa fa-linkedin"></i>
            </a>
            <a type="button" class="light-blue-text mx-2">
                <i class="fa fa-github"></i>
            </a>

        </form>
        <!-- Default form login -->
    </div>


@endsection