<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Product;

/*
 * ProductController Class, наследованный от класса Controller
 */
class ProductController extends Controller
{
      /**
 * @param private $users - массив, содержащий информацию о продуктах: название, цена,
 *                                                                     количество и категория
 * public $title - заголовок
 */
    private $products;
    public $title;
    
    public function __construct()
    {
        $this->products = [
		1 => [
			'name'     => 'product1',
			'price'    => 100,
			'quantity' => 5,
			'category' => 'category1',
		],
		2 => [
			'name'     => 'product2',
			'price'    => 200,
			'quantity' => 6,
			'category' => 'category2',
		],
		3 => [
			'name'     => 'product3',
			'price'    => 300,
			'quantity' => 7,
			'category' => 'category2',
		],
		4 => [
			'name'     => 'product4',
			'price'    => 400,
			'quantity' => 8,
			'category' => 'category3',
		],
		5 => [
			'name'     => 'product5',
			'price'    => 500,
			'quantity' => 9,
			'category' => 'category3',
		],
	];
    }

/*
 * Функция вывода продукта по определенному id
 * @param numeric $id
 * @return параметры пользоватетля $this->products[$id]
 */	
	public function show($params){
	    $id = $params['n'];
	    $this->title  = "Продукт {$id}";
        if (isset($this->products[$id])) {
            //var_dump($this->products[$id]);
            
            return $this->render('product/show', [
                'product' => $this->products[$id]
            ]);
        } else {
            echo "Продукт не найден";
        }

	}
	
    /*
 * Функция вывода всех продуктов и информации о них
  * @return параметры продукта array products
 */	
	public function all(){
	    $this->title  = "Список продуктов";
	    return $this->render('product/all', [
            'products' => $this->products
        ]);
	}
	
	public function one($params)
		{
			$product = (new Product) -> getById($params['id']);
			
			$this->title = $product['name'];
			return $this->render('product/one', [
				'text' => [
                            'price' => $product['price'],
                            'quantity' => $product['quantity'],
                            'category' => $product['category'],
                            'description' => $product['description'],
                            ],
				'h1' => $this->title
			]);
		}
		
	public function many()
		{
			$this->title = 'Товары';
			
			$products = (new Product) -> getAll();
			return $this->render('product/many', [
				'products' => $products,
				'h1' => $this->title
			]);
		}	
}