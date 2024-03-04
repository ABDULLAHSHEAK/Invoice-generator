<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <style>
        h5 {
            font-size: 15px !important;
        }

        hr {
            margin: 2px;
        }
    </style>
</head>

<body>
    <div class="container p-1">
        <!-- Header -->
        <div class="row">
            <div class="col-md-10 col-sm-10">
                <img src="{{ asset('images/name.png') }}" alt="">
            </div>
            <div class="col-md-2 col-sm-2 text-right">
                <img src="{{ asset($data->img_url) }}" alt="Logo" width="100">
            </div>
        </div>

        <!-- Invoice Body -->
        <div class="row mt-1">
            <div class="col-md-12 col-sm-12">
                <h2 class="text-center" mt-2 mb-2>Application Status</h2>
                <div class="row">
                    <div class="col-md-5 col-sm-5 text-center">
                        <div class="item">
                            <span>Application Status </span>
                            <h5>{{ $data->app_status }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Date of your application</span>
                            <h5>{{ $data->status_date }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Reference number</span>
                            <h5>{{ $data->ref_number }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Country</span>
                            <h5>{{ $data->country }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Dist</span>
                            <h5>{{ $data->district }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Tel. Number</span>
                            <h5>{{ $data->number }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Issu date of</span>
                            <h5>{{ $data->issu_date }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Expiration date of</span>
                            <h5>{{ $data->exp_date }}</h5>
                        </div>
                        <hr>
                        <br>
                        <ul>
                            <li style="list-style: none" class="mt-5 text-start" style="border-top: 1px solid">Signature
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-2 col-sm-2"></div>
                    <div class="col-md-5 col-sm-5 text-center">
                        <div class="item">
                            <span>Name</span>
                            <h5>{{ $data->first_name }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Sure Name</span>
                            <h5>{{ $data->sure_name }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Middle Name or Patronymic</span>
                            <h5>{{ $data->middle_name }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Birth Date</span>
                            <h5>{{ $data->birth_date }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Type</span>
                            <h5>{{ $data->type }}</h5>
                        </div>
                        <hr>
                        <div class="item">
                            <span>Duration</span>
                            <h5>{{ $data->duration }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Entry Times</span>
                            <h5>{{ $data->entry_time }}</h5>
                        </div>
                        <hr>

                        <div class="item">
                            <span>Working validity period</span>
                            <h5>{{ $data->period }}</h5>
                        </div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Footer -->
        <div class="row mt-2">
            <div class="col-md-6 col-sm-6">
                <ul style="padding: 0">
                    <li style="list-style: none">Shop No #52</li>
                    <li style="list-style: none">D.N.C.C. Market (Kaca Bazar)</li>
                    <li style="list-style: none">Gulshan-2, Dhaka-1212</li>
                    <li style="list-style: none">E-mail: goldmenart03@gmail.com</li>
                    <li style="list-style: none">dulalmiah04@gmail.com</li>
                    <li style="list-style: none">Contact: 01822688244, 01911298958</li>
                </ul>
                <!-- Add company address here -->
            </div>
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li style="list-style: none;border-top: 1px solid" class="mt-3 text-end">Authorized
                        Signature
                    </li>
                </ul>
                <!-- Add manager name and signature here -->
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
