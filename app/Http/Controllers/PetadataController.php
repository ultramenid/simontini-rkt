<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PetadataController extends Controller
{
    public function index(){
        $title = 'Peta data - simontini';
        $navbar = 'petadata';
        return view('frontends.petadata', compact('title', 'navbar'));
    }

    public function getProv(){
        $req = Http::get('https://aws.simontini.id/geoserver/wfs',
            [
                'service' => 'wfs',
                'version' => '1.1.1',
                'request' => 'GetFeature',
                'typename' => 'simontini:Administrasi Prov Pilot',
                'propertyName' => 'prov_ina',
                'outputFormat' => 'application/json',
            ]);
        $response = json_decode($req->getBody()->getContents(), true);
        $res = array();
        foreach ($response['features'] as $each) {
                if(!in_array($each['properties']['prov_ina'], $res)){
                    array_push($res, $each['properties']['prov_ina']);
                }
            }

        $koleksi = collect($res)->unique();
        // return response()->json(json_encode($koleksi));
        return json_encode($koleksi);
    }
}
