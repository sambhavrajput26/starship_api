<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Starship;
use Response;
use App\Helpers\APIHelpers;

class StarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Starship::all(); //Fetching all Starships from table

        // Looping data for adding "starship_class" from the parent table via has_one relation
        if($data !== null){
            foreach($data as $key => $value){
                $data[$key]['starship_class'] = $value->starship_category->title;
            }
        }
        $response = APIHelpers::createAPIResponse(false, 200, '', $data); //Sending required data to API creation Helper function
        return response()->json($response, status: 200);   //Returning Data as JSON payload to the API         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Starship::find($id); //Fetching single starship according to ID parameter
        if($data !== null){
            $data['starship_class'] = $data->starship_category->title;
        }
        $response = APIHelpers::createAPIResponse(false, 200, '', $data); //Sending required data to API creation Helper function
        return response()->json($response, status: 200);   //Returning Data as JSON payload to the API         
    }

   
}
