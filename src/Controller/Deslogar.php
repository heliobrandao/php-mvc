<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class Deslogar implements InterfaceControladorRequisicao
{

  public function processaRequisicao(): void
  {
    session_destroy();
    header('Location: /login');
  }


}