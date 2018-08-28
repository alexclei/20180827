<?php
require_once 'Pessoa.php';
require_once 'Academico.php';
require_once 'Professor.php';

$p = new Pessoa;

$p->setNome("Alex");

$p->comer();

var_dump($p);