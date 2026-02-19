<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'titulo'=>'Don Quijote de la Mancha',
            'descripcion'=>'Aventuras de un caballero loco',
            'ISBN'=>9788424115531,
            'copias_totales'=>5,
            'copias_disponibles'=>5,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('books')->insert([
            'titulo'=>'Cien años de soledad',
            'descripcion'=>'Historia de la familia Buendía',
            'ISBN'=>9780307350435,
            'copias_totales'=>3,
            'copias_disponibles'=>3,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        DB::table('books')->insert([
            'titulo'=>'Orgullo y Prejuicio',
            'descripcion'=>'Novela de costumbres y amor',
            'ISBN'=>9788467040418,
            'copias_totales'=>4,
            'copias_disponibles'=>4,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'Crimen y Castigo',
            'descripcion'=>'Dilemas morales y justicia',
            'ISBN'=>9788420651330,
            'copias_totales'=>2,
            'copias_disponibles'=>2,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'El Principito',
            'descripcion'=>'Relato corto sobre la vida',
            'ISBN'=>9780156013987,
            'copias_totales'=>10,
            'copias_disponibles'=>10,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'1984',
            'descripcion'=>'Distopía política y vigilancia',
            'ISBN'=>9788466332514,
            'copias_totales'=>6,
            'copias_disponibles'=>6,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'La Odisea',
            'descripcion'=>'Viaje épico de Ulises',
            'ISBN'=>9788424924515,
            'copias_totales'=>3,
            'copias_disponibles'=>3,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'El Gran Gatsby',
            'descripcion'=>'El sueño americano en los años 20',
            'ISBN'=>9788467036411,
            'copias_totales'=>4,
            'copias_disponibles'=>4,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'Rayuela',
            'descripcion'=>'Novela experimental de Cortázar',
            'ISBN'=>9788420431321,
            'copias_totales'=>2,
            'copias_disponibles'=>2,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('books')->insert([
            'titulo'=>'Hamlet',
            'descripcion'=>'Tragedia de venganza y duda',
            'ISBN'=>9788437600123,
            'copias_totales'=>5,
            'copias_disponibles'=>5,
            'disponible'=>1,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
