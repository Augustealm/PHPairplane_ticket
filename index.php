<?php include 'view/inc/header.php'; ?>
<?php include 'view/form.php'; ?>
<?php include 'view/inc/footer.php'; ?>
<?php require_once 'view/inc/validation.php';

if (isset($_POST["send"]) && empty(val())) {
    require_once 'view/ticket.php';
} else {
    require_once 'view/form.php';
}
