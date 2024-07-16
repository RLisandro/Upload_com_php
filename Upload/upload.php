<?php
foreach ($_FILES['arquivos']['tmp_name'] as $key => $tmpName) {
    $nomeArquivo = $_FILES['arquivos']['name'][$key];
    $caminhoCompleto = $diretorioDestino . $nomeArquivo;

    // Validações individuais (tamanho, tipo, etc.)
    // Exemplo: limite de tamanho (500 KB)
    if ($_FILES['arquivos']['size'][$key] > 500000) {
        echo "O arquivo $nomeArquivo é muito grande. Limite de 500 KB.<br>";
        continue; // Pula para o próximo arquivo
    }

    // Outras validações aqui...

    // Move o arquivo para o diretório de destino
    if (move_uploaded_file($tmpName, $caminhoCompleto)) {
        echo "Arquivo $nomeArquivo enviado com sucesso!<br>";
    } else {
        echo "Erro ao enviar o arquivo $nomeArquivo.<br>";
    }
}


