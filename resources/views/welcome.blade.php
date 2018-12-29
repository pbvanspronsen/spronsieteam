<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            ul {
                list-style-type: none;
                padding: 0;
            }

            ul li a {
                color: #777777;
                font-weight: 800;
            }

            ul li a:hover {
                color: #000;
                text-decoration: none;
            }

            h3.front-title {
                text-align: center;
                font-weight: 800;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TEAM URK
                </div>

                <div class="links">
                    {{--<a href="/admincarcassonne">ADMIN CARCASSONNE</a><br>--}}
                    {{--<a href="/admintoernooischema">ADMIN TOERNOOISCHEMA</a><br>--}}
                    {{--<a href="/scorestoevoegen">ADMIN SCORES TOEVOEGEN</a><br>--}}
                    {{--<a href="/dashboard">ADMIN DASHBOARD</a><br><br>--}}
                    <div class="col-3 float-left">
                        <h3 class="front-title">999 Games</h3>
                        <ul>
                    <li><a href="/overons">OVER ONS</a></li>
                            <li><a href="/image-gallery">FOTO ALBUM</a></li>
                            <li><a href="/contact">CONTACT</a></li>
                        </ul>
                    </div>

                    {{--<a href="/registratievoltooid">REGISTRATIE VOLTOOID</a><br>--}}
                    {{--<a href="/ranglijst">RANGLIJST</a><br>--}}
                    <div class="col-3  float-left">
                        <h3 class="front-title">Spelers</h3>
                        <ul>
                            <li><a href="/algemeneranglijst2019">ALGEMENE RANGLIJST 2019</a></li>
                        </ul>
                    </div>

                    <div class="col-3  float-left">
                        <h3 class="front-title">Toernooien</h3>
                        <ul>
                            <li><a href="/carcassonne2019">CARCASSONNE 2019</a></li>
                        </ul>
                    </div>

                    <div class="col-3  float-left">
                        <h3 class="front-title">Overig</h3>
                        <ul>
                            <li><a href="/algemenevoorwaarden">ALGEMENE VOORWAARDEN</a></li>
                            <li><a href="/toernooiregels">TOERNOOI REGELS</a></li>
                        </ul>
                    </div>
                    {{--<a href="/toernooischema">TOERNOOISCHEMA</a><br>--}}
                    {{--<a href="/inschrijven">INSCHRIJVEN</a>--}}
                </div>

        </div>

                <!-- Placed at the end of the document so the pages load faster -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
