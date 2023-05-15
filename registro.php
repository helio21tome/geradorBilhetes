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

                    </div>          
                    
                    <div class = "input_group">
                        <div class = "input_box">
                            <input id = "numeroDeCelular" type = "text" name = "numeroDeCelular" placeholder = "Numero de celular valido" maxlength="9" required>
                        </div>
                    </div>
                    
                    <div class = "input_group">
                        <div class = "input_box">
                            <input id = "senha" type = "text" name = "senha" placeholder = "Defina a tua senha" maxlength="12" required>
                        </div>
                    </div>

                    <div class = "login_button">
                        <input type = "submit" name = "Registrar" value="Cadastrar">
                    </div>

                    <input type="hidden" name="o_que_fazer" value="registro" >

                    <div class = "login_button">
                        <bottom><a href="login.php">Fazer Login</a><bottom>
                    </div> 

                </from>
            </div>
        </div>

    </body>
</HTML>