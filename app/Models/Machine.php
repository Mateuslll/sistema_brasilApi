<?php


//com essa estrutura o laravel sabe que quando eu chamar essa models, ele deve recuperar os registros de uma tabela machines no banco de dados.

namespace App\Models;  // vá no composer veja o Ellias (\ APP) apos qual o caminho deseja carregar, assim o composer sabe o que deve carregar

use Illuminate\Database\Eloquent\Model;  //
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Machine extends Model
{
    use HasFactory ;
    protected $fillable = ['name'];
}
