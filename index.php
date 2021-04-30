<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Site</title>
</head>
</html>

<body>

    <header>
        <div class="center">
            <div class="titulo">
                <h1><strong>Formulário de Contato</strong></h1>
            </div>
        </div>
    </header>
    
    <main>
        <div class="conteudo">
            <div id = "cadts">
                <h2>Contato</h2>
                    <form method="POST" action="processar.php">
                        <div>
                            <label>Nome</label>
                            <input id="nome" type="text" name="nome" />
                        </div>
                        <div>
                            <label>E-mail</label>
                            <input id="email" type="email" name="email" />
                        </div>
                        <div>
                            <label>Telefone</label>
                            <input id="telefone" type="text" name="telefone" />
                        </div>
                        <div>
                            <label>Mensagem</label>
                            <textarea name="mensagem" placeholder="Digite a mensagem..."></textarea>
                        </div>
                        <button  class= "botaoform" onclick="capturar()">Enviar</button>
                    </form>
            </div>
        </div>    
    <main>

    <footer>
    <p id="rodape"><strong>Copyright</strong></p>
    </footer>

</body>