<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ModificationsAjaxController extends Controller
{
    public function getbyid($id)
    {
        $result = DB::table('TOF_TYPES')->where('TOF_TYPES.TYP_MOD_ID','4917')->count();
           /* ->leftJoin('TOF_DESIGNATIONS','TOF_DESIGNATIONS.DES_ID', '=', 'TOF_TYPES.TYP_KV_ENGINE_DES_ID')
            ->leftJoin('TOF_DES_TEXTS', 'TOF_DESIGNATIONS.DES_TEX_ID', '=', 'TOF_DES_TEXTS.TEX_ID')*/

        /*->leftJoin('TOF_DESIGNATIONS as bodyDesignation', 'bodyDesignation.DES_ID', '=', 'TOF_TYPES.TYP_KV_BODY_DES_ID')
        ->leftJoin('TOF_DES_TEXTS as bodyText', 'bodyDesignation.DES_TEX_ID', '=', 'bodyText.TEX_ID')*/
        //->select('TYP_KV_ENGINE_DES_ID as engineInfo','TOF_TYPES.TYP_ID as typeId','TOF_TYPES.TYP_HP_FROM as engiHorsFrom','TOF_TYPES.TYP_KW_FROM as engiKw','TOF_TYPES.TYP_CCM as engiValcm','TOF_TYPES.TYP_LITRES  as engiValLit','engiText.TEX_TEXT as textEngi','bodyText.TEX_TEXT as textBody')

        //return view('organization') -> with(['oo' => $org]);
        //return response()->json($result);
        return '888'.$id.$result;
    }
}
