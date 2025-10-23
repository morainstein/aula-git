<?php

class Livro
{
  private string $titulo;
  private string $autor;
  private int $numeroDePaginas;

  public function __construct(string $titulo = '', string $autor = '', int $numeroDePaginas = 0)
  {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->numeroDePaginas = $numeroDePaginas;
  }

  public function getTitulo(): string
  {
    return $this->titulo;
  }

  public function setTitulo(string $titulo): void
  {
    $this->titulo = $titulo;
  }

  public function getAutor(): string
  {
    return $this->autor;
  }

  public function setAutor(string $autor): void
  {
    $this->autor = $autor;
  }

  public function getNumeroDePaginas(): int
  {
    return $this->numeroDePaginas;
  }

  public function setNumeroDePaginas(int $numeroDePaginas): void
  {
    $this->numeroDePaginas = $numeroDePaginas;
  }
}
