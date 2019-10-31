<header>
    <nav class="black">
        <div class="nav-wrapper container-fluid">
            <a href="" class="brand-logo"><img src="../assets/images/brand-logo.jpg" alt="" class="responsive-logo"></a>
            <!-- Sidenav trigger -->
            <a href="#" data-target="sidenav-menu" class="sidenav-trigger"><i class="icon-menu"></i></a>
            <!-- Navbar menu -->
            <ul id="nav-movile" class="right hide-on-med-and-down">
                <li><a href="<?php echo Helpers::url('Home','index'); ?>"><i class="icon-home"></i></a></li>


                <li><a href="<?php echo Helpers::url('Notificacion','index'); ?>">
                <i class="icon-notifications"></i></a></li>


                <!-- User drowpdown trigger -->
                <li>
                    <a href="#" class="dropdown-trigger avatar-trigger" data-target="user-dropdown">
                        <i class="icon-arrow_drop_down right"></i>
						<img src="../assets/images/manager.png" alt="" class="avatar">
                    </a>
                </li>
                <!-- User dropdown trigger -->
                <ul class="dropdown-content" id="user-dropdown">
		        	<li><a href="<?php echo Helpers::url('Home','account'); ?>"><i class="icon-account_box"></i>Account</a></li>
		        	<li><a href="<?php echo Helpers::url('Home','settings'); ?>"><i class="icon-settings"></i>Settings</a></li>
		        	<li class="divider"></li>
		        	<li><a href="<?php echo Helpers::url('Auth','logout'); ?>"><i class="icon-exit_to_app"></i>Logout</a></li>
		        </ul>
            </ul>
        </div>
        <!-- Sidenav menu -->
        <ul class="sidenav sidenav-fixed show-on-large" id="sidenav-menu">
            <li><a href="" class="logo-container">IA2</a></li>
            <li><a href="#!" class="waves-effect waves-black"><i class="icon-person left"></i>username1234</a></li>
            <li class="divider"></li>
            <li class="hide-on-large-only"><a href="<?php echo Helpers::url('Home','index'); ?>" class="waves-effect waves-black"><i class="icon-home left"></i>Home</a></li>
            <li class="hide-on-large-only"><a href="<?php echo Helpers::url('Home','account'); ?>"><i class="icon-account_box"></i> Account</a></li>
            <li class="hide-on-large-only"><a href="<?php echo Helpers::url('Notificacion','index'); ?>"><i class="icon-notifications"></i>Notifications</a></li>
            <li class="hide-on-large-only"><a href="<?php echo Helpers::url('Home','settings'); ?>"><i class="icon-settings"></i>Settings</a></li>
            <li class="hide-on-large-only"><a href="<?php echo Helpers::url('Auth','logout'); ?>"><i class="icon-exit_to_app"></i>Logout</a></li>
            <li class="divider hide-on-large-only"></li>
            <li><a href="#!" class="subheader"><i class="icon-dashboard left"></i>Módulos:</a></li>
            <li><a href="<?php echo Helpers::url('Usuario','index'); ?>"><i class="icon-group_add left"></i>Gestionar Usuarios</a></li>
            <li><a href="<?php echo Helpers::url('Producto','index'); ?>"><i class="icon-loyalty left"></i>Gestionar Productos T.</a></li>
            <li><a href="<?php echo Helpers::url('Cliente','index'); ?>"><i class="icon-contact_phone left"></i>Gestionar Clientes</a></li>
            <li><a href="<?php echo Helpers::url('Pedido','index'); ?>"><i class="icon-library_books left"></i>Gestionar Pedidos</a></li>
            <li><a href="<?php echo Helpers::url('Factura','index'); ?>"><i class="icon-event_available left"></i>Facturación de Ventas</a></li>
            <li><a href="<?php echo Helpers::url('Factura','reportesIndex'); ?>"><i class="icon-report left"></i>Gestionar Reportes</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                        <a href="#!" class="collapsible-header"><i class="icon-build left" style="margin-left:15px;"></i>Configuración <i class="icon-arrow_drop_down right"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo Helpers::url('Servicio','index'); ?>"><i class="icon-star left"></i>Gestionar Servicios</a></li>
                                <li><a href="<?php echo Helpers::url('Tela','index'); ?>"><i class="icon-layers left"></i>Gestionar Telas</a></li>
                                <li><a href="<?php echo Helpers::url('Material','index'); ?>"><i class="icon-streetview left"></i>Gestionar Materiales</a></li>
                                <li><a href="<?php echo Helpers::url('Articulo','index'); ?>"><i class="icon-content_cut left"></i>Gestionar Artículos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            
            <li class="divider"></li>
            <li><a href="<?php echo Helpers::url('Seguridad','index'); ?>"><i class="icon-security left"></i>Security</a></li>
            <li><a href="<?php echo Helpers::url('Mantenimiento','index'); ?>"><i class="icon-perm_data_setting left"></i>Mantainance</a></li>            
            <!-- <li><a href=""><i class="icon-event_available left"></i></a></li> -->
        </ul>
    </nav>
</header>