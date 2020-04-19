<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    public $timestamps = false;

    //protected $table = 'tarefas';

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    protected $fillable = ['titulo', 'resolvido'];
}
