<table border="1">
    <?php   $totalImplementadas = 0; 
            $totalNoImplementadas = 0; 
            $totalCanceladas = 0; 
            $totalImplementadasNoImplementadas = 0; 
            $totalImplementadasNoImplementadasCanceladas = 0;
            $totalPendientes = 0;
            $totalImplementadasPendientes = 0;
    ?>
    <tr style="background-color: #878a8f;  border: 8px solid #FF8800; text-align: center;">
        <td style="color: #ffffff;"> Recomendaciones por empresas  </td>
        <td> 1.Implementadas.</td>
        <td> 2. No Implementadas. </td>
        <td> 3. Canceladas </td>
        <td> 4. Recomendaciones de la Comisión Nacional Bancaria y de Valores (CNBV). </td>
        <td> 5. Recomendaciones revisadas al 31 de diciembre de 2016.  </td>
        <td> 6. Recomendaciones pendientes de implementar a partir de enero 2017.  </td>
        <td> 7. Total de recomendaciones pendientes de implementar. (numerales 2+5)</td>
    </tr>
    
    @foreach($incidencias as $incidencia)
        <tr>
            <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">{{ $incidencia->empresa }}</td>
            <td style="text-align: center;">
                <?php $contImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && $incid->status == 'IMPLEMENTADA')
                            <?php $contImpl ++;  ?>
                        @endif
                    @endforeach
                {{ $contImpl }}
                <?php $totalImplementadas +=  $contImpl; ?>
            </td>
            <td style="text-align: center;">
            
                <?php $contNImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && $incid->status == 'NO IMPLEMENTADA')
                            
                            <?php $contNImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contNImpl }}
                <?php $totalNoImplementadas +=  $contNImpl; ?>
            </td>
            <td style="text-align: center;">
                <?php $contCImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && $incid->status == 'CANCELADA')
                            
                            <?php $contCImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contCImpl }}
                <?php $totalCanceladas +=  $contCImpl; ?>
            </td>
            <td style="text-align: center;">
                <?php $contINImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && ($incid->status == 'NO IMPLEMENTADA' || $incid->status == 'IMPLEMENTADA'))
                            
                            <?php $contINImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contINImpl }}
                <?php $totalImplementadasNoImplementadas +=  $contINImpl; ?>
            </td>
            <td style="text-align: center;">
                <?php $contINCImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && ($incid->status == 'NO IMPLEMENTADA' || $incid->status == 'IMPLEMENTADA' || $incid->status == 'CANCELADA'))
                            
                            <?php $contINCImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contINCImpl }}
                <?php $totalImplementadasNoImplementadasCanceladas +=  $contINCImpl; ?>
            </td>
            <td style="text-align: center;">
                <?php $contIPImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && ($incid->status == 'PENDIENTE'))
                            
                            <?php $contIPImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contIPImpl }}
                <?php $totalPendientes +=  $contIPImpl; ?>
            </td>
            <td style="text-align: center;">
                <?php $contIIPImpl = 0;  ?>
                    @foreach($todas_incidencias as $incid)
                        @if($incid->empresa == $incidencia->empresa && ($incid->status == 'PENDIENTE' || $incid->status == 'IMPLEMENTADA'))
                            
                            <?php $contIIPImpl ++;  ?>
                        
                        @endif
                    @endforeach
                {{ $contIIPImpl }}
                <?php $totalImplementadasPendientes +=  $contIIPImpl; ?>
            </td>
        </tr>
    @endforeach
    <tr>
        <td style="background-color: #FF8800; font-weight: 600; border: 8px solid #000; color: #ffffff">
            Total
        </td>
        <td style="text-align: center;">
            <b>{{ $totalImplementadas }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalNoImplementadas }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalCanceladas }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalImplementadasNoImplementadas }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalImplementadasNoImplementadasCanceladas }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalPendientes }}</b>
        </td>
        <td style="text-align: center;">
            <b>{{ $totalImplementadasPendientes }}</b>
        </td>
    </tr>
    
</table>