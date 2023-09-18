<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryCalculatorController extends Controller
{

    public function showForm()
    {
        return view('formulario'); // Vista que contiene el formulario
    }

    public function calculateSalary(Request $request)
    {
        // Recibir datos del formulario
        $nombre = $request->input('nombre');
        $rol = $request->input('rol');
        $horasTrabajadas = $request->input('horas_trabajadas');
        $entregas = $request->input('entregas');

        // Definir constantes de tarifas y porcentajes
        $tarifaBasePorHora = 30;
        $bonoChoferPorHora = 10;
        $bonoCargadorPorHora = 5;
        $pagoPorEntrega = 5;
        $impuestoSobreLaRenta = 0.09;
        $impuestoSobreLaRentaAdicional = 0.03;
        $valesDeDespensa = 0.04;

        // Realizar cálculos
        $sueldoBase = $tarifaBasePorHora * $horasTrabajadas * 6 * 4;
        $bonoPorHora = 0;

        if ($rol === 'chofer') {
            $bonoPorHora = $bonoChoferPorHora;
        } elseif ($rol === 'cargador') {
            $bonoPorHora = $bonoCargadorPorHora;
        }

        $bono = $bonoPorHora * $horasTrabajadas * 6 * 4;
        $pagoEntregas = $pagoPorEntrega * $entregas;
        $ingresosTotales = $sueldoBase + $bono + $pagoEntregas;
        $impuesto = $ingresosTotales * ($impuestoSobreLaRenta + ($ingresosTotales > 10000 ? $impuestoSobreLaRentaAdicional : 0));
        $vales = $ingresosTotales * $valesDeDespensa;
        $sueldoNeto = $ingresosTotales - $impuesto + $vales;

        // Devolver el resultado a la vista
        return view('resultado', [
            'nombre' => $nombre,
            'sueldoNeto' => $sueldoNeto,
        ]);
    }
}
