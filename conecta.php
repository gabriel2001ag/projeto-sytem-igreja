<?php
define('host', 'localhost');
define('user', 'gabriel');
define('passwd', 'root');
define('DB', 'IENJ');

$conexao = mysqli_connect(host, user, passwd, DB) or die ("não foi possivel conectar");



?>