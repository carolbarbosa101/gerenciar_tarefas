<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    use HasFactory;
    protected $table = 'tarefas';
    protected $fillable = ['titulo', 'descricao'];

    public function step(){
        return $this->hasMany(Step::class);
    }
}
