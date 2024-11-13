// app/Models/GrupoEconomico.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class GrupoEconomico extends Model
{
use LogsActivity;

protected static $logAttributes = ['nome'];
}

public function bandeiras()
{
return $this->hasMany(Bandeira::class);
}
}