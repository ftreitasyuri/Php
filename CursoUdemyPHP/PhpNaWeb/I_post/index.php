<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<form action="cadastro.php" method="post">
    <div>
    <input type="text" name="nome" placeholder="Nome do carro">
    </div>
    <hr>
    <div>
    <input type="text" name="marca" placeholder="Marca do carro">
    </div>
    <hr>
    <div>
    <input type="password" name="valorCarro" placeholder="Senha">
    </div>
    <hr>
    <h3>Selecione a tração do veículo:</h3>
    <select name="Tração" id="tracao">
        <option value="mil">1.0</option>
        <option value="mil4">1.4</option>
        <option value="mil6">1.6</option> 
        <option value="doisMil">2.0</option>
        <option value="Acima">Outros</option>
    </select>
    <hr>
    <h3>Opcionais</h3>
    <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
    <input type="checkbox" name="opcionais[]" value="Insulfilm"> Insulfilm
    <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
    <input type="checkbox" name="opcionais[]" value="Primeiro dono"> Primeiro dono
    
    <hr>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>
    
</body>
</html>