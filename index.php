<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <section class="estrutura">
        <h2 class="title">Qual calculadora deseja usar?</h2>

        <form id="selec">
            <a href="padrao.php"><input type="button" value="Padrão" class="btnp"></a>
            <a href="avancada.php"><input type="button" value="Avançada" class="btna"></a>
        </form>
    </section>

    <!-- CUBO 3D -->
    <div class="cube">
        <div class="top"></div>
        <div class="bot"></div>
        <div>
            <span style="--i:0;"></span>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
        </div>
    </div>

    <section class="shadow">
        <div class="cube2">
            <div class="top2"></div>
            <div class="bot2"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
    </section>
    <p class="c">Design by Mateus Silva</p>

</body>

</html>