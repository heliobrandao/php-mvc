<?php

use Alura\Cursos\Controller\{
  FormularioInsercao,
  ListarCursos,
  Persistencia,
  Exclusao,
  FormularioEdicao
};

return [
  '/listar-cursos' => ListarCursos::class,
  '/novo-curso' => FormularioInsercao::class,
  '/salvar-curso' => Persistencia::class,
  '/excluir-curso' => Exclusao::class,
  '/atualizar-curso' => FormularioEdicao::class

];
