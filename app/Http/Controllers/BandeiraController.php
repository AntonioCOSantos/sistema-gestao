// app/Http/Controllers/BandeiraController.php

namespace App\Http\Controllers;

use App\Models\Bandeira;
use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class BandeiraController extends Controller
{
public function index()
{
$bandeiras = Bandeira::with('grupoEconomico')->get();
return view('bandeiras.index', compact('bandeiras'));
}

public function create()
{
$gruposEconomicos = GrupoEconomico::all();
return view('bandeiras.create', compact('gruposEconomicos'));
}

public function store(Request $request)
{
$request->validate([
'nome' => 'required|string|max:255',
'grupo_economico_id' => 'required|exists:grupos_economicos,id',
]);

Bandeira::create($request->all());
return redirect()->route('bandeiras.index')->with('success', 'Bandeira criada com sucesso!');
}

public function show(Bandeira $bandeira)
{
return view('bandeiras.show', compact('bandeira'));
}

public function edit(Bandeira $bandeira)
{
$gruposEconomicos = GrupoEconomico::all();
return view('bandeiras.edit', compact('bandeira', 'gruposEconomicos'));
}

public function update(Request $request, Bandeira $bandeira)
{
$request->validate([
'nome' => 'required|string|max:255',
'grupo_economico_id' => 'required|exists:grupos_economicos,id',
]);

$bandeira->update($request->all());
return redirect()->route('bandeiras.index')->with('success', 'Bandeira atualizada com sucesso!');
}

public function destroy(Bandeira $bandeira)
{
$bandeira->delete();
return redirect()->route('bandeiras.index')->with('success', 'Bandeira excluída com sucesso!');
}
}