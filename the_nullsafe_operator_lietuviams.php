<?php

class Vartotojas {
    public function profilis()
    {
        return new Profilis();
    }
}

class Profilis {
    public function idarbinimas()
    {
        return 'idarbintas sekmingai';
    }
}

$vartotojas = new Vartotojas();

echo $vartotojas->profilis()->idarbinimas();
