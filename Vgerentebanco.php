<!DOCTYPE HTML>

    <head>
        <title>GERENCIAMENTO</title>
        <link rel="stylesheet" href="css/gerenciamento.css">
    </head>

    <body>

        <?php
            include 'Cgerentebanco.php';
        ?>

<h2>Tabela de Gerenciamento</h2>

<div class="container">
    <div class="table_responsive" >
        <table>
          <thead>
            <tr>
              <th>Nome</th>
              <th>Partida</th>
              <th>Chegada</th>
              <th>Numero Pessoal</th>
              <th>Estado de Pagamento</th>
            </tr>
          </thead>

          <tbody>

            <?php for($i=0; $i<=$tamanho-1; ++$i): ?>
            
                <tr>
                    <td><?php echo $dados[$i]['nome_completo']; ?></td>
                    <td><?php echo $dados[$i]['partida']; ?> </td>
                    <td><?php echo $dados[$i]['chegada']; ?> </td>
                    <td><?php echo $dados[$i]['numero_pessoal']; ?></td>
                    <td><?php echo pagamento_conversor($dados[$i]['pago']); ?></td>
                    <td><a href="bottom.php?pedido=1&id=<?php echo $dados[$i]['ID']?>">Confirmar</a></td>
                    <td><a href="bottom.php?pedido=2&id=<?php echo $dados[$i]['ID']?>">Remover</a></td>
                <tr>        
            
            <?php endfor; ?>

          </tbody>
        </table>
    </div><!--end of .table-responsive-->
</div>

<p class="p">Demo by Transportation. <a href="http://www.google.com/" target="_blank">See article</a>.</p>    
 

</body>

</HTML>