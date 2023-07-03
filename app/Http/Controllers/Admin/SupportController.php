<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {
        $supports = $support->all(); //aqui recupera todos os dados do banco.view os dados (subject, body, status)

        return view('admin/supports/index', compact('supports')); //compact mostra os dados na view
    }

    public function show(String|int $id, Support $support) //metodo show
    {
        if /* usa o if para verificar se o id existe ou não. Caso não exista ele retorna para a view anterior */ (!$support = $support->find($id) /* recupera o support pelo id */) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request, Support $support) // injeção de dependência //o request tras todos os dados que vem da requis
    {
        $data = $request->validate(); //inserindo regitros no banco
        $data['status'] = 'a';
        $support->create($data);//jogo o $data em create, para cadastrar todos os dados

        return redirect()->route('supports.index'); //redireciona a rota para a index quando for submetido
    }

    public function edit(Support $support, string|int $id) //metodo que mostra o registro na view
    {
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        }
        return view('admin/supports.edit', compact('support'));
    }

    public function update(StoreUpdateSupport $request, Support $support, string $id) //metodo que edita o registro
    {
        dd($request->all());
        if (!$support = $support->find($id)) {
            return back();
        }

        //    $support->subject = $request->subject;
        //    $support->body = $request->body;
        //    $support->save();

        $support->update($request->validated()); //o validated pega agora só os metodos que foram validados
        return redirect()->route('supports.index');
    }

    public function destroy(Support $support, String|int $id) //metodo para deletar registros
    {
        if (!$support = $support->find($id)) {
            return back();
        }
        $support->delete();

        return redirect()->route('supports.index');
    }
}
