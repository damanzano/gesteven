<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/**
 * Formulario de verificación y actualización de datos.
 * @package gui
 */
/**
 * Manejo de sesión
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
if ($_SERVER['SERVER_NAME'] != "http://" . $_SERVER['SERVER_NAME'])
{
  $port = $_SERVER["SERVER_PORT"];
  $ssl_port = "443"; //Change 443 to whatever port you use for https (443 is the default and will work in most cases)
  if ($port != $ssl_port)
  {
    $host = $_SERVER["HTTP_HOST"];
    $uri = $_SERVER["REQUEST_URI"];
    header("Location: https://$host$uri");
  }
}
require_once '../lib/ErrorManager.class.php';
require_once '../class/Evento.php';
require_once '../lib/recaptchalib.php';
$publickey = "6LfBMcoSAAAAAP7TCyXaDAjZNNBhXQN3eNr_BiEX";
session_start();
$_SESSION['sched_conf_id'] = $_GET['sched_conf_id']
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
    <title>Gesti&oacute;n de eventos - Inscripci&oacute;n - Universidad Icesi - Cali, Colombia</title>
    <meta http-equiv="Content-Type" content="text/html;" />
    <script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/localization/messages_es.js" charset="iso-8859-1"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.8.6.custom.min.js"></script>
    <script type="text/JavaScript" src="../js/ajax_inscripcion_nuevo.js" charset="iso-8859-1"></script>
    <script type="text/JavaScript" src="../js/dialogos.js" charset="iso-8859-1"></script>
    <script type="text/javascript">
      var RecaptchaOptions = {
        theme : 'white',
        lang: 'es'
      };
    </script>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" />
    <link rel="stylesheet" href="../css/smoothness/jquery-ui-1.8.6.custom.css" type="text/css" />   
    <style type="text/css">
      #contenido{
        width:100%;
      }
    </style>
  </head>
  <body>
    <?php
    include_once '../gui/dialogos.php';
    ?>
    <div id="wrapper">
      <div id="contenido">
        <?php include_once('../gui/formulario_basico.php'); ?>
      </div>
    </div>
  </body>
</html>