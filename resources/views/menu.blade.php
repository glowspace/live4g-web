{{--Menu--}}
<nav class="navbar navbar-expand-lg navbar-light bg-white text-center px-5 shadow">
    <p class="mb-0 mx-auto">Líbí se vám myšlenka projektu Live 4G? <a href="" class="btn-link">Podpořte nás!</a></p>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-black px-lg-5 px-2 shadow">
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
{{--            <li class="nav-item my-auto">--}}
{{--                <a class="nav-link" href="/">Kategorie</a>--}}
{{--            </li>--}}
            <li class="nav-item my-auto">
                <a class="nav-link" href="/porady">Pořady</a>
            </li>
{{--            <li class="nav-item my-auto">--}}
{{--                <a class="nav-link" href="/">Živé vysílání</a>--}}
{{--            </li>--}}
        </ul>
        <form action="{{route('public.search')}}" method="GET">
            <div class="p-1 bg-light rounded rounded-pill shadow-sm my-lg-auto mb-3">
                <div class="input-group">
                    <input type="search" placeholder="Vyhledat..." class="form-control border-0 bg-transparent" name="q">
                    <div class="input-group-append">
                        <button id="button-addon1" type="submit" class="btn btn-link text-primary">
                            <i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <ul class="navbar-nav mr-0 mt-2 mt-lg-0 socials">
            <li class="nav-item my-auto">
                <a class="nav-link" href="https://www.facebook.com/live4gcz"><i class="fab fa-facebook"></i></a>
            </li>
{{--            <li class="nav-item my-auto">--}}
{{--                <a class="nav-link" href="https://www.youtube.com/channel/UCaQ72CWpjrBR1e5Ub6-Mqcg"><i class="fab fa-youtube"></i></a>--}}
{{--            </li>--}}
            <li class="nav-item my-auto">
                <a class="nav-link" href="https://www.instagram.com/live4gcz"><i class="fab fa-instagram"></i></a>
            </li>


        </ul>
    </div>

</nav>
