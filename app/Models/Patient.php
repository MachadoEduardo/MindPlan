<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'des_regis', 'first_name', 'last_name', 'gender', 'nacionality', 'blood_type', 'birthdate', 'email'
    ];
    
    // Relacionamentos (exemplo com agendamentos)
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    
    // Mutators (para hash da senha)
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($patients) {
            $patients->password = bcrypt($patients->password);
        });
    }
}
