<?php

setcookie("id", "", time() - 360, "/");
setcookie("uh", "", time() - 360, "/");

header('Location: ../main.php');
