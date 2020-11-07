<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
    <script src="{{ mix('js/app.js') }}" type="text/javascript" defer></script>
    <title>Dashboards</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{!!asset('asset/icon.ico')!!}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!!asset('css/custom-dashboard.css')!!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php $getName = session()->get('name'); $date = Carbon\Carbon::now(); $yearcurrent = Date('Y'); $time=Date('H:i');
        if($time>'05:30' && $time<'10:00'){
            $salam = 'Morning';
        } elseif($time>='10:00' && $time < '15:00'){
            $salam='Noon';
        }elseif($time>'18:00'){
            $salam='Afternoon';
        }else{
            $salam='Night';
        }?>
    <div id="App">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
                <h5 class="my-0 mr-md-auto font-weight-normal"><img class="logonav"
                        src="{!!asset('asset/logo-nav.png')!!}" alt=""></h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <router-link to="/admin/home" class="p-2 text-dark">Home</router-link>
                    <router-link to="/admin/your-sites" class="p-2 text-dark">Your Sites
                    </router-link>
                    <router-link to="/admin/account" class="p-2 text-dark">Account</router-link>
                    <a href="/logout" class="p-2 text-dark">Logout</a>
                </nav>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Hello {{$getName}}, Good {{$salam}}</h4>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </div>

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
