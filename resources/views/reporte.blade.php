<table  style="border: 5px solid #000;">
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">{{ $incidencia->empresa }}</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">{{ $incidencia->area_emisora }}</td>
		<td></td>
		<td></td>
		<td>Nombre</td>
		<td>Fecha</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">VERIFICACIÓN DE RECOMENDACIONES 1ER SEMESTRE 2015</td>
		<td></td>
		<td>Preparó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">AISI-XX15</td>
		<td></td>
		<td>Revisó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td colspan="6" style="text-align: center; font-weight: 600;">{{ $incidencia->area_responsable }}</td>
		<td></td>
		<td>Revisó:</td>
		<td colspan="2">______________</td>
		<td></td>
	</tr>
	<tr>

	</tr>
	<tr style="border: 8px solid #000;">
		<td></td>
		<td colspan="6" style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">PERIODO SUJETO A REVISIÓN:</td>
		<td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">DE:</td>
		<td colspan="2" style="border: 8px solid #000;">ene-15</td>
		<td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">HASTA:</td>
		<td colspan="2" style="border: 8px solid #000;">jun-15</td>

	</tr>
	<tr>
		<td></td>
		<td colspan="12" style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">OBJETIVOS A REVISAR:</td>
	</tr>
	<tr>
		<td></td>
		<td style="border: 9px solid #000; font-weight: 600;">R1</td>
		<td style="border: 8px solid #000;">{{ $incidencia->id_rec }}</td>
		<td colspan="10" style="border: 8px solid #000;">{{ $incidencia->titulo_recomendacion }}</td>
	</tr>
	<tr>

	</tr>
	<tr style="border: 8px solid #000;">
		<td></td>
		<td colspan="12" style="background-color: #FF8800; color: #ffffff; text-align: center; font-weight: 600;">RECOMENDACION:</td>

	</tr>
	<tr>
		<td></td>
		<td colspan="12"  style="border: 8px solid #000;">{{ $incidencia->recomendacion }}</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="6" style="border: 8px solid #000; background-color: #FF8800; color: #ffffff; text-align: center; font-weight: 600;">EVALUACIÓN AUDITOR:</td>
		<td colspan="6" style=" border: 8px solid #000; background-color: #FF8800; color: #ffffff; text-align: center; font-weight: 600;">EVIDENCIA EVALUDADA</td>
	</tr>
	<tr>
		<td></td>
		<td colspan="6" style="border: 8px solid #000; height: 100">{{ $incidencia->comentarios }}</td>
		<td colspan="6" style="border: 8px solid #000;"></td>
	</tr>
</table>
