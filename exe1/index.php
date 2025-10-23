<?php
// require_once 'Livro.php';

$livro = new Livro('1984', 'George Orwell', 328);
echo "Título: " . $livro->getTitulo() . PHP_EOL;
echo "Número de Páginas: " . $livro->getNumeroDePaginas() . PHP_EOL;