<table  style="border: 5px solid #000;">
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">NOMBRE DE LA EMPRESA</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600">{{ $incidencias[0]->area_emisora }}</td>
		<td></td>
		<td></td>
		<td>Nombre</td>
		<td>Fecha</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600; background-color: #335EFF;">
			"VERIFICACIÓN DE RECOMENDACIONES 1ER SEMESTRE 2015"	
		</td>
		<td></td>
		<td>Preparó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;background-color: #335EFF;">{{ $incidencias[0]->area_responsable }}</td>
		<td></td>
		<td>Revisó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6"></td>
		<td></td>
		<td>Revisó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>

	</tr>
	<tr>Indice</tr>
	
	@foreach($incidencias as $index => $incidencia)
		<tr style="border: 14px solid #000;">
			<td><b>  R{{ $index + 1 }}</b></td>
			<td style="background-color: #FFF333;"><b>{{ $incidencia->id_rec }}</b></td>
			<td style="background-color: #FFF333;" colspan="8">{{ $incidencia->titulo_recomendacion }}</td>
			<td style="background-color: #FFF333;" colspan="2">{{ $incidencia->status }}</td>
		</tr>
	@endforeach

	<tr></tr>
	<tr></tr>

	<tr>
		<td>Objetivo</td>
		<td colspan="12"></td>
	</tr>
	<tr>
		<td></td>
		<td colspan="12" style="background-color: #FF8800;border: 14px solid #000;">
		Verificar que los hallazgos identificados de las revisiones de Auditoría Interna y Externa 
		sean atendidas y solventadas por las áreas responsables. Verificación de recomendaciones que 
		vencieron dentro del 1er Semestre de 2015 del área XXXXXX 
		</td>
	</tr>
</table>