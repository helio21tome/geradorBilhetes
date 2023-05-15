<?php
    
    include 'Mbanco.php';

    require_once 'dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    //dados do recibo
    $nome=$_GET["id"];
    
    $dados_factura = array();
    $dados_factura = db_criar_factura($connect, $nome);

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
                      <h2>#RECIBO</h2>
                 </div>

            </div>

            <div class = "conteiner">
                 <form method="post" action="examples\c2b.php">
                    <diV class = "faturado_a">
                         <p><br>Nome: '. $dados_factura[0]['nome_completo'] .'</p>
                         <p><br>Telefone: '. $dados_factura[0]['numero_pessoal'] .'</p>
                         <p><br>Localizacao: '. $dados_factura[0]['partida'] .'</p>
                    </div>

                    <div class = "pagar_a">
                         <strong>Emissao:</strong>
                         <p>Valor a pagar: 900MT</p>
                    </div>
                 </div> 

                 <div class = "other_information001" >
                      <p>Viagem para '. $dados_factura[0]['chegada'] .'</p>
                      <p><br>Data: xx/xx/xxxx </p>
                      <p><br>Hora de saida: '. $dados_factura[0]['periodo_partida'] .'</p>
                 </div>
            </form>
            <?php endif; ?>

         </body>

    </html>');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream("Recibo de Viagem");

?>