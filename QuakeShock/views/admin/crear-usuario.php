<div class="lightbox-crear-usuario">
    <div class="conten-titulo-text">
        <h2 class="titulo-form-text">Crea un usuario</h2>
    </div>
    <div class="conten-crear-usuario-form">
        <form id="crear-usuario-form" action="<?= base_url ?>admin/crear_usuario" method="post">
            <div class="conten-registro-rut">
                <label for="txtRut" class="lbl-registro">RUT: </label>
                <input type="text" name="txtRut" id="txtRut" value="" placeholder="19829063-7" required data-parsley-error-message="<p id='error-rut'>Ingresé su rut sin puntos y con guión!</p>">
            </div>
            <div class="conten-registro-nombre">
                <label for="txtNombre" class="lbl-registro">Nombre: </label>
                <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Juan" required data-parsley-error-message="<p id='error-nombre'>Ingresé sus nombres!</p>">
            </div>
            <div class="conten-registro-apellido">
                <label for="txtApellido" class="lbl-registro">Apellidos: </label>
                <input type="text" name="txtApellidos" id="txtApellido" value="" placeholder="Vega" required data-parsley-error-message="<p id='error-apellido'>Ingresé sus apellidos!</p>">
            </div>
            <div class="conten-registro-telefono">
                <label for="txtTelefono" class="lbl-registro">Telefono: </label>
                <input type="text" name="txtTelefono" id="txtTelefono" value="" placeholder="56930310997" required data-parsley-error-message="<p id='error-telefono'>Ingresé sus telefono!</p>">
            </div>
            <div class="conten-registro-correo">
                <label for="txtCorreoRegister" class="lbl-registro">Correo: </label>
                <input type="email" name="txtCorreoRegistro" id="txtCorreoRegistro" value="" placeholder="correo@mail.com" required data-parsley-error-message="<p id='error-email-reg'>Ingresé un correo valido!</p>">
            </div>
            <div class="conten-registro-clave">
                <label for="txtPasswordRegister" class="lbl-registro">Contraseña: </label>
                <input type="password" name="txtClaveRegistro" id="txtClaveRegistro" value="" placeholder="Mínimo 6 caracteres" minlength="6" required data-parsley-error-message="<p id='error-password-reg'>Mínimo 6 caracteres</p>">
            </div>
            <div class="conten-registro-tipo">
                <label class="lbl-registro">Tipo de usuario:  </label>
                <input type="radio" name="radioTipo" value="cliente" id="radio-tipo" id="radioTipo"> <label class="lbl-registro">Cliente </label><input type="radio" name="radioTipo" value="empleado"id="radio-tipo"> <label class="lbl-registro">Empleado </label>
            </div>
            <div class="conten-btn-registro">
                <input type="submit" name="btnRegister" class="btn-registro" value="Crear Usuario">
            </div>
        </form>
    </div>
</div>
