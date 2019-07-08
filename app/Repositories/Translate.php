<?php

namespace App\Repositories;

class Translate
{
    private $translateArray = [
        'personagem' => 
        [
            'pt-br' => 
            [
                'Nome',
                'Altura',
                'Peso',
                'Cabelo',
                'Pele',
                'Olhos',
                'Nascimento',
                'Gênero',
            ]

        ],
        'planetas' => 
        [
            'pt-br' => 
            [
                'Nome',
                'Clima',
                'Gravidade',
                'Água',
                'População',
            ]
        ],
        'naves' => 
        [
            'pt-br' => 
            [
                'Nome',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'veiculos' => 
        [
            'pt-br' => 
            [
                'Nome',
                'Modelo',
                'Fabricante',
                'Tripulação',
                'Classe',
            ]
        ],
        'especies' => 
        [
            'pt-br' => 
            [
                'Nome',
                'Classificação',
                'Desiginação',
                'Tempo de Vida',
                'Idioma',
            ]
        ],
    ];

    public function language($type, $language)
    {
        return !array_key_exists( $type, $this->translateArray ) ? [] : $this->translateArray[$type][$language];
    }
}