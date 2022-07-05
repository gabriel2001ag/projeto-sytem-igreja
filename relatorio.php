<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />

    <title>Formulário de contatao</title>
    

</head>

<body>
    <header>
        <a href="painel.php"><i class="fa-solid fa-house-chimney"></i> Dashboard</a>
        

    </header>
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Formulário para Relatorio de culto</h1>
                    <figure class="img">
                        <img src="image/IENJ.png" width="200" height="200">
                    </figure>
                    <form action="relatorio_back.php" method="POST">

                        <div class="field">
                            <label class="label">Data</label>
                            <div class="control">
                                <input name="data" class="input" type="Date">

                            </div>

                        </div>
                        <div class="field">
                            <label class="label">Numero de Presentes no culto</label>
                            <div class="control">
                                <input name="presentes" class="input" type="number">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Numero de Visitantes no culto</label>
                            <div class="control">
                                <input name="visitantes" class="input" type="number">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Numero de Crianças no culto</label>
                            <div class="control">
                                <input name="criancas" class="input" type="number">
                            </div>
                            <div class="field">
                                <label class="label">Pregador</label>
                                <div class="control">
                                    <input name="pregador" class="input" type="text" placeholder="Nome do pregador">
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Pastores presentes no culto</label>
                            <div class="control">
                                <input name="pastores" class="input" type="text" placeholder="Pastores presentes">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Igreja</label>
                            <label class="label">01-Pinhais</label>
                            <label class="label">02-Curitiba</label>
                            <label class="label">03-Aventureiro</label>
                            <label class="label">04-Sede-RJ</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="igreja">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>


                                    </select>


                                </div>

                            </div>
                            <div class="field">
                                <label class="label">Observações/Detalhes</label>
                                <div class="control">
                                    <textarea name="observacao" class="textarea" type="text" placeholder="Anotações e detalhes do culto" maxlength="2000"></textarea>
                                </div>
                            </div>
                            <h6>Usuário logado atualmente: <?php echo  $_SESSION['nome']; ?></h6>
                            <div class="field is-grouped">
                                <div class="control">
                                    <button class="button is-link is-medium">Enviar</button>
                                </div>
                            </div>

                    </form>



                </div>

            </div>
        </div>
    </section>

</body>

</html>