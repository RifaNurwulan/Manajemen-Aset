<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <div class="banner">
        <img class="layer-1" src="{{ asset('assets') }}/images/bg.png">
        <img class="layer-2" src="{{ asset('assets') }}/images/meteor.png">

        <div class="layer-3">
            <h1>Hello &amp; Welcome</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem quam placeat sed similique aspernatur, provident, ea aperiam hic quae natus animi quod, dolor debitis optio deleniti fuga vitae laboriosam sunt.</p>
            <a href="#text">Get Started</a>
        </div>

        <img class="layer-4" src="{{ asset('assets') }}/images/4.png">
        <img class="layer-5" src="{{ asset('assets') }}/images/5.png">
        <img class="layer-3" src="{{ asset('assets') }}/images/6.png">
    </div>
    @yield('content')
    <script type="text/javascript" src="{{ asset('assets') }}/js/main.js"></script>

    <script type="text/javascript">

        let layer_1 = document.querySelector('.layer-1');
        let layer_2 = document.querySelector('.layer-2');
        let layer_3 = document.querySelector('.layer-3');
        let layer_4 = document.querySelector('.layer-4');
        let layer_5 = document.querySelector('.layer-5');

        window.onscroll = function(){
            let Y = window.scrollY;

            layer_1.style.transform = 'translateY('+ Y/1.5 +'px)';
            layer_2.style.transform = 'translateY('+ Y/2 +'px)';
            layer_3.style.transform = 'translateY('+ Y/1.5 +'px)';
            layer_4.style.transform = 'translateY('+ Y/2 +'px)';
            layer_5.style.transform = 'translateY('+ Y/3 +'px)';
        }
    </script>
</body>
</html>