<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacientes extends Model
{
    use HasFactory;
    protected $fillable = [
        'primer_Nombre',
        'segundo_Nombre',
        'tercer_Nombre',
        'primer_Apellido',
        'segundo_Apellido',
        'Apellido_de_Casado',
        'Estado_Civil',
        'idDatos_DPI',
        'Acceso_al_Igss',
        'Nacionalidad',
        'Edad',
        'Fecha_Nacimiento',
        'id_Estado_Paciente',
        'Religion',
        'Direccion',
        'Zona',
        'Colonia_Barrio_Aldea',
        'ID_Municipio',
        'Referencia_Vivienda',
        'Telefono_Casa',
        'Celular_1',
        'Celular_2',
    ];
}
