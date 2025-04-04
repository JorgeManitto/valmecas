<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected static ?string $password;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Jorge Manitto',
        //     'email' => 'jorgemanitto@hotmail.com',
        //     'email_verified_at' => now(),
        //     'password' => static::$password ??= Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);

        $empresas = [
            ['nombre' => 'BP Oil Refineria de Castellon', 'estado' => 'activo'],
            ['nombre' => 'UBE Chemical Europe', 'estado' => 'activo'],
            ['nombre' => 'NIPPON GASES ESPAÑA S.L.U.', 'estado' => 'activo'],
            ['nombre' => 'Gas Natural Fenosa', 'estado' => 'activo'],
            ['nombre' => 'Iberdrola CS', 'estado' => 'activo'],
            ['nombre' => 'Comeval Valve Systems S.L.', 'estado' => 'activo'],
            ['nombre' => 'Masol Iberia Biofuel SL', 'estado' => 'activo'],
            ['nombre' => 'Proymec S.L.', 'estado' => 'activo'],
            ['nombre' => 'Fertiberia S.A.', 'estado' => 'activo'],
            ['nombre' => 'Latty Iberica', 'estado' => 'activo'],
            ['nombre' => 'Leatransa', 'estado' => 'activo'],
            ['nombre' => 'KLINGER SAIDI SPAIN S.A.U.', 'estado' => 'activo'],
            ['nombre' => 'STEINMÜLLER BABCOCK ENVIRONMENT GmbH', 'estado' => 'activo'],
            ['nombre' => 'Indunaval S.L.', 'estado' => 'activo'],
            ['nombre' => 'VARADERO VINARÓS, S.L.U.', 'estado' => 'activo'],
            ['nombre' => 'CONSULMAR SL', 'estado' => 'activo'],
            ['nombre' => 'Meisa S.A.', 'estado' => 'activo'],
            ['nombre' => 'ENAGAS TRANSPORTE, S.A.U.', 'estado' => 'activo'],
            ['nombre' => 'Domo Medio Ambiente S.L.', 'estado' => 'activo'],
            ['nombre' => 'MUELLES Y BALLESTAS HISPANO-ALEMANAS', 'estado' => 'activo'],
            ['nombre' => 'Oxigeno de Sagunto SL', 'estado' => 'activo'],
            ['nombre' => 'Cuñado SAU', 'estado' => 'activo'],
            ['nombre' => 'SE de Carburos Metalicos SA', 'estado' => 'activo'],
            ['nombre' => 'Clemar generación SL', 'estado' => 'activo'],
        ];

        DB::table('empresas_valvula')->insert($empresas);

    }
}
