<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id_usuario</th>
            <th scope="col">Nome do Usuario</th>
            <th scope="col">Login</th>
            <th scope="col">Setor</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php
            include 'php/conexao.php';
            $select = "SELECT * FROM tb_usuario";
            $resultado = $conexao->query($select);
            while($query = $resultado->fetch_assoc()){      
           ?>
           <td><?php echo $query['id_usuario'] ?></td>
           <td><?php echo $query['nm_usuario'] ?></td>
           <td><?php echo $query['login'] ?></td>
           <td><?php echo $query['setor'] ?></td>

           <?PHP } ?>
           </tr>
      </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>