<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Login Dashboard | Canopy Assignment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{!!asset('css/custom.css')!!}">
    <link rel="shortcut icon" href="{!!asset('asset/icon.ico')!!}" type="image/x-icon">
</head>

<body class="text-center">
    <form class="form-signin" action="{{route('login.proses')}}" method="POST">
        {{ csrf_field() }}
        <img class="mb-4" src="{!!asset('asset/icon.png')!!}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Hi There!</h1>
        @if(session('gagal'))
        <div class="alert alert-danger" role="alert">
            {{session('gagal')}}
        </div>
        @endif
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="" class="form-control" placeholder="Username" required autofocus name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Used just for assignment 2020</p>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
