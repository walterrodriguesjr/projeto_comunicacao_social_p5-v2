
{{-- BARRA DE NAVEGAÇÃO PADRÃO QUE É INCLUÍDA EM TODO O SISTEMA ATRAVÉS DO TEMPLATE --}}
<header>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse" id="navbar">
      <a href="http://10.47.1.20" target="_blank" class="navbar-brand">
        <img src="/img/brasao_pmpr.png" alt="brasao_pmpr">
      </a>
      <div>
        <h2>Polícia Militar do Paraná - Sistema de Comunicação Social</h2>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Eventos</a>
        </li>
        <li class="nav-item">
          <a href="/create" class="nav-link">Criar Eventos</a>
        </li>
        @auth
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">Meus Eventos</a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <a href="/logout" 
              class="nav-link" 
              onclick="event.preventDefault();
              this.closest('form').submit();">
              Sair
            </a>
          </form>
        </li>
        @endauth
        @guest
        <li class="nav-item">
          <a href="/login" class="nav-link">Entrar</a>
        </li>
        <li class="nav-item">
          <a href="/register" class="nav-link">Cadastrar</a>
        </li>
        @endguest
      </ul>
    </div>
  </nav>
</header>
