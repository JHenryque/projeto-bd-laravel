<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // INSERT
        //        adicionar um novo cliente
//        $nne_cliente = [
//          'client_name' => 'Jose Henrique',
//          'email' => 'josehenrique@gmail.com',
//        ];
//        DB::table('clients')->insert($nne_cliente);

//        DB::table('clients')->insert([
//            'client_name' => 'Jose Henrique Ferreira',
//            'email' => 'josehenriquef@gmail.com',
//        ]);

        //adicionar dois cliente
//        DB::table('clients')->insert([
//           [
//               'client_name' => 'Joao victor',
//               'email' => 'joaovictor@gmail.com',
//               'created_at' => Carbon::now(),
//           ],
//            [
//                'client_name' => 'Micael da silva',
//                'email' => 'micaeldasilva@gmail.com',
//                'created_at' => Carbon::now(),
//            ],
//        ]);

        // UPDATE
//        DB::table('clients')->where('id', 501)->update([
//            'client_name' => 'Jose',
//            'email' => 'jose@gmail.com',
//            'updated_at' => Carbon::now(),
//        ]);

        //DB::table('clients')->where('client_name', 'Jose')->Update(['created_at' => Carbon::now()]);

        // DELETE
        DB::table('clients')->where('Client_name', 'Jose')->delete(); // poderia deletar peloID

        // SOFTDELETE

        DB::table('clients')->where('Client_name', 'Joao victor')->update(['deleted_at' => Carbon::now()]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
