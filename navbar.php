<link rel="stylesheet" href="styles.css">

<!-- Barra Principal -->
<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid my-container-barra">

      <!-- Parte principal da barra -->
      <a class="navbar-brand" href="#">Produto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Parte secundaria da barra -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- Parte "Home" da barra -->
          <li class="nav-item">
            <?php if($pg_atual == 'home'): ?>
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            <?php else: ?>
              <a class="nav-link" href="#">Home</a>
            <?php endif; ?>
          </li>
          
          <!-- Parte "Cadastro de Produto" da barra -->
          <li class="nav-item">
            <?php if($pg_atual == 'formulario'): ?>
              <a class="nav-link active" aria-current="page" href="#">Cadastro de Produto</a>
            <?php else: ?>
              <a class="nav-link" href="novo.php">Cadastro de Produto</a>
            <?php endif; ?>
          </li>
          
          <!-- Parte "Produtos Cadastrados" da barra -->
          <li class="nav-item">
            <?php if($pg_atual == 'mostra'): ?>
              <a class="nav-link active" aria-current="page" href="#">Produtos Cadastrados</a>
            <?php else: ?>
              <a class="nav-link" href="mostra.php">Produtos Cadastrados</a>
            <?php endif; ?>
          </li>

          <!-- Parte "Limpar Produtos" da barra -->
          <li class="nav-item">
            <?php if($pg_atual == 'limpar'): ?>
              <a class="nav-link active" aria-current="page" href="#">Limpar Produtos</a>
            <?php else: ?>
              <a class="nav-link" href="limpar.php">Limpar Produtos</a>
            <?php endif; ?>
          </li>
        
        </ul>
      </div>
    </div>
  </nav>