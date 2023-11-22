
<!-- SIDEBAR -->
<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROUTES['app']['Home'] ?>">
          <i class="nav-icon icon-home"></i> Inicio
        </a>
      </li>
      <?php if($_SESSION['rol_id'] == "1"): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROUTES['app']['GestorUsuario'] ?>">
          <i class="nav-icon icon-people"></i> Gestor de Usuarios
        </a>
      </li>
      <?php endif ?> 
    </ul>
  </nav>
</div>
<!-- SIDEBAR -->