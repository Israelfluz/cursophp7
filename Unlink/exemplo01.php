<?php 
// Excluindo arquivos

$file = fopen("teste.txt", "w+");

fclose($file);  // fclose — Fecha um ponteiro de arquivo aberto

unlink("teste.txt");  // unlink — Apaga um arquivo

echo "Arquivo removido com sucesso";

 ?>