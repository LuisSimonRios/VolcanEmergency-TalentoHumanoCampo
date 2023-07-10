<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Control del Talento Humano en Campo</title>
</head>

<body>
  <section class="talentoH_form">
    <div class="div-logo-salud">
      <img class="logo-salud" src="images/logo_salud.png" alt="Logo-salud">
    </div>
    <h1 class="title">Seguimiento al Talento Humano en Atención Psicosocial en Emergencias</h1>
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="contact-form row">
          <div class="form-field col-lg-6">
            <input id="fecha" class="input-text input-date" type="date" name="fecha"
              value="<?php if(!$enviado && isset($fecha)) echo $fecha ?>">
            <!-- <label for="fecha" class="label">Fecha</label> -->
          </div>
          <div class="form-field col-lg-6">
            <!-- <label for="emergencia" class="label">Tipo de Emergencia:</label> -->
            <select id="emergencia" class="input-text input-select" name="emergencia"
              value="<?php if(!$enviado && isset($emergencia)) echo $emergencia ?>">
              <option value="volvo">Erupción Volcánica</option>
              <!-- <option value="saab">Lorem Ipsum</option>
                            <option value="fiat">Lorem Ipsum</option>
                            <option value="audi">Lorem Ipsum</option> -->
            </select>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="nombre" class="input-text" type="text"
              name="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <label for="nombre" class="label">Nombre Completo</label>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="institucion" class="input-text" type="text"
              name="institucion" value="<?php if(!$enviado && isset($institucion)) echo $institucion ?>">
            <label for="institucion" class="label">Institución</label>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="profesion" class="input-text" type="text"
              name="profesion" value="<?php if(!$enviado && isset($profesion)) echo $profesion ?>">
            <label for="profesion" class="label">Profesión</label>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="celular" class="input-text" type="number"
              name="celular" value="<?php if(!$enviado && isset($celular)) echo $celular ?>">
            <label onkeyup="this.setAttribute('value', this.value);" for="celular" class="label">Celular</label>
          </div>
          <div class="form-field col-lg-12">
            <input onkeyup="this.setAttribute('value', this.value);" id="correo" class="input-text input-correo"
              type="text" name="correo" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <label for="correo" class="label">Correo</label>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="hora-inicio" class="input-text input-time"
              type="time" name="hora-inicio" value="<?php if(!$enviado && isset($hora_inicio)) echo $hora_inicio ?>">
            <label for="hora-inicio" class="label" value="13:30">Hora Inicio</label>
          </div>
          <div class="form-field col-lg-6">
            <input onkeyup="this.setAttribute('value', this.value);" id="hora-final" class="input-text input-time"
              type="time" name="hora-final" value="<?php if(!$enviado && isset($hora_final)) echo $hora_final ?>">
            <label for="hora-final" class="label">Hora Final</label>
          </div>
          <div class="form-field col-lg-12">
            <input onkeyup="this.setAttribute('value', this.value);" id="condicion-fisica-prev" class="input-text"
              type="text" name="condicion-fisica-prev"
              value="<?php if(!$enviado && isset($condicion_fisica_prev)) echo $condicion_fisica_prev ?>">
            <label for="condicion-fisica-prev" class="label">Condición Fisica de Interes y de salud al
              Inicio de Jornada</label>
          </div>
          <div class="form-field col-lg-12">
            <input onkeyup="this.setAttribute('value', this.value);" id="condicion-fisica-post" class="input-text"
              type="text" name="condicion-fisica-post"
              value="<?php if(!$enviado && isset($condicion_fisica_post)) echo $condicion_fisica_post ?>">
            <label for="condicion-fisica-post" class="label">Condición Fisica de Interes y de salud al
              Finalizar Jornada</label>
          </div>
          <div class="form-field col-lg-12">
            <input onkeyup="this.setAttribute('value', this.value);" id="condicion-psico-prev" class="input-text"
              type="text" name="condicion-psico-prev"
              value="<?php if(!$enviado && isset($condicion_psico_prev)) echo $condicion_psico_prev ?>">
            <label for=" condicion-psico-prev" class="label">Condición Psicológica al Inicio de
              Jornada</label>
          </div>
          <div onkeyup="this.setAttribute('value', this.value);" class="form-field col-lg-12">
            <input onkeyup="this.setAttribute('value', this.value);" id="condicion-psico-post" class="input-text"
              type="text" name="condicion-psico-post"
              value="<?php if(!$enviado && isset($condicion_psico_post)) echo $condicion_psico_post ?>">
            <label for="condicion-psico-post" class="label">Condición Psicológica al Finalizar
              Jornada</label>
          </div>
          <!-- Validaciones formulario -->
          <?php if (!empty($errores)): ?>
          <div class="alert error">
            <?php echo $errores; ?>
          </div>
          <?php elseif($enviado): ?>
          <div class="alert success">
            <p>Enviado Correctamente</p>
          </div>
          <?php endif ?>
          <!--  -->
          <div class="form-field col-lg-12 div-submit-btn">
            <input class="submit-btn" type="submit" value="Registrar" name="submit">
          </div>
        </div>
      </form>
    </div>

  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>