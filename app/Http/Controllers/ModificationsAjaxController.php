<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ModificationsAjaxController extends Controller
{
    public function getbyid($id)
    {
        $result = DB::table('tof_types_ru')
            ->leftJoin('tof_designations_ru','tof_designations_ru.DES_ID', '=', 'tof_types_ru.TYP_KV_ENGINE_DES_ID')
            ->leftJoin('TOF_DES_TEXTS', 'tof_designations_ru.DES_TEX_ID', '=', 'TOF_DES_TEXTS.TEX_ID')

        ->leftJoin('tof_designations_ru as bodyDesignation', 'bodyDesignation.DES_ID', '=', 'tof_types_ru.TYP_KV_BODY_DES_ID')
        ->leftJoin('TOF_DES_TEXTS as bodyText', 'bodyDesignation.DES_TEX_ID', '=', 'bodyText.TEX_ID')
            //->select('TYP_KV_ENGINE_DES_ID as engineInfo','tof_types_ru.TYP_ID as typeId','tof_types_ru.TYP_HP_FROM as engiHorsFrom','TOF_TYPES.TYP_KW_FROM as engiKw','tof_types_ru.TYP_CCM as engiValcm','tof_types_ru.TYP_LITRES  as engiValLit','TOF_DES_TEXTS.TEX_TEXT as textEngi','bodyText.TEX_TEXT as textBody')
            ->select(
                'tof_types_ru.TYP_KV_ENGINE_DES_ID as engineInfo',//id engine
                'tof_types_ru.TYP_ID as typeId',//id type
                'tof_types_ru.TYP_HP_FROM as engiHorsFrom',//hors
                'tof_types_ru.TYP_KW_FROM as engiKw',//KW
                'tof_types_ru.TYP_CCM as engiValcm',//engine value
                'tof_types_ru.TYP_PCON_START as yearStart',//Liters
                'tof_types_ru.TYP_PCON_END as yearEnd',//Liters
                'TOF_DES_TEXTS.TEX_TEXT as textEngi',//about engine
                'bodyText.TEX_TEXT as textBody'//body
            )
            ->where('tof_types_ru.TYP_MOD_ID',$id)
            ->get();

        return  response()->json($result);
    }
}
