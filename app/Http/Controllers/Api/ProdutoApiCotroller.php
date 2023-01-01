<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoApiCotroller extends Controller
{

    public function __construct(produto $produtos, Request $request)
    {
        $this->produtos = $produtos;
        $this->request = $request;
    }

    public function index(Request $request)
    {
        $dataForm = $request->all();
        $totalvalor = $dataForm['totalvalor'];
        $produtos = Produto::orderBy('preco')->get();
        $sum = 0;
        $totalcasa = 0;
        foreach ($produtos as $key => $value) {
            if (isset($value->preco))
                $sum += $value->preco;
            $totalcasa += 1;
            if ($sum <= $totalvalor)
                break;
        }
        return response()->json($totalcasa);
    }
}
