<?php
        $r = "";
        $num = "";
        $error = "";


    if(isset($_GET['operation'])){
        $op = $_GET['operation'];
        $num = $_GET['num'];

        if(is_numeric($num)){
            switch($op){
                case 'Conversão decimal binário':
                  $r = decbin($num);
                    break;
                case 'Conversão binário decimal':
                    $r = bindec($num);
                    break;
                case 'Radiciação²':
                    $r = sqrt($num);
                    break;
                case 'Potenciação²':
                    $r = pow($num,2);
                    break;
                case 'Resto da divisão (MOD)²';
                    $r = $num%2;
                    break;
                case 'Limpar':
                    $r = "";
                    $num = "";
                    break;
            }
        }
        else{
            $error = "Insira um número primeiro";
        }

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora avançada</title>
    <link rel="stylesheet" href="css/avancada.css">
</head>
<body>
    <div class="erro"> <p class="etxt"> <?= $error ?> </p> </div>

    <section id ="corpo">

        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <div class="calc">
                Insira um número: <input type="number" name="num" id="num" value=<?=$num ?>><br><br>

                Resultado: <input type="number" name="result" value="<?= $r ?>" id="result" disabled ><br><br>
            </div>
                <div class="op">
                    <input type="submit" value="Conversão decimal binário" name="operation" class="btn">
                    <input type="submit" value="Conversão binário decimal" name="operation" class="btn"><br><br>
                    <input type="submit" value="Radiciação²" name="operation" class="btnb">
                    <input type="submit" value="Potenciação²" name="operation" class="btnb">
                    <input type="submit" class="limpar" value="Limpar" name="operation">
                    <input type="submit" value="Resto da divisão (MOD)²" name="operation" class="btn"><br><br>
                </div>
        </form>
        <a href="index.php"><button class="voltar">Voltar</button></a>
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