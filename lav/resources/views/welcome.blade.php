<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Memasukan jenis font secara online -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Permanent+Marker|Raleway" rel="stylesheet"> 

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style> 
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            

            body {
                font-family: 'Raleway', sans-serif;
            }

            .navbar {
                background-color: transparent;
                background: transparent;
                border-color: transparent;

            }

            .btn {
                background-color: white;
                background: white;
                margin: 15px;
                height: 50px;
                width: 50px;
                border-radius: 50%;
                border: 1px;
                border-style: solid;
                border-color: #E84A5F;
            }

            .fa-bars {
                color: #E84A5F;
            }

            .dropdown-item1, .dropdown-item2, .dropdown-item3 {
            color: #E84A5F;
            }

            .navbar-brand {
                margin: 15px;
            }

            .name-plate {
                color: #E84A5F;;
            }

            .welcome-page {
                background: #2A363B;
                padding-bottom: 10px;
            }

            .splash-hi {
                margin-top: 0;
                text-align: center;
                color: #FECEA8;
                padding-top: 10px;
                font-size: 40px;
            }

            .splash-name {
                text-align: center;
                color: #FECEA8;
                font-size: 100px
            }

            .introduction {
                text-align: center;
                color: #99B898;
                font-size: 25px;
            }

            .sell1 {
                text-align: center;
                color: #FF847C;
                font-size: 40px;
            }

            .story {
                text-align: center;
                color: #E84A5F;
                font-size: 120px;
            }

            .codepen {
                background: #99B898;

            }

            
        </style>
    </head>
    <body>
    <!--- Bagian tampilan body --->
        <div class="welcome-page"><!--div memanggil class css background-page untuk backgroun dan padding-->
          <h3 class="splash-hi">hi, i am</h3><!-- class untuk memngatur text hi-->
          <h1 class="splash-name">Fahmi Nur Baihaqi</h1><!-- class untuk memngatur text nama-->
          <h5 class="introduction">i am learning to be a creative web developer.</h5><!-- class untuk memngatur text introduction-->
          <br/ >
          <h3 class="sell1">welcome Page<h3><!-- class untuk memngatur text sell1-->
            <h1 class="story">LARAVEL</h1><!-- class untuk memngatur text story-->
        </div>
    </body>
</html>
