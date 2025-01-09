<?php
session_start();
session_destroy();
echo "<script>alert('Loginout Successfully');window.location='home.php'</script>";
