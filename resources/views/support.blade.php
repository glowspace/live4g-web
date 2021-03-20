@extends('layout')
@section('content')
    <section>
        <div class="container-fluid px-md-5 my-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="mb-3">Chci podpořit</h2>
                    <p>Toužíme po světě, ve kterém je Ježíš opět důležitou postavou života každého z nás. Kde je víra
                        normální a křesťanství především o živém vztahu s Bohem. Chceme plnit sociální sítě Evangeliem a
                        dávat prostor Ježíšovi, aby si On sám oslovoval další a další srdce.
                    </p>
                    <p>
                        Věříme, že Live 4G je Božím dílem. Nechceme a nemůžeme v tom být sami. Jestli cítíte, že vás Bůh
                        volá k tomu, abyste nás podpořili, budeme vám velmi vděční, když tak učiníte. Máte hned několik
                        možností podpory.</p>

                    <div class="card border-0 bg-light mt-0 py-3 d-md-none d-block"
                         style="box-shadow: 0 2px 18px 0 rgb(0 0 0 / 15%)">
                        <div class="card-content">
                            <div class="card-body">
                                <h2 class="mb-3">Podpořte nás finančně!</h2>
                                <p>Abychom mohli fungovat, potřebujeme podporu i po stránce materiální.</p>
                                <p>Hledáme dárce, kteří by se zapojili v kampani <b>100×100</b>: 100 pravidelných
                                    podporovatelů, kteří každý měsíc přispějí částkou 100 korun, nebo jakoukoliv
                                    jinou.</p>
                                <h5 class="mt-5">V současné době díky Vaší podpoře získáme</h5>
                                <h1><b>{{number_format(config('live4g.donations_monthly'), 0, 0, ' ')}} Kč</b> <span
                                        class="small">za měsíc</span></h1>
                                <div class="progress mt-2 mb-3">
                                    <div class="progress-bar bg-orange"
                                         role="progressbar"
                                         style="width: {{config('live4g.donators_count')}}%;"
                                         aria-valuenow="{{config('live4g.donators_count')}}"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>
                                </div>
                                <p><b>od {{config('live4g.donators_count')}} dárců ze 100 potřebných</b></p>

                                <p class="mt-4">Ale i díky vašim jednorázovým darům můžeme růst a pomáhat budovat Boží
                                    království.
                                    Budeme ti velmi vděční za každý dar v jakékoliv výši.</p>
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('/images/qr_platba.png')}}" width="100%">
                                    </div>
                                    <div class="col-7">
                                        <h4 class="mt-3">Bankovní spojení:</h4>
                                        <h6><b>Live 4G, z. s.</b></h6>
                                        <h6><b>2701934227/2010 (Fio banka)</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="text-orange mt-4">Modli se za nás!</h4>
                    <p>Nechceme, aby toto dílo bylo o nás. Toužíme být Ježíšovýma rukama v tomto světě a konat to,
                        co On
                        považuje za dobré. Proto potřebujeme i tvoji modlitbu. Abychom mohli udržovat plachty
                        napnuté a
                        citlivé na vanutí Ducha Svatého a všichni tak líp a víc žili pro Boha.</p>

                    <h4 class="text-orange mt-4">Dej o nás vědět ostatním!</h4>
                    <p>Znáš někoho, komu by mohlo pomoci něco z naší tvorby? Líbí se ti, co děláme? Budeme rádi,
                        když to budeš sdílet s konkrétními lidmi, ale i na svých sociálních sítích, aby se naše dílo
                        mohlo šířit a oslovovat co nejvíce lidí.
                    </p>

                    <h4 class="text-orange mt-4">Přidej se k nám!</h4>
                    <p>Líbí se ti myšlenka projektu Live 4G? Přemýšlíš, že by ses zapojil? Neboj se nabídnout trochu
                        volného času a své nadání. Budeme rádi za pomoc všeho druhu.</p>
                    <p> Hledáme lidi, se kterými budeme společně nacházet, kudy vede cesta. Hledáme tvůrce obsahu,
                        hudebníky, kreativce, scénáristy, kameramany, střihače, marketéry, grafiky, copywritery,
                        webmastery, pomocníky, lidi, kteří to všechno budou organizovat, kteří to budou podporovat…
                        A nejenom, že hledáme ty, kteří “už něco umí”, ale také ty, kteří chtějí vstoupit do něčeho
                        nového – naučit se třeba stříhat nebo cokoliv jiného.</p>
                    <p> Můžeš nabídnout jednorázovou pomoc, nebo dlouhodobou spolupráci, svoje know-how, techniku,
                        čas,
                        ochotu.</p>
                    <p> Můžeš a chceš něco z toho nabídnout? Budeme za tebe opravdu rádi.</p>
                    <p><b>Ozvi se nám na sociálních sítích!</b></p>
                </div>
                <div class="offset-lg-1 col-lg-4 col-6 d-md-block d-none">
                    <div class="card border-0 bg-light mt-0 py-3" style="box-shadow: 0 2px 18px 0 rgb(0 0 0 / 15%)">
                        <div class="card-content">
                            <div class="card-body">
                                <h2 class="mb-3">Podpořte nás finančně!</h2>
                                <p>Abychom mohli fungovat, potřebujeme podporu i po stránce materiální.</p>
                                <p>Hledáme dárce, kteří by se zapojili v kampani <b>100×100</b>: 100 pravidelných
                                    podporovatelů, kteří každý měsíc přispějí částkou 100 korun, nebo jakoukoliv
                                    jinou.</p>
                                <h5 class="mt-5">V současné době díky Vaší podpoře získáme</h5>
                                <h1><b>{{number_format(config('live4g.donations_monthly'), 0, 0, ' ')}} Kč</b> <span
                                        class="small">za měsíc</span></h1>
                                <div class="progress mt-2 mb-3">
                                    <div class="progress-bar bg-orange"
                                         role="progressbar"
                                         style="width: {{config('live4g.donators_count')}}%;"
                                         aria-valuenow="{{config('live4g.donators_count')}}"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                    </div>
                                </div>
                                <p><b>od {{config('live4g.donators_count')}} dárců ze 100 potřebných</b></p>

                                <p class="mt-4">Ale i díky vašim jednorázovým darům můžeme růst a pomáhat budovat
                                    Boží
                                    království.
                                    Budeme ti velmi vděční za každý dar v jakékoliv výši.</p>
                                <div class="row">
                                    <div class="col-5">
                                        <img src="{{asset('/images/qr_platba.png')}}" width="100%">
                                    </div>
                                    <div class="col-7">
                                        <h4 class="mt-3">Bankovní spojení:</h4>
                                        <h6><b>Live 4G, z. s.</b></h6>
                                        <h6><b>2701934227/2010 (Fio banka)</b></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{--                <div class="col-12 mt-5 mb-3">--}}
                {{--                    <h2>Finančně</h2>--}}
                {{--                </div>--}}
                {{--                <div class="col-6">--}}
                {{--                    <p>Abychom mohli fungovat, potřebujeme podporu i po stránce materiální.</p>--}}

                {{--                    <p> Hledáme dárce, kteří by se zapojili v kampani 100×100: 100--}}
                {{--                        pravidelných podporovatelů, kteří každý měsíc přispějí částkou 100 korun, nebo jakoukoliv jinou.--}}
                {{--                    </p>--}}
                {{--                    <p>--}}
                {{--                        Ale i díky vašim jednorázovým darům můžeme růst a pomáhat budovat Boží království. Budeme ti--}}
                {{--                        velmi vděční za každý dar v jakékoliv výši.--}}
                {{--                    </p>--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-4">--}}
                {{--                            <img src="{{asset('/images/qr_platba.png')}}">--}}
                {{--                        </div>--}}
                {{--                        <div class="col-8">--}}
                {{--                            <h3 class="mt-3">Bankovní spojení:</h3>--}}
                {{--                            <h5><b>Live 4G, z. s.</b></h5>--}}
                {{--                            <h5><b>2701934227/2010 (Fio banka)</b></h5>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-6">--}}
                {{--                    --}}{{--                    <h3>Bankovní spojení:</h3>--}}
                {{--                    --}}{{--                    <p><b>Live 4G, z. s.<br>--}}

                {{--                    --}}{{--                            2701934227/2010 (Fio banka)</b></p>--}}
                {{--                    --}}{{--                    <div class="progress">--}}
                {{--                    --}}{{--                        <div class="progress-bar"--}}
                {{--                    --}}{{--                             role="progressbar"--}}
                {{--                    --}}{{--                             style="width: 20%;"--}}
                {{--                    --}}{{--                             aria-valuenow="20"--}}
                {{--                    --}}{{--                             aria-valuemin="0"--}}
                {{--                    --}}{{--                             aria-valuemax="100">20 dárců--}}
                {{--                    --}}{{--                        </div>--}}
                {{--                    --}}{{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 mt-5 mb-3">--}}
                {{--                    <h2>Zapojením</h2>--}}
                {{--                </div>--}}
                {{--                <div class="col-6">--}}
                {{--                    <p>Líbí se ti myšlenka projektu Live 4G? Přemýšlíš, že by ses zapojil? Neboj se nabídnout trochu--}}
                {{--                        volného času a své nadání. Budeme rádi za pomoc všeho druhu.</p>--}}
                {{--                    <p> Hledáme lidi, se kterými budeme společně nacházet, kudy vede cesta. Hledáme tvůrce obsahu,--}}
                {{--                        hudebníky, kreativce, scénáristy, kameramany, střihače, marketéry, grafiky, copywritery,--}}
                {{--                        webmastery, pomocníky, lidi, kteří to všechno budou organizovat, kteří to budou podporovat…--}}
                {{--                    </p>--}}
                {{--                    <p> A nejenom, že hledáme ty, kteří “už něco umí”, ale také ty, kteří chtějí vstoupit do něčeho--}}
                {{--                        nového – naučit se třeba stříhat nebo cokoliv jiného.</p>--}}
                {{--                    <p> Můžeš nabídnout jednorázovou pomoc, nebo dlouhodobou spolupráci, svoje know-how, techniku, čas,--}}
                {{--                        ochotu.</p>--}}
                {{--                    <p> Můžeš a chceš něco z toho nabídnout? Budeme za tebe opravdu rádi.</p>--}}
                {{--                    <p> Ozvi se nám na sociálních sítích!</p>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 mt-5 mb-3">--}}
                {{--                    <h2>Modlitbou</h2>--}}
                {{--                </div>--}}
                {{--                <div class="col-6">--}}
                {{--                    <p>Nechceme, aby toto dílo bylo o nás. Toužíme být Ježíšovýma rukama v tomto světě a konat to, co On--}}
                {{--                        považuje za dobré. Proto potřebujeme i tvoji modlitbu. Abychom mohli udržovat plachty napnuté a--}}
                {{--                        citlivé na vanutí Ducha Svatého a všichni tak líp a víc žili pro Boha.</p>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 mt-5 mb-3">--}}
                {{--                    <h2>Sdílením</h2>--}}
                {{--                </div>--}}
                {{--                <div class="col-6">--}}
                {{--                    <p>Znáš někoho, komu by mohlo pomoci něco z naší tvorby? Líbí se ti, co děláme? Budeme rádi, když to--}}
                {{--                        budeš sdílet s konkrétními lidmi, ale i na svých sociálních sítích, aby se naše dílo mohlo šířit--}}
                {{--                        a oslovovat co nejvíce lidí.--}}
                {{--                    </p>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
