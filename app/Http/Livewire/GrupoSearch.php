use Livewire\Component;
use App\Models\Grupo;

class GrupoSearch extends Component
{
public $search = '';

public function render()
{
$grupos = Grupo::where('nome', 'like', '%' . $this->search . '%')->get();
return view('livewire.grupo-search', ['grupos' => $grupos]);
}
}