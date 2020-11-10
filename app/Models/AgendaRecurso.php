<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaRecurso extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agenda_recurso';

    protected $fillable = ['author_id','status'];

    public function modelo()
    {
        return $this->morphTo();
    }
}
