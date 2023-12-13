<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FilterMapComponent extends Component
{
    public $prov = '';

    public function getProvinsi(){
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
        return $koleksi;
    }

    public function updatedProv($value){
        // dd($value);
        $this->prov = $value;
    }

    public function getkabKota(){
        try {
            $req = Http::get('https://aws.simontini.id/geoserver/wfs',
            [
                'service' => 'wfs',
                'version' => '1.1.1',
                'request' => 'GetFeature',
                'typename' => 'simontini:Administrasi Prov Pilot',
                'cql_filter' => "prov_ina = '". $this->prov ."'",
                'propertyName' => 'dist_ina',
                'outputFormat' => 'application/json',
            ]);
            $response = json_decode($req->getBody()->getContents(), true);
            $res = array();
            foreach ($response['features'] as $each) {
                    if(!in_array($each['properties']['dist_ina'], $res)){
                        array_push($res, $each['properties']['dist_ina']);
                    }
                }

            $koleksi = collect($res)->unique();
            return $koleksi;
        } catch (\Throwable $th) {
            return [];
        }
    }

    public function render()
    {
        $provinsis = $this->getProvinsi();
        $kabkotas = $this->getkabKota();
        return view('livewire.filter-map-component', compact('provinsis', 'kabkotas'));
    }
}
