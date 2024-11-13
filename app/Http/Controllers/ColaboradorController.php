// app/Http/Controllers/ColaboradorController.php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use App\Models\Unidade;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ColaboradorController extends Controller
{
public function index()
{
$colaboradores = Colaborador::with('unidade')->get();
return view('colaboradores.index', compact('colaboradores'));
}

public function export()
{
return Excel::download(new ColaboradoresExport, 'colaboradores.xlsx');
}

public function create()
{
$unidades = Unidade::all();
return view('colaboradores.create', compact('unidades'));
}

public function store(Request $request)
{
$request->validate([
'nome' => 'required|string|max:255',
'email' => 'required|email|unique:colaboradores,email',
'cpf' => 'required|digits:11|unique:colaboradores,cpf',
'unidade_id' => 'required|exists:unidades,id',
]);

Colaborador::create($request->all());
return redirect()->route('colaboradores.index')->with('success', 'Colaborador criado com sucesso!');
}

public function show(Colaborador $colaborador)
{
return view('colaboradores.show', compact('colaborador'));
}

public function edit(Colaborador $colaborador)
{
$unidades = Unidade::all();
return view('colaboradores.edit', compact('colaborador', 'unidades'));
}

public function update(Request $request, Colaborador $colaborador)
{
$request->validate([
'nome' => 'required|string|max:255',
'email' => 'required|email|unique:colaboradores,email,' . $colaborador->id,
'cpf' => 'required|digits:11|unique:colaboradores,cpf,' . $colaborador->id,
'unidade_id' => 'required|exists:unidades,id',
]);

$colaborador->update($request->all());
return redirect()->route('colaboradores.index')->with('success', 'Colaborador atualizado com sucesso!');
}

public function destroy(Colaborador $colaborador)
{
$colaborador->delete();
return redirect()->route('colaboradores.index')->with('success', 'Colaborador excluído com sucesso!');
}
}