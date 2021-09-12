<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Categories;
use App\Repository\Categories\CategoriesRepositoryInterface;


class ProductController extends Controller
{

  /*
 *
 *@ var CategoriesRepositoryInterface
 *
 */

   private $categories;

    /*
 *
 *@ var CategoriesController
 *  constructor
 *
 */

  public function __construct(CategoriesRepositoryInterface $categories)

  {
      $this->categories = $categories;
  }


    public function index(){

     // recupere la liste des categeoris
       $categoris = $this->categories->getAll();

       return view('product.product', compact('categoris'));
    }

}
