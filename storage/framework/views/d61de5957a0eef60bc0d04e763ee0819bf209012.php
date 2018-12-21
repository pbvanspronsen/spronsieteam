<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    TEAM URK
                </div>

                <div class="links">
                    <a href="/admincarcassonne">ADMIN CARCASSONNE</a><br>
                    <a href="/admintoernooischema">ADMIN TOERNOOISCHEMA</a><br>
                    <a href="/scorestoevoegen">ADMIN SCORES TOEVOEGEN</a><br>
                    <a href="/dashboard">ADMIN DASHBOARD</a><br><br>
                    <a href="/overons">OVER ONS</a><br>
                    <a href="/fotoalbum">FOTO ALBUM</a><br>
                    <a href="/contact">CONTACT</a><br>
                    <a href="/registratievoltooid">REGISTRATIE VOLTOOID</a><br>
                    <a href="/ranglijst">RANGLIJST</a><br>
                    <a href="/algemeneranglijst2019">ALGEMENE RANGLIJST 2019</a><br>
                    <a href="/toernooiregels">TOERNOOI REGELS</a><br>
                    <a href="/algemenevoorwaarden">ALGEMENE VOORWAARDEN</a><br>
                    <a href="/toernooischema">TOERNOOISCHEMA</a><br>
                    <a href="/carcassonne2019">CARCASSONNE 2019</a><br>
                    <a href="/inschrijven">INSCHRIJVEN</a>
                </div>

        </div>
    </body>
</html>
