@extends('layout.app')

@section('content')
    <nav class="navbar sticky-top shadow-sm navbar-expand-lg navbar-light py-2">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="{{ asset('/images/logo.png') }}" alt="" width="96px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header01"
                aria-controls="header01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="header01">
                <ul class="navbar-nav ms-auto mt-3 mt-lg-0 mb-3 mb-lg-0 me-4">
                    <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Company</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Testimonials</a></li>
                </ul>
                <div><a class="btn mt-3 bg-gradient-primary" href="{{ url('/userLogin') }}">Login</a></div>
            </div>
        </div>
    </nav>

    <section class="pb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <h4 class="text-muted">Search </h4>
                    <p class="lead text-muted">Spotlight on Our Exceptional Client Success</p>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="id">Enter Your Id</label>
                                <input type="text" class="form-control" id="id" placeholder="Ex: 3">
                            </div>
                            <div class="col-md-6">
                                <label for="birthDate">Enter Your Birth Date</label>
                                <input type="date" class="form-control" id="birthDate" placeholder="2/12/2021">
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Search</button>
                    </form>

                    <table class="table" id="tableData">
                        <thead>
                            <tr class="bg-light">
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Birth Date</th>
                                <th>Tel. Number</th>
                                <th>Issu Date</th>
                                <th>Expire Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableList">
                            <tr>
                                <td>2</td>
                                <td>Abdullah</td>
                                <td>Abdullah</td>
                                <td>52/25/54</td>
                                <td>017884515</td>
                                <td>12/20/2020</td>
                                <td>12/20/2020</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="fa text-sm fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <br />
        </div>
    </section>

    <br />


    <footer class="py-2 bg-light">
        <div class=""></div>
        <div class="container">
            <p class="text-center">All rights reserved © Learn with Rabbil (LWR) 2023-2024</p>
        </div>
    </footer>
@endsection
