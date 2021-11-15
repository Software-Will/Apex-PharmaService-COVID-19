

<?php
session_start();
session_unset();
session_destroy();
header("Location:../../intranet.php");
?>

<script>
    window.location.hash = "no-back-button";
    window.location.hash = "Again-No-back-button"; //chrome
    window.onhashchange = function () {
        window.location.hash = "";
    };
</script>

