<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hojacontrold
 *
 * @property $id
 * @property $tierra_papeles
 * @property $embolsado_residuos
 * @property $nivel_ejecucion
 * @property $uso_apro_uni
 * @property $uniforme
 * @property $herramientas
 * @property $personal_comp
 * @property $personal_iden
 * @property $epp
 * @property $cobertura_ser
 * @property $usu
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hojacontrold extends Model
{
    
    static $rules = [
		'tierra_papeles' => 'required',
		'embolsado_residuos' => 'required',
		'nivel_ejecucion' => 'required',
		'uso_apro_uni' => 'required',
		'uniforme' => 'required',
		'herramientas' => 'required',
		'personal_comp' => 'required',
		'personal_iden' => 'required',
		'epp' => 'required',
		'cobertura_ser' => 'required',
		'usu' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tierra_papeles','embolsado_residuos','nivel_ejecucion','uso_apro_uni','uniforme','herramientas','personal_comp','personal_iden','epp','cobertura_ser','usu'];



}
