@extends('layouts.app')

@section('title', 'Featured Products')



@section('content')

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About Us </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <section>
            <div class="image">
                <img src="https://cdn.pixabay.com/photo/2017/08/26/23/37/business-2684758__340.png">
            </div>

            <div class="content">
                <h2>About Us</h2>
                <span>
                    <!-- line here -->
                </span>
                <p>I specialize in PHP backend development, setting up PHP infrastructure, integration and automation,
                    working with web frameworks Symfony and Laravel.

                    .</p>
                <ul class="links">
                    <li><a href="#">work</a></li>
                    <div class="vertical-line"></div>
                    <li><a href="#">service</a></li>
                    <div class="vertical-line"></div>
                    <li><a href="#">contact</a></li>
                </ul>
                <ul class="icons">
                    <li>
                        <i class="fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class="fa fa-facebook"></i>
                    </li>

                    <li>
                        <i class="fa fa-pinterest"></i>
                    </li>
                </ul>
            </div>
        </section><br><br>
        <div class="credit">Made with <span style="color:tomato">❤</span> by Alaa Ali</a></div>
    </body>

    </html>

@endsection
