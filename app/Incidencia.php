<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'incidencias';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'semestre',
		'id_rec',
		'recomendacion',
		'tipo_recomendacion',
		'clasificacion',
		'aplica_para',
		'esfuerzo',
		'impacto',
		'observaciones',
		'area_emisora',
		'etapa',
		'estado',
		'recordatorios_definidos',
		'empresa',
		'direccion_funcional',
		'direccion_ejecutiva',
		'area_responsable',
		'responsable',
		'fecha_compromiso',
		'fecha_inicio',
		'fecha_implementacion',
		'revision_asociada',
		'estatus',
		'comentarios',
		'afectacion_al_35',
		'revision_asociada',
		'atencion_en_sistema',
		'nueva_fecha_compromiso',
		'nuevo_responsable',
		'nueva_area_responsable'
	];
}
