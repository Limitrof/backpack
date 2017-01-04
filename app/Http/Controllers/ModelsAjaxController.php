<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ModelsAjaxController extends Controller
{
    public function index(){
        //$msg = "This is a simple message.";
        
        
        return '234';//response()->json(array('msg'=> $msg), 200);
    }

    public function getbyid($id)
    {
        //$org = Organization::find($id);
        $result = DB::table('tof_models_ua')
            ->innerJoin('tof_county_designations_ru', 'tof_county_designations_ru.CDS_ID', '=', 'tof_models_ua.MOD_CDS_ID')
            ->innerJoin('TOF_DES_TEXTS', 'tof_county_designations_ru.CDS_TEX_ID', '=', 'TOF_DES_TEXTS.TEX_ID')
            ->select('tof_models_ua.MOD_ID', 'TOF_DES_TEXTS.TEX_TEXT')
            ->where('tof_models_ua.MOD_MFA_ID',$id)->get();
            //->select('TOF_MODELS_UA.MOD_ID as mod_id','TOF_MODELS_UA.MOD_MFA_ID as mod_mfa','TOF_MODELS_UA.MOD_CDS_ID as mod_cds','TOF_MODELS_UA.MOD_PCON_START as start','TOF_MODELS_UA.MOD_PCON_END as end','TOF_COUNTRY_DESIGNATIONS.CDS_TEX_ID as text_key','TOF_COUNTRY_DESIGNATIONS.CDS_ID as TYP_CDS_IDforTYPES','TOF_DES_TEXTS.TEX_TEXT as text')
            //->join('TOF_COUNTRY_DESIGNATIONS', 'TOF_COUNTRY_DESIGNATIONS.CDS_ID', '=', 'TOF_MODELS_UA.MOD_CDS_ID')
            //

        //return view('organization') -> with(['oo' => $org]);
        return response()->json($result);
    }
}
