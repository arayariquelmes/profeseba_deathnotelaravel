<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//ORM: Object Relational Mapping
//Español flaite antiguo: Un archivo php que se comuna con la bd y en el cual
//yo no tengo que hacer el insert,update,delete,select
class CausaMuerte extends Model
{
    protected $table = "causas_muertes";
    use HasFactory;
}
