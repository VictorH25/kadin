<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa o trait HasFactory, que facilita a criação de fábricas para testes e seeders
use Illuminate\Database\Eloquent\Model; // Importa a classe base Model do Laravel, de onde o modelo herda

class Additional extends Model
{
    use HasFactory; // Usa o trait HasFactory, útil para criação de fábricas de dados em testes ou seeders

    /**
     * A tabela associada ao modelo.
     *
     * @var string
     */
    protected $table = 'additionals'; // Define explicitamente o nome da tabela associada a este modelo, que é 'additionals'

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value', 'product_id', 'active' // Define os campos que podem ser atribuídos em massa
    ];
}
