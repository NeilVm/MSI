<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPenalidad
 *
 * @property $id
 * @property $Direccion
 * @property $Distrito
 * @property $Referencia
 * @property $Actividad
 * @property $Ocurrencia
 * @property $Item_Penalidad
 * @property $Nombre_Penalidad
 * @property $Obs
 * @property $Nom_Sup_Pe
 * @property $Ape_Sup_Pe
 * @property $DNI_Sup_pe
 * @property $Correo_sup_pe
 * @property $Celular_Sup_pe
 * @property $Obs_Penalidad
 * @property $Comentarios
 * @property $Fecha
 * @property $Hora
 * @property $Status
 * @property $usu
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TPenalidad extends Model
{
    
    static $rules = [
		'Direccion' => 'required',
		'Distrito' => 'required',
		'Referencia' => 'required',
		'Actividad' => 'required',
		'Ocurrencia' => 'required',
		'Item_Penalidad' => 'required',
		'Nombre_Penalidad' => 'required',
		'Obs' => 'required',
		'Nom_Sup_Pe' => 'required',
		'Ape_Sup_Pe' => 'required',
		'DNI_Sup_pe' => 'required',
		'Correo_sup_pe' => 'required',
		'Celular_Sup_pe' => 'required',
		'Obs_Penalidad' => 'required',
		'Comentarios' => 'required',
		'Fecha' => 'required',
		'Hora' => 'required',
		'Status' => 'required',
		'usu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Direccion','Distrito','Referencia','Actividad','Ocurrencia','Item_Penalidad','Nombre_Penalidad','Obs','Nom_Sup_Pe','Ape_Sup_Pe','DNI_Sup_pe','Correo_sup_pe','Celular_Sup_pe','Obs_Penalidad','Comentarios','Fecha','Hora','Status','usu'];



}
