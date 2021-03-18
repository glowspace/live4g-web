{{--Menu--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-black px-5 shadow">
    <a class="navbar-brand" href="/"><img src="{{asset('/images/live4g-white.png')}}" height="50px"></a>
    <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item my-auto">
                <a class="nav-link" href="/">Kategorie</a>
            </li>
            <li class="nav-item my-auto">
                <a class="nav-link" href="/porad">Pořady</a>
            </li>
            <li class="nav-item my-auto">
                <a class="nav-link" href="/">Živé vysílání</a>
            </li>
        </ul>
        <form action="">
            <div class="p-1 bg-light rounded rounded-pill shadow-sm my-auto">
                <div class="input-group">
                    <input type="search" placeholder="Vyhledat..."class="form-control border-0 bg-transparent">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</nav>
