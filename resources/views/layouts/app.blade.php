<!DOCTYPE html>
<html lang="en">
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <title>Laravel Quickstart - Basic</title>
        
            <!-- Fonts -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
            <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
        
            <!-- Styles -->
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
            
            {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
            <style>
                body {
                    font-family: 'Lato';
                }
                .fa-btn {
                    margin-right: 6px;
                }
                .panel-heading {
                   border-right: 1px solid #ddd;
                }
            </style>
   </head>

<body>
        <br>
        <div class="container">
            <div class="col-sm-offset-2 col-sm-8">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Task List
                        </a>
                        {{-- <div class="collapse" id="navbarToggleExternalContent">
                            <div class="bg-dark p-4">
                            <h5 class="text-white h4">Collapsed content</h5>
                            <span class="text-muted">Toggleable via the navbar brand.</span>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                </div>
            </div>
        </nav>

            {{-- <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                  
                </nav>
            </div> --}}
        

        </div>

        @yield('content')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>

