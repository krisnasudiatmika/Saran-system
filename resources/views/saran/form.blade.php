@extends('welcome')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div
                    class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 ">
                    <!-- <div class="login-brand">
                        <img src="./assets/img/logo.png" alt="logo" height="100">
                    </div> -->

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Form Keluhan / Saran</h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/insert" class="needs-validation" novalidate="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="d-block">
                                        Ditujukan Kepada
                                      
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="division" class="control-label">Pilih Tujuan</label>
                                    
                                    <select class="form-control" name="tujuan">
                                        <option value="ketua">Ketua</option>
                                        <option value="devisi">Devisi</option>
                                        <option value="staff">Staff</option>
                                        <option value="personal">Personal</option>
                                        <option value="manajement">Manajemen Kampus</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="other" class="control-label">Nama Devisi / Staff / Personal Terkait</label>
                                    <input id="other" type="text" class="form-control" name="nama_tujuan" tabindex="2">
                                </div>
                                <div class="form-group">
                                    <label for="other" class="control-label">Masukan / Saran</label>
                                    <textarea id="other" type="text" class="form-control" name="pesan" tabindex="2"
                                        style="min-height: 15rem !important" required></textarea>
                                    <div class="invalid-feedback">
                                        Tolong masukkan saran kamu
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="simple-footer">
        Copyright &copy; Primakara 2019 <br />Made with <span style="color: #e25555;">&#9829;</span>
        by PPTI STMIK Primakara
    </footer>
</div>

<!-- Page Specific JS File -->
@endsection