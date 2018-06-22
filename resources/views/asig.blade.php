<table border="1">
    <tr>
        <td colspan="6" style="text-align: center; font-weight: 600;"> CARTA DE ASIGNACIÓN DE RECOMENDACIONES NO IMPLEMENTADAS</td>
    </tr>
    <tr></tr>
    <tr>
        <td><b>Direccion</b></td>
        <td colspan="3">Auditoria Interna</td>
        <td></td>
        <td>{{ $incidencias[0]->fecha_inicio }}</td>
    </tr>
    <tr>
        <td> Puesto:</td>
        <td colspan="3">Auditoria</td>
        <td>Fecha de seguimiento:</td>
        <td>{{ $incidencias[0]->fecha_compromiso }}</td>
    </tr>
    <tr></tr>
    <tr style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">
        <td>
            Núm.
        </td>
        <td>
            Titulo de Recomendacion
        </td>
        <td>
            Riesgo
        </td>
        <td>
            Empresa
        </td>
        <td>
            Nueva Fecha Compromiso
        </td>
        <td>
            Descripcion de No implementacion
        </td>
    </tr>
    @foreach($incidencias as $incidencia)
        <tr style="color: #000000">
            <td style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->id_rec }}</td>
            <td style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->titulo_recomendacion }}</td>
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->riesgo }}</td>
            <td style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->empresa }}</td>
            <td style=" border: 8px solid #000;" >{{ $incidencia->nueva_fecha_compromiso }}</td>            
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->comentarios }}</td>
            
        </tr>
    @endforeach
    <tr></tr>
    <tr></tr>
    <tr style="text-align: center;">
        <td></td>
        <td colspan="2">
            ___________________________________
        </td>
        <td></td>
        <td></td>
        <td>
            ___________________________________
        </td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td><b>Firma del Auditado</b></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>Firma del Auditor</b></td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td><b>{{ $incidencias[0]->nuevo_responsable }}</b></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr></tr>
    <tr style="text-align: center;">
        <td><b>Fecha de aceptación:</b></td>

    </tr>
    <tr>
        <td><b>Nota:</b></td>
        <td colspan="5">
            <b>
            En caso de incumplir con la implementación y cambio de estatus de las recomendaciones enlistadas y antes de la fecha compromiso, 
            se llevará a cabo las politicas establecidas por Auditoría Interna de acuerdo a comunicado Institucional.
            </b>
        </td>
    </tr>
</table>