<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Support\Facades\Hash as Hash;

class Usuario extends Model
{
    //
    protected $connection = 'sqlite';
    protected $table = 'usuario';

    public static function listar(int $limite)
    {
        $sql = self::where("id",">",2)->select([
            "id",
            "nome",
            "email",
            "senha",
            "data_cadastro"
        ])->limit($limite);

        return $sql->get();

    }

    public static function  cadastrar(Request $request)
    {
       return self::insert([
            "nome" => $request->input('nome'),
            "email" => $request->input('email'),
            "senha" => Hash::make($request->input('senha')),
            "data_cadastro" => new Carbon()
        ]);
        
    }
}
