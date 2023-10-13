<?php
namespace App\Repositories;
use App\Models\Alumno;
class AlumnoRepository {
    
    public function obtenerAlumnos()
 {
    return Alumno::all();
 }
 public function obtenerAlumnoPorId($id){
 return Alumno::find($id);
 }
 public function insertarAlumno($alumno){
    Alumno::create([
    'nombre' => $alumno->nombre,
    'apellido' => $alumno->apellido,
    'edad' => $alumno->edad,
    'direccion' => $alumno->direccion,
    ]);
    }
 
}
