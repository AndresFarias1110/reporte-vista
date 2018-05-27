<?php namespace App\Http\Controllers;

use App\Nomina;
use App\Usuario;
use App\Incidencia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;


class ReporteController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Reporte Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return view('welcome');
	}

	public function postLogin(Request $request){
		if ($request->input('inputUser') && $request->input('inputPassword')) {
			# code...
			$users = Usuario::where('nombre', '=', $request->input('inputUser'))->where('password', '=', $request->input('inputPassword'))->firstOrFail();
			return $users;
		} else {
			return;
		}
	}

	public function getTodosIncidencias(){
		return Incidencia::all();
	}

	public function getReporte(Request $request, $responsable){

		// return Incidencia::where('responsable', '=', $responsable)->get();

		\Excel::create('Matriz-de-Seguimiento-response', function($excel) use($responsable){

			$incidencias = Incidencia::where('responsable', '=', $responsable)->get();

			$excel->sheet('Caratula', function($sheet) use($incidencias){
				$sheet->loadView('caratula')->with('nominas', $incidencias);
			});

			$cont = 0;
		    //$nominas =  Incidencia::where('representante', '=', 'andres');
			foreach ($incidencias as  $incidencia) {
				# code..
				$cont ++;
				$excel->sheet('R' . $cont, function($sheet) use($incidencia) {
					// $sheet->getStyle('A6:B6' , $sheet->getHighestRow())->getAlignment()->setWrapText(true);
					// $sheet->setWidth('A', 100);

					$sheet->getStyle('B12:B15')->getAlignment()->setWrapText(true);
					$sheet->setSize('B12', 50, 100);

					// $sheet->setHeight(6, 300);
					$sheet->loadView('reporte')->with('incidencia', $incidencia);
				});
			}


		})->export('xlsx')->download();
	}

	public function postUploadFile(Request $request, Response $response){
		if($request->file('import_file')){

			Incidencia::truncate();

			$imageName = 'import_file.' . $request-> file('import_file')->getClientOriginalExtension();
			$path = '/public/files/';

		    $request->file('import_file')->move(
		        base_path() . $path, $imageName
			);
			
			$array = array();

			$arraydatas = array();
			$arraydatas1 = [];
			$arraydatas = \Excel::load(base_path() . '/public/files/import_file.xlsx', 'UTF-8')->get();
		
			foreach ($arraydatas as $incidencia) {
				# code...;
				$incidencia_row = Incidencia::create([
					'semestre' => $incidencia['semestre'],
					 'id_rec' => $incidencia['id_rec'],
					 'titulo_recomendacion' => $incidencia['titulo_recomendacion'],
					'recomendacion' => str_replace('', ' ', $incidencia['recomendacion']),
					 'tipo_recomendacion' => $incidencia['tipo_recomendacion'],
					 'clasificacion' => $incidencia['clasificacion'],
					 'aplica_para' => $incidencia['aplica_para'],
					 'riesgo' => $incidencia['riesgo'],
					 'esfuerzo' => $incidencia['esfuerzo'],
					 'impacto' => $incidencia['impacto'],
					'observaciones' => str_replace('', ' ', $incidencia['observaciones']),
					 'area_emisora' => $incidencia['area_emisora'],
					 'etapa' => $incidencia['etapa'],
					 'estado' => $incidencia['estado'],
					 'recordatorios_definidos' => $incidencia['recordatorios_definidos'],
					 'empresa' => $incidencia['empresa'],
					 'direccion_funcional' => $incidencia['direccion_funcional'],
					 'direccion_ejecutiva' => $incidencia['direccion_ejecutiva'],
					 'area_responsable' => $incidencia['area_responsable'],
					 'responsable' => $incidencia['responsable'],
					 'revision_asociada' => $incidencia['revision_asociada'],
					 'estatus' => $incidencia['estatus'],
					 'comentarios' => str_replace('', ' ', $incidencia['comentarios']),
					 'afectacion_al_35' => $incidencia['afectacion_al_35'],
					 'atencion_en_sistema' => $incidencia['atencion_en_sistema'],
					 'nueva_area_responsable' => $incidencia['nueva_area_responsable'],
					 'nuevo_responsable' => $incidencia['nuevo_responsable'],
					 'fecha_implementacion' => $incidencia['fecha_implementacion'],
					 'fecha_compromiso' => $incidencia['fecha_compromiso'],
					'fecha_inicio' => $incidencia['fecha_inicio'],
					'nueva_fecha_compromiso' => $incidencia['nueva_fecha_compromiso']
				]);

				$incidencia_row->save();

			}

			return 'Successfull';
        }

        return "No hay archivos";
	}

	public function getreadFile(){
	}


}
