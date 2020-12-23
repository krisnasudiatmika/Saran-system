@extends('welcome')

@section('content')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div
                    class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="./assets/img/logo.png" alt="logo" height="100">
                    </div>
                   @if(isset($result))
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$result}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                   @endif
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>

                        <div class="card-body">
                            <form id="idForm" method="POST" action="/tes" class="needs-validation" novalidate="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">NIM</label>
                                    <input id="username" type="text" class="form-control" name="username" tabindex="1"
                                        required autofocus>
                                    <div class="invalid-feedback">
                                        Mohon isikan NIM anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                        tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Mohon isikan password anda
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-submit" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="text-center mt-4 mb-3">
                                <a href="/saran" class="text-job text-dark">Login As Guest</a>
                            </div>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Primakara 2019 <br />Made with <span style="color: #e25555;">&#9829;</span>
                        by PPTI STMIK Primakara
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection