<?php
// Inclui o autoload do Composer
require get_stylesheet_directory() . '/vendor/autoload.php';


// Importa a classe Dompdf
use Dompdf\Dompdf;
use Dompdf\Options;

// Define opções do DomPDF
$options = new Options();
$options->set('isHtml5ParserEnabled', true); // Permite usar HTML5
$options->set('isRemoteEnabled', true);      // Permite carregar imagens remotas

// Instancia o Dompdf com as opções
$dompdf = new Dompdf($options);

// Carrega o HTML que será convertido em PDF
$html = '
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Exemplo de PDF</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      h1 {
        color: #333;
      }
    </style>
  </head>
  <body>
    <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />

     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />


     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />




     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />




     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />




     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />





     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />



     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />




     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />




     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />



     <h1>Gerando PDF com DomPDF</h1>
    <p>Este é um exemplo básico de geração de PDF a partir de HTML.</p>
    <img src="https://via.placeholder.com/150" alt="Imagem Exemplo" />
  </body>
</html>
';

// Carrega o conteúdo HTML no Dompdf
$dompdf->loadHtml($html);

// (Opcional) Define o tamanho do papel e a orientação
$dompdf->setPaper('A4', 'portrait');

// Renderiza o PDF
$dompdf->render();

// Envia o PDF para o navegador, forçando o download
$dompdf->stream("arquivo_exemplo.pdf", ["Attachment" => true]);
