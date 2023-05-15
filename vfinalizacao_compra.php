<!DOCTYPE html>
    <head> 
     <link rel = "stylesheet" href = "css/pagina_finalizacao" >
     <style type="text/css">
          input{
               text-align: center;
               padding: 1px;
          }
     </style> 
   </head>

   <body>
     <div class = "big_conteiner">

          <div class = "conteiner">

               <div class = "logo">
                    <h2>#FACTURA</h2>
               </div>

          </div>

          <div class = "conteiner">
               <form method="post" action="Cfinalizacao_compra.php">
                    <diV class = "faturado_a">
                         <p><?php echo $dados_factura[0]['nome_completo']; ?></p>
                         <p><br>Telefone: <?php echo $dados_factura[0]['numero_pessoal']; ?></p>
                         <p><br>Localizacao: <?php echo $dados_factura[0]['partida']; ?></p>
                    </div>

                    <diV class = "pagar_a">
                         <strong>Emissao:</strong>
                         <p>Valor a pagar: 000MT</p>
                         <input type="hidden" name="montante" value="900">
                         <input type="hidden" name="nome_completo" value=<?php echo $dados_factura[0]['nome_completo'];?>>
                         <br><p><select>
                              <option>Metodo de Pagamento</option>
                              <option>M-pesa</option>
                         </select></p><br>
                         <input type="text" name="numeroMpesa" placeholder = "Numero do M-pesa" maxlength = "9" required>
                    </div>

               </div> 

               <div class = "other_information001" >
                    <p>Viagem para <?php echo $dados_factura[0]['chegada'];?></p>
                    <p><br>Data: xx/xx/xxxx </p>
                    <p><br>Hora de saida: <?php echo $dados_factura[0]['periodo_partida'];?></p>
               </div>
               <div class = "other_information002" >
                    Sim
               </div>

               <div class = "botao_factura">
                    <input type = "submit" name = "Enviar" value="Finalizar a Compra">
               </div>
          </form>   

          <?php if($estadoPagamento): ?>
               <div class = "botao_pagamento">
                    <bottom><a href="recibo.php?id=<?php echo $dados_factura[0]['nome_completo']?>">Realiza a compra para obter o recibo</a><bottom>
               </div>
          <?php endif; ?>

   </body>

</html>