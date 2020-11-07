<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Dashboards</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{!!asset('asset/icon.ico')!!}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{!!asset('css/custom-dashboard.css')!!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div
            class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <h5 class="my-0 mr-md-auto font-weight-normal"><img class="logonav" src="{!!asset('asset/logo-nav.png')!!}"
                    alt=""></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Home</a>
                <a class="p-2 text-dark" href="#">Your Sites</a>
                <a class="p-2 text-dark" href="#">Account</a>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Hello Bintang, Good Afternoon</h4>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 text-left">
                <h3>Your Sites</h3>
            </div>
            <div class="col-lg-6 text-right">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
        {{-- Dataa --}}
        <div class="row my-5">
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-3">
                <div class="card" style="">
                    <div class="row">
                        <div class="col-md-12 text-center card-site">
                            <img class=""
                                src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search-v2_297x176.jpg"
                                s alt="Card image cap">
                            <h5>Masera EDF</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p class="card-text">
                            Location <br>
                            <span>Semakau, Singapore</span>
                        </p>
                        <p class="card-text">
                            Commencement <br>
                            <span>Aug, 2020</span>
                        </p>
                        <p class="card-text">
                            Person in Charge <br>
                            <span>ABC</span>
                        </p>
                    </div>
                </div>
            </div>
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
