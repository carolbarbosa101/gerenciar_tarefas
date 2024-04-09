<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $table = 'steps';
    protected $fillable = ['Titulo', 'Descricao','tarefas_id'];

    public function tarefas(){
        return $this->belongsTo(tarefas::class);
    }
}
