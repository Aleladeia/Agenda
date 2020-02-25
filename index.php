

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Agenda</title>
</head>


<body>
    <header>
        <h1>Bem vindo a agenda</h1>
        <h3>Clique no botão <br> para criar uma nova atividade.</h3>
    </header>


    <main>

        <h2 class="titulolista">Atividades a fazer</h2>

        <section class="atividades">
            <div class="atividade"> 
                <div class="nome"></div>
                <div class="descricao"></div>
                <div class="dia"></div>
                <div class="hora"></div>
            </div>
        </section>

        <button class="novo">Nova atividade</button>

    </main>


    <section class="form">
        <form  method="post" action="teste.php">
            <input 
                type="text" 
                name="nome"
                placeholder="Nome da atividade"
            >
            <input 
                type="text" 
                name="descricao"
                placeholder="Descrição da atividade"
            >
            <input 
                type="date" 
                name="dia"
            >
            <input 
                type="time" 
                name="hora"
            >
            <button class="salvar" type="submit" value="salvar"> Salvar</button>
            <button class="cancelar" type="reset" value="cancelar">Cancelar</button>
        </form>
        
        </button>
        
    </section>



</body>

</html>