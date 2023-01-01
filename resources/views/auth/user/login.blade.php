<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>AgenPulsa by BuildWith Mico</title>
</head>

<body>

    <section class="login-user">
        
        <div class="right">
            <img src="{{asset('images/logo1.png')}}" class="logo" alt="">
            <h1 class="text-loginpage2 header-third text-center">
                Bergabung sekarang
            </h1>
            <p class="subheader text-center">
                Karena kalau bukan sekarang, kapan lagi.
            </p>
            <p class="text-center">
                <a class="btn btn-border btn-google-login" href="{{route('user.login.google')}}">
                    <img src="{{asset('images/ic_google.svg')}}" class="icon" alt=""> Sign In with Google
                </a>
            </p>
        </div>
        <div class="left">
            <div class="text-loginpage text-center">
                Bergabung dengan AgenPulsa<br> sekarang untuk membeli pulsa!
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>

</html>