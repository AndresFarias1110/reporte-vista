<table border="1">
    <tr>
        <td colspan="6"> CARTA DE ASIGNACIÓN DE RECOMENDACIONES NO IMPLEMENTADAS</td>
    </tr>
    <tr>
        <td colspan="5"></td>
        <td>1 de enero de 2016</td>
    </tr>
    <tr>
        <td><b>Direccion</b></td>
        <td colspan="3"></td>
        <td>Fecha de seguimiento:</td>
        <td>31 de diciembre 2018</td>
    </tr>
    <tr>
        <td> Puesto:</td>
        <td colspan="3"></td>
        <td colspan="2"></td>
    </tr>
    <tr style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">
        <td>
            Nún.
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
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->nueva_fecha_compromiso }}</td>            
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->comentarios }}</td>
            
        </tr>
    @endforeach
    <tr></tr>
    <tr></tr>
    <tr style="text-align: center;">
        <td></td>
        <td colspan="2">
            ________________________________________________
        </td>
        <td></td>
        <td></td>
        <td>
            ________________________________________________
        </td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td>Firma del Auditado</td>
        <td></td>
        <td></td>
        <td>Firma del Auditor</td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td>Angel dsdsfsdfds</td>
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
        <td>
            <b>
            En caso de incumplir con la implementación y cambio de estatus de las recomendaciones enlistadas y antes de la fecha compromiso, 
            se llevará a cabo las politicas establecidas por Auditoría Interna de acuerdo a comunicado Institucional.
            </b>
        </td>
    </tr>
</table>