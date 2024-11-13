namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GrupoEconomico;

class SearchGrupos extends Component
{
public $search = '';

public function render()
{
$grupos = GrupoEconomico::where('nome', 'like', '%' . $this->search . '%')->get();

return view('livewire.search-grupos', ['grupos' => $grupos]);
}
}