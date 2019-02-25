@auth
<h3>Você está logado! </h3>
<p>ID: {{ Auth::user()->id }}</p>
<p>Nome: {{ Auth::user()->name }}</p>
<p>E-mail: {{ Auth::user()->email }}</p>
@endauth

@guest
<h4>você não está logado !!</h4>
@endguest