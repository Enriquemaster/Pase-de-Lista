<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puntuacion;

class ActivarController extends Controller
{
    public function activar()
    {
        // Obtener el segundo registro de la tabla
        //$puntuacion = Puntuacion::offset(1)->first();
        $puntuacion = Puntuacion::first();

        if ($puntuacion) {
            // Acceder a las horas del segundo registro
            $horas = $puntuacion->horas;
    
            // Verificar si las horas son mayores a 40
            if ($horas > 20) {
                return redirect()->route('Crear_convivio');
            } else {
                return redirect()->route('Error_convivio');
            }
        } 
    }

    public function activar1()
    {
        // Obtener el segundo registro de la tabla
        $puntuacion = Puntuacion::offset(1)->first();

        if ($puntuacion) {
            // Acceder a las horas del segundo registro
            $horas = $puntuacion->horas;
    
            // Verificar si las horas son mayores a 40
            if ($horas > 20) {
                return redirect()->route('Crear_convivio');
            } else {
                return redirect()->route('Error_convivio');
            }
        } 
    }


    public function activar2()
    {
        // Obtener el segundo registro de la tabla
        $puntuacion = Puntuacion::offset(2)->first();

        if ($puntuacion) {
            // Acceder a las horas del segundo registro
            $horas = $puntuacion->horas;
    
            // Verificar si las horas son mayores a 40
            if ($horas > 20) {
                return redirect()->route('Crear_convivio');
            } else {
                return redirect()->route('Error_convivio');
            }
        } 
    }

    public function activar3()
    {
        // Obtener el segundo registro de la tabla
        $puntuacion = Puntuacion::offset(3)->first();

        if ($puntuacion) {
            // Acceder a las horas del segundo registro
            $horas = $puntuacion->horas;
    
            // Verificar si las horas son mayores a 40
            if ($horas > 20) {
                return redirect()->route('Crear_convivio');
            } else {
                return redirect()->route('Error_convivio');
            }
        } 
    }


    public function activar4()
    {
        // Obtener el segundo registro de la tabla
        $puntuacion = Puntuacion::offset(4)->first();

        if ($puntuacion) {
            // Acceder a las horas del segundo registro
            $horas = $puntuacion->horas;
    
            // Verificar si las horas son mayores a 40
            if ($horas > 20) {
                return redirect()->route('Crear_convivio');
            } else {
                return redirect()->route('Error_convivio');
            }
        } 
    }




}
