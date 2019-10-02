<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/material-gradient.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/material-components.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/icons/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/owner.css">
    <title>Registrar Usuario - Inversiones A2</title>
</head>
<body>
    <!-- Header -->
    <?php require_once "views/layouts/header.php"; ?>

    <!-- Main Container -->
    <main>
        <div class="container-fluid">
            <div class="col s12 breadcrumb-nav left-align">
                <a href="<?php echo Helpers::url('Home','index'); ?>" class="breadcrumb">Inicio</a>
                <a href="<?php echo Helpers::url('Usuario','index'); ?>" class="breadcrumb">Gestionar Usuarios</a>
                <a href="<?php echo Helpers::url('Usuario','create'); ?>" class="breadcrumb">Registrar Usuarios</a>
            </div>
            <!-- <div class="row">
            </div> -->
        </div>
        <div class="container">
            <form action="" method="post" class="row" id="register">
                <div class="col s12 title center-align">
                    <h4>Registrar Usuario</h4>
                </div>
                <!-- <div class="input-field col s12 m6 xl4">
                    <i class="icon-contact_mail prefix"></i>
                    <input id="cedula_usuario" type="text" name="cedulaUcedula_usuarioscedula_usuariouario" class="validate" minlength="5" maxlength="8" pattern="[0-9]+"  title="Solo puedes usar números." required>
                    <label for="cedula_usuario">Cedula del Usuario</label>
                </div> -->
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-person_pin prefix"></i>
                    <input id="nombre_usuario" type="text" name="nombre_usuario"  class="validate" minlength="3" maxlength="20"  pattern="[A-Za-z]+" title="Solo puedes usar letras." required>
                    <label for="nombre_usuario" >Nombre del Usuario</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-person_pin prefix"></i>
                    <input id="apellido_usuario" type="text" name="apellido_usuario" class="validate"  minlength="3" maxlength="20"  pattern="[A-Za-z]+" title="Solo puedes usar letras." required>
                    <label for="apellido_usuario">Apellido del Usuario</label>
                </div>
                <!-- <div class="input-field col s12 m6 xl4">
                    <i class="icon-phone_android prefix"></i>
                    <input id="telefono_usuario" type="text" name="telefono_usuario" class="validate" minlength="11" maxlength="11" pattern="[0-9]+"  title="Solo puedes usar numeros." required>
                    <label for="telefono_usuario">Teléfono del Usuario</label>
                </div> -->
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-markunread prefix"></i>
                    <input type="email" name="email_usuario" id="email_usuario" class="validate" required>
                    <label for="email_usuario">E-mail del Usuario</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-person_pin prefix"></i>
                    <input type="text" name="nick_usuario" id="nick_usuario" class="validate" required>
                    <label for="nick_usuario">Nick del Usuario</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-beenhere prefix"></i>
                    <input type="password" name="password_usuario" id="password_usuario" class="validate" required>
                    <label for="password_usuario">Password del Usuario</label>
                </div>
                <div class="input-field col s12 m6 xl4">
                    <i class="icon-beenhere prefix"></i>
                    <input type="password" name="repeat_password_usuario" id="repeat_password_usuario" class="validate" required>
                    <label for="repeat_password_usuario">Repetir Password del Usuario</label>
                </div>
                <div class="file-field input-field col s12">
                    <div class="btn purple">
                        <span><i class="icon-photo_size_select_actual right"></i>Imagen</span>
                        <input type="file" name="url_imagen" id="url_imagen">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Elige una imagen">
                    </div>
                </div>
                <div class="input-field col s12">
                    <i class="icon-assistant prefix"></i>
                    <select name="id_rol" id="id_rol">
                        <option value="" disabled selected>Elige un rol</option>
                        <option value="1">Superusuario</option>
                        <option value="2">Administrador</option>
                        <option value="3">Operador</option>
                    </select>
                    <label for="id_rol">Rol</label>
                </div>
                <div class="input-field col s12">
                    
                </div>
                <div class="col s12 center-align">
                    <button type="submit" class="btn a2-green waves-effect waves-light col s12">
                        <i class="icon-add left"></i>                        
                        Registrar
                        <i class="icon-add right"></i>
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once "views/layouts/footer.php"; ?>


    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/materialize.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/plugins/sweetalert.min.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/owner.js"></script>
    <script type="application/javascript" src="<?php echo BASE_URL; ?>assets/js/data/Usuario.js"></script>
</body>
</html>