<?php


namespace App\classes;


class Category
{

    public $categories=[];
    public function __construct()
    {
        $this->categories=[
           0=>[
               'id'=>1,
               'name'=>'Home decoration',
               'image'=>'assets/img/home3.jpg'
           ],
           1=>[
               'id'=>2,
               'name'=>'Daining room furniture',
               'image'=>"assets/img/table2.jpg"
           ],
           2=>[
               'id'=>3,
               'name'=>'Study room furniture',
               'image'=>"assets/img/study3.jpg"
           ],
            3=>[
                'id'=>4,
                'name'=>'Living room furniture',
                'image'=>"assets/img/bannarrrr.jpg"
            ]
        ];
    }
    public function getAllCatagory()
    {
        return $this->categories;
    }
}