<?php ob_start() ?>
 <h1>Inicio</h1>
 <h3> Fecha: <?php echo $params['fecha'] ?> </h3>
 <?php echo $params['mensaje'] ?>

 <?php $contenido = ob_get_clean() ?>

<?php $contenido = ob_get_clean() ?>
    
<?php if(isset($_SESSION["nombreUser"])): ?>
    <?php include 'layoutsession.php' ?>
<?php else: ?>
    <?php include 'layout.php' ?>
<?php endif; ?>
