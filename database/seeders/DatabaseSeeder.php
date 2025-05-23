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
        $params = [[
            'id' => 661,
            'name' => 'Super Usuario',
            'email' => 'manuel.fabregat@valmecas.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$Wy6rEoq4kzaOPIkSg8WVuOWIuOwajQCLvuohfQDAoD4djGPCR.2w.',
            'remember_token' => Str::random(10),
            'created_at' => '2014-10-22 17:10:12',
            'updated_at' => '2024-09-19 13:22:46',
        ],
        [
            'id' => 662,
            'name' => 'BP OIL Castellon',
            'email' => 'ducman666@gmail.com',
            'email_verified_at' => '2022-09-15 14:39:28',
            'password' => '$2y$10$qNaknnZDS2BYi.1SSFSJjOdKjafdjhiJKteuxUXZIdm1wELcH6dK.',
            'remember_token' => Str::random(10),
            'created_at' => '2014-11-11 19:22:18',
            'updated_at' => '2025-02-18 14:07:08',
        ],
        [
            'id' => 663,
            'name' => 'ducman',
            'email' => 'manuelpp@valemcas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$zci2apfAL.MjAYnbgbwX6eBuAh1LfRAdpdALila4CXUoVzEe28aby',
            'remember_token' => Str::random(10),
            'created_at' => '2014-11-12 16:31:11',
            'updated_at' => '2018-02-09 17:32:16',
        ],
        [
            'id' => 664,
            'name' => 'Francisco Fernandez',
            'email' => 'paco@valmecas.es',
            'email_verified_at' => null,
            'password' => '$2y$10$d1Bra6OIeqbl9FpSNJf5FOfe4FAunxcjF8wnrab3cJ.CRSPf5VyzW',
            'remember_token' => '',
            'created_at' => '2014-11-13 14:50:31',
            'updated_at' => '2025-04-11 10:35:29',
        ],
        [
            'id' => 665,
            'name' => 'Ube Chemical Corporation',
            'email' => 'manuel.fabregat@ubeube.es',
            'email_verified_at' => null,
            'password' => '$2y$10$K3mwZ3ohmYu1eYJJLZeZt.Az30OFD9ly/md/j2Pxgq4F6vKLmzUwm',
            'remember_token' => '',
            'created_at' => '2017-01-27 12:42:12',
            'updated_at' => '2025-04-09 08:58:41',
        ],
        [
            'id' => 666,
            'name' => 'praxaircs',
            'email' => 'praxair@info.es',
            'email_verified_at' => null,
            'password' => '$2y$10$nrfEiYyG2j3l.bmYIwHp3Ot25ps20qVCFtBy3h5TRsJ20G5ds.PgW',
            'remember_token' => '',
            'created_at' => '2017-02-09 18:34:24',
            'updated_at' => '2017-03-16 08:39:27',
        ],
        [
            'id' => 667,
            'name' => 'gnfsagunto',
            'email' => 'gnfsagunto@info.es',
            'email_verified_at' => null,
            'password' => '$2y$10$31xkWCOu00sR.ebT.IylnOzJQKNMnm6UCqEA9CNAIf56A2zlx4aK2',
            'remember_token' => '',
            'created_at' => '2017-02-09 18:37:31',
            'updated_at' => null,
        ],
        [
            'id' => 668,
            'name' => 'comeval',
            'email' => 'comeval@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$qyDT3dmQC6twIVP4D4D.k.qXUepMQ.u2Xefl.9SpZR6U1NcqFY75K',
            'remember_token' => '',
            'created_at' => '2017-03-03 08:36:22',
            'updated_at' => '2018-07-16 08:49:58',
        ],
        [
            'id' => 669,
            'name' => 'Administrador',
            'email' => 'adm@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$OIgYIPqSgUgGgHB08IiyEu1CUscj9h0RF.nZQv/LInQvhX5e0RhR.',
            'remember_token' => '',
            'created_at' => '2019-04-23 09:35:45',
            'updated_at' => '2020-01-09 07:56:20',
        ],
        [
            'id' => 670,
            'name' => 'velan',
            'email' => 'velan@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$fqJ5wOPjAQV5hCyuA15dneHbdJNxYRSGDPQddOcUpS/nDPmhsKTYG',
            'remember_token' => '',
            'created_at' => '2019-07-31 12:51:46',
            'updated_at' => '2019-08-06 05:26:25',
        ],
        [
            'id' => 671,
            'name' => 'Iberdrola Castellón',
            'email' => 'pp@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$rw8rbrytmUPHIc46OY.Lo.tApK7/6jO72/TXDahrxxkkWFHVrwEgC',
            'remember_token' => '',
            'created_at' => '2019-08-26 11:36:21',
            'updated_at' => '2021-03-09 16:46:22',
        ],
        [
            'id' => 672,
            'name' => 'Masol Iberia Biofuel',
            'email' => 'masol@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$/yep.7mLS/7UnwvP9eHZ0ev32xrGqdc/LRnuN6GNe8OzJvLcIluOa',
            'remember_token' => '',
            'created_at' => '2019-11-04 15:35:49',
            'updated_at' => '2021-10-20 13:01:44',
        ],
        [
            'id' => 673,
            'name' => 'sgs',
            'email' => 'sgs@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$72CGUmL9bLr.j57gI6wx9ehkbJnZPUL9p.Ou5wydw.19kGTkBsMyC',
            'remember_token' => '',
            'created_at' => '2021-02-25 12:08:10',
            'updated_at' => '2021-08-03 09:00:09',
        ],
        [
            'id' => 674,
            'name' => 'FERTIBERIA',
            'email' => 'info@fertib.com',
            'email_verified_at' => null,
            'password' => '$2y$10$d44jxGsUHxPXJRzxkUYgcOnBOK9DZDLCiUHlOVhYcA8Bb4EYIwz4a',
            'remember_token' => '',
            'created_at' => '2021-05-20 06:39:17',
            'updated_at' => '2024-11-25 12:46:14',
        ],
        [
            'id' => 675,
            'name' => 'Julen Cortijo',
            'email' => 'gabriel@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$Bx7VzcTuwvP0nP25f.tNWuXN7S.iuROVGhWx14nJRcSCkz4YWhBYK',
            'remember_token' => '',
            'created_at' => '2021-09-20 09:04:31',
            'updated_at' => '2023-10-09 15:57:00',
        ],
        [
            'id' => 676,
            'name' => 'Daniel Ferreres',
            'email' => 'dani@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$gTEbTzsiIFUFul8BD3t2ceZhPz5Ap/yDoUnB0IqwCXPKFkr1iWAJq',
            'remember_token' => '',
            'created_at' => '2022-05-06 09:09:24',
            'updated_at' => '2022-11-20 08:54:03',
        ],
        [
            'id' => 677,
            'name' => 'Manuel Fabregat',
            'email' => 'manuel@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$yw1n6FeyPAhmhz4jxsB6b.x5KacgJ61c8VxoPlPqiwMHDjuNxYDvK',
            'remember_token' => '',
            'created_at' => '2022-05-10 15:18:05',
            'updated_at' => '2022-05-11 11:27:34',
        ],
        [
            'id' => 678,
            'name' => 'Nuria Martínez',
            'email' => 'nuria@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$78xxsmztrjycIs2cv/ICsusOwYDvGobdPfs12Da2.NPG8zfJKSlSC',
            'remember_token' => '',
            'created_at' => '2022-07-12 12:48:12',
            'updated_at' => '2022-11-15 06:53:27',
        ],
        [
            'id' => 679,
            'name' => 'Jordi Molés',
            'email' => 'jordi@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$WvDwe26BRnZf.OzaLp0ZUON8PokNUFZCZeU2V004f43Ne65qJr8JK',
            'remember_token' => '',
            'created_at' => '2022-09-16 15:11:54',
            'updated_at' => '2022-11-19 15:27:59',
        ],
        [
            'id' => 680,
            'name' => 'Miriam Sastre',
            'email' => 'miriam@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$eO7CRNwDT3Ngkm3DxvIsCeybdux9Mmndf28oCNjWWDwe/6G0uw4MG',
            'remember_token' => '',
            'created_at' => '2022-09-16 21:13:33',
            'updated_at' => '2022-12-15 16:42:39',
        ],
        [
            'id' => 681,
            'name' => 'OEMC',
            'email' => 'oemc@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$jW0VIUycZC1FfO0gqOlCCOPa6bH5mr8hfMAqxUCKijlGAqxQAmM6e',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:08:57',
            'updated_at' => '2022-10-23 23:34:33',
        ],
        [
            'id' => 682,
            'name' => 'Manuel Castillo',
            'email' => 'manucastillo@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$EiU6ikmQemZW3YfrR.cgPOTOlh.90DAublKZLADXdlBWYl5uHTr32',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:11:56',
            'updated_at' => '2022-11-12 16:37:34',
        ],
        [
            'id' => 683,
            'name' => 'Francisco Castro',
            'email' => 'francastro@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$ahKWSbQUXMnLce0Nyc32RO.N6DQ9JWr0Pu9Wopc5H74QY/mH.dF6e',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:12:40',
            'updated_at' => '2022-11-14 15:23:36',
        ],
        [
            'id' => 684,
            'name' => 'Javier Gasch',
            'email' => 'javiergasch@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$wqUMKY1CTke1tfirfXZMr.rAo2bSJU65xKnrpSVkOnPBAQ5AgpeVm',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:13:28',
            'updated_at' => '2022-11-19 17:42:06',
        ],
        [
            'id' => 685,
            'name' => 'Valter Caccia',
            'email' => 'valter@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$Yt3buTPOARW/nNQQ.eSbH.wd767rI6rVbLDYES1ASciI9nCr69fOW',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:15:35',
            'updated_at' => '2022-11-20 09:47:27',
        ],
        [
            'id' => 686,
            'name' => 'Vicente Vilarrocha',
            'email' => 'vicente_vilarrocha@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$n5WswZr03wl.NbPWAfbLC.kG8KVWtTBUnfWmpuxeTR0iSoMCU4XV6',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:16:13',
            'updated_at' => '2022-11-21 07:10:48',
        ],
        [
            'id' => 687,
            'name' => 'Jose Escudero',
            'email' => 'joseescudero@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$cE2Z3BruYa9xkcER47mVH.qPiKEEvAqyvZKfMM8zFPoDTJ.DCxVNC',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:16:53',
            'updated_at' => '2022-11-19 15:43:27',
        ],
        [
            'id' => 688,
            'name' => 'Antonio Merida',
            'email' => 'antoniomerida@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$BXZq9lnAiAzjG1IEb7VrpOInJdqvJ9q/1LJvS4vgekFccEPGuJqUa',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:17:29',
            'updated_at' => '2022-11-17 09:02:20',
        ],
        [
            'id' => 689,
            'name' => 'Cesar Estebanez',
            'email' => 'cesarestebanez@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$YUB/Ms0/VoSRXXdAiSh98u5QC0Q769bv0KBH.2RFMqd66oztUkEo2',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:21:08',
            'updated_at' => '2022-11-29 14:41:11',
        ],
        [
            'id' => 690,
            'name' => 'Valmecas SL',
            'email' => 'valme2022@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$NuTHz.fPhNlXYYbm2nohX.19ZKzAfCn/aB6beZ4I2//lM.2T/e0N6',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:43:48',
            'updated_at' => '2022-11-22 07:32:04',
        ],
        [
            'id' => 691,
            'name' => 'Izanda SL',
            'email' => 'izn@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$UPnxayVpTQj6b6sQAXys.OPXtuoIFFE8B5TBEB.clyJkFCRiCMquK',
            'remember_token' => '',
            'created_at' => '2022-09-21 07:48:48',
            'updated_at' => '2022-09-21 07:49:57',
        ],
        [
            'id' => 692,
            'name' => 'Maria Moliner',
            'email' => 'maria@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$bfmA2Ktfs1rvuCveiMZs4uhJBAPtlMO1u9TgYSQQI3kdUgIbFWuTy',
            'remember_token' => '',
            'created_at' => '2022-09-28 12:35:12',
            'updated_at' => '2022-10-27 05:49:25',
        ],
        [
            'id' => 693,
            'name' => 'Izanda S.L.',
            'email' => 'magali@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$Pl.J8QTWW4/aGTTfqgG6WeCpDxEthw0d6AQrkDd3nZb7h5FyFJenm',
            'remember_token' => '',
            'created_at' => '2022-10-17 14:16:01',
            'updated_at' => '2022-11-21 09:10:31',
        ],
        [
            'id' => 694,
            'name' => 'Security',
            'email' => 'securit@valmecas.com',
            'email_verified_at' => null,
            'password' => '$2y$10$CizAKpemLJQ/nqHQJAVuku.imaSTIE0ocXZK5FhPIa3KgRmsUHoFa',
            'remember_token' => '',
            'created_at' => '2022-10-28 00:12:10',
            'updated_at' => '2022-11-01 05:28:32',
        ]];
        foreach ($params as $param) {
            User::factory()->create($param);
        }
        // User::factory()->create(
            // [
            // 'name' => 'Jorge Manitto',
            // 'email' => 'jorgemanitto@hotmail.com',
            // 'email_verified_at' => now(),
            // 'password' => static::$password ??= Hash::make('password'),
            // 'remember_token' => Str::random(10),
            // ]
        // );

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

        // DB::table('empresas_valvula')->insert($empresas);

    }
}
