<table>
    <tr>
        <td colspan="16" style="text-align: center">
            <b>RESULTADO DE ESTATUS DE RECOMENDACIONES</b>
        </td>
    </tr>
    <TR></TR>
    <tr>
        <td colspan="2"><b>Dirección:</b></td>
        <td colspan="4" style="background-color: #FFF333;">{{ $incidencias[0]->direccion_funcional }}</td>
        <td colspan="4" ></td>
        <td colspan="3" ><b>Fecha de seguimiento:</b></td>
        <td></td>
        <td><b>1 de enero del 2016</b></td>
    </tr>
    <tr style="vertical-align: middle;">
        <td colspan="2"><b>Puesto:</b></td>
        <td colspan="4" style="background-color: #FFF333;">{{ $incidencias[0]->area_responsable }}</td>
        <td colspan="4"></td>
        <td colspan="3" ><b>Fecha de seguimiento:</b></td>
        <td></td>
        <td><b>31 de diciembre del 2016</b></td>
    </tr>
    <tr></tr>
    <tr style="vertical-align: middle;">
        <td></td>
        <td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;"><b>Núm.</b></td>
        <td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;" colspan="3"><b>Título Recomendación</b></td>
        <td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;" ><b>semestre de seguimiento</b></td>
        <td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;"><b>Riesgo</b></td>
        <td colspan="3" style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;"><b>Empresa</b></td>
        <td colspan="3" style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">Estatus Final</td>
        <td></td>
        <td style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;"><b>Observaciones</b></td>
    </tr>
    @foreach($incidencias as $incidencia)
        <tr style="vertical-align: middle;">
            <td></td>
            <td style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->id_rec }}</td>
            <td colspan="3" style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->titulo_recomendacion }}</td>
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->semestre }}</td>
            <td style="background-color: #FFF333; border: 8px solid #000;" >{{ $incidencia->riesgo }}</td>
            <td colspan="3" style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->empresa }}</td>
            <td colspan="3" style="background-color: #FFF333; border: 8px solid #000;">{{ $incidencia->status }}</td>
            <td></td>
            <td style="background-color: #FFF333; border: 8px solid #000;"><b>{{ $incidencia->comentarios }}</b></td>
        </tr>
    @endforeach
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr style="text-align: center;">
        <td></td>
        <td colspan="4">______________________________________</td>
        <td colspan="2"></td>
        <td colspan="5">______________________________________</td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td colspan="4"><b>Firma del Auditado</b></td>
        <td colspan="2"></td>
        <td colspan="5"><b>Firma del Auditor</b></td>
    </tr>
    <tr style="text-align: center;">
        <td></td>
        <td colspan="4" style="background-color: #FFF333;" ><b>Responsable del concentrado</b></td>
        <td colspan="2"></td>
        <td colspan="5"><b>Irvin Admin Aragón Muñiz</b></td>
    </tr>
    <tr></tr>
    <tr>
        <td colspan="3">
            <b>Fecha de aceptación:</b>
        </td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr>
        <td>
            <b>NOTA:</b>
        </td>
        <td>
            El responsable queda como enterado sobre el seguimiento realizado a las recomendaciones a su cargo.
        </td>
    </tr>
</table>