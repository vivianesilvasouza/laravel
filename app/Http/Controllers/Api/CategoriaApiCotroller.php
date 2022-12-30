<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\Validator;

class CategoriaApiCotroller extends Controller
{

    public function __construct(categorias $categorias, Request $request)
    {
        $this->categorias = $categorias;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->categorias->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        // $this->validate($request, $this->categorias->rules());
        // $validator = Validator::make($request->all(), [
        //     'nome' => 'required|unique:categorias',
        //     'link' => 'link',
        //     'ativo' => 'ativo'
        // ]);

        $dataForm = $request->all();

        $data = $this->categorias->create($dataForm);

        return response()->json($data, 201);
    }

    public function show($id)
    {
        if (!$data = $this->categorias->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        } else {
            return response()->json($data);
        }
    }

    public function update(Request $request, $id)
    {
        if (!$data = $this->categorias->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        }
        $dataForm = $request->all();

        $data->update($dataForm);

        return response()->json($data);
    }


    public function destroy($id)
    {
        if (!$data = $this->categorias->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado!'], 404);
        }
        $data->delete();
        return response()->json(['success' => 'Deletado com sucesso!']);
    }
}
