<?php

class Vartotojas
{
    /**
     * @param $name
     */
    public function __construct(protected $name)
    {
    }
}

class Planas
{
    /**
     * @param $name
     */
    public function __construct(protected $name)
    {
    }
}

class Registracija
{
    /**
     * @param Vartotojas $vartotojas
     * @param Planas $planas
     */
    public function __construct(protected Vartotojas $vartotojas, protected Planas $planas)
    {
    }
}

$vartotojas = new Vartotojas('Tadas Davidsonas');
$planas = new Planas('mėnesinis');

$registracija = new Registracija($vartotojas, $planas);

var_dump($registracija);


