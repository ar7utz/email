
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>Envio E-mail</title>
    </head>
    <body>
        <main class="container">
            <h1>Enviar e-mail</h1>

            <?php if(isset($_GET['mensagem'])) { ?>
                <div class="alert alert-success">
                    <?php echo $_GET['mensagem']; ?>
                </div>
            <?php } ?>

            <form action="manda_mensagem.php" method="POST">
                <div class="mb-3">
                    <label>Destinatário</label>
                    <input type="email" class="form-control" name="destinatario">
                </div>

                <div class="mb-3">
                    <label>Assunto</label>
                    <input type="text" class="form-control" name="assunto">
                </div>

                <div class="mb-3">
                    <label>Mensagem</label>
                    <textarea class="form-control" name="mensagem"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" value="Enviar">
            </form>
        </main>
    </body>
</html>