<?php

namespace App\Exports;

use App\Models\Malla;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Events\AfterSheet;



class MallaExport implements FromCollection, ShouldAutoSize, WithStyles, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Malla::with('user')->get()->map(function ($malla) {
            return [
                /*'ID' => $malla-> id,
                'USERS_ID' => $malla-> users_id,*/
                'NOMBRES' => $malla->user->name,
                'CEDULA' => $malla->user->cedula,
                'SEMANA' => $malla-> semana,
                'CAMPAÑA' => $malla->campaña,
                'FOCO' => $malla->foco,
                'ENCARGADO' => $malla->encargado,
                'TOTAL HORAS' => $malla->horastotal,
                'DIA DESCANSO' => $malla->diadescanso,
                'INICIO LUNES' => $malla->lunesinicio,
                'FINAL LUNES' => $malla->lunesfinal,
                'LUNES DESCANSO' => $malla->lunesdescanso1,
                'LUNES ALM INICIO' => $malla->lun_alm_inicio,
                'LUNES ALM FINAL' => $malla->lunes_alm_final,
                'LUNES FIN' => $malla->lunesdescanso2,
                'INICIO MARTES' => $malla->martesinicio,
                'FINAL MARTES' => $malla->martesfinal,
                'MARTES DESCANSO' => $malla->martesdescanso1,
                'MARTES ALM INICIO' => $malla->mar_alm_inicio,
                'MARTES ALM FINAL' => $malla->martes_alm_final,
                'MARTES FIN' => $malla->martesdescanso2,
                'INICIO MIERCOLES' => $malla->miercolesinicio,
                'FINAL MIERCOLES' => $malla->miercolesfinal,
                'MIERCOLES DESCANSO' => $malla->miercolesdescanso1,
                'MIERCOLES ALM INICIO' => $malla->mie_alm_inicio,
                'MIERCOLES ALM FINAL' => $malla->miercoles_alm_final,
                'MIERCOLES FIN' => $malla->miercolesdescanso2,
                'INICIO JUEVES' => $malla->juevesinicio,
                'FINAL JUEVES' => $malla->juevesfinal,
                'JUEVES DESCANSO' => $malla->juevesdescanso1,
                'JUEVES ALM INICIO' => $malla->jue_alm_inicio,
                'JUEVES ALM FINAL' => $malla->jueves_alm_final,
                'JUEVES FIN' => $malla->juevesdescanso2,
                'INICIO VIERNES' => $malla->viernesinicio,
                'FINAL VIERNES' => $malla->viernesfinal,
                'VIERNES DESCANSO' => $malla->viernesdescanso1,
                'VIERNES ALM INICIO' => $malla->vie_alm_inicio,
                'VIERNES ALM FINAL' => $malla->viernes_alm_final,
                'VIERNES FIN' => $malla->viernesdescanso2,
                'INICIO SABADO' => $malla->sabadoinicio,
                'FINAL SABADO' => $malla->sabadofinal,
                'SABADO DESCANSO' => $malla->sabadodescanso1,
                'SABADO ALM INICIO' => $malla->sab_alm_inicio,
                'SABADO ALM FINAL' => $malla->sabado_alm_final,
                'SABADO FIN' => $malla->sabadodescanso2,
                'INICIO DOMINGO' => $malla->domingoinicio,
                'FINAL DOMINGO' => $malla->domingofinal,
                'DOMINGO DESCANSO' => $malla->domingodescanso1,
                'DOMINGO ALM INICIO' => $malla->dom_alm_inicio,
                'DOMINGO ALM FINAL' => $malla->domingo_alm_final,
                'DOMINGO FIN' => $malla->domingodescanso2,
                'CREADA' => $malla->created_at,
                'ACTUALIZADA' => $malla->created_at,
                
                
            ];
        });
         
    }
    



    
    public function styles(Worksheet $sheet)
    {   return [
                1 => [
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => [
                            'rgb' => '000000',
                        ],
                        ],
                     
     
                     'font' => [
                
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF'],
                     ],   
                    ],   
                    
            

                     
            ];
        }
    

    

    

        public function headings(): array{
            return [
            /*'ID',
            'USERS_ID',*/
            'NOMBRES',
            'CEDULA',
            'SEMANA',
            'CAMPAÑA',
            'FOCO',
            'ENCARGADO',
            'TOTAL HORAS',
            'DIA DESCANSO',
            'INICIO LUNES',
            'FINAL LUNES',
            'LUNES DESCANSO',
            'LUNES ALM INICIO',
            'LUNES ALM FINAL',
            'LUNES FIN',
            'INICIO MARTES',
            'FINAL MARTES',
            'MARTES DESCANSO',
            'MARTES ALM INICIO',
            'MARTES ALM FINAL',
            'MARTES FIN',
            'INICIO MIERCOLES',
            'FINAL MIERCOLES',
            'MIERCOLES DESCANSO',
            'MIERCOLES ALM INICIO',
            'MIERCOLES ALM FINAL',
            'MIERCOLES FIN',
            'INICIO JUEVES',
            'FINAL JUEVES',
            'JUEVES DESCANSO',
            'JUEVES ALM INICIO',
            'JUEVES ALM FINAL',
            'JUEVES FIN',
            'INICIO VIERNES',
            'FINAL VIERNES',
            'VIERNES DESCANSO',
            'VIERNES ALM INICIO',
            'VIERNES ALM FINAL',
            'VIERNES FIN',
            'INICIO SABADO',
            'FINAL SABADO',
            'SABADO DESCANSO',
            'SABADO ALM INICIO',
            'SABADO ALM FINAL',
            'SABADO FIN',
            'INICIO DOMINGO',
            'FINAL DOMINGO',
            'DOMINGO DESCANSO',
            'DOMINGO ALM INICIO',
            'DOMINGO ALM FINAL',
            'DOMINGO FIN',
            'CREADA',
            'ACTUALIZADA',
            

        ];
    }

}

