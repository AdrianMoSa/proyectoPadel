<?php

namespace App;

enum LadoPreferido
{
    case Izquierdo;
    case Derecho;
    case Indistinto;
}

function seleccionarLado(LadoPreferido $lado){}

    $ladoSeleccionado = LadoPreferido::Izquierdo;
