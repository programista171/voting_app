<nav>
	<ul>
		<li><a href="/">Strona główna</a></li>
		<li><a href="vote">Zagłosuj</a></li>
		<li><a href="results">Pokaż wyniki</a></li>
@auth
		<li><a href="/journalists">Strona główna</a></li>
		<li><a href="">Pokaż wyniki</a></li>
<li><a href='logout'
onclick="event.preventDefault();                                     document.getElementById('logout-form').submit();">
Wyloguj
</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
@endauth
	</ul>
</nav>