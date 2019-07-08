<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Movies extends GuzzleHttpRequest
{
    const NAME_ACTION = 'films';

    protected $typeAction = [
        'characters' => 'people',
        'planets' => 'planets',
        'starships' => 'starships',
        'vehicles' => 'vehicles',
        'species' => 'species'
    ];

    public function allMovies()
    {
        return $this->get(self::NAME_ACTION);
    }

    public function allPeoples()
    {
        return $this->get('peoples');
    }

    public function allPlanets()
    {
        return $this->get('planets');
    }

    public function allStarsips()
    {
        return $this->get('starships');
    }

    public function allVehicles()
    {
        return $this->get('vehicles');
    }

    public function allSpecies()
    {
        return $this->get('species');
    }

    public function findById( $id )
    {  
        $informationArray = [];

        $movies = $this->get( self::NAME_ACTION . '/' . $id );

        foreach( $movies['characters'] as $characters ){
      
            $informationArray[] = $this->get( 'people/' . preg_replace('/[^0-9]/', '', $characters ) );
      
        }

        $movies['data'] = $informationArray;

        return $movies;
    }

    public function find( $id, $type )
    {  
        $movies = $this->get( self::NAME_ACTION . '/' . $id );

        $informationArray = [];

        $typeArray = [
            'characters' => 'personagem',
            'planets' => 'planetas',
            'starships' => 'naves',
            'vehicles' => 'veiculos',
            'species' => 'especies'
        ];

        if( empty( $movies['title'] ) ){

            return [];

        }

        if( in_array( $type, $typeArray ) ){

            $indexAction = array_search( $type, $typeArray );

            foreach( $movies[$indexAction] as $characters ){

                $informationArray[] = $this->get( $this->typeAction[$indexAction] . '/' . preg_replace('/[^0-9]/', '', $characters ) );

            }
            
            $movies['data'] = $informationArray;

        }

        return $movies;
    }

    public function findByTitle( $title )
    {
        $movies = $this->all();

        $array1 = array_map('strtolower',array_column( $movies['results'], 'title' ));
        
        if( empty( $movies['results'] ) ){

            return [];
        
        }

        $indexValue = array_search( $title, $array1);

        $movies['results'] = [ $movies['results'][$indexValue] ];

        return $movies;
    }

    public function findByInformation( $type )
    {
        $movies = $this->all();

        if( empty( $movies['results'] ) ){

            return [];

        }

        $indexValue = array_search( $title, array_column( $movies['results'], 'title' ) );
        
        $movies['results'] = [ $movies['results'][$indexValue] ];
        
        return $movies;
    }
}