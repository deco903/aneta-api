<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('r_city')->delete();

        \DB::table('r_city')->insert(array (
            0 =>
            array (
                'id' => 1101,
                'city' => 'KABUPATEN SIMEULUE',
                'state_id' => 11,
            ),
            1 =>
            array (
                'id' => 1102,
                'city' => 'KABUPATEN ACEH SINGKIL',
                'state_id' => 11,
            ),
            2 =>
            array (
                'id' => 1103,
                'city' => 'KABUPATEN ACEH SELATAN',
                'state_id' => 11,
            ),
            3 =>
            array (
                'id' => 1104,
                'city' => 'KABUPATEN ACEH TENGGARA',
                'state_id' => 11,
            ),
            4 =>
            array (
                'id' => 1105,
                'city' => 'KABUPATEN ACEH TIMUR',
                'state_id' => 11,
            ),
            5 =>
            array (
                'id' => 1106,
                'city' => 'KABUPATEN ACEH TENGAH',
                'state_id' => 11,
            ),
            6 =>
            array (
                'id' => 1107,
                'city' => 'KABUPATEN ACEH BARAT',
                'state_id' => 11,
            ),
            7 =>
            array (
                'id' => 1108,
                'city' => 'KABUPATEN ACEH BESAR',
                'state_id' => 11,
            ),
            8 =>
            array (
                'id' => 1109,
                'city' => 'KABUPATEN PIDIE',
                'state_id' => 11,
            ),
            9 =>
            array (
                'id' => 1110,
                'city' => 'KABUPATEN BIREUEN',
                'state_id' => 11,
            ),
            10 =>
            array (
                'id' => 1111,
                'city' => 'KABUPATEN ACEH UTARA',
                'state_id' => 11,
            ),
            11 =>
            array (
                'id' => 1112,
                'city' => 'KABUPATEN ACEH BARAT DAYA',
                'state_id' => 11,
            ),
            12 =>
            array (
                'id' => 1113,
                'city' => 'KABUPATEN GAYO LUES',
                'state_id' => 11,
            ),
            13 =>
            array (
                'id' => 1114,
                'city' => 'KABUPATEN ACEH TAMIANG',
                'state_id' => 11,
            ),
            14 =>
            array (
                'id' => 1115,
                'city' => 'KABUPATEN NAGAN RAYA',
                'state_id' => 11,
            ),
            15 =>
            array (
                'id' => 1116,
                'city' => 'KABUPATEN ACEH JAYA',
                'state_id' => 11,
            ),
            16 =>
            array (
                'id' => 1117,
                'city' => 'KABUPATEN BENER MERIAH',
                'state_id' => 11,
            ),
            17 =>
            array (
                'id' => 1118,
                'city' => 'KABUPATEN PIDIE JAYA',
                'state_id' => 11,
            ),
            18 =>
            array (
                'id' => 1171,
                'city' => 'KOTA BANDA ACEH',
                'state_id' => 11,
            ),
            19 =>
            array (
                'id' => 1172,
                'city' => 'KOTA SABANG',
                'state_id' => 11,
            ),
            20 =>
            array (
                'id' => 1173,
                'city' => 'KOTA LANGSA',
                'state_id' => 11,
            ),
            21 =>
            array (
                'id' => 1174,
                'city' => 'KOTA LHOKSEUMAWE',
                'state_id' => 11,
            ),
            22 =>
            array (
                'id' => 1175,
                'city' => 'KOTA SUBULUSSALAM',
                'state_id' => 11,
            ),
            23 =>
            array (
                'id' => 1201,
                'city' => 'KABUPATEN NIAS',
                'state_id' => 12,
            ),
            24 =>
            array (
                'id' => 1202,
                'city' => 'KABUPATEN MANDAILING NATAL',
                'state_id' => 12,
            ),
            25 =>
            array (
                'id' => 1203,
                'city' => 'KABUPATEN TAPANULI SELATAN',
                'state_id' => 12,
            ),
            26 =>
            array (
                'id' => 1204,
                'city' => 'KABUPATEN TAPANULI TENGAH',
                'state_id' => 12,
            ),
            27 =>
            array (
                'id' => 1205,
                'city' => 'KABUPATEN TAPANULI UTARA',
                'state_id' => 12,
            ),
            28 =>
            array (
                'id' => 1206,
                'city' => 'KABUPATEN TOBA SAMOSIR',
                'state_id' => 12,
            ),
            29 =>
            array (
                'id' => 1207,
                'city' => 'KABUPATEN LABUHAN BATU',
                'state_id' => 12,
            ),
            30 =>
            array (
                'id' => 1208,
                'city' => 'KABUPATEN ASAHAN',
                'state_id' => 12,
            ),
            31 =>
            array (
                'id' => 1209,
                'city' => 'KABUPATEN SIMALUNGUN',
                'state_id' => 12,
            ),
            32 =>
            array (
                'id' => 1210,
                'city' => 'KABUPATEN DAIRI',
                'state_id' => 12,
            ),
            33 =>
            array (
                'id' => 1211,
                'city' => 'KABUPATEN KARO',
                'state_id' => 12,
            ),
            34 =>
            array (
                'id' => 1212,
                'city' => 'KABUPATEN DELI SERDANG',
                'state_id' => 12,
            ),
            35 =>
            array (
                'id' => 1213,
                'city' => 'KABUPATEN LANGKAT',
                'state_id' => 12,
            ),
            36 =>
            array (
                'id' => 1214,
                'city' => 'KABUPATEN NIAS SELATAN',
                'state_id' => 12,
            ),
            37 =>
            array (
                'id' => 1215,
                'city' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'state_id' => 12,
            ),
            38 =>
            array (
                'id' => 1216,
                'city' => 'KABUPATEN PAKPAK BHARAT',
                'state_id' => 12,
            ),
            39 =>
            array (
                'id' => 1217,
                'city' => 'KABUPATEN SAMOSIR',
                'state_id' => 12,
            ),
            40 =>
            array (
                'id' => 1218,
                'city' => 'KABUPATEN SERDANG BEDAGAI',
                'state_id' => 12,
            ),
            41 =>
            array (
                'id' => 1219,
                'city' => 'KABUPATEN BATU BARA',
                'state_id' => 12,
            ),
            42 =>
            array (
                'id' => 1220,
                'city' => 'KABUPATEN PADANG LAWAS UTARA',
                'state_id' => 12,
            ),
            43 =>
            array (
                'id' => 1221,
                'city' => 'KABUPATEN PADANG LAWAS',
                'state_id' => 12,
            ),
            44 =>
            array (
                'id' => 1222,
                'city' => 'KABUPATEN LABUHAN BATU SELATAN',
                'state_id' => 12,
            ),
            45 =>
            array (
                'id' => 1223,
                'city' => 'KABUPATEN LABUHAN BATU UTARA',
                'state_id' => 12,
            ),
            46 =>
            array (
                'id' => 1224,
                'city' => 'KABUPATEN NIAS UTARA',
                'state_id' => 12,
            ),
            47 =>
            array (
                'id' => 1225,
                'city' => 'KABUPATEN NIAS BARAT',
                'state_id' => 12,
            ),
            48 =>
            array (
                'id' => 1271,
                'city' => 'KOTA SIBOLGA',
                'state_id' => 12,
            ),
            49 =>
            array (
                'id' => 1272,
                'city' => 'KOTA TANJUNG BALAI',
                'state_id' => 12,
            ),
            50 =>
            array (
                'id' => 1273,
                'city' => 'KOTA PEMATANG SIANTAR',
                'state_id' => 12,
            ),
            51 =>
            array (
                'id' => 1274,
                'city' => 'KOTA TEBING TINGGI',
                'state_id' => 12,
            ),
            52 =>
            array (
                'id' => 1275,
                'city' => 'KOTA MEDAN',
                'state_id' => 12,
            ),
            53 =>
            array (
                'id' => 1276,
                'city' => 'KOTA BINJAI',
                'state_id' => 12,
            ),
            54 =>
            array (
                'id' => 1277,
                'city' => 'KOTA PADANGSIDIMPUAN',
                'state_id' => 12,
            ),
            55 =>
            array (
                'id' => 1278,
                'city' => 'KOTA GUNUNGSITOLI',
                'state_id' => 12,
            ),
            56 =>
            array (
                'id' => 1301,
                'city' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'state_id' => 13,
            ),
            57 =>
            array (
                'id' => 1302,
                'city' => 'KABUPATEN PESISIR SELATAN',
                'state_id' => 13,
            ),
            58 =>
            array (
                'id' => 1303,
                'city' => 'KABUPATEN SOLOK',
                'state_id' => 13,
            ),
            59 =>
            array (
                'id' => 1304,
                'city' => 'KABUPATEN SIJUNJUNG',
                'state_id' => 13,
            ),
            60 =>
            array (
                'id' => 1305,
                'city' => 'KABUPATEN TANAH DATAR',
                'state_id' => 13,
            ),
            61 =>
            array (
                'id' => 1306,
                'city' => 'KABUPATEN PADANG PARIAMAN',
                'state_id' => 13,
            ),
            62 =>
            array (
                'id' => 1307,
                'city' => 'KABUPATEN AGAM',
                'state_id' => 13,
            ),
            63 =>
            array (
                'id' => 1308,
                'city' => 'KABUPATEN LIMA PULUH KOTA',
                'state_id' => 13,
            ),
            64 =>
            array (
                'id' => 1309,
                'city' => 'KABUPATEN PASAMAN',
                'state_id' => 13,
            ),
            65 =>
            array (
                'id' => 1310,
                'city' => 'KABUPATEN SOLOK SELATAN',
                'state_id' => 13,
            ),
            66 =>
            array (
                'id' => 1311,
                'city' => 'KABUPATEN DHARMASRAYA',
                'state_id' => 13,
            ),
            67 =>
            array (
                'id' => 1312,
                'city' => 'KABUPATEN PASAMAN BARAT',
                'state_id' => 13,
            ),
            68 =>
            array (
                'id' => 1371,
                'city' => 'KOTA PADANG',
                'state_id' => 13,
            ),
            69 =>
            array (
                'id' => 1372,
                'city' => 'KOTA SOLOK',
                'state_id' => 13,
            ),
            70 =>
            array (
                'id' => 1373,
                'city' => 'KOTA SAWAH LUNTO',
                'state_id' => 13,
            ),
            71 =>
            array (
                'id' => 1374,
                'city' => 'KOTA PADANG PANJANG',
                'state_id' => 13,
            ),
            72 =>
            array (
                'id' => 1375,
                'city' => 'KOTA BUKITTINGGI',
                'state_id' => 13,
            ),
            73 =>
            array (
                'id' => 1376,
                'city' => 'KOTA PAYAKUMBUH',
                'state_id' => 13,
            ),
            74 =>
            array (
                'id' => 1377,
                'city' => 'KOTA PARIAMAN',
                'state_id' => 13,
            ),
            75 =>
            array (
                'id' => 1401,
                'city' => 'KABUPATEN KUANTAN SINGINGI',
                'state_id' => 14,
            ),
            76 =>
            array (
                'id' => 1402,
                'city' => 'KABUPATEN INDRAGIRI HULU',
                'state_id' => 14,
            ),
            77 =>
            array (
                'id' => 1403,
                'city' => 'KABUPATEN INDRAGIRI HILIR',
                'state_id' => 14,
            ),
            78 =>
            array (
                'id' => 1404,
                'city' => 'KABUPATEN PELALAWAN',
                'state_id' => 14,
            ),
            79 =>
            array (
                'id' => 1405,
                'city' => 'KABUPATEN S I A K',
                'state_id' => 14,
            ),
            80 =>
            array (
                'id' => 1406,
                'city' => 'KABUPATEN KAMPAR',
                'state_id' => 14,
            ),
            81 =>
            array (
                'id' => 1407,
                'city' => 'KABUPATEN ROKAN HULU',
                'state_id' => 14,
            ),
            82 =>
            array (
                'id' => 1408,
                'city' => 'KABUPATEN BENGKALIS',
                'state_id' => 14,
            ),
            83 =>
            array (
                'id' => 1409,
                'city' => 'KABUPATEN ROKAN HILIR',
                'state_id' => 14,
            ),
            84 =>
            array (
                'id' => 1410,
                'city' => 'KABUPATEN KEPULAUAN MERANTI',
                'state_id' => 14,
            ),
            85 =>
            array (
                'id' => 1471,
                'city' => 'KOTA PEKANBARU',
                'state_id' => 14,
            ),
            86 =>
            array (
                'id' => 1473,
                'city' => 'KOTA D U M A I',
                'state_id' => 14,
            ),
            87 =>
            array (
                'id' => 1501,
                'city' => 'KABUPATEN KERINCI',
                'state_id' => 15,
            ),
            88 =>
            array (
                'id' => 1502,
                'city' => 'KABUPATEN MERANGIN',
                'state_id' => 15,
            ),
            89 =>
            array (
                'id' => 1503,
                'city' => 'KABUPATEN SAROLANGUN',
                'state_id' => 15,
            ),
            90 =>
            array (
                'id' => 1504,
                'city' => 'KABUPATEN BATANG HARI',
                'state_id' => 15,
            ),
            91 =>
            array (
                'id' => 1505,
                'city' => 'KABUPATEN MUARO JAMBI',
                'state_id' => 15,
            ),
            92 =>
            array (
                'id' => 1506,
                'city' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'state_id' => 15,
            ),
            93 =>
            array (
                'id' => 1507,
                'city' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'state_id' => 15,
            ),
            94 =>
            array (
                'id' => 1508,
                'city' => 'KABUPATEN TEBO',
                'state_id' => 15,
            ),
            95 =>
            array (
                'id' => 1509,
                'city' => 'KABUPATEN BUNGO',
                'state_id' => 15,
            ),
            96 =>
            array (
                'id' => 1571,
                'city' => 'KOTA JAMBI',
                'state_id' => 15,
            ),
            97 =>
            array (
                'id' => 1572,
                'city' => 'KOTA SUNGAI PENUH',
                'state_id' => 15,
            ),
            98 =>
            array (
                'id' => 1601,
                'city' => 'KABUPATEN OGAN KOMERING ULU',
                'state_id' => 16,
            ),
            99 =>
            array (
                'id' => 1602,
                'city' => 'KABUPATEN OGAN KOMERING ILIR',
                'state_id' => 16,
            ),
            100 =>
            array (
                'id' => 1603,
                'city' => 'KABUPATEN MUARA ENIM',
                'state_id' => 16,
            ),
            101 =>
            array (
                'id' => 1604,
                'city' => 'KABUPATEN LAHAT',
                'state_id' => 16,
            ),
            102 =>
            array (
                'id' => 1605,
                'city' => 'KABUPATEN MUSI RAWAS',
                'state_id' => 16,
            ),
            103 =>
            array (
                'id' => 1606,
                'city' => 'KABUPATEN MUSI BANYUASIN',
                'state_id' => 16,
            ),
            104 =>
            array (
                'id' => 1607,
                'city' => 'KABUPATEN BANYU ASIN',
                'state_id' => 16,
            ),
            105 =>
            array (
                'id' => 1608,
                'city' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'state_id' => 16,
            ),
            106 =>
            array (
                'id' => 1609,
                'city' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'state_id' => 16,
            ),
            107 =>
            array (
                'id' => 1610,
                'city' => 'KABUPATEN OGAN ILIR',
                'state_id' => 16,
            ),
            108 =>
            array (
                'id' => 1611,
                'city' => 'KABUPATEN EMPAT LAWANG',
                'state_id' => 16,
            ),
            109 =>
            array (
                'id' => 1612,
                'city' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'state_id' => 16,
            ),
            110 =>
            array (
                'id' => 1613,
                'city' => 'KABUPATEN MUSI RAWAS UTARA',
                'state_id' => 16,
            ),
            111 =>
            array (
                'id' => 1671,
                'city' => 'KOTA PALEMBANG',
                'state_id' => 16,
            ),
            112 =>
            array (
                'id' => 1672,
                'city' => 'KOTA PRABUMULIH',
                'state_id' => 16,
            ),
            113 =>
            array (
                'id' => 1673,
                'city' => 'KOTA PAGAR ALAM',
                'state_id' => 16,
            ),
            114 =>
            array (
                'id' => 1674,
                'city' => 'KOTA LUBUKLINGGAU',
                'state_id' => 16,
            ),
            115 =>
            array (
                'id' => 1701,
                'city' => 'KABUPATEN BENGKULU SELATAN',
                'state_id' => 17,
            ),
            116 =>
            array (
                'id' => 1702,
                'city' => 'KABUPATEN REJANG LEBONG',
                'state_id' => 17,
            ),
            117 =>
            array (
                'id' => 1703,
                'city' => 'KABUPATEN BENGKULU UTARA',
                'state_id' => 17,
            ),
            118 =>
            array (
                'id' => 1704,
                'city' => 'KABUPATEN KAUR',
                'state_id' => 17,
            ),
            119 =>
            array (
                'id' => 1705,
                'city' => 'KABUPATEN SELUMA',
                'state_id' => 17,
            ),
            120 =>
            array (
                'id' => 1706,
                'city' => 'KABUPATEN MUKOMUKO',
                'state_id' => 17,
            ),
            121 =>
            array (
                'id' => 1707,
                'city' => 'KABUPATEN LEBONG',
                'state_id' => 17,
            ),
            122 =>
            array (
                'id' => 1708,
                'city' => 'KABUPATEN KEPAHIANG',
                'state_id' => 17,
            ),
            123 =>
            array (
                'id' => 1709,
                'city' => 'KABUPATEN BENGKULU TENGAH',
                'state_id' => 17,
            ),
            124 =>
            array (
                'id' => 1771,
                'city' => 'KOTA BENGKULU',
                'state_id' => 17,
            ),
            125 =>
            array (
                'id' => 1801,
                'city' => 'KABUPATEN LAMPUNG BARAT',
                'state_id' => 18,
            ),
            126 =>
            array (
                'id' => 1802,
                'city' => 'KABUPATEN TANGGAMUS',
                'state_id' => 18,
            ),
            127 =>
            array (
                'id' => 1803,
                'city' => 'KABUPATEN LAMPUNG SELATAN',
                'state_id' => 18,
            ),
            128 =>
            array (
                'id' => 1804,
                'city' => 'KABUPATEN LAMPUNG TIMUR',
                'state_id' => 18,
            ),
            129 =>
            array (
                'id' => 1805,
                'city' => 'KABUPATEN LAMPUNG TENGAH',
                'state_id' => 18,
            ),
            130 =>
            array (
                'id' => 1806,
                'city' => 'KABUPATEN LAMPUNG UTARA',
                'state_id' => 18,
            ),
            131 =>
            array (
                'id' => 1807,
                'city' => 'KABUPATEN WAY KANAN',
                'state_id' => 18,
            ),
            132 =>
            array (
                'id' => 1808,
                'city' => 'KABUPATEN TULANGBAWANG',
                'state_id' => 18,
            ),
            133 =>
            array (
                'id' => 1809,
                'city' => 'KABUPATEN PESAWARAN',
                'state_id' => 18,
            ),
            134 =>
            array (
                'id' => 1810,
                'city' => 'KABUPATEN PRINGSEWU',
                'state_id' => 18,
            ),
            135 =>
            array (
                'id' => 1811,
                'city' => 'KABUPATEN MESUJI',
                'state_id' => 18,
            ),
            136 =>
            array (
                'id' => 1812,
                'city' => 'KABUPATEN TULANG BAWANG BARAT',
                'state_id' => 18,
            ),
            137 =>
            array (
                'id' => 1813,
                'city' => 'KABUPATEN PESISIR BARAT',
                'state_id' => 18,
            ),
            138 =>
            array (
                'id' => 1871,
                'city' => 'KOTA BANDAR LAMPUNG',
                'state_id' => 18,
            ),
            139 =>
            array (
                'id' => 1872,
                'city' => 'KOTA METRO',
                'state_id' => 18,
            ),
            140 =>
            array (
                'id' => 1901,
                'city' => 'KABUPATEN BANGKA',
                'state_id' => 19,
            ),
            141 =>
            array (
                'id' => 1902,
                'city' => 'KABUPATEN BELITUNG',
                'state_id' => 19,
            ),
            142 =>
            array (
                'id' => 1903,
                'city' => 'KABUPATEN BANGKA BARAT',
                'state_id' => 19,
            ),
            143 =>
            array (
                'id' => 1904,
                'city' => 'KABUPATEN BANGKA TENGAH',
                'state_id' => 19,
            ),
            144 =>
            array (
                'id' => 1905,
                'city' => 'KABUPATEN BANGKA SELATAN',
                'state_id' => 19,
            ),
            145 =>
            array (
                'id' => 1906,
                'city' => 'KABUPATEN BELITUNG TIMUR',
                'state_id' => 19,
            ),
            146 =>
            array (
                'id' => 1971,
                'city' => 'KOTA PANGKAL PINANG',
                'state_id' => 19,
            ),
            147 =>
            array (
                'id' => 2101,
                'city' => 'KABUPATEN KARIMUN',
                'state_id' => 21,
            ),
            148 =>
            array (
                'id' => 2102,
                'city' => 'KABUPATEN BINTAN',
                'state_id' => 21,
            ),
            149 =>
            array (
                'id' => 2103,
                'city' => 'KABUPATEN NATUNA',
                'state_id' => 21,
            ),
            150 =>
            array (
                'id' => 2104,
                'city' => 'KABUPATEN LINGGA',
                'state_id' => 21,
            ),
            151 =>
            array (
                'id' => 2105,
                'city' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'state_id' => 21,
            ),
            152 =>
            array (
                'id' => 2171,
                'city' => 'KOTA B A T A M',
                'state_id' => 21,
            ),
            153 =>
            array (
                'id' => 2172,
                'city' => 'KOTA TANJUNG PINANG',
                'state_id' => 21,
            ),
            154 =>
            array (
                'id' => 3101,
                'city' => 'KABUPATEN KEPULAUAN SERIBU',
                'state_id' => 31,
            ),
            155 =>
            array (
                'id' => 3171,
                'city' => 'KOTA JAKARTA SELATAN',
                'state_id' => 31,
            ),
            156 =>
            array (
                'id' => 3172,
                'city' => 'KOTA JAKARTA TIMUR',
                'state_id' => 31,
            ),
            157 =>
            array (
                'id' => 3173,
                'city' => 'KOTA JAKARTA PUSAT',
                'state_id' => 31,
            ),
            158 =>
            array (
                'id' => 3174,
                'city' => 'KOTA JAKARTA BARAT',
                'state_id' => 31,
            ),
            159 =>
            array (
                'id' => 3175,
                'city' => 'KOTA JAKARTA UTARA',
                'state_id' => 31,
            ),
            160 =>
            array (
                'id' => 3201,
                'city' => 'KABUPATEN BOGOR',
                'state_id' => 32,
            ),
            161 =>
            array (
                'id' => 3202,
                'city' => 'KABUPATEN SUKABUMI',
                'state_id' => 32,
            ),
            162 =>
            array (
                'id' => 3203,
                'city' => 'KABUPATEN CIANJUR',
                'state_id' => 32,
            ),
            163 =>
            array (
                'id' => 3204,
                'city' => 'KABUPATEN BANDUNG',
                'state_id' => 32,
            ),
            164 =>
            array (
                'id' => 3205,
                'city' => 'KABUPATEN GARUT',
                'state_id' => 32,
            ),
            165 =>
            array (
                'id' => 3206,
                'city' => 'KABUPATEN TASIKMALAYA',
                'state_id' => 32,
            ),
            166 =>
            array (
                'id' => 3207,
                'city' => 'KABUPATEN CIAMIS',
                'state_id' => 32,
            ),
            167 =>
            array (
                'id' => 3208,
                'city' => 'KABUPATEN KUNINGAN',
                'state_id' => 32,
            ),
            168 =>
            array (
                'id' => 3209,
                'city' => 'KABUPATEN CIREBON',
                'state_id' => 32,
            ),
            169 =>
            array (
                'id' => 3210,
                'city' => 'KABUPATEN MAJALENGKA',
                'state_id' => 32,
            ),
            170 =>
            array (
                'id' => 3211,
                'city' => 'KABUPATEN SUMEDANG',
                'state_id' => 32,
            ),
            171 =>
            array (
                'id' => 3212,
                'city' => 'KABUPATEN INDRAMAYU',
                'state_id' => 32,
            ),
            172 =>
            array (
                'id' => 3213,
                'city' => 'KABUPATEN SUBANG',
                'state_id' => 32,
            ),
            173 =>
            array (
                'id' => 3214,
                'city' => 'KABUPATEN PURWAKARTA',
                'state_id' => 32,
            ),
            174 =>
            array (
                'id' => 3215,
                'city' => 'KABUPATEN KARAWANG',
                'state_id' => 32,
            ),
            175 =>
            array (
                'id' => 3216,
                'city' => 'KABUPATEN BEKASI',
                'state_id' => 32,
            ),
            176 =>
            array (
                'id' => 3217,
                'city' => 'KABUPATEN BANDUNG BARAT',
                'state_id' => 32,
            ),
            177 =>
            array (
                'id' => 3218,
                'city' => 'KABUPATEN PANGANDARAN',
                'state_id' => 32,
            ),
            178 =>
            array (
                'id' => 3271,
                'city' => 'KOTA BOGOR',
                'state_id' => 32,
            ),
            179 =>
            array (
                'id' => 3272,
                'city' => 'KOTA SUKABUMI',
                'state_id' => 32,
            ),
            180 =>
            array (
                'id' => 3273,
                'city' => 'KOTA BANDUNG',
                'state_id' => 32,
            ),
            181 =>
            array (
                'id' => 3274,
                'city' => 'KOTA CIREBON',
                'state_id' => 32,
            ),
            182 =>
            array (
                'id' => 3275,
                'city' => 'KOTA BEKASI',
                'state_id' => 32,
            ),
            183 =>
            array (
                'id' => 3276,
                'city' => 'KOTA DEPOK',
                'state_id' => 32,
            ),
            184 =>
            array (
                'id' => 3277,
                'city' => 'KOTA CIMAHI',
                'state_id' => 32,
            ),
            185 =>
            array (
                'id' => 3278,
                'city' => 'KOTA TASIKMALAYA',
                'state_id' => 32,
            ),
            186 =>
            array (
                'id' => 3279,
                'city' => 'KOTA BANJAR',
                'state_id' => 32,
            ),
            187 =>
            array (
                'id' => 3301,
                'city' => 'KABUPATEN CILACAP',
                'state_id' => 33,
            ),
            188 =>
            array (
                'id' => 3302,
                'city' => 'KABUPATEN BANYUMAS',
                'state_id' => 33,
            ),
            189 =>
            array (
                'id' => 3303,
                'city' => 'KABUPATEN PURBALINGGA',
                'state_id' => 33,
            ),
            190 =>
            array (
                'id' => 3304,
                'city' => 'KABUPATEN BANJARNEGARA',
                'state_id' => 33,
            ),
            191 =>
            array (
                'id' => 3305,
                'city' => 'KABUPATEN KEBUMEN',
                'state_id' => 33,
            ),
            192 =>
            array (
                'id' => 3306,
                'city' => 'KABUPATEN PURWOREJO',
                'state_id' => 33,
            ),
            193 =>
            array (
                'id' => 3307,
                'city' => 'KABUPATEN WONOSOBO',
                'state_id' => 33,
            ),
            194 =>
            array (
                'id' => 3308,
                'city' => 'KABUPATEN MAGELANG',
                'state_id' => 33,
            ),
            195 =>
            array (
                'id' => 3309,
                'city' => 'KABUPATEN BOYOLALI',
                'state_id' => 33,
            ),
            196 =>
            array (
                'id' => 3310,
                'city' => 'KABUPATEN KLATEN',
                'state_id' => 33,
            ),
            197 =>
            array (
                'id' => 3311,
                'city' => 'KABUPATEN SUKOHARJO',
                'state_id' => 33,
            ),
            198 =>
            array (
                'id' => 3312,
                'city' => 'KABUPATEN WONOGIRI',
                'state_id' => 33,
            ),
            199 =>
            array (
                'id' => 3313,
                'city' => 'KABUPATEN KARANGANYAR',
                'state_id' => 33,
            ),
            200 =>
            array (
                'id' => 3314,
                'city' => 'KABUPATEN SRAGEN',
                'state_id' => 33,
            ),
            201 =>
            array (
                'id' => 3315,
                'city' => 'KABUPATEN GROBOGAN',
                'state_id' => 33,
            ),
            202 =>
            array (
                'id' => 3316,
                'city' => 'KABUPATEN BLORA',
                'state_id' => 33,
            ),
            203 =>
            array (
                'id' => 3317,
                'city' => 'KABUPATEN REMBANG',
                'state_id' => 33,
            ),
            204 =>
            array (
                'id' => 3318,
                'city' => 'KABUPATEN PATI',
                'state_id' => 33,
            ),
            205 =>
            array (
                'id' => 3319,
                'city' => 'KABUPATEN KUDUS',
                'state_id' => 33,
            ),
            206 =>
            array (
                'id' => 3320,
                'city' => 'KABUPATEN JEPARA',
                'state_id' => 33,
            ),
            207 =>
            array (
                'id' => 3321,
                'city' => 'KABUPATEN DEMAK',
                'state_id' => 33,
            ),
            208 =>
            array (
                'id' => 3322,
                'city' => 'KABUPATEN SEMARANG',
                'state_id' => 33,
            ),
            209 =>
            array (
                'id' => 3323,
                'city' => 'KABUPATEN TEMANGGUNG',
                'state_id' => 33,
            ),
            210 =>
            array (
                'id' => 3324,
                'city' => 'KABUPATEN KENDAL',
                'state_id' => 33,
            ),
            211 =>
            array (
                'id' => 3325,
                'city' => 'KABUPATEN BATANG',
                'state_id' => 33,
            ),
            212 =>
            array (
                'id' => 3326,
                'city' => 'KABUPATEN PEKALONGAN',
                'state_id' => 33,
            ),
            213 =>
            array (
                'id' => 3327,
                'city' => 'KABUPATEN PEMALANG',
                'state_id' => 33,
            ),
            214 =>
            array (
                'id' => 3328,
                'city' => 'KABUPATEN TEGAL',
                'state_id' => 33,
            ),
            215 =>
            array (
                'id' => 3329,
                'city' => 'KABUPATEN BREBES',
                'state_id' => 33,
            ),
            216 =>
            array (
                'id' => 3371,
                'city' => 'KOTA MAGELANG',
                'state_id' => 33,
            ),
            217 =>
            array (
                'id' => 3372,
                'city' => 'KOTA SURAKARTA',
                'state_id' => 33,
            ),
            218 =>
            array (
                'id' => 3373,
                'city' => 'KOTA SALATIGA',
                'state_id' => 33,
            ),
            219 =>
            array (
                'id' => 3374,
                'city' => 'KOTA SEMARANG',
                'state_id' => 33,
            ),
            220 =>
            array (
                'id' => 3375,
                'city' => 'KOTA PEKALONGAN',
                'state_id' => 33,
            ),
            221 =>
            array (
                'id' => 3376,
                'city' => 'KOTA TEGAL',
                'state_id' => 33,
            ),
            222 =>
            array (
                'id' => 3401,
                'city' => 'KABUPATEN KULON PROGO',
                'state_id' => 34,
            ),
            223 =>
            array (
                'id' => 3402,
                'city' => 'KABUPATEN BANTUL',
                'state_id' => 34,
            ),
            224 =>
            array (
                'id' => 3403,
                'city' => 'KABUPATEN GUNUNG KIDUL',
                'state_id' => 34,
            ),
            225 =>
            array (
                'id' => 3404,
                'city' => 'KABUPATEN SLEMAN',
                'state_id' => 34,
            ),
            226 =>
            array (
                'id' => 3471,
                'city' => 'KOTA YOGYAKARTA',
                'state_id' => 34,
            ),
            227 =>
            array (
                'id' => 3501,
                'city' => 'KABUPATEN PACITAN',
                'state_id' => 35,
            ),
            228 =>
            array (
                'id' => 3502,
                'city' => 'KABUPATEN PONOROGO',
                'state_id' => 35,
            ),
            229 =>
            array (
                'id' => 3503,
                'city' => 'KABUPATEN TRENGGALEK',
                'state_id' => 35,
            ),
            230 =>
            array (
                'id' => 3504,
                'city' => 'KABUPATEN TULUNGAGUNG',
                'state_id' => 35,
            ),
            231 =>
            array (
                'id' => 3505,
                'city' => 'KABUPATEN BLITAR',
                'state_id' => 35,
            ),
            232 =>
            array (
                'id' => 3506,
                'city' => 'KABUPATEN KEDIRI',
                'state_id' => 35,
            ),
            233 =>
            array (
                'id' => 3507,
                'city' => 'KABUPATEN MALANG',
                'state_id' => 35,
            ),
            234 =>
            array (
                'id' => 3508,
                'city' => 'KABUPATEN LUMAJANG',
                'state_id' => 35,
            ),
            235 =>
            array (
                'id' => 3509,
                'city' => 'KABUPATEN JEMBER',
                'state_id' => 35,
            ),
            236 =>
            array (
                'id' => 3510,
                'city' => 'KABUPATEN BANYUWANGI',
                'state_id' => 35,
            ),
            237 =>
            array (
                'id' => 3511,
                'city' => 'KABUPATEN BONDOWOSO',
                'state_id' => 35,
            ),
            238 =>
            array (
                'id' => 3512,
                'city' => 'KABUPATEN SITUBONDO',
                'state_id' => 35,
            ),
            239 =>
            array (
                'id' => 3513,
                'city' => 'KABUPATEN PROBOLINGGO',
                'state_id' => 35,
            ),
            240 =>
            array (
                'id' => 3514,
                'city' => 'KABUPATEN PASURUAN',
                'state_id' => 35,
            ),
            241 =>
            array (
                'id' => 3515,
                'city' => 'KABUPATEN SIDOARJO',
                'state_id' => 35,
            ),
            242 =>
            array (
                'id' => 3516,
                'city' => 'KABUPATEN MOJOKERTO',
                'state_id' => 35,
            ),
            243 =>
            array (
                'id' => 3517,
                'city' => 'KABUPATEN JOMBANG',
                'state_id' => 35,
            ),
            244 =>
            array (
                'id' => 3518,
                'city' => 'KABUPATEN NGANJUK',
                'state_id' => 35,
            ),
            245 =>
            array (
                'id' => 3519,
                'city' => 'KABUPATEN MADIUN',
                'state_id' => 35,
            ),
            246 =>
            array (
                'id' => 3520,
                'city' => 'KABUPATEN MAGETAN',
                'state_id' => 35,
            ),
            247 =>
            array (
                'id' => 3521,
                'city' => 'KABUPATEN NGAWI',
                'state_id' => 35,
            ),
            248 =>
            array (
                'id' => 3522,
                'city' => 'KABUPATEN BOJONEGORO',
                'state_id' => 35,
            ),
            249 =>
            array (
                'id' => 3523,
                'city' => 'KABUPATEN TUBAN',
                'state_id' => 35,
            ),
            250 =>
            array (
                'id' => 3524,
                'city' => 'KABUPATEN LAMONGAN',
                'state_id' => 35,
            ),
            251 =>
            array (
                'id' => 3525,
                'city' => 'KABUPATEN GRESIK',
                'state_id' => 35,
            ),
            252 =>
            array (
                'id' => 3526,
                'city' => 'KABUPATEN BANGKALAN',
                'state_id' => 35,
            ),
            253 =>
            array (
                'id' => 3527,
                'city' => 'KABUPATEN SAMPANG',
                'state_id' => 35,
            ),
            254 =>
            array (
                'id' => 3528,
                'city' => 'KABUPATEN PAMEKASAN',
                'state_id' => 35,
            ),
            255 =>
            array (
                'id' => 3529,
                'city' => 'KABUPATEN SUMENEP',
                'state_id' => 35,
            ),
            256 =>
            array (
                'id' => 3571,
                'city' => 'KOTA KEDIRI',
                'state_id' => 35,
            ),
            257 =>
            array (
                'id' => 3572,
                'city' => 'KOTA BLITAR',
                'state_id' => 35,
            ),
            258 =>
            array (
                'id' => 3573,
                'city' => 'KOTA MALANG',
                'state_id' => 35,
            ),
            259 =>
            array (
                'id' => 3574,
                'city' => 'KOTA PROBOLINGGO',
                'state_id' => 35,
            ),
            260 =>
            array (
                'id' => 3575,
                'city' => 'KOTA PASURUAN',
                'state_id' => 35,
            ),
            261 =>
            array (
                'id' => 3576,
                'city' => 'KOTA MOJOKERTO',
                'state_id' => 35,
            ),
            262 =>
            array (
                'id' => 3577,
                'city' => 'KOTA MADIUN',
                'state_id' => 35,
            ),
            263 =>
            array (
                'id' => 3578,
                'city' => 'KOTA SURABAYA',
                'state_id' => 35,
            ),
            264 =>
            array (
                'id' => 3579,
                'city' => 'KOTA BATU',
                'state_id' => 35,
            ),
            265 =>
            array (
                'id' => 3601,
                'city' => 'KABUPATEN PANDEGLANG',
                'state_id' => 36,
            ),
            266 =>
            array (
                'id' => 3602,
                'city' => 'KABUPATEN LEBAK',
                'state_id' => 36,
            ),
            267 =>
            array (
                'id' => 3603,
                'city' => 'KABUPATEN TANGERANG',
                'state_id' => 36,
            ),
            268 =>
            array (
                'id' => 3604,
                'city' => 'KABUPATEN SERANG',
                'state_id' => 36,
            ),
            269 =>
            array (
                'id' => 3671,
                'city' => 'KOTA TANGERANG',
                'state_id' => 36,
            ),
            270 =>
            array (
                'id' => 3672,
                'city' => 'KOTA CILEGON',
                'state_id' => 36,
            ),
            271 =>
            array (
                'id' => 3673,
                'city' => 'KOTA SERANG',
                'state_id' => 36,
            ),
            272 =>
            array (
                'id' => 3674,
                'city' => 'KOTA TANGERANG SELATAN',
                'state_id' => 36,
            ),
            273 =>
            array (
                'id' => 5101,
                'city' => 'KABUPATEN JEMBRANA',
                'state_id' => 51,
            ),
            274 =>
            array (
                'id' => 5102,
                'city' => 'KABUPATEN TABANAN',
                'state_id' => 51,
            ),
            275 =>
            array (
                'id' => 5103,
                'city' => 'KABUPATEN BADUNG',
                'state_id' => 51,
            ),
            276 =>
            array (
                'id' => 5104,
                'city' => 'KABUPATEN GIANYAR',
                'state_id' => 51,
            ),
            277 =>
            array (
                'id' => 5105,
                'city' => 'KABUPATEN KLUNGKUNG',
                'state_id' => 51,
            ),
            278 =>
            array (
                'id' => 5106,
                'city' => 'KABUPATEN BANGLI',
                'state_id' => 51,
            ),
            279 =>
            array (
                'id' => 5107,
                'city' => 'KABUPATEN KARANG ASEM',
                'state_id' => 51,
            ),
            280 =>
            array (
                'id' => 5108,
                'city' => 'KABUPATEN BULELENG',
                'state_id' => 51,
            ),
            281 =>
            array (
                'id' => 5171,
                'city' => 'KOTA DENPASAR',
                'state_id' => 51,
            ),
            282 =>
            array (
                'id' => 5201,
                'city' => 'KABUPATEN LOMBOK BARAT',
                'state_id' => 52,
            ),
            283 =>
            array (
                'id' => 5202,
                'city' => 'KABUPATEN LOMBOK TENGAH',
                'state_id' => 52,
            ),
            284 =>
            array (
                'id' => 5203,
                'city' => 'KABUPATEN LOMBOK TIMUR',
                'state_id' => 52,
            ),
            285 =>
            array (
                'id' => 5204,
                'city' => 'KABUPATEN SUMBAWA',
                'state_id' => 52,
            ),
            286 =>
            array (
                'id' => 5205,
                'city' => 'KABUPATEN DOMPU',
                'state_id' => 52,
            ),
            287 =>
            array (
                'id' => 5206,
                'city' => 'KABUPATEN BIMA',
                'state_id' => 52,
            ),
            288 =>
            array (
                'id' => 5207,
                'city' => 'KABUPATEN SUMBAWA BARAT',
                'state_id' => 52,
            ),
            289 =>
            array (
                'id' => 5208,
                'city' => 'KABUPATEN LOMBOK UTARA',
                'state_id' => 52,
            ),
            290 =>
            array (
                'id' => 5271,
                'city' => 'KOTA MATARAM',
                'state_id' => 52,
            ),
            291 =>
            array (
                'id' => 5272,
                'city' => 'KOTA BIMA',
                'state_id' => 52,
            ),
            292 =>
            array (
                'id' => 5301,
                'city' => 'KABUPATEN SUMBA BARAT',
                'state_id' => 53,
            ),
            293 =>
            array (
                'id' => 5302,
                'city' => 'KABUPATEN SUMBA TIMUR',
                'state_id' => 53,
            ),
            294 =>
            array (
                'id' => 5303,
                'city' => 'KABUPATEN KUPANG',
                'state_id' => 53,
            ),
            295 =>
            array (
                'id' => 5304,
                'city' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'state_id' => 53,
            ),
            296 =>
            array (
                'id' => 5305,
                'city' => 'KABUPATEN TIMOR TENGAH UTARA',
                'state_id' => 53,
            ),
            297 =>
            array (
                'id' => 5306,
                'city' => 'KABUPATEN BELU',
                'state_id' => 53,
            ),
            298 =>
            array (
                'id' => 5307,
                'city' => 'KABUPATEN ALOR',
                'state_id' => 53,
            ),
            299 =>
            array (
                'id' => 5308,
                'city' => 'KABUPATEN LEMBATA',
                'state_id' => 53,
            ),
            300 =>
            array (
                'id' => 5309,
                'city' => 'KABUPATEN FLORES TIMUR',
                'state_id' => 53,
            ),
            301 =>
            array (
                'id' => 5310,
                'city' => 'KABUPATEN SIKKA',
                'state_id' => 53,
            ),
            302 =>
            array (
                'id' => 5311,
                'city' => 'KABUPATEN ENDE',
                'state_id' => 53,
            ),
            303 =>
            array (
                'id' => 5312,
                'city' => 'KABUPATEN NGADA',
                'state_id' => 53,
            ),
            304 =>
            array (
                'id' => 5313,
                'city' => 'KABUPATEN MANGGARAI',
                'state_id' => 53,
            ),
            305 =>
            array (
                'id' => 5314,
                'city' => 'KABUPATEN ROTE NDAO',
                'state_id' => 53,
            ),
            306 =>
            array (
                'id' => 5315,
                'city' => 'KABUPATEN MANGGARAI BARAT',
                'state_id' => 53,
            ),
            307 =>
            array (
                'id' => 5316,
                'city' => 'KABUPATEN SUMBA TENGAH',
                'state_id' => 53,
            ),
            308 =>
            array (
                'id' => 5317,
                'city' => 'KABUPATEN SUMBA BARAT DAYA',
                'state_id' => 53,
            ),
            309 =>
            array (
                'id' => 5318,
                'city' => 'KABUPATEN NAGEKEO',
                'state_id' => 53,
            ),
            310 =>
            array (
                'id' => 5319,
                'city' => 'KABUPATEN MANGGARAI TIMUR',
                'state_id' => 53,
            ),
            311 =>
            array (
                'id' => 5320,
                'city' => 'KABUPATEN SABU RAIJUA',
                'state_id' => 53,
            ),
            312 =>
            array (
                'id' => 5321,
                'city' => 'KABUPATEN MALAKA',
                'state_id' => 53,
            ),
            313 =>
            array (
                'id' => 5371,
                'city' => 'KOTA KUPANG',
                'state_id' => 53,
            ),
            314 =>
            array (
                'id' => 6101,
                'city' => 'KABUPATEN SAMBAS',
                'state_id' => 61,
            ),
            315 =>
            array (
                'id' => 6102,
                'city' => 'KABUPATEN BENGKAYANG',
                'state_id' => 61,
            ),
            316 =>
            array (
                'id' => 6103,
                'city' => 'KABUPATEN LANDAK',
                'state_id' => 61,
            ),
            317 =>
            array (
                'id' => 6104,
                'city' => 'KABUPATEN MEMPAWAH',
                'state_id' => 61,
            ),
            318 =>
            array (
                'id' => 6105,
                'city' => 'KABUPATEN SANGGAU',
                'state_id' => 61,
            ),
            319 =>
            array (
                'id' => 6106,
                'city' => 'KABUPATEN KETAPANG',
                'state_id' => 61,
            ),
            320 =>
            array (
                'id' => 6107,
                'city' => 'KABUPATEN SINTANG',
                'state_id' => 61,
            ),
            321 =>
            array (
                'id' => 6108,
                'city' => 'KABUPATEN KAPUAS HULU',
                'state_id' => 61,
            ),
            322 =>
            array (
                'id' => 6109,
                'city' => 'KABUPATEN SEKADAU',
                'state_id' => 61,
            ),
            323 =>
            array (
                'id' => 6110,
                'city' => 'KABUPATEN MELAWI',
                'state_id' => 61,
            ),
            324 =>
            array (
                'id' => 6111,
                'city' => 'KABUPATEN KAYONG UTARA',
                'state_id' => 61,
            ),
            325 =>
            array (
                'id' => 6112,
                'city' => 'KABUPATEN KUBU RAYA',
                'state_id' => 61,
            ),
            326 =>
            array (
                'id' => 6171,
                'city' => 'KOTA PONTIANAK',
                'state_id' => 61,
            ),
            327 =>
            array (
                'id' => 6172,
                'city' => 'KOTA SINGKAWANG',
                'state_id' => 61,
            ),
            328 =>
            array (
                'id' => 6201,
                'city' => 'KABUPATEN KOTAWARINGIN BARAT',
                'state_id' => 62,
            ),
            329 =>
            array (
                'id' => 6202,
                'city' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'state_id' => 62,
            ),
            330 =>
            array (
                'id' => 6203,
                'city' => 'KABUPATEN KAPUAS',
                'state_id' => 62,
            ),
            331 =>
            array (
                'id' => 6204,
                'city' => 'KABUPATEN BARITO SELATAN',
                'state_id' => 62,
            ),
            332 =>
            array (
                'id' => 6205,
                'city' => 'KABUPATEN BARITO UTARA',
                'state_id' => 62,
            ),
            333 =>
            array (
                'id' => 6206,
                'city' => 'KABUPATEN SUKAMARA',
                'state_id' => 62,
            ),
            334 =>
            array (
                'id' => 6207,
                'city' => 'KABUPATEN LAMANDAU',
                'state_id' => 62,
            ),
            335 =>
            array (
                'id' => 6208,
                'city' => 'KABUPATEN SERUYAN',
                'state_id' => 62,
            ),
            336 =>
            array (
                'id' => 6209,
                'city' => 'KABUPATEN KATINGAN',
                'state_id' => 62,
            ),
            337 =>
            array (
                'id' => 6210,
                'city' => 'KABUPATEN PULANG PISAU',
                'state_id' => 62,
            ),
            338 =>
            array (
                'id' => 6211,
                'city' => 'KABUPATEN GUNUNG MAS',
                'state_id' => 62,
            ),
            339 =>
            array (
                'id' => 6212,
                'city' => 'KABUPATEN BARITO TIMUR',
                'state_id' => 62,
            ),
            340 =>
            array (
                'id' => 6213,
                'city' => 'KABUPATEN MURUNG RAYA',
                'state_id' => 62,
            ),
            341 =>
            array (
                'id' => 6271,
                'city' => 'KOTA PALANGKA RAYA',
                'state_id' => 62,
            ),
            342 =>
            array (
                'id' => 6301,
                'city' => 'KABUPATEN TANAH LAUT',
                'state_id' => 63,
            ),
            343 =>
            array (
                'id' => 6302,
                'city' => 'KABUPATEN KOTA BARU',
                'state_id' => 63,
            ),
            344 =>
            array (
                'id' => 6303,
                'city' => 'KABUPATEN BANJAR',
                'state_id' => 63,
            ),
            345 =>
            array (
                'id' => 6304,
                'city' => 'KABUPATEN BARITO KUALA',
                'state_id' => 63,
            ),
            346 =>
            array (
                'id' => 6305,
                'city' => 'KABUPATEN TAPIN',
                'state_id' => 63,
            ),
            347 =>
            array (
                'id' => 6306,
                'city' => 'KABUPATEN HULU SUNGAI SELATAN',
                'state_id' => 63,
            ),
            348 =>
            array (
                'id' => 6307,
                'city' => 'KABUPATEN HULU SUNGAI TENGAH',
                'state_id' => 63,
            ),
            349 =>
            array (
                'id' => 6308,
                'city' => 'KABUPATEN HULU SUNGAI UTARA',
                'state_id' => 63,
            ),
            350 =>
            array (
                'id' => 6309,
                'city' => 'KABUPATEN TABALONG',
                'state_id' => 63,
            ),
            351 =>
            array (
                'id' => 6310,
                'city' => 'KABUPATEN TANAH BUMBU',
                'state_id' => 63,
            ),
            352 =>
            array (
                'id' => 6311,
                'city' => 'KABUPATEN BALANGAN',
                'state_id' => 63,
            ),
            353 =>
            array (
                'id' => 6371,
                'city' => 'KOTA BANJARMASIN',
                'state_id' => 63,
            ),
            354 =>
            array (
                'id' => 6372,
                'city' => 'KOTA BANJAR BARU',
                'state_id' => 63,
            ),
            355 =>
            array (
                'id' => 6401,
                'city' => 'KABUPATEN PASER',
                'state_id' => 64,
            ),
            356 =>
            array (
                'id' => 6402,
                'city' => 'KABUPATEN KUTAI BARAT',
                'state_id' => 64,
            ),
            357 =>
            array (
                'id' => 6403,
                'city' => 'KABUPATEN KUTAI KARTANEGARA',
                'state_id' => 64,
            ),
            358 =>
            array (
                'id' => 6404,
                'city' => 'KABUPATEN KUTAI TIMUR',
                'state_id' => 64,
            ),
            359 =>
            array (
                'id' => 6405,
                'city' => 'KABUPATEN BERAU',
                'state_id' => 64,
            ),
            360 =>
            array (
                'id' => 6409,
                'city' => 'KABUPATEN PENAJAM PASER UTARA',
                'state_id' => 64,
            ),
            361 =>
            array (
                'id' => 6411,
                'city' => 'KABUPATEN MAHAKAM HULU',
                'state_id' => 64,
            ),
            362 =>
            array (
                'id' => 6471,
                'city' => 'KOTA BALIKPAPAN',
                'state_id' => 64,
            ),
            363 =>
            array (
                'id' => 6472,
                'city' => 'KOTA SAMARINDA',
                'state_id' => 64,
            ),
            364 =>
            array (
                'id' => 6474,
                'city' => 'KOTA BONTANG',
                'state_id' => 64,
            ),
            365 =>
            array (
                'id' => 6501,
                'city' => 'KABUPATEN MALINAU',
                'state_id' => 65,
            ),
            366 =>
            array (
                'id' => 6502,
                'city' => 'KABUPATEN BULUNGAN',
                'state_id' => 65,
            ),
            367 =>
            array (
                'id' => 6503,
                'city' => 'KABUPATEN TANA TIDUNG',
                'state_id' => 65,
            ),
            368 =>
            array (
                'id' => 6504,
                'city' => 'KABUPATEN NUNUKAN',
                'state_id' => 65,
            ),
            369 =>
            array (
                'id' => 6571,
                'city' => 'KOTA TARAKAN',
                'state_id' => 65,
            ),
            370 =>
            array (
                'id' => 7101,
                'city' => 'KABUPATEN BOLAANG MONGONDOW',
                'state_id' => 71,
            ),
            371 =>
            array (
                'id' => 7102,
                'city' => 'KABUPATEN MINAHASA',
                'state_id' => 71,
            ),
            372 =>
            array (
                'id' => 7103,
                'city' => 'KABUPATEN KEPULAUAN SANGIHE',
                'state_id' => 71,
            ),
            373 =>
            array (
                'id' => 7104,
                'city' => 'KABUPATEN KEPULAUAN TALAUD',
                'state_id' => 71,
            ),
            374 =>
            array (
                'id' => 7105,
                'city' => 'KABUPATEN MINAHASA SELATAN',
                'state_id' => 71,
            ),
            375 =>
            array (
                'id' => 7106,
                'city' => 'KABUPATEN MINAHASA UTARA',
                'state_id' => 71,
            ),
            376 =>
            array (
                'id' => 7107,
                'city' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'state_id' => 71,
            ),
            377 =>
            array (
                'id' => 7108,
                'city' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'state_id' => 71,
            ),
            378 =>
            array (
                'id' => 7109,
                'city' => 'KABUPATEN MINAHASA TENGGARA',
                'state_id' => 71,
            ),
            379 =>
            array (
                'id' => 7110,
                'city' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'state_id' => 71,
            ),
            380 =>
            array (
                'id' => 7111,
                'city' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'state_id' => 71,
            ),
            381 =>
            array (
                'id' => 7171,
                'city' => 'KOTA MANADO',
                'state_id' => 71,
            ),
            382 =>
            array (
                'id' => 7172,
                'city' => 'KOTA BITUNG',
                'state_id' => 71,
            ),
            383 =>
            array (
                'id' => 7173,
                'city' => 'KOTA TOMOHON',
                'state_id' => 71,
            ),
            384 =>
            array (
                'id' => 7174,
                'city' => 'KOTA KOTAMOBAGU',
                'state_id' => 71,
            ),
            385 =>
            array (
                'id' => 7201,
                'city' => 'KABUPATEN BANGGAI KEPULAUAN',
                'state_id' => 72,
            ),
            386 =>
            array (
                'id' => 7202,
                'city' => 'KABUPATEN BANGGAI',
                'state_id' => 72,
            ),
            387 =>
            array (
                'id' => 7203,
                'city' => 'KABUPATEN MOROWALI',
                'state_id' => 72,
            ),
            388 =>
            array (
                'id' => 7204,
                'city' => 'KABUPATEN POSO',
                'state_id' => 72,
            ),
            389 =>
            array (
                'id' => 7205,
                'city' => 'KABUPATEN DONGGALA',
                'state_id' => 72,
            ),
            390 =>
            array (
                'id' => 7206,
                'city' => 'KABUPATEN TOLI-TOLI',
                'state_id' => 72,
            ),
            391 =>
            array (
                'id' => 7207,
                'city' => 'KABUPATEN BUOL',
                'state_id' => 72,
            ),
            392 =>
            array (
                'id' => 7208,
                'city' => 'KABUPATEN PARIGI MOUTONG',
                'state_id' => 72,
            ),
            393 =>
            array (
                'id' => 7209,
                'city' => 'KABUPATEN TOJO UNA-UNA',
                'state_id' => 72,
            ),
            394 =>
            array (
                'id' => 7210,
                'city' => 'KABUPATEN SIGI',
                'state_id' => 72,
            ),
            395 =>
            array (
                'id' => 7211,
                'city' => 'KABUPATEN BANGGAI LAUT',
                'state_id' => 72,
            ),
            396 =>
            array (
                'id' => 7212,
                'city' => 'KABUPATEN MOROWALI UTARA',
                'state_id' => 72,
            ),
            397 =>
            array (
                'id' => 7271,
                'city' => 'KOTA PALU',
                'state_id' => 72,
            ),
            398 =>
            array (
                'id' => 7301,
                'city' => 'KABUPATEN KEPULAUAN SELAYAR',
                'state_id' => 73,
            ),
            399 =>
            array (
                'id' => 7302,
                'city' => 'KABUPATEN BULUKUMBA',
                'state_id' => 73,
            ),
            400 =>
            array (
                'id' => 7303,
                'city' => 'KABUPATEN BANTAENG',
                'state_id' => 73,
            ),
            401 =>
            array (
                'id' => 7304,
                'city' => 'KABUPATEN JENEPONTO',
                'state_id' => 73,
            ),
            402 =>
            array (
                'id' => 7305,
                'city' => 'KABUPATEN TAKALAR',
                'state_id' => 73,
            ),
            403 =>
            array (
                'id' => 7306,
                'city' => 'KABUPATEN GOWA',
                'state_id' => 73,
            ),
            404 =>
            array (
                'id' => 7307,
                'city' => 'KABUPATEN SINJAI',
                'state_id' => 73,
            ),
            405 =>
            array (
                'id' => 7308,
                'city' => 'KABUPATEN MAROS',
                'state_id' => 73,
            ),
            406 =>
            array (
                'id' => 7309,
                'city' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'state_id' => 73,
            ),
            407 =>
            array (
                'id' => 7310,
                'city' => 'KABUPATEN BARRU',
                'state_id' => 73,
            ),
            408 =>
            array (
                'id' => 7311,
                'city' => 'KABUPATEN BONE',
                'state_id' => 73,
            ),
            409 =>
            array (
                'id' => 7312,
                'city' => 'KABUPATEN SOPPENG',
                'state_id' => 73,
            ),
            410 =>
            array (
                'id' => 7313,
                'city' => 'KABUPATEN WAJO',
                'state_id' => 73,
            ),
            411 =>
            array (
                'id' => 7314,
                'city' => 'KABUPATEN SIDENRENG RAPPANG',
                'state_id' => 73,
            ),
            412 =>
            array (
                'id' => 7315,
                'city' => 'KABUPATEN PINRANG',
                'state_id' => 73,
            ),
            413 =>
            array (
                'id' => 7316,
                'city' => 'KABUPATEN ENREKANG',
                'state_id' => 73,
            ),
            414 =>
            array (
                'id' => 7317,
                'city' => 'KABUPATEN LUWU',
                'state_id' => 73,
            ),
            415 =>
            array (
                'id' => 7318,
                'city' => 'KABUPATEN TANA TORAJA',
                'state_id' => 73,
            ),
            416 =>
            array (
                'id' => 7322,
                'city' => 'KABUPATEN LUWU UTARA',
                'state_id' => 73,
            ),
            417 =>
            array (
                'id' => 7325,
                'city' => 'KABUPATEN LUWU TIMUR',
                'state_id' => 73,
            ),
            418 =>
            array (
                'id' => 7326,
                'city' => 'KABUPATEN TORAJA UTARA',
                'state_id' => 73,
            ),
            419 =>
            array (
                'id' => 7371,
                'city' => 'KOTA MAKASSAR',
                'state_id' => 73,
            ),
            420 =>
            array (
                'id' => 7372,
                'city' => 'KOTA PAREPARE',
                'state_id' => 73,
            ),
            421 =>
            array (
                'id' => 7373,
                'city' => 'KOTA PALOPO',
                'state_id' => 73,
            ),
            422 =>
            array (
                'id' => 7401,
                'city' => 'KABUPATEN BUTON',
                'state_id' => 74,
            ),
            423 =>
            array (
                'id' => 7402,
                'city' => 'KABUPATEN MUNA',
                'state_id' => 74,
            ),
            424 =>
            array (
                'id' => 7403,
                'city' => 'KABUPATEN KONAWE',
                'state_id' => 74,
            ),
            425 =>
            array (
                'id' => 7404,
                'city' => 'KABUPATEN KOLAKA',
                'state_id' => 74,
            ),
            426 =>
            array (
                'id' => 7405,
                'city' => 'KABUPATEN KONAWE SELATAN',
                'state_id' => 74,
            ),
            427 =>
            array (
                'id' => 7406,
                'city' => 'KABUPATEN BOMBANA',
                'state_id' => 74,
            ),
            428 =>
            array (
                'id' => 7407,
                'city' => 'KABUPATEN WAKATOBI',
                'state_id' => 74,
            ),
            429 =>
            array (
                'id' => 7408,
                'city' => 'KABUPATEN KOLAKA UTARA',
                'state_id' => 74,
            ),
            430 =>
            array (
                'id' => 7409,
                'city' => 'KABUPATEN BUTON UTARA',
                'state_id' => 74,
            ),
            431 =>
            array (
                'id' => 7410,
                'city' => 'KABUPATEN KONAWE UTARA',
                'state_id' => 74,
            ),
            432 =>
            array (
                'id' => 7411,
                'city' => 'KABUPATEN KOLAKA TIMUR',
                'state_id' => 74,
            ),
            433 =>
            array (
                'id' => 7412,
                'city' => 'KABUPATEN KONAWE KEPULAUAN',
                'state_id' => 74,
            ),
            434 =>
            array (
                'id' => 7413,
                'city' => 'KABUPATEN MUNA BARAT',
                'state_id' => 74,
            ),
            435 =>
            array (
                'id' => 7414,
                'city' => 'KABUPATEN BUTON TENGAH',
                'state_id' => 74,
            ),
            436 =>
            array (
                'id' => 7415,
                'city' => 'KABUPATEN BUTON SELATAN',
                'state_id' => 74,
            ),
            437 =>
            array (
                'id' => 7471,
                'city' => 'KOTA KENDARI',
                'state_id' => 74,
            ),
            438 =>
            array (
                'id' => 7472,
                'city' => 'KOTA BAUBAU',
                'state_id' => 74,
            ),
            439 =>
            array (
                'id' => 7501,
                'city' => 'KABUPATEN BOALEMO',
                'state_id' => 75,
            ),
            440 =>
            array (
                'id' => 7502,
                'city' => 'KABUPATEN GORONTALO',
                'state_id' => 75,
            ),
            441 =>
            array (
                'id' => 7503,
                'city' => 'KABUPATEN POHUWATO',
                'state_id' => 75,
            ),
            442 =>
            array (
                'id' => 7504,
                'city' => 'KABUPATEN BONE BOLANGO',
                'state_id' => 75,
            ),
            443 =>
            array (
                'id' => 7505,
                'city' => 'KABUPATEN GORONTALO UTARA',
                'state_id' => 75,
            ),
            444 =>
            array (
                'id' => 7571,
                'city' => 'KOTA GORONTALO',
                'state_id' => 75,
            ),
            445 =>
            array (
                'id' => 7601,
                'city' => 'KABUPATEN MAJENE',
                'state_id' => 76,
            ),
            446 =>
            array (
                'id' => 7602,
                'city' => 'KABUPATEN POLEWALI MANDAR',
                'state_id' => 76,
            ),
            447 =>
            array (
                'id' => 7603,
                'city' => 'KABUPATEN MAMASA',
                'state_id' => 76,
            ),
            448 =>
            array (
                'id' => 7604,
                'city' => 'KABUPATEN MAMUJU',
                'state_id' => 76,
            ),
            449 =>
            array (
                'id' => 7605,
                'city' => 'KABUPATEN MAMUJU UTARA',
                'state_id' => 76,
            ),
            450 =>
            array (
                'id' => 7606,
                'city' => 'KABUPATEN MAMUJU TENGAH',
                'state_id' => 76,
            ),
            451 =>
            array (
                'id' => 8101,
                'city' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'state_id' => 81,
            ),
            452 =>
            array (
                'id' => 8102,
                'city' => 'KABUPATEN MALUKU TENGGARA',
                'state_id' => 81,
            ),
            453 =>
            array (
                'id' => 8103,
                'city' => 'KABUPATEN MALUKU TENGAH',
                'state_id' => 81,
            ),
            454 =>
            array (
                'id' => 8104,
                'city' => 'KABUPATEN BURU',
                'state_id' => 81,
            ),
            455 =>
            array (
                'id' => 8105,
                'city' => 'KABUPATEN KEPULAUAN ARU',
                'state_id' => 81,
            ),
            456 =>
            array (
                'id' => 8106,
                'city' => 'KABUPATEN SERAM BAGIAN BARAT',
                'state_id' => 81,
            ),
            457 =>
            array (
                'id' => 8107,
                'city' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'state_id' => 81,
            ),
            458 =>
            array (
                'id' => 8108,
                'city' => 'KABUPATEN MALUKU BARAT DAYA',
                'state_id' => 81,
            ),
            459 =>
            array (
                'id' => 8109,
                'city' => 'KABUPATEN BURU SELATAN',
                'state_id' => 81,
            ),
            460 =>
            array (
                'id' => 8171,
                'city' => 'KOTA AMBON',
                'state_id' => 81,
            ),
            461 =>
            array (
                'id' => 8172,
                'city' => 'KOTA TUAL',
                'state_id' => 81,
            ),
            462 =>
            array (
                'id' => 8201,
                'city' => 'KABUPATEN HALMAHERA BARAT',
                'state_id' => 82,
            ),
            463 =>
            array (
                'id' => 8202,
                'city' => 'KABUPATEN HALMAHERA TENGAH',
                'state_id' => 82,
            ),
            464 =>
            array (
                'id' => 8203,
                'city' => 'KABUPATEN KEPULAUAN SULA',
                'state_id' => 82,
            ),
            465 =>
            array (
                'id' => 8204,
                'city' => 'KABUPATEN HALMAHERA SELATAN',
                'state_id' => 82,
            ),
            466 =>
            array (
                'id' => 8205,
                'city' => 'KABUPATEN HALMAHERA UTARA',
                'state_id' => 82,
            ),
            467 =>
            array (
                'id' => 8206,
                'city' => 'KABUPATEN HALMAHERA TIMUR',
                'state_id' => 82,
            ),
            468 =>
            array (
                'id' => 8207,
                'city' => 'KABUPATEN PULAU MOROTAI',
                'state_id' => 82,
            ),
            469 =>
            array (
                'id' => 8208,
                'city' => 'KABUPATEN PULAU TALIABU',
                'state_id' => 82,
            ),
            470 =>
            array (
                'id' => 8271,
                'city' => 'KOTA TERNATE',
                'state_id' => 82,
            ),
            471 =>
            array (
                'id' => 8272,
                'city' => 'KOTA TIDORE KEPULAUAN',
                'state_id' => 82,
            ),
            472 =>
            array (
                'id' => 9101,
                'city' => 'KABUPATEN FAKFAK',
                'state_id' => 91,
            ),
            473 =>
            array (
                'id' => 9102,
                'city' => 'KABUPATEN KAIMANA',
                'state_id' => 91,
            ),
            474 =>
            array (
                'id' => 9103,
                'city' => 'KABUPATEN TELUK WONDAMA',
                'state_id' => 91,
            ),
            475 =>
            array (
                'id' => 9104,
                'city' => 'KABUPATEN TELUK BINTUNI',
                'state_id' => 91,
            ),
            476 =>
            array (
                'id' => 9105,
                'city' => 'KABUPATEN MANOKWARI',
                'state_id' => 91,
            ),
            477 =>
            array (
                'id' => 9106,
                'city' => 'KABUPATEN SORONG SELATAN',
                'state_id' => 91,
            ),
            478 =>
            array (
                'id' => 9107,
                'city' => 'KABUPATEN SORONG',
                'state_id' => 91,
            ),
            479 =>
            array (
                'id' => 9108,
                'city' => 'KABUPATEN RAJA AMPAT',
                'state_id' => 91,
            ),
            480 =>
            array (
                'id' => 9109,
                'city' => 'KABUPATEN TAMBRAUW',
                'state_id' => 91,
            ),
            481 =>
            array (
                'id' => 9110,
                'city' => 'KABUPATEN MAYBRAT',
                'state_id' => 91,
            ),
            482 =>
            array (
                'id' => 9111,
                'city' => 'KABUPATEN MANOKWARI SELATAN',
                'state_id' => 91,
            ),
            483 =>
            array (
                'id' => 9112,
                'city' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'state_id' => 91,
            ),
            484 =>
            array (
                'id' => 9171,
                'city' => 'KOTA SORONG',
                'state_id' => 91,
            ),
            485 =>
            array (
                'id' => 9401,
                'city' => 'KABUPATEN MERAUKE',
                'state_id' => 94,
            ),
            486 =>
            array (
                'id' => 9402,
                'city' => 'KABUPATEN JAYAWIJAYA',
                'state_id' => 94,
            ),
            487 =>
            array (
                'id' => 9403,
                'city' => 'KABUPATEN JAYAPURA',
                'state_id' => 94,
            ),
            488 =>
            array (
                'id' => 9404,
                'city' => 'KABUPATEN NABIRE',
                'state_id' => 94,
            ),
            489 =>
            array (
                'id' => 9408,
                'city' => 'KABUPATEN KEPULAUAN YAPEN',
                'state_id' => 94,
            ),
            490 =>
            array (
                'id' => 9409,
                'city' => 'KABUPATEN BIAK NUMFOR',
                'state_id' => 94,
            ),
            491 =>
            array (
                'id' => 9410,
                'city' => 'KABUPATEN PANIAI',
                'state_id' => 94,
            ),
            492 =>
            array (
                'id' => 9411,
                'city' => 'KABUPATEN PUNCAK JAYA',
                'state_id' => 94,
            ),
            493 =>
            array (
                'id' => 9412,
                'city' => 'KABUPATEN MIMIKA',
                'state_id' => 94,
            ),
            494 =>
            array (
                'id' => 9413,
                'city' => 'KABUPATEN BOVEN DIGOEL',
                'state_id' => 94,
            ),
            495 =>
            array (
                'id' => 9414,
                'city' => 'KABUPATEN MAPPI',
                'state_id' => 94,
            ),
            496 =>
            array (
                'id' => 9415,
                'city' => 'KABUPATEN ASMAT',
                'state_id' => 94,
            ),
            497 =>
            array (
                'id' => 9416,
                'city' => 'KABUPATEN YAHUKIMO',
                'state_id' => 94,
            ),
            498 =>
            array (
                'id' => 9417,
                'city' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'state_id' => 94,
            ),
            499 =>
            array (
                'id' => 9418,
                'city' => 'KABUPATEN TOLIKARA',
                'state_id' => 94,
            ),
        ));
        \DB::table('r_city')->insert(array (
            0 =>
            array (
                'id' => 9419,
                'city' => 'KABUPATEN SARMI',
                'state_id' => 94,
            ),
            1 =>
            array (
                'id' => 9420,
                'city' => 'KABUPATEN KEEROM',
                'state_id' => 94,
            ),
            2 =>
            array (
                'id' => 9426,
                'city' => 'KABUPATEN WAROPEN',
                'state_id' => 94,
            ),
            3 =>
            array (
                'id' => 9427,
                'city' => 'KABUPATEN SUPIORI',
                'state_id' => 94,
            ),
            4 =>
            array (
                'id' => 9428,
                'city' => 'KABUPATEN MAMBERAMO RAYA',
                'state_id' => 94,
            ),
            5 =>
            array (
                'id' => 9429,
                'city' => 'KABUPATEN NDUGA',
                'state_id' => 94,
            ),
            6 =>
            array (
                'id' => 9430,
                'city' => 'KABUPATEN LANNY JAYA',
                'state_id' => 94,
            ),
            7 =>
            array (
                'id' => 9431,
                'city' => 'KABUPATEN MAMBERAMO TENGAH',
                'state_id' => 94,
            ),
            8 =>
            array (
                'id' => 9432,
                'city' => 'KABUPATEN YALIMO',
                'state_id' => 94,
            ),
            9 =>
            array (
                'id' => 9433,
                'city' => 'KABUPATEN PUNCAK',
                'state_id' => 94,
            ),
            10 =>
            array (
                'id' => 9434,
                'city' => 'KABUPATEN DOGIYAI',
                'state_id' => 94,
            ),
            11 =>
            array (
                'id' => 9435,
                'city' => 'KABUPATEN INTAN JAYA',
                'state_id' => 94,
            ),
            12 =>
            array (
                'id' => 9436,
                'city' => 'KABUPATEN DEIYAI',
                'state_id' => 94,
            ),
            13 =>
            array (
                'id' => 9471,
                'city' => 'KOTA JAYAPURA',
                'state_id' => 94,
            ),
        ));


    }
}
