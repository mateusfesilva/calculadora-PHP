<?php

    $n1 = "";
    $n2 = "";
    $r = "";
    $error = "";

    if(isset($_GET['operation'])){
        $n1 = $_GET['num1'];
        $n2 = $_GET['num2'];
        $op = $_GET['operation'];

            if(is_numeric($n1) && ($n2)){
                switch($op){
                    case '+':
                        $r = $n1 + $n2;
                        break;
    
                    case '-':
                        $r = $n1 - $n2;
                        break;
    
                    case '/':
                        $r = $n1 / $n2;
                        break;
    
                    case 'x':   
                        $r = $n1 * $n2;
                        break;  
                           
                    case 'Limpar':
                        $r = "";
                        $n1 = "";
                        $n2 = "";
                        break;  
                }
            }

            else{
                
                $error = "Insira um número primeiro!";
            }
        
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora padrão</title>
    <link rel="stylesheet" href="css/padrao.css">
</head>
<body>

    <div class="erro"> <p class="etxt"> <?= $error ?> </p> </div>

    <section id="corpo">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
        <div class="calc">
            Insira um número:
            <input type="number" name="num1" id="num1" value="<?= $n1 ?>" ><br><br>

            Insira um número:
            <input type="number" name="num2" id="num2" value="<?= $n2 ?>"><br><br>

            Resultado:
            <input type="number" id="result" value="<?= $r ?>" disabled ><br><br>

        </div>

        <div class="op">
            <input type="submit" class="btn" value="+" name="operation">
            <input type="submit" class="btn" value="-" name="operation">
            <input type="submit" class="btnb" value="/" name="operation">
            <input type="submit" class="btnb" value="x" name="operation">
            <input type="submit" class="limpar" value="Limpar" name="operation">
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