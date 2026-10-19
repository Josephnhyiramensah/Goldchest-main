
<?php 
    require($_SERVER['DOCUMENT_ROOT'] .'/health/includes/db.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/auth.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/header_main.php');
    include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/navbar_main.php');
?>
<div class="container-fluid">
    <?php include('patient_setup_form.php');?>
</div>
<?php include('patient_attend_dialogue_modal.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/scripts_main.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'] .'/health/includes/footer_main.php');?>