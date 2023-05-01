<!DOCTYPE HTML>
    <html lang = "pt-br">

    <head>
        <meta charset = "UTF-8">
        <meta name = "veiwport" content = "widht=device-widht, inicial-scale=1.0">
        <link rel = "stylesheet" href = "css/formstyle.css">;
        <title> Formulario de Cadastro</title>
    </head>
    <body>

        <div class = "conteiner">
            <div class = "form_image">
                 <div class = "centralizer_img">
                    <img src = "css/imagen/undraw_travel_mode_re_2lxo.svg">
                 </div>
            </div>
            <div class = "form" >
                <form method="post" action="Cbridge.php">

                    <div class = "header">

                        <div class = "title">
                            <h2>Cadastre-se Agora!</h2>
                        </div>

                        <div class = "login_button">
                            <input type = "submit" name = "Enviar">
                        </div>

                    </div>          
                    
                    <div class = "input_group">
                        <div class = "input_box">
                            <input id = "nome" type = "text" name = "nome_completo" placeholder = "Digite o teu nome" required>
                        </div>
                    </div>

                    <div class = "input_group">
                        <div class = "input_box">
                            <select id = "lpartida" type = "text" name = "partida" required>
                                <option>Partida</option>
                                <option>Tete</option>
                                <option>Chimoio</option>
                                <option>Beira</option>
                            </select>
                        </div>
                    </div>

                    <div class = "input_group">
                        <div class = "input_box">
                            <select id = "ldestino" type = "text" name = "chegada" required>
                                <option>Destino</option>
                                <option>Tete</option>
                                <option>Chimoio</option>
                                <option>Beira</option>
                            </select>
                        </div>
                    </div>

                    <div class = "input_group">
                        <div class = "input_box">
                            <input id = "lnumero" type = "text" name = "numero_pessoal" placeholder = "O teu numero" maxlength = "9" required>
                        </div>
                    </div>

                    <div class = "input_group">
                        <div class = "input_box">
                            <input id = "lnumero" type = "text" name = "numero_familiar" placeholder = "Numero de um familiar" maxlength = "9" required>
                        </div>
                    </div>
                    
                    <div class = "input_group">
                        <div class = "input_box">
                            <select id = "lperiodo" type = "text" name = "periodo_partida" required>
                                <option>Horario</option>
                                <option>04:30</option>
                                <option>11:30</option>
                                <option>12:00</option>
                            </select>
                        </div>
                    </div>

                </from>
            </div>
        </div>

    </body>
</HTML>