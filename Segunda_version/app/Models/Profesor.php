<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesores";

    protected $primaryKey = "id";
    protected $fillable = ['nombre','apellido', 'profesion', 'grado_academico', 'telefono'];
    protected $hidden = ['id'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
