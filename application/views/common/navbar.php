<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <a class="navbar-brand" href="#">Controle Financeiro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="basicExampleNav">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('Home') ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Cadastro</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url('Usuario/cadastro') ?>">Usuário</a>
          <a class="dropdown-item" href="#">Conta Bancária</a>
          <a class="dropdown-item" href="#">Parceiros</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Lançamentos</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Contas a Pagar</a>
          <a class="dropdown-item" href="#">Contas a Receber</a>
          <a class="dropdown-item" href="#">Fluxo de Caixa</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Relatórios</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Lançamentos por Período</a>
          <a class="dropdown-item" href="#">Resumo Mensal</a>
          <a class="dropdown-item" href="#">Resumo Anual</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
