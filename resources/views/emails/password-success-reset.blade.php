@extends('admin.core.auth')
@section('content')
    <body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">
                            <div class="card-body p-4">
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-brand">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('build/admin/images/logo-dark.png')}}" alt="" height="22">
                                            </span>
                                        </a>

                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{asset('build/admin/images/logo-light.png')}}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="mt-3 text-center">
                                    <div class="w-100">
                                        <img src="{{asset('build/admin/images/success-1.webp')}}" alt="" style="width: 100px;">
                                    </div>

                                    <h3>Sucesso!</h3>
                                    <p class="text-muted font-14 mt-2">
                                        <strong>Senha alterada com sucesso!</strong> Aguarde enquanto você é redirecionado para a tela de login.
                                    </p>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <script>
            setTimeout(function() {
                window.location.href = '/painel';
            }, 1500);
        </script>
    </body>
@endsection