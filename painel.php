<?php
session_start();
include('verifica_login.php')

?>
<?php
if (isset($_SESSION['status_relatorio'])) :
?>
  <div class="notification is-success">
    <p>Cadastro efetuado!</p>
    <p>Relatorio enviado com sucesso</p>
  </div>
<?php
endif;
unset($_SESSION['status_relatorio'])
?>



</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/sidebar.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />


  <title>Dashboard</title>
</head>

<body>
  <div class="flex-dashboard">
    <sidebar>
      <div class="sidebar-title">
        <img src="image/IENJ.png">
        <h2>IENJ</h2>


      </div>
      <div class="menu">
        <ul>

          <li>
            <a href="painel.php"><i class="fa-solid fa-house-chimney"></i> Dashboard</a>
          </li>
          <li>
            <a href="relatorio.php"><i class="fa-solid fa-laptop-file"></i> Novo Relatório</a>
          </li>

        </ul>

      </div>




    </sidebar>
    <main>
      <header>
        <a href="painel.php"><i class="fa-solid fa-house-chimney"></i> Dashboard</a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>

      </header>
      <div class="main-content">
        <div class="dashboard-content">
          <div class="dashboard-flex-parent">
            <div class="dashboard-box">
              <div class="field">
                <h3><i class="fa-solid fa-user"></i> <?php echo  $_SESSION['cargo'], $_SESSION['nome']; ?></h3>
              </div>
              

            </div>
            <div class="dashboard-box">

            </div>
            <div class="dashboard-box">

            </div>
            <div class="dashboard-box">

            </div>

          </div>
          <div class="dashboard-flex-parent">
            <div class="dashboard-box">


            </div>
            <div class="dashboard-box">

            </div>
            <div class="dashboard-box">

            </div>
            <div class="dashboard-box">

            </div>

          </div>
        </div>


      </div>


  </div>
  </main>
  </div>




  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/fontawesome/js/all.min.js"></script>
  <script src="js/ajax.js"></script>

</body>

</html>