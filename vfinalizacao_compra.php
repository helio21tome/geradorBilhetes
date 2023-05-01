<!DOCTYPE html>
    <head> 
     <link rel = "stylesheet" href = "css/pagina_finalizacao"  > 
   </head>
   <body>
     <div class = "big_conteiner">

          <div class = "conteiner">

               <div class = "logo">
                    <h2>#FACTURA</h2>
               </div>

          </div>

          <div class = "conteiner">

               <diV class = "faturado_a">
                    <p><?php echo $dados_factura[0]['nome_completo']; ?></p>
                    <p><br>Telefone: <?php echo $dados_factura[0]['numero_pessoal']; ?></p>
                    <p><br>Localizacao: <?php echo $dados_factura[0]['partida']; ?></p>
               </div>

               <diV class = "pagar_a">
                    <strong>Emissao:</strong>
                    <p>Valor a pagar: xxx</p>
                    <br><p><select>
                         <option>Metodo de Pagamento</option>
                         <option>M-pesa</option>
                         <option>E-mola</option>
                         <option>Visa card</option>
                    </select></p><br>
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
     </div>         

          <div class = "botao_factura">
               <bottom><a href="recibo.php">Realizar a Compra</a><bottom>
          </div>
          
          <?php if($ver==1): ?>

               <div class = "botao_pagamento">
                    <bottom><a href="recibo.php">Ober o Recibo</a><bottom>
               </div>
          <?php else: ?>     

               <div class = "botao_pagamento">
                    <bottom><a href="recibo.php">Realiza a compra para obter o recibo</a><bottom>
               </div>

          <?php endif; ?>

   </body>

</html>