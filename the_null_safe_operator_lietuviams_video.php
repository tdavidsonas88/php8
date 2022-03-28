<?php

class Vartotojas {
    public function profilis()
    {
        return null;
    }
}

class Profilis {
    public function idarbinimas()
    {
        return 'idarbintas sekmingai';
    }
}

$vartotojas = null;

echo $vartotojas->profilis()?->idarbinimas() ?? 'nepavyko';