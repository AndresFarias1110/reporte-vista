<table border="1">
    <tr>
        <td colspan="14">
            CARTA DE ACEPTACIÓN DE ESTATUS DE RECOMENDACIONES
        </td>
    </tr>
    <tr>
    </tr>
    <tr>
        <td colspan="2">
            <b>Dirección:</b>
        </td>
        <td colspan="5">{{ $incidencias[0]->direccion_funcional }}</td>
        <td colspan="4"></td>
        <td colspan="2"></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">
            <b>Puesto:</b>
        </td>
        <td colspan="5">{{ $incidencias[0]->area_responsable }}</td>
        <td colspan="4"></td>
        <td colspan="2">
            <b>Fecha de seguimiento:</b>
        </td>
        <td></td>
    </tr>


    <tr style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">
        <td>
            <b>Núm.</b>
        </td>
        <td>
            <b>Título de Recomendación</b>
        </td>
        <td>Semestre de seguimiento</td>
        <td>
            <b>Riesgo</b>
        </td>
        <td>
            <b>Valor</b>
        </td>
        <td>
            <b>Implementada</b>
        </td>

        <td colspan="2">No Implementada</td>

        <td>
            <b>Subtotal No Implementada</b>
        </td>

        <td colspan="2">Cambio de Estatus</td>

        <td rowspan="3">Subtotal Cambio de Estatus</td>
        <td rowspan="3">Total</td>
        <td rowspan="3">Observaciones</td>
    </tr>
    <tr style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>

        <td colspan="2">Afectacion</td>

        <td></td>

        <td>Si</td>
        <td>No</td>
        <!-- <td rowspan="2">Si</td>
                    <td rowspan="2">No</td> -->
    </tr>
    <tr style="background-color: #FF8800; border: 8px solid #000; color: #ffffff; text-align: center; font-weight: 600;">
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>
        <td style="border: 0px solid #000;"></td>                    
        <td style="border: 0px solid #000;"></td>                    
        <td style="border: 0px solid #000;"></td>     

        <td>Con</td>
        <td>sin</td>

        <td></td>

        <td></td>
        <td></td>
        <!-- <td>Con</td>
                    <td>Sin</td> -->
    </tr>

    @foreach($incidencias as $incidencia)
        <tr style="background-color: #FFF333; border: 8px solid #000; text-align: center;">
            <td>{{ $incidencia->id_rec }}</td>
            <td>{{ $incidencia->titulo_recomendacion }}</td>
            <td>{{ $incidencia->semestre }}</td>
            <td>{{ $incidencia->riesgo }}</td>
            <td>
                @if( $incidencia->riesgo == 'ALTO' )
                    0.35%
                @endif

                @if( $incidencia->riesgo == 'MEDIO' )
                    0.25%
                @endif

                @if( $incidencia->riesgo == 'BAJO' )
                    0.15%
                @endif
            </td>
            <td> 
                {{ $incidencia->status }}
            </td>
            <td>
                @if($incidencia->afectacion_al_35 == 'SI')
                    SI
                @endif
                
            </td>
            <td>
                @if($incidencia->afectacion_al_35 == 'NO')
                    NO
                @endif
            </td>
            <td style="background-color: #bbbbbb">
                @if( $incidencia->riesgo == 'ALTO' )
                    35%
                @endif

                @if( $incidencia->riesgo == 'MEDIO' )
                    25%
                @endif

                @if( $incidencia->riesgo == 'BAJO' )
                    15%
                @endif
            </td>
            <td>
                @if($incidencia->atencion_en_sistema == 'SI')
                    SI
                @endif
                
            </td>
            <td>
                @if($incidencia->atencion_en_sistema == 'NO')
                    NO
                @endif
            </td>
            <td style="background-color: #bbbbbb">
                @if($incidencia->atencion_en_sistema == 'NO')
                    5%
                @endif
                @if($incidencia->atencion_en_sistema == 'SI')
                    0%
                @endif
            </td>
            <td>
                
            </td>
            <td>
                {{ $incidencia->comentarios }}
            </td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td style="border: 0px solid #000; background-color: #FF8800;"><b>Promedio:</b></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td style="border: 0px solid #000; background-color: #FF8800;">
            <?php $total = 0; ?>
            @foreach($incidencias as $incidencia)
                @if( $incidencia->riesgo == 'ALTO' )
                    <?php $total += 35; ?>
                @endif

                @if( $incidencia->riesgo == 'MEDIO' )
                    <?php $total += 25; ?>
                @endif

                @if( $incidencia->riesgo == 'BAJO' )
                    <?php $total += 15; ?>
                @endif
            @endforeach
            <?php $total = $total / sizeof($incidencias); ?>
            {{ $total }}%
        </td>
        <td></td>
        <td></td>
        <td style="border: 0px solid #000; background-color: #FF8800;">
            <?php $totalAtencionEnSistema = 0; ?>
            @foreach($incidencias as $incidencia)
                @if( $incidencia->atencion_en_sistema == 'NO' )
                    <?php $totalAtencionEnSistema += 5; ?>
                @endif
            @endforeach
            <?php $totalAtencionEnSistema = $totalAtencionEnSistema / sizeof($incidencias); ?>
            {{ $totalAtencionEnSistema }}%
        </td>
        <td style="border: 0px solid #000; background-color: #FF8800;"> 
            {{ $total + $totalAtencionEnSistema }}%
        </td>
    </tr>

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
    <tr>
        <td></td>
        <td colspan="4" style="text-align: center">
            <b> {{ $incidencias[0]->responsable }} </b>
        </td>
        <td colspan="2"></td>
        <td colspan="5"><b></b></td>
    </tr>
    <tr>
        <td colspan="3">
            <b>Fecha de aceptación:</b>
        </td>
    </tr>
    <tr>
        <td>
            <b>NOTA:</b>
        </td>
        <td colspan="6">
            El responsable queda como enterado sobre el seguimiento realizado a las recomendaciones a su cargo.
        </td>
    </tr>
</table>