<?php
    
    require_once 'dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('
        <!DOCTYPE html>
            <head> 
             <link rel = "stylesheet" href = "css/pagina_finalizacao"  > 
           </head>
           <body>
             <div class = "big_conteiner">

                  <div class = "conteiner">

                       <div class = "logo">
                            <h2>RECIBO</h2>
                            <hr>
                       </div>

                  </div>

                  <div class = "conteiner">

                       <diV class = "faturado_a">
                            <p><?php echo; ?></p>
                            <p><br>Telefone: <?php echo; ?></p>
                            <p><br>Localizacao: <?php echo; ?></p>
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
                       <p>Viagem para <?php echo $dados_factura;?></p>
                       <p><br>Data: xx/xx/xxxx </p>
                       <p><br>Hora de saida: <?php echo;?></p>
                  </div>
                  <div class = "other_information002" >
                       Sim
                  </div>
             </div>         

                  <div class = "botao_factura">
                       <bottom><a href="">Realizar a Compra</a><bottom>
                  </div>
                  
                  <?php if($ver==1): ?>

                       <div class = "botao_pagamento">
                            <bottom><a href="">Ober o Recibo</a><bottom>
                       </div>
                  <?php else: ?>     

                       <div class = "botao_pagamento">
                            <bottom><a href="">Realiza a compra para obter o recibo</a><bottom>
                       </div>

                  <?php endif; ?>

           </body>

        </html>');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

?>