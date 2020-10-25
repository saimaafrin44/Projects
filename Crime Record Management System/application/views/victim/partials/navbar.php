<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= base_url() ?>">CRMS</a>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($active == 'home') echo 'class=active'; ?>><a href="<?= base_url() ?>">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('create/fir') ?>"><i class="fa fa-user"></i> Create FIR</a></li>
        <li><a href="<?= base_url('admin/login') ?>"><i class="fa fa-sign-in"></i> Admin Login</a></li>
      
    </ul>
  </div>
</nav>
