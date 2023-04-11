<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class controllerCard extends Controller
{
    public $productData = [
        [
            "Name" => 'Caviar',
            "Desc" => 'These single-salted fish eggs or roes of matured sturgeons are among the most expensive foods in the world.',
            "Status" => 'SSR',
            "Price" => '$20,000/kg'
        ],
        [
            "Name" => 'Saffron',
            "Desc" => 'The stigmas found in the centre of the Crocus sativus (a purple flower from the Iris family, commonly known as the Saffron crocus) make for the saffron threads, and there are only three of the orange-yellow stigmas in each flower.',
            "Status" => 'SR',
            "Price" => '$10,000/kg'
        ],
        [
            "Name" => 'White Truffle',
            "Desc" => 'White truffles are mostly found in Tuscany, the Piedmont region of Northern Italy, Emilia-Romagna, the Marches and the Istrian peninsula of Croatia.',
            "Status" => 'R',
            "Price" => '$3,000/kg'
        ],
        [
            "Name" => 'Elvish Honey',
            "Desc" => 'In addition, the making of this honey doesn’t involve any beekeeper or hive. Elvish honey is produced most naturally with bees collecting pollen from wildflowers located in the surrounding forests of Artvin and then transforming it into ‘liquid gold’ in the cave.',
            "Status" => 'SSR',
            "Price" => '$5,330/kg'
        ],
        [
            "Name" => 'Iberico Ham',
            "Desc" => 'Feasting on Iberian ham (Jamón Ibérico) is a dream for all food lovers. This expensive ham comes from the rear leg of black pigs, needs to mature for 24 to 36 months and is produced in Portugal and Spain.',
            "Status" => 'SR',
            "Price" => '$100/kg'
        ],
        [
            "Name" => 'Kopi Luwak Coffee',
            "Desc" => 'The process is totally natural and involves the civet cat climbing into the coffee trees and eating the ripest coffee cherries it can find. Eventually, these appear in the animal’s excrement and are collected by the locals.',
            "Status" => 'R',
            "Price" => '$1300/kg'
        ],
        [
            "Name" => 'Wagyu Beef',
            "Desc" => 'The cows involved in making Wagyu beef are bred for physical endurance. This process leads to them having more intramuscular fat cells. As a result, fat gets distributed more evenly throughout the muscle and gives them an exclusive pink colour and tender taste.',
            "Status" => 'SSR',
            "Price" => '$200/kg'
        ],
        [
            "Name" => 'Bluefin Tuna',
            "Desc" => 'Bluefin tuna, which is among the most coveted seafood, is also one of the costliest food items in the world because of its rarity.',
            "Status" => 'SR',
            "Price" => '$1,300/kg'
        ],
        [
            "Name" => 'Oysters',
            "Desc" => 'Oysters are mostly found in brackish waters along the US coasts. While Bluff oysters are touted as one of the most delicious foods in the world, Coffin Bay King Oysters take the title of one of the most expensive foods in the world. These take nearly seven years to mature fully.',
            "Status" => 'R',
            "Price" => '$45/kg'
        ],
        [
            "Name" => 'Foie Gras',
            "Desc" => 'Foie gras is rare and is banned in most countries as its production involves geese and ducks being force-fed corn using feeding tubes to increase their fat content. However, one can see productions of the food in Strasbourg province, as per Britannica.',
            "Status" => 'SR',
            "Price" => '$120/kg'
        ]
    ];

    public function index() {
        $product = $this->productData;
        return view('cards', compact('product'));
    }

    public function single($id) {
        $product = $this->productData[$id];
        return view('single', compact('product', 'id'));
    }
}

