<?php


namespace App\classes;
use App\classes\Catagory;
use  App\classes\Product;


class Home
{
    public $product, $products, $singleProduct, $catagory, $catagories, $detail;
    public function __construct()
    {
        $this->catagory = new Category();
        $this->catagories = $this->catagory->getAllCatagory();
    }

    public function index()
    {
        $this->product = new Product();
        $this->products = $this->product->getAllProduct();
        return view('home',[
            'categories' => $this->catagories,
            'products' => $this->products
        ]);
    }
    public function category($id)
    {
       $this->product = new Product();
       $this->products = $this->product->getProductByCategoryId($id);
        return view('category',['categories' => $this->catagories, 'products' => $this->products]);
    }
    public function detail($id)

    {
        $this->product = new Product();
        $this->singleProduct = $this->product->getProductById($id);
        return view('detail',[
            'categories' => $this->catagories,
            'product' => $this->singleProduct
        ]);
    }
}