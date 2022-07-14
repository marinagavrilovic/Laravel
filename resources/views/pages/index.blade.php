
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
</head>
 <body style="background-color: rgb(221, 167, 208) ;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Zakazite nadogradnju trepavica</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/kozmeticar')}}">Kozmeticari</span> </a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<div class="container">
        <h3>Sajt za zakazivanje nadogradnje trepavica</h3>
        <img src="{{asset('/images/lashes.jpg')}}" alt="Slika se ne moze prikazati" height="380" width="700" align="center"/>
		<div class="row"  align="center">
			<div class="col-md-6">
                <br>
				<div id="dream-land" style="color:black" align="left">Šminkanje je velika ženska privilegija koja nam daje priliku da izrazimo sebe na uvek novi način, da istaknemo sve što je lepo na našem licu, a prikrijemo sve ono što smatramo nedostacima. Šminka je beskonačna prilika za kreativnost i igru, i inspiracija. Šminkanje je ono što nam daje dodatno samopouzdanje, medjutim sve više i više se stavlja akcenat na oči i neizbežni detalj lepih, krupnih i gustih trepavica.

                    Usluga profesionalne nadogradnje trepavica se radi najkvalitetnijim proizvodima popularnih brendova. Uz svaki termin rezervisan na ovom sajtu, obraća se posebna pažnja na konsultacije i savetovanje kako bi se pronašla
                    idealna veličina trepavica koje odgovaraju konkretnom obliku lica. Ukoliko je potrebno, pre termina se mogu isprobati različiti proizvodi i klijent može sad napraviti izbor bez moranja da se posluša savet profesionalnog lica. Uronite u svet zavodljivih očiju koje nikoga neće ostaviti ravnodušnim.
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
		</div>
	</div>
</footer>
</body>
</html>
@endsection

