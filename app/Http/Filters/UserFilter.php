<?php

namespace App\Http\Filters;


use Illuminate\Http\Request;


/**
 * Clase base para manejar los filtros en solicitudes http
 * @author Juan U.
 * @method array transform(Request $request)
 */
class UserFilter extends ApiFilter
{
    protected $safeParams   = [

        'id'     => ['eq', 'ne'],
        'name'   => ['eq', 'ne'],
        'email'  => ['eq', 'ne'],
        'state'  => ['eq', 'ne'],
        'phone'  => ['eq', 'ne'],
        'role'   => ['eq', 'ne'],
        'especialidad'   => ['eq', 'ne','lt'],
    ]; //Parametros para filtros de modelos
    protected $columMap     = [
        'id'  => 'id',
        'name' =>'name',
        'email'=>'email',
        'state'=>'estado_id',
        'phone'=>'telefono',
        'role' =>'rol_id',
        'date_birth' =>'fecha_nacimiento',
        'password' =>'password'
    ]; //Mapea las columnas a como queremos que se filtren


    /**
     *eq:  Equal                 (=).  Significa "igual a".
     *lt:  Less Than             (<).  Significa "menor que".
     *lte: Less Than or Equal    (<=). Significa "menor o igual que".
     *gt:  Greater Than          (>).  Significa "mayor que".
     *gte: Greater Than or Equal (>=). Significa "mayor o igual que".
     *ne:  Not Equal             (!=). Significa "no igual a".
     */
    protected $operatorMap  = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',


    ]; //Creamos los mapeos de operadores

}