<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercicio 3</title>
        <link href="style.css" rel="stylesheet" type="text/css"> 
    </head>
    <body class="fundo">
    <center>
        <h1>Formulário para vaga de emprego:</h1>
        <?php
        ?>
        <table border="2" class="cor"> 
            <form action="recebe3.php" method="POST">
                <tr>
                    <td>Nome:</td>
                    <td><input type= "text" name="nome"></td>
                </tr>
                 <tr>
                    <td>Sexo:</td>
                    <td><input type="radio" name="sexo" value="M"> Masculino 
                    <input type="radio" name="sexo" value="F"> Feminino </td>
                </tr>
                <tr>
                    <td>Profissão:</td>
                      <td> <select name="profissao">
    <option value=""></option>
    <option value="med">Médico</option>
    <option value="prof">Professor</option>
    <option value="mot">Motorista</option>
</select>
                          </td>
                </tr>
                <tr>
                    <td>Endereço:</td> 
                    <td><input type= "text" name="end"></td>
                </tr>
                <tr>
                    <td>Complemento:</td> 
                    <td><input type= "text" name="comp"></td>
                </tr>
                <tr>
                    <td>Bairro:</td> 
                    <td><input type= "text" name="bai"></td>
                </tr>
                <tr>
                    <td>Cidade:</td> 
                    <td><input type= "text" name="city"></td>
                </tr>
                <tr>
                    <td>CEP:</td> 
                    <td><input type= "text" name="cep"></td>
                </tr>
                <tr>
                    <td>Estado:</td>
                      <td> <select name="estado">
    <option value=""></option>
    <option value="rj">Rio de Janeiro</option>
    <option value="mg">Minas Gerais</option>
    <option value="sp">São Paulo</option>
      <option value="mg">Minas Gerais</option>
</select>
                          </td>
                </tr>
                </table>
                <input type="submit" value="enviar" name="enviar">
        <input type="reset" value="cancelar" name="cancelar">
            </form>
        </table>
           <h3>Lívian Pascoal - INF 161</h3>
    </center>
    </body>
</html>
