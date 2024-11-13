// app/Http/Controllers/GrupoEconomicoController.php
namespace App\Http\Controllers;

use App\Models\GrupoEconomico;
use Illuminate\Http\Request;

class GrupoEconomicoController extends Controller
{
public function index()
{
return GrupoEconomico::all();
}

public function store(Request $request)
{
$request->validate(['nome' => 'required|string|max:255']);
return GrupoEconomico::create($request->all());
}

public function show(GrupoEconomico $grupoEconomico)
{
return $grupoEconomico;
}

public function update(Request $request, GrupoEconomico $grupoEconomico)
{
$request->validate(['nome' => 'required|string|max:255']);
$grupoEconomico->update($request->all());
return $grupoEconomico;
}

public function destroy(GrupoEconomico $grupoEconomico)
{
$grupoEconomico->delete();
return response()->noContent();
}
}