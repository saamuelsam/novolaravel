<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;

use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {}

    public function index(Request $request)
    {
        $supports = $this->service->getAll($request->filter);
        /* $supports = $support->all(); //aqui recupera todos os dados do banco.view os dados (subject, body, status) */
       
        return view('admin/supports/index', compact('supports')); //compact mostra os dados na view
    }

    public function show(String|int $id, Support $support) //metodo show
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }

        /* if  usa o if para verificar se o id existe ou não. Caso não exista ele retorna para a view anterior  (!$support = $support->find($id)  recupera o support pelo id ) {
            return back();
        }
        return view('admin/supports/show', compact('support'));
    } */

    public function create()
    {
        return view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request) // injeção de dependência //o request tras todos os dados que vem da requis
    {
        $this->service->new(
            CreateSupportDTO::MakeFromRequest($request)
        
    );

        return redirect()->route('supports.index'); //redireciona a rota para a index quando for submetido
    }

    public function edit(string   $id) //metodo que mostra o registro na view
    {

        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin/supports.edit', compact('support'));
    }

       /*  if (!$support = $support->where('id', $id)->first()) {
            return back();
        }
        return view('admin/supports.edit', compact('support'));
    }
 */
    public function update(StoreUpdateSupport $request, Support $support, string $id) //metodo que edita o registro
    {
        
        $support = $this->service->update(
            StoreUpdateSupport::MakeFromRequest($request),
        );
        if (!$support) {
            return back();
        }
        
        //    $support->subject = $request->subject;
        //    $support->body = $request->body;
        //    $support->save()
        
        return redirect()->route('supports.index');
    }

    public function destroy( String $id) //metodo para deletar registros
    {
         $this->service->delete($id);
    
        return redirect()->route('supports.index');
    }
}
