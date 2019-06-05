@auth
    <h4>Você está logado! </h4>
    <p>User id: {{Auth::user()->id}}</p>
    <p>Usuário: {{Auth::user()->name }}</p>
    <p>Email: {{Auth::user()->email }}</p>    
@endauth

@guest
    <h4>Você não está logado! </h4>

@endguest