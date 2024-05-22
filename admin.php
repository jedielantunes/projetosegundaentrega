<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['senha'])){
    header('Location: index.php');
    exit;
}

include_once('conexao.php');

$sql = "SELECT u.nome, u.telefone, u.endereco, u.planos, GROUP_CONCAT(p.produto) AS produtos, GROUP_CONCAT(p.numero_pedido) AS numeros_pedidos, GROUP_CONCAT(p.gaveta) AS gavetas
        FROM usuarios u 
        INNER JOIN pedidos p ON u.id = p.id_usuario
        GROUP BY u.id";

$resultado = mysqli_query($mysqli, $sql);

if ($resultado && mysqli_num_rows($resultado) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviço de administração</title>
    <link rel="stylesheet" href="styleUsuario.css" />


    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(5, 231, 156), rgb(25, 90, 85));
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: rgb(56, 64, 69);
        }

        .editable {
            cursor: pointer;
        }

        button {
            background-color: rgb(56, 64, 69);
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: rgb(25, 39, 39);
        }
    </style>
</head>
<body>
<a  id="voltar" href="home2.php" class="btn btn-primary">Voltar</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Planos</th>
            <th>Produto</th>
            <th>Número do Pedido</th>
            <th>Gaveta</th>
            <th>Confirmação</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['endereco']; ?></td>
            <td><?php echo $row['planos']; ?></td>
            <td><?php echo $row['produtos'] ? implode(', ', explode(',', $row['produtos'])) : "Nenhum produto encontrado"; ?></td>
<td><?php echo $row['numeros_pedidos'] ? implode(', ', explode(',', $row['numeros_pedidos'])) : "Nenhum pedido encontrado"; ?></td>
<td class="editable" data-id="<?php echo $row['numeros_pedidos']; ?>" data-column="gaveta"><?php echo $row['gavetas'] ? implode(', ', explode(',', $row['gavetas'])) : "Nenhuma gaveta encontrada"; ?></td>
            <td><button onclick="showConfirmation()">Editar</button></td>
        </tr>
        <?php } ?>
    </table>
    <script>
        function showConfirmation() {
            alert('Gaveta adicionada ao pedido com sucesso!');
        }
        document.addEventListener('DOMContentLoaded', function() {
            var cells = document.querySelectorAll('.editable');
            cells.forEach(function(cell) {
                cell.addEventListener('click', function() {
                    var value = cell.innerText;
                    var input = document.createElement('input');
                    input.type = 'text';
                    input.value = value;
                    input.addEventListener('blur', function() {
                        var newValue = input.value;
                        cell.innerText = newValue;
                    });
                    cell.innerText = '';
                    cell.appendChild(input);
                    input.focus();
                });
            });
        });
    </script>
</body>
</html>
<?php
} else {
    echo "Nenhum resultado encontrado.";
}
?>