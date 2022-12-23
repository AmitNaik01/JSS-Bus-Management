

<?php
session_start();
unset($_SESSION['uname']);
session_destroy();
?>
<script type="text/javascript">
alert("logged Out");
document.location="../new/index.php";
</script>