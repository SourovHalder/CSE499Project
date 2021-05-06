<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyAccount</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">



    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->

                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">My Account</h1>
                            </div>

                            @if(Session::has('success_message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              {{Session::get('success_message')}}
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif
                            <form id="accountForm" action="{{ url('/account')}}" method="post"> @csrf
                           
                                <div class="form-group row">
                                   <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="firstName" name="firstName" :value="old('firstName')" placeholder="Enter Name" value="{{ $userDetails['firstName' ]}}"required autofocus />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="lastName" name="lastName" :value="old('lastName')" placeholder= placeholder="Enter Name" value="{{ $userDetails['lastName' ]}}" required autofocus />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="userName" name="userName" :value="old('userName')" placeholder= placeholder="Enter Name" value="{{ $userDetails['userName' ]}}" required >
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email" name="email" :value="old('email')" placeholder= placeholder="Enter Name" value="{{ $userDetails['email' ]}}" readonly="" required >
                
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="age" name="age" :value="old('age')" placeholder= placeholder="Enter Name" value="{{ $userDetails['age' ]}}" required >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="address" name="address" :value="old('address')" placeholder= placeholder="Enter Name" value="{{ $userDetails['address' ]}}" required >
                              </div>
                              <div class="form-group">
                                  <input type="text" class="form-control form-control-user" id="phone" name="phone" :value="old('phone')" placeholder= placeholder="Enter Name" value="{{ $userDetails['phone' ]}}" required >
                              </div>
                               
                                <x-button class="btn btn-primary btn-user btn-block">
                                    {{ __('Update') }}
                                </x-button>
                                <hr>
                            </form>
                            <hr>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
