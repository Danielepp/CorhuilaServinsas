<?php

define('EMAIL_FOR_REPORTS', 'andres191943@hotmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-metro-green" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Actividad Disposicion Final</h2></div>
	<div class="element-date<?php frmd_add_class("date"); ?>"><label class="title">Fecha</label><input class="large" data-format="yyyy-mm-dd" type="date" name="date" placeholder="yyyy-mm-dd"/></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">Titulo</label><input class="large" type="text" name="input" /></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Observaciones</label><textarea class="small" name="textarea" cols="20" rows="5" ></textarea></div>
	<div class="element-file<?php frmd_add_class("file"); ?>"><label class="title">Anexo</label><label class="large" ><div class="button">Seleccionar</div><input type="file" class="file_input" name="file" /><div class="file_text">Archivo no seleccionado</div></label></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title">Nombre de la foto</label><input class="medium" type="text" name="input1" /></div>
<div class="submit"><input type="submit" value="Registrar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>