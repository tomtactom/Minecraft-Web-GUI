<?php
	session_destroy();
	unset($_SESSION['userid']);
?>
<script>location.replace('<?php echo $_SERVER["HTTP_HOST"]; ?>');</script>
<meta http-equiv="refresh" content="0; URL="<?php echo $_SERVER["HTTP_HOST"]; ?>">