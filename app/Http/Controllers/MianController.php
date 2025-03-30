<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class MianController extends Controller
{
    public function index()
    {
        // devolvendo todos os dados de uma tabela
        //$clientes = DB::table('clients')->get();

        // apresentar num array associativo
        //$clientes = DB::table('clients')->get()->toArray();

        // apresentar num array de arrays assciativos
//        $results = DB::table('products')->get()->map(function ($item) {
//            return (array) $item;
//        });

        // apresentar os dados a partir dos resultados
//        $products = DB::table('products')->get();
//        foreach ($products as $product) {
//            echo $product->product_name . "<br>";
//        }

        // obter apenas algumas colunas
        $products = DB::table('products')->get(['product_name', 'price']);

        // pluck - obter de forma simples os dadosde uma coluna especifica
        $results = DB::table('products')->pluck('product_name');

        // devolver apenas a primeira linha de um resultado
        $resultsF = DB::table('products')->get()->first();

        // devolver apenas a ultina linha de um resultado
        $resultsL = DB::table('products')->get()->last();

        // SELECT * FROM products WHERE id=10
        $results = DB::table('products')->find(10);

        // select com where
        //$products = DB::table('products')->where('id', 10)->first(); ou
        $products1 = Db::table('products')->where('id','>=',10)->get();
        $products = DB::table('products')->select(['product_name', 'price'])->get();

        // Select * from products WHERE price > 70
        $products = DB::table('products')->where('price','>=',70)->get();

        // SELECT * FROM products WHERE price > 50 AND product_name LIKE A%
        $products = DB::table('products')->where('price','>', 50)
                    ->where('product_name','like','A%')->get();

        // SELECT * FROM products WHERE price > 80 OR product_name LIKE A%
        $products = DB::table('products')->where('price','>',80)->orwhere('product_name','like','A%')->get();

        $products = DB::table('products')->where([
            ['price','>=',70],
            ['product_name', 'like', 'A%']
        ])->get();

        $products = DB::table('products')->where('price', '>', 90)
            ->orwhere(function ($query) {
               $query->where('product_name', 'Banana')->orwhere('product_name', 'cereja');
            })->get();

        $this->showDataTable($products);
//        $this->showRawData($results);
//        $this->showDataTable($products);
//        $this->showRawData($resultsF);
//        $this->showRawData($resultsL);
        //$this->showDataTable($clientes);
    }

    private function showRawData($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    public function showDataTable($data)
    {
        echo '<table border="1">';
        echo '<tr>';
        foreach ($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach ($data as $value) {
        echo '<tr>';
        foreach ($value as $key => $value) {
            echo '<td>' . $value . '</td>';
        }

        echo '</tr>';
        }
        echo '</table>';
    }


}
