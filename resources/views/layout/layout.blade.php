<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
</head>
<body>


    <nav class="navbarr">
        <div class="content">
            <div class="logo"><a href="#">E-book</a></div>
            <ul class="menu-list">
                <li><a href="#" class="home">Home</a></li>
                <li><a href="/login" class="login">Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="scrollup">
        <a href="#"><i class="fa-solid fa-caret-up fa-xl"></i></a>
    </div>



@yield('content')



<script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbarr");
    const scrollup = document.querySelector(".scrollup");

    window.onscroll = ()=>{
        this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
        this.scrollY > 20 ? scrollup.classList.add("visible") : scrollup.classList.remove("visible");
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>
