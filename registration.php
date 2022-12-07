<?php include('header.php'); ?>
<link rel="stylesheet" href="validation/dist/css/bootstrapValidator.css" />

<script type="text/javascript" src="validation/dist/js/bootstrapValidator.js"></script>

<?php
include('form.php');
$frm = new formBuilder;
?>
</div>
<div class="content">
    <div class="wrap">
        <div class="content-top" style="min-height:300px;padding:50px">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Registarse</div>

                    <div class="d-flex">
                        <div class="w-120">
                            <h3 class="mb-8">Regístrate y disfruta de increíbles beneficios</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="process_registration.php" method="post" id="form1">
                            <div class="form-group has-feedback">
                            <label for="name">Nombre</label>
                                <input name="name" type="text" size="25" placeholder="Ingrese su nombre" class="form-control" required>
                                <?php $frm->validate("name", array("required", "label" => "Name", "regexp" => "name"));  ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="name">Edad</label>
                                <input name="age" type="text" size="25" placeholder="Ingrese su edad" class="form-control"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="3" required/>
                                <?php $frm->validate("age", array("required", "label" => "Age", "regexp" => "age"));  ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="name">Genero</label>
                                <select name="gender" class="form-control">
                                    <option value>Genero</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                                <?php $frm->validate("gender", array("required", "label" => "Gender"));  ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="name">Telefono</label>
                                <input name="phone" type="text" size="10" placeholder="Ingrese su numero de telefono" class="form-control" minlength="7" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="10" required/>
                                <?php $frm->validate("phone", array("required", "label" => "Mobile Number", "regexp" => "mobile"));  ?>
                                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                            <label for="name">Correo Electronico</label>
                                <input name="email" type="text" size="25" placeholder="Email" class="form-control" required/>
                                <?php $frm->validate("email", array("required", "label" => "Email", "email"));  ?>
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Ingrese su contraseña" required/>
                                <?php $frm->validate("password", array("required", "label" => "Password", "min" => "7"));  ?>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" required/>
                                <?php $frm->validate("cpassword", array("required", "label" => "Confirm Password", "min" => "7", "identical" => "password Password"));  ?>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
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
<script>
    <?php $frm->applyvalidations("form1"); ?>
</script>