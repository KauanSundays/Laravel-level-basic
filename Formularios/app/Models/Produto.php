<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco_custo',
        'disponivel',
    ];

    public const DISPONIVEL_SIM = 'sim';
    public const DISPONIVEL_NAO = 'nao';

    public function getDisponibilidadeFormatadaAttribute()
    {
        return $this->attributes['disponivel'] === self::DISPONIVEL_SIM ? 'Sim' : 'Não';
    }
}
