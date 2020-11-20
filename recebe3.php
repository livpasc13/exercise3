<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
    </head>
    <body>]
    <center>
        <h1>Formulário para paciente</h1>
        <?php
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $profissao= $_POST["profissao"];
        $end = $_POST ["end"];
        $comp = $_POST["comp"];
        $bai = $_POST["bai"];
        $city= $_POST["city"];
        $cep = $_POST ["cep"];
        $estado = $_POST ["estado"];
        ?>
         <table border="1">
            <tr>
                <td> <?php echo "Nome:";?></td>
                <td><?php echo "$nome <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Sexo: ";?></td>
                <td><?php echo "$sexo <br>";?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Profissão:";?></td>
                <td><?php echo "$profissao <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Endereço: ";?></td>
                <<td><?php echo "$end <br>"; ?> </td>
                
            </tr>
              <tr>
                <td> <?php echo "Complemento:";?></td>
                <td><?php echo "$comp <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Bairro: ";?></td>
                <td><?php echo "$bai <br>";?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Cidade:";?></td>
                <td><?php echo "$city <br>"; ?> </td>
                
            </tr>
            <tr>
                <td><?php echo "CEP: ";?></td>
                <td><?php echo "$cep";?> </td>
                
            </tr>
            <tr>
                <td><?php echo "Estado: ";?></td>
                <td><?php echo "$estado";?> </td>
                
            </tr>
            </table>
        </center>
    </body>
</html>
