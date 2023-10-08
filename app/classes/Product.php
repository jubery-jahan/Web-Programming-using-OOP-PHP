<?php


namespace App\classes;


class Product
{
    public  $products = [], $result = [];
    public function __construct()
    {
        $this->products = [
            0=>[
                'id' =>1,
                'category_id'=>1,
                'name'=>'Small Table',
                'price'=>20000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/banar22.jpg'

            ],

            1=>[
                'id' =>2,
                'category_id'=>2,
                'name'=>'Small family table',
                'price'=>40000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/table2.jpg'

            ],

            2=>[
                'id' =>3,
                'category_id'=>3,
                'name'=>'Single table',
                'price'=>22000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/study3.jpg'
            ],
            3=>[
                'id' =>4,
                'category_id'=>1,
                'name'=>'Lamp',
                'price'=>20000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/home3.jpg'

            ],
            5=>[
                'id' =>6,
                'category_id'=>1,
                'name'=>'Tea Table',
                'price'=>25000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/home4.jpg'

            ],
            7=>[
                'id' =>8,
                'category_id'=>1,
                'name'=>'Plant stand',
                'price'=>5000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/home1.png'

            ],
            8=>[
                'id' =>9,
                'category_id'=>1,
                'name'=>'Wall Fram',
                'price'=>2000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/home2.jpg'

            ],
            9=>[
                'id' =>10,
                'category_id'=>2,
                'name'=>'Large table',
                'price'=>60000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/tableblue.jpg'

            ],
            10=>[
                'id' =>11,
                'category_id'=>2,
                'name'=>'Small table',
                'price'=>41000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/table3.jpg'

            ],
            11=>[
                'id' =>12,
                'category_id'=>2,
                'name'=>'Large family table',
                'price'=>70000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/table4.png'

            ],
            12=>[
                'id' =>13,
                'category_id'=>2,
                'name'=>'Regular table',
                'price'=>55000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/table.jpg'

            ],
            13=>[
                'id' =>14,
                'category_id'=>3,
                'name'=>'Super Large table',
                'price'=>60000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/study1.jpg'
            ],
            14=>[
                'id' =>15,
                'category_id'=>3,
                'name'=>' Large table',
                'price'=>41000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/study2.jpg'
            ],
            15=>[
                'id' =>16,
                'category_id'=>3,
                'name'=>'Small table',
                'price'=>26000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/study4.jpg'
            ],
            16=>[
                'id' =>17,
                'category_id'=>4,
                'name'=>'Living room sofa',
                'price'=>45000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/bb22.png'
            ],
            17=>[
                'id' =>18,
                'category_id'=>4,
                'name'=>'Single sofa',
                'price'=>7000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/ssofa.jpg'
            ],
            18=>[
                'id' =>19,
                'category_id'=>4,
                'name'=>'Small decoration chair',
                'price'=>8000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/ssofa2.jpg'
            ],
            19=>[
                'id' =>20,
                'category_id'=>4,
                'name'=>'Small white sofa',
                'price'=>10000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/ssofa3.jpg'
            ],
            20=>[
                'id' =>21,
                'category_id'=>4,
                'name'=>'Single blue sofa',
                'price'=>15000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/ssofa4.jpg'
            ],
            21=>[
                'id' =>22,
                'category_id'=>4,
                'name'=>'Tinny chair',
                'price'=>15000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/schair2.jpg'
            ],
            22=>[
                'id' =>23,
                'category_id'=>4,
                'name'=>'Yellow sofa',
                'price'=>25000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/dsofa2.jpg'
            ],
            23=>[
                'id' =>24,
                'category_id'=>4,
                'name'=>'Double sofa',
                'price'=>28000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/dsofa1.jpg'
            ],
            24=>[
                'id' =>25,
                'category_id'=>4,
                'name'=>'Luxury sofa ',
                'price'=>55000,
                'description'=>'comfortable for your home',
                'image'=>'assets/img/bbb333.jpg'
            ],

        ];


    }

    public function getAllProduct()
    {
        return $this->products;
    }
    public function getProductByCategoryId($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['category_id']==$id)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product)
        {
            if ($product['id']==$id)
            {
                return $product;
            }
        }

    }
}