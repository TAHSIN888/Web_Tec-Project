<?php 
    $con = new mysqli('localhost','root','','mybank');
    define('bankName', 'E Bank',true);
    $ar = $con->query("select * from userAccounts,branch");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
        
  $('[data-toggle="tooltip"]').tooltip()
})
</script>