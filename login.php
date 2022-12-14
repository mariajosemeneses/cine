<?php include('header.php'); ?>
</div>
<div class="content">
    <div class="wrap">
        <div class="content-top" style="min-height:300px;padding:50px">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <?php include('msgbox.php'); ?>
                        <h4 class="login-box-msg">Iniciar Sesion</h4>
                        <b><hr></b>
                        <form action="process_login.php" method="post">
                            <div class="form-group has-feedback">
                            <label>Correo Electronico</label>
                                <input name="Email" type="text" size="25" placeholder="Ingrese su email" class="form-control" placeholder="Email" />
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                            <label>Contraseña</label>
                                <input name="Password" type="password" size="25" placeholder="Ingrese su password" class="form-control" placeholder="Password" />
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>

                                <p class="login-box-msg" style="padding-top:20px">No tienes cuenta? <a href="registration.php">Registrarse</a></p>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="clear"></div>

    </div>
    <?php include('footer.php'); ?>
</div>
