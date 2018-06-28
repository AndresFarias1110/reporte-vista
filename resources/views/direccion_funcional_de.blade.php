<table border="1">
    <?php   $totalImplementadas = 0; 
            $totalNoImplementadas = 0; 
            $totalCanceladas = 0; 
            $totalImplementadasNoImplementadas = 0; 
            $totalImplementadasNoImplementadasCanceladas = 0;
            $totalPendientes = 0;
            $totalImplementadasPendientes = 0;
    ?>
    <!-- <tr style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;">
    </tr> -->
    <tr>
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> </td>
        <td colspan="10" style="text-align: center;background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Número de recomendaciones</td>
    </tr>
    <tr style="text-align: center;">
        <td rowspan="2" style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;">Recomendaciones por direcciones ejecutivas</td>
        <td colspan="2" style="text-align: center;background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">
            Dirección Ejecutiva de Sistemas de Información y Tecnología.	
        </td>
        <td colspan="2" style="text-align: center;background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff"> 
            Dirección Service Delivery
        </td>
        <td colspan="2" style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff"> 
            Dirección de Innovación Infraestructura	
	
        </td>
        <td colspan="2" style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff"> 
            Dirección de Digitalización Bancaria	

        </td>
        <td colspan="2" style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff"> 
            Dirección BP TI Servicios Financieros	
	
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Alto Impacto</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Alto Impacto</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Alto Impacto</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Alto Impacto</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Totales</td>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">Alto Impacto</td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;">1.Implementadas.</td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 2. No Implementadas. </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 3. Canceladas </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 4. Recomendaciones de la Comisión Nacional Bancaria y de Valores (CNBV). </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 5. Recomendaciones revisadas al 31 de diciembre de 2016.  </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'IMPLEMENTADA' &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'IMPLEMENTADA'  &&  $incid->status == 'NO IMPLEMENTADA' &&  $incid->status == 'CANCELADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 6. Recomendaciones pendientes de implementar a partir de enero 2017.  </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    <tr style="text-align: center;">
        <td style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;"> 7. Total de recomendaciones pendientes de implementar. (numerales 2+5)</td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
            <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SISTEMAS INFORMACION TECNOLOGIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE SERVICE DELIVERY' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE INNOVACION INFRAESTRUCTURA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE DIGITALIZACION BANCARIA' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
        <td>
            <?php $contSistemas = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemas ++;  ?>
                @endif
            @endforeach
            {{ $contSistemas }}
        </td>
        <td>
        <?php $contSistemasAlto = 0;  ?>
            @foreach($todas_incidencias as $incid)
                @if($incid->direccion_ejecutiva == 'DE BP TI SERVICIOS FINANCIEROS' && $incid->riesgo == 'ALTO' &&  $incid->status == 'PENDIENTE' && $incid->status == 'NO IMPLEMENTADA')
                    <?php $contSistemasAlto ++;  ?>
                @endif
            @endforeach
            {{ $contSistemasAlto }}
        </td>
    </tr>
    
</table>