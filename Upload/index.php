<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de Múltiplos Arquivos</title>
</head>
<body>
    <h1>Envie seus arquivos</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivos[]" multiple>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
