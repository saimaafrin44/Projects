<div class="header navbar navbar-inverse ">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="header-seperation">
            <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                <li class="dropdown">
                    <a href="#main-menu" data-webarch="toggle-left-side">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href="#">
                <img src="<?= base_url('assets/img/logo.png'); ?>" class="logo" alt="" height="41" width="130">
            </a>
            <!-- END LOGO -->
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="pull-left">
                <ul class="nav quick-section">
                    <li class="quicklinks">
                        <a href="javascript:void()" class="" id="layout-condensed-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class="pull-right">
                <ul class="nav quick-section">
                   <li class="dropdown">
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="notifications">
                           <!-- <li>
                               <a href="<?= base_url('admin/account'); ?>"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
                           </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <li class="quicklinks dropdown log-in">
                        <a onclick="adminAccountOpen()" class="pull-right " href="javascript:void(0)" id="user_options">
                            <?= $admin->name; ?>
                            <img  class="img img-circle profile-img" src="<?= base_url('assets/img/default.png'); ?>" alt=""/>
                        </a>
                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user_options">
                            <!-- <li>
                                <a href="<?= base_url('admin/account'); ?>"><i class="fa fa-cog"></i>&nbsp;&nbsp;&nbsp;Account</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="<?= base_url('admin/logout'); ?>"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
          <!-- END CHAT TOGGLER -->
        </div>
    <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<br>
<div class="page-container row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar " id="main-menu">
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
            <!-- BEGIN SIDEBAR MENU -->
            <ul>
                <li <?php if($active == 'Officer') echo 'class=active'; ?>> <a href="<?= base_url('admin'); ?>"><i class="fa fa-home"></i> <span class="title">Investigation Officer</span></a></li>
                <li <?php if($active == 'fir') echo 'class=active'; ?>> <a href="<?= base_url('admin/fir'); ?>"><i class="fa fa-list"></i> <span class="title">Fir</span></a></li>
                <li <?php if($active == 'case') echo 'class=active'; ?>> <a href="<?= base_url('admin/case'); ?>"><i class="fa fa-list"></i> <span class="title">Case</span></a></li>
            </ul>
            <div class="clearfix"></div>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <div class="page-content">