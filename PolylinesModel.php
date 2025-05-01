<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolylinesModel extends Model
{
    protected $table = 'polyline';
    protected $guarded = ['id'];

    public function gejson_polylines()
    {
        $polyline = $this->select(DB::raw('st_asgeojson (geom) as geom, name, description, image,
        st_length(geom, true) as length_m, st_length(geom, true)/1000 as length_km, created_at, updated_at'))
            ->get();

        $geojson = [
            'type'=> 'FeatureCollection',
            'features' => [],
        ];

        foreach ($polyline as $p) {
            $feature = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom),
                'properties' => [
                    'name' => $p->name,
                    'description' => $p->description,
                    'image' => $p->image,
                    'length_m' => $p->length_m,
                    'length_km' => $p->length_km,
                    'description' => $p->description,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at,
                ],
            ];

            array_push($geojson['features'], $feature);

        }
        return($geojson);
    }
}
