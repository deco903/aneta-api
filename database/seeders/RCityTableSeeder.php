<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RCityTableSeeder extends Seeder
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
                'city_code' => '1101',
            ),
            1 =>
            array (
                'id' => 1102,
                'city' => 'KABUPATEN ACEH SINGKIL',
                'state_id' => 11,
                'city_code' => '1102',
            ),
            2 =>
            array (
                'id' => 1103,
                'city' => 'KABUPATEN ACEH SELATAN',
                'state_id' => 11,
                'city_code' => '1103',
            ),
            3 =>
            array (
                'id' => 1104,
                'city' => 'KABUPATEN ACEH TENGGARA',
                'state_id' => 11,
                'city_code' => '1104',
            ),
            4 =>
            array (
                'id' => 1105,
                'city' => 'KABUPATEN ACEH TIMUR',
                'state_id' => 11,
                'city_code' => '1105',
            ),
            5 =>
            array (
                'id' => 1106,
                'city' => 'KABUPATEN ACEH TENGAH',
                'state_id' => 11,
                'city_code' => '1106',
            ),
            6 =>
            array (
                'id' => 1107,
                'city' => 'KABUPATEN ACEH BARAT',
                'state_id' => 11,
                'city_code' => '1107',
            ),
            7 =>
            array (
                'id' => 1108,
                'city' => 'KABUPATEN ACEH BESAR',
                'state_id' => 11,
                'city_code' => '1108',
            ),
            8 =>
            array (
                'id' => 1109,
                'city' => 'KABUPATEN PIDIE',
                'state_id' => 11,
                'city_code' => '1109',
            ),
            9 =>
            array (
                'id' => 1110,
                'city' => 'KABUPATEN BIREUEN',
                'state_id' => 11,
                'city_code' => '1110',
            ),
            10 =>
            array (
                'id' => 1111,
                'city' => 'KABUPATEN ACEH UTARA',
                'state_id' => 11,
                'city_code' => '1111',
            ),
            11 =>
            array (
                'id' => 1112,
                'city' => 'KABUPATEN ACEH BARAT DAYA',
                'state_id' => 11,
                'city_code' => '1112',
            ),
            12 =>
            array (
                'id' => 1113,
                'city' => 'KABUPATEN GAYO LUES',
                'state_id' => 11,
                'city_code' => '1113',
            ),
            13 =>
            array (
                'id' => 1114,
                'city' => 'KABUPATEN ACEH TAMIANG',
                'state_id' => 11,
                'city_code' => '1114',
            ),
            14 =>
            array (
                'id' => 1115,
                'city' => 'KABUPATEN NAGAN RAYA',
                'state_id' => 11,
                'city_code' => '1115',
            ),
            15 =>
            array (
                'id' => 1116,
                'city' => 'KABUPATEN ACEH JAYA',
                'state_id' => 11,
                'city_code' => '1116',
            ),
            16 =>
            array (
                'id' => 1117,
                'city' => 'KABUPATEN BENER MERIAH',
                'state_id' => 11,
                'city_code' => '1117',
            ),
            17 =>
            array (
                'id' => 1118,
                'city' => 'KABUPATEN PIDIE JAYA',
                'state_id' => 11,
                'city_code' => '1118',
            ),
            18 =>
            array (
                'id' => 1171,
                'city' => 'KOTA BANDA ACEH',
                'state_id' => 11,
                'city_code' => '1171',
            ),
            19 =>
            array (
                'id' => 1172,
                'city' => 'KOTA SABANG',
                'state_id' => 11,
                'city_code' => '1172',
            ),
            20 =>
            array (
                'id' => 1173,
                'city' => 'KOTA LANGSA',
                'state_id' => 11,
                'city_code' => '1173',
            ),
            21 =>
            array (
                'id' => 1174,
                'city' => 'KOTA LHOKSEUMAWE',
                'state_id' => 11,
                'city_code' => '1174',
            ),
            22 =>
            array (
                'id' => 1175,
                'city' => 'KOTA SUBULUSSALAM',
                'state_id' => 11,
                'city_code' => '1175',
            ),
            23 =>
            array (
                'id' => 1201,
                'city' => 'KABUPATEN NIAS',
                'state_id' => 12,
                'city_code' => '1201',
            ),
            24 =>
            array (
                'id' => 1202,
                'city' => 'KABUPATEN MANDAILING NATAL',
                'state_id' => 12,
                'city_code' => '1202',
            ),
            25 =>
            array (
                'id' => 1203,
                'city' => 'KABUPATEN TAPANULI SELATAN',
                'state_id' => 12,
                'city_code' => '1203',
            ),
            26 =>
            array (
                'id' => 1204,
                'city' => 'KABUPATEN TAPANULI TENGAH',
                'state_id' => 12,
                'city_code' => '1204',
            ),
            27 =>
            array (
                'id' => 1205,
                'city' => 'KABUPATEN TAPANULI UTARA',
                'state_id' => 12,
                'city_code' => '1205',
            ),
            28 =>
            array (
                'id' => 1206,
                'city' => 'KABUPATEN TOBA SAMOSIR',
                'state_id' => 12,
                'city_code' => '1206',
            ),
            29 =>
            array (
                'id' => 1207,
                'city' => 'KABUPATEN LABUHAN BATU',
                'state_id' => 12,
                'city_code' => '1207',
            ),
            30 =>
            array (
                'id' => 1208,
                'city' => 'KABUPATEN ASAHAN',
                'state_id' => 12,
                'city_code' => '1208',
            ),
            31 =>
            array (
                'id' => 1209,
                'city' => 'KABUPATEN SIMALUNGUN',
                'state_id' => 12,
                'city_code' => '1209',
            ),
            32 =>
            array (
                'id' => 1210,
                'city' => 'KABUPATEN DAIRI',
                'state_id' => 12,
                'city_code' => '1210',
            ),
            33 =>
            array (
                'id' => 1211,
                'city' => 'KABUPATEN KARO',
                'state_id' => 12,
                'city_code' => '1211',
            ),
            34 =>
            array (
                'id' => 1212,
                'city' => 'KABUPATEN DELI SERDANG',
                'state_id' => 12,
                'city_code' => '1212',
            ),
            35 =>
            array (
                'id' => 1213,
                'city' => 'KABUPATEN LANGKAT',
                'state_id' => 12,
                'city_code' => '1213',
            ),
            36 =>
            array (
                'id' => 1214,
                'city' => 'KABUPATEN NIAS SELATAN',
                'state_id' => 12,
                'city_code' => '1214',
            ),
            37 =>
            array (
                'id' => 1215,
                'city' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'state_id' => 12,
                'city_code' => '1215',
            ),
            38 =>
            array (
                'id' => 1216,
                'city' => 'KABUPATEN PAKPAK BHARAT',
                'state_id' => 12,
                'city_code' => '1216',
            ),
            39 =>
            array (
                'id' => 1217,
                'city' => 'KABUPATEN SAMOSIR',
                'state_id' => 12,
                'city_code' => '1217',
            ),
            40 =>
            array (
                'id' => 1218,
                'city' => 'KABUPATEN SERDANG BEDAGAI',
                'state_id' => 12,
                'city_code' => '1218',
            ),
            41 =>
            array (
                'id' => 1219,
                'city' => 'KABUPATEN BATU BARA',
                'state_id' => 12,
                'city_code' => '1219',
            ),
            42 =>
            array (
                'id' => 1220,
                'city' => 'KABUPATEN PADANG LAWAS UTARA',
                'state_id' => 12,
                'city_code' => '1220',
            ),
            43 =>
            array (
                'id' => 1221,
                'city' => 'KABUPATEN PADANG LAWAS',
                'state_id' => 12,
                'city_code' => '1221',
            ),
            44 =>
            array (
                'id' => 1222,
                'city' => 'KABUPATEN LABUHAN BATU SELATAN',
                'state_id' => 12,
                'city_code' => '1222',
            ),
            45 =>
            array (
                'id' => 1223,
                'city' => 'KABUPATEN LABUHAN BATU UTARA',
                'state_id' => 12,
                'city_code' => '1223',
            ),
            46 =>
            array (
                'id' => 1224,
                'city' => 'KABUPATEN NIAS UTARA',
                'state_id' => 12,
                'city_code' => '1224',
            ),
            47 =>
            array (
                'id' => 1225,
                'city' => 'KABUPATEN NIAS BARAT',
                'state_id' => 12,
                'city_code' => '1225',
            ),
            48 =>
            array (
                'id' => 1271,
                'city' => 'KOTA SIBOLGA',
                'state_id' => 12,
                'city_code' => '1271',
            ),
            49 =>
            array (
                'id' => 1272,
                'city' => 'KOTA TANJUNG BALAI',
                'state_id' => 12,
                'city_code' => '1272',
            ),
            50 =>
            array (
                'id' => 1273,
                'city' => 'KOTA PEMATANG SIANTAR',
                'state_id' => 12,
                'city_code' => '1273',
            ),
            51 =>
            array (
                'id' => 1274,
                'city' => 'KOTA TEBING TINGGI',
                'state_id' => 12,
                'city_code' => '1274',
            ),
            52 =>
            array (
                'id' => 1275,
                'city' => 'KOTA MEDAN',
                'state_id' => 12,
                'city_code' => '1275',
            ),
            53 =>
            array (
                'id' => 1276,
                'city' => 'KOTA BINJAI',
                'state_id' => 12,
                'city_code' => '1276',
            ),
            54 =>
            array (
                'id' => 1277,
                'city' => 'KOTA PADANGSIDIMPUAN',
                'state_id' => 12,
                'city_code' => '1277',
            ),
            55 =>
            array (
                'id' => 1278,
                'city' => 'KOTA GUNUNGSITOLI',
                'state_id' => 12,
                'city_code' => '1278',
            ),
            56 =>
            array (
                'id' => 1301,
                'city' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'state_id' => 13,
                'city_code' => '1301',
            ),
            57 =>
            array (
                'id' => 1302,
                'city' => 'KABUPATEN PESISIR SELATAN',
                'state_id' => 13,
                'city_code' => '1302',
            ),
            58 =>
            array (
                'id' => 1303,
                'city' => 'KABUPATEN SOLOK',
                'state_id' => 13,
                'city_code' => '1303',
            ),
            59 =>
            array (
                'id' => 1304,
                'city' => 'KABUPATEN SIJUNJUNG',
                'state_id' => 13,
                'city_code' => '1304',
            ),
            60 =>
            array (
                'id' => 1305,
                'city' => 'KABUPATEN TANAH DATAR',
                'state_id' => 13,
                'city_code' => '1305',
            ),
            61 =>
            array (
                'id' => 1306,
                'city' => 'KABUPATEN PADANG PARIAMAN',
                'state_id' => 13,
                'city_code' => '1306',
            ),
            62 =>
            array (
                'id' => 1307,
                'city' => 'KABUPATEN AGAM',
                'state_id' => 13,
                'city_code' => '1307',
            ),
            63 =>
            array (
                'id' => 1308,
                'city' => 'KABUPATEN LIMA PULUH KOTA',
                'state_id' => 13,
                'city_code' => '1308',
            ),
            64 =>
            array (
                'id' => 1309,
                'city' => 'KABUPATEN PASAMAN',
                'state_id' => 13,
                'city_code' => '1309',
            ),
            65 =>
            array (
                'id' => 1310,
                'city' => 'KABUPATEN SOLOK SELATAN',
                'state_id' => 13,
                'city_code' => '1310',
            ),
            66 =>
            array (
                'id' => 1311,
                'city' => 'KABUPATEN DHARMASRAYA',
                'state_id' => 13,
                'city_code' => '1311',
            ),
            67 =>
            array (
                'id' => 1312,
                'city' => 'KABUPATEN PASAMAN BARAT',
                'state_id' => 13,
                'city_code' => '1312',
            ),
            68 =>
            array (
                'id' => 1371,
                'city' => 'KOTA PADANG',
                'state_id' => 13,
                'city_code' => '1371',
            ),
            69 =>
            array (
                'id' => 1372,
                'city' => 'KOTA SOLOK',
                'state_id' => 13,
                'city_code' => '1372',
            ),
            70 =>
            array (
                'id' => 1373,
                'city' => 'KOTA SAWAH LUNTO',
                'state_id' => 13,
                'city_code' => '1373',
            ),
            71 =>
            array (
                'id' => 1374,
                'city' => 'KOTA PADANG PANJANG',
                'state_id' => 13,
                'city_code' => '1374',
            ),
            72 =>
            array (
                'id' => 1375,
                'city' => 'KOTA BUKITTINGGI',
                'state_id' => 13,
                'city_code' => '1375',
            ),
            73 =>
            array (
                'id' => 1376,
                'city' => 'KOTA PAYAKUMBUH',
                'state_id' => 13,
                'city_code' => '1376',
            ),
            74 =>
            array (
                'id' => 1377,
                'city' => 'KOTA PARIAMAN',
                'state_id' => 13,
                'city_code' => '1377',
            ),
            75 =>
            array (
                'id' => 1401,
                'city' => 'KABUPATEN KUANTAN SINGINGI',
                'state_id' => 14,
                'city_code' => '1401',
            ),
            76 =>
            array (
                'id' => 1402,
                'city' => 'KABUPATEN INDRAGIRI HULU',
                'state_id' => 14,
                'city_code' => '1402',
            ),
            77 =>
            array (
                'id' => 1403,
                'city' => 'KABUPATEN INDRAGIRI HILIR',
                'state_id' => 14,
                'city_code' => '1403',
            ),
            78 =>
            array (
                'id' => 1404,
                'city' => 'KABUPATEN PELALAWAN',
                'state_id' => 14,
                'city_code' => '1404',
            ),
            79 =>
            array (
                'id' => 1405,
                'city' => 'KABUPATEN S I A K',
                'state_id' => 14,
                'city_code' => '1405',
            ),
            80 =>
            array (
                'id' => 1406,
                'city' => 'KABUPATEN KAMPAR',
                'state_id' => 14,
                'city_code' => '1406',
            ),
            81 =>
            array (
                'id' => 1407,
                'city' => 'KABUPATEN ROKAN HULU',
                'state_id' => 14,
                'city_code' => '1407',
            ),
            82 =>
            array (
                'id' => 1408,
                'city' => 'KABUPATEN BENGKALIS',
                'state_id' => 14,
                'city_code' => '1408',
            ),
            83 =>
            array (
                'id' => 1409,
                'city' => 'KABUPATEN ROKAN HILIR',
                'state_id' => 14,
                'city_code' => '1409',
            ),
            84 =>
            array (
                'id' => 1410,
                'city' => 'KABUPATEN KEPULAUAN MERANTI',
                'state_id' => 14,
                'city_code' => '1410',
            ),
            85 =>
            array (
                'id' => 1471,
                'city' => 'KOTA PEKANBARU',
                'state_id' => 14,
                'city_code' => '1471',
            ),
            86 =>
            array (
                'id' => 1473,
                'city' => 'KOTA D U M A I',
                'state_id' => 14,
                'city_code' => '1473',
            ),
            87 =>
            array (
                'id' => 1501,
                'city' => 'KABUPATEN KERINCI',
                'state_id' => 15,
                'city_code' => '1501',
            ),
            88 =>
            array (
                'id' => 1502,
                'city' => 'KABUPATEN MERANGIN',
                'state_id' => 15,
                'city_code' => '1502',
            ),
            89 =>
            array (
                'id' => 1503,
                'city' => 'KABUPATEN SAROLANGUN',
                'state_id' => 15,
                'city_code' => '1503',
            ),
            90 =>
            array (
                'id' => 1504,
                'city' => 'KABUPATEN BATANG HARI',
                'state_id' => 15,
                'city_code' => '1504',
            ),
            91 =>
            array (
                'id' => 1505,
                'city' => 'KABUPATEN MUARO JAMBI',
                'state_id' => 15,
                'city_code' => '1505',
            ),
            92 =>
            array (
                'id' => 1506,
                'city' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'state_id' => 15,
                'city_code' => '1506',
            ),
            93 =>
            array (
                'id' => 1507,
                'city' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'state_id' => 15,
                'city_code' => '1507',
            ),
            94 =>
            array (
                'id' => 1508,
                'city' => 'KABUPATEN TEBO',
                'state_id' => 15,
                'city_code' => '1508',
            ),
            95 =>
            array (
                'id' => 1509,
                'city' => 'KABUPATEN BUNGO',
                'state_id' => 15,
                'city_code' => '1509',
            ),
            96 =>
            array (
                'id' => 1571,
                'city' => 'KOTA JAMBI',
                'state_id' => 15,
                'city_code' => '1571',
            ),
            97 =>
            array (
                'id' => 1572,
                'city' => 'KOTA SUNGAI PENUH',
                'state_id' => 15,
                'city_code' => '1572',
            ),
            98 =>
            array (
                'id' => 1601,
                'city' => 'KABUPATEN OGAN KOMERING ULU',
                'state_id' => 16,
                'city_code' => '1601',
            ),
            99 =>
            array (
                'id' => 1602,
                'city' => 'KABUPATEN OGAN KOMERING ILIR',
                'state_id' => 16,
                'city_code' => '1602',
            ),
            100 =>
            array (
                'id' => 1603,
                'city' => 'KABUPATEN MUARA ENIM',
                'state_id' => 16,
                'city_code' => '1603',
            ),
            101 =>
            array (
                'id' => 1604,
                'city' => 'KABUPATEN LAHAT',
                'state_id' => 16,
                'city_code' => '1604',
            ),
            102 =>
            array (
                'id' => 1605,
                'city' => 'KABUPATEN MUSI RAWAS',
                'state_id' => 16,
                'city_code' => '1605',
            ),
            103 =>
            array (
                'id' => 1606,
                'city' => 'KABUPATEN MUSI BANYUASIN',
                'state_id' => 16,
                'city_code' => '1606',
            ),
            104 =>
            array (
                'id' => 1607,
                'city' => 'KABUPATEN BANYU ASIN',
                'state_id' => 16,
                'city_code' => '1607',
            ),
            105 =>
            array (
                'id' => 1608,
                'city' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'state_id' => 16,
                'city_code' => '1608',
            ),
            106 =>
            array (
                'id' => 1609,
                'city' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'state_id' => 16,
                'city_code' => '1609',
            ),
            107 =>
            array (
                'id' => 1610,
                'city' => 'KABUPATEN OGAN ILIR',
                'state_id' => 16,
                'city_code' => '1610',
            ),
            108 =>
            array (
                'id' => 1611,
                'city' => 'KABUPATEN EMPAT LAWANG',
                'state_id' => 16,
                'city_code' => '1611',
            ),
            109 =>
            array (
                'id' => 1612,
                'city' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'state_id' => 16,
                'city_code' => '1612',
            ),
            110 =>
            array (
                'id' => 1613,
                'city' => 'KABUPATEN MUSI RAWAS UTARA',
                'state_id' => 16,
                'city_code' => '1613',
            ),
            111 =>
            array (
                'id' => 1671,
                'city' => 'KOTA PALEMBANG',
                'state_id' => 16,
                'city_code' => '1671',
            ),
            112 =>
            array (
                'id' => 1672,
                'city' => 'KOTA PRABUMULIH',
                'state_id' => 16,
                'city_code' => '1672',
            ),
            113 =>
            array (
                'id' => 1673,
                'city' => 'KOTA PAGAR ALAM',
                'state_id' => 16,
                'city_code' => '1673',
            ),
            114 =>
            array (
                'id' => 1674,
                'city' => 'KOTA LUBUKLINGGAU',
                'state_id' => 16,
                'city_code' => '1674',
            ),
            115 =>
            array (
                'id' => 1701,
                'city' => 'KABUPATEN BENGKULU SELATAN',
                'state_id' => 17,
                'city_code' => '1701',
            ),
            116 =>
            array (
                'id' => 1702,
                'city' => 'KABUPATEN REJANG LEBONG',
                'state_id' => 17,
                'city_code' => '1702',
            ),
            117 =>
            array (
                'id' => 1703,
                'city' => 'KABUPATEN BENGKULU UTARA',
                'state_id' => 17,
                'city_code' => '1703',
            ),
            118 =>
            array (
                'id' => 1704,
                'city' => 'KABUPATEN KAUR',
                'state_id' => 17,
                'city_code' => '1704',
            ),
            119 =>
            array (
                'id' => 1705,
                'city' => 'KABUPATEN SELUMA',
                'state_id' => 17,
                'city_code' => '1705',
            ),
            120 =>
            array (
                'id' => 1706,
                'city' => 'KABUPATEN MUKOMUKO',
                'state_id' => 17,
                'city_code' => '1706',
            ),
            121 =>
            array (
                'id' => 1707,
                'city' => 'KABUPATEN LEBONG',
                'state_id' => 17,
                'city_code' => '1707',
            ),
            122 =>
            array (
                'id' => 1708,
                'city' => 'KABUPATEN KEPAHIANG',
                'state_id' => 17,
                'city_code' => '1708',
            ),
            123 =>
            array (
                'id' => 1709,
                'city' => 'KABUPATEN BENGKULU TENGAH',
                'state_id' => 17,
                'city_code' => '1709',
            ),
            124 =>
            array (
                'id' => 1771,
                'city' => 'KOTA BENGKULU',
                'state_id' => 17,
                'city_code' => '1771',
            ),
            125 =>
            array (
                'id' => 1801,
                'city' => 'KABUPATEN LAMPUNG BARAT',
                'state_id' => 18,
                'city_code' => '1801',
            ),
            126 =>
            array (
                'id' => 1802,
                'city' => 'KABUPATEN TANGGAMUS',
                'state_id' => 18,
                'city_code' => '1802',
            ),
            127 =>
            array (
                'id' => 1803,
                'city' => 'KABUPATEN LAMPUNG SELATAN',
                'state_id' => 18,
                'city_code' => '1803',
            ),
            128 =>
            array (
                'id' => 1804,
                'city' => 'KABUPATEN LAMPUNG TIMUR',
                'state_id' => 18,
                'city_code' => '1804',
            ),
            129 =>
            array (
                'id' => 1805,
                'city' => 'KABUPATEN LAMPUNG TENGAH',
                'state_id' => 18,
                'city_code' => '1805',
            ),
            130 =>
            array (
                'id' => 1806,
                'city' => 'KABUPATEN LAMPUNG UTARA',
                'state_id' => 18,
                'city_code' => '1806',
            ),
            131 =>
            array (
                'id' => 1807,
                'city' => 'KABUPATEN WAY KANAN',
                'state_id' => 18,
                'city_code' => '1807',
            ),
            132 =>
            array (
                'id' => 1808,
                'city' => 'KABUPATEN TULANGBAWANG',
                'state_id' => 18,
                'city_code' => '1808',
            ),
            133 =>
            array (
                'id' => 1809,
                'city' => 'KABUPATEN PESAWARAN',
                'state_id' => 18,
                'city_code' => '1809',
            ),
            134 =>
            array (
                'id' => 1810,
                'city' => 'KABUPATEN PRINGSEWU',
                'state_id' => 18,
                'city_code' => '1810',
            ),
            135 =>
            array (
                'id' => 1811,
                'city' => 'KABUPATEN MESUJI',
                'state_id' => 18,
                'city_code' => '1811',
            ),
            136 =>
            array (
                'id' => 1812,
                'city' => 'KABUPATEN TULANG BAWANG BARAT',
                'state_id' => 18,
                'city_code' => '1812',
            ),
            137 =>
            array (
                'id' => 1813,
                'city' => 'KABUPATEN PESISIR BARAT',
                'state_id' => 18,
                'city_code' => '1813',
            ),
            138 =>
            array (
                'id' => 1871,
                'city' => 'KOTA BANDAR LAMPUNG',
                'state_id' => 18,
                'city_code' => '1871',
            ),
            139 =>
            array (
                'id' => 1872,
                'city' => 'KOTA METRO',
                'state_id' => 18,
                'city_code' => '1872',
            ),
            140 =>
            array (
                'id' => 1901,
                'city' => 'KABUPATEN BANGKA',
                'state_id' => 19,
                'city_code' => '1901',
            ),
            141 =>
            array (
                'id' => 1902,
                'city' => 'KABUPATEN BELITUNG',
                'state_id' => 19,
                'city_code' => '1902',
            ),
            142 =>
            array (
                'id' => 1903,
                'city' => 'KABUPATEN BANGKA BARAT',
                'state_id' => 19,
                'city_code' => '1903',
            ),
            143 =>
            array (
                'id' => 1904,
                'city' => 'KABUPATEN BANGKA TENGAH',
                'state_id' => 19,
                'city_code' => '1904',
            ),
            144 =>
            array (
                'id' => 1905,
                'city' => 'KABUPATEN BANGKA SELATAN',
                'state_id' => 19,
                'city_code' => '1905',
            ),
            145 =>
            array (
                'id' => 1906,
                'city' => 'KABUPATEN BELITUNG TIMUR',
                'state_id' => 19,
                'city_code' => '1906',
            ),
            146 =>
            array (
                'id' => 1971,
                'city' => 'KOTA PANGKAL PINANG',
                'state_id' => 19,
                'city_code' => '1971',
            ),
            147 =>
            array (
                'id' => 2101,
                'city' => 'KABUPATEN KARIMUN',
                'state_id' => 21,
                'city_code' => '2101',
            ),
            148 =>
            array (
                'id' => 2102,
                'city' => 'KABUPATEN BINTAN',
                'state_id' => 21,
                'city_code' => '2102',
            ),
            149 =>
            array (
                'id' => 2103,
                'city' => 'KABUPATEN NATUNA',
                'state_id' => 21,
                'city_code' => '2103',
            ),
            150 =>
            array (
                'id' => 2104,
                'city' => 'KABUPATEN LINGGA',
                'state_id' => 21,
                'city_code' => '2104',
            ),
            151 =>
            array (
                'id' => 2105,
                'city' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'state_id' => 21,
                'city_code' => '2105',
            ),
            152 =>
            array (
                'id' => 2171,
                'city' => 'KOTA B A T A M',
                'state_id' => 21,
                'city_code' => '2171',
            ),
            153 =>
            array (
                'id' => 2172,
                'city' => 'KOTA TANJUNG PINANG',
                'state_id' => 21,
                'city_code' => '2172',
            ),
            154 =>
            array (
                'id' => 3101,
                'city' => 'KABUPATEN KEPULAUAN SERIBU',
                'state_id' => 31,
                'city_code' => '3101',
            ),
            155 =>
            array (
                'id' => 3171,
                'city' => 'KOTA JAKARTA SELATAN',
                'state_id' => 31,
                'city_code' => '3171',
            ),
            156 =>
            array (
                'id' => 3172,
                'city' => 'KOTA JAKARTA TIMUR',
                'state_id' => 31,
                'city_code' => '3172',
            ),
            157 =>
            array (
                'id' => 3173,
                'city' => 'KOTA JAKARTA PUSAT',
                'state_id' => 31,
                'city_code' => '3173',
            ),
            158 =>
            array (
                'id' => 3174,
                'city' => 'KOTA JAKARTA BARAT',
                'state_id' => 31,
                'city_code' => '3174',
            ),
            159 =>
            array (
                'id' => 3175,
                'city' => 'KOTA JAKARTA UTARA',
                'state_id' => 31,
                'city_code' => '3175',
            ),
            160 =>
            array (
                'id' => 3201,
                'city' => 'KABUPATEN BOGOR',
                'state_id' => 32,
                'city_code' => '3201',
            ),
            161 =>
            array (
                'id' => 3202,
                'city' => 'KABUPATEN SUKABUMI',
                'state_id' => 32,
                'city_code' => '3202',
            ),
            162 =>
            array (
                'id' => 3203,
                'city' => 'KABUPATEN CIANJUR',
                'state_id' => 32,
                'city_code' => '3203',
            ),
            163 =>
            array (
                'id' => 3204,
                'city' => 'KABUPATEN BANDUNG',
                'state_id' => 32,
                'city_code' => '3204',
            ),
            164 =>
            array (
                'id' => 3205,
                'city' => 'KABUPATEN GARUT',
                'state_id' => 32,
                'city_code' => '3205',
            ),
            165 =>
            array (
                'id' => 3206,
                'city' => 'KABUPATEN TASIKMALAYA',
                'state_id' => 32,
                'city_code' => '3206',
            ),
            166 =>
            array (
                'id' => 3207,
                'city' => 'KABUPATEN CIAMIS',
                'state_id' => 32,
                'city_code' => '3207',
            ),
            167 =>
            array (
                'id' => 3208,
                'city' => 'KABUPATEN KUNINGAN',
                'state_id' => 32,
                'city_code' => '3208',
            ),
            168 =>
            array (
                'id' => 3209,
                'city' => 'KABUPATEN CIREBON',
                'state_id' => 32,
                'city_code' => '3209',
            ),
            169 =>
            array (
                'id' => 3210,
                'city' => 'KABUPATEN MAJALENGKA',
                'state_id' => 32,
                'city_code' => '3210',
            ),
            170 =>
            array (
                'id' => 3211,
                'city' => 'KABUPATEN SUMEDANG',
                'state_id' => 32,
                'city_code' => '3211',
            ),
            171 =>
            array (
                'id' => 3212,
                'city' => 'KABUPATEN INDRAMAYU',
                'state_id' => 32,
                'city_code' => '3212',
            ),
            172 =>
            array (
                'id' => 3213,
                'city' => 'KABUPATEN SUBANG',
                'state_id' => 32,
                'city_code' => '3213',
            ),
            173 =>
            array (
                'id' => 3214,
                'city' => 'KABUPATEN PURWAKARTA',
                'state_id' => 32,
                'city_code' => '3214',
            ),
            174 =>
            array (
                'id' => 3215,
                'city' => 'KABUPATEN KARAWANG',
                'state_id' => 32,
                'city_code' => '3215',
            ),
            175 =>
            array (
                'id' => 3216,
                'city' => 'KABUPATEN BEKASI',
                'state_id' => 32,
                'city_code' => '3216',
            ),
            176 =>
            array (
                'id' => 3217,
                'city' => 'KABUPATEN BANDUNG BARAT',
                'state_id' => 32,
                'city_code' => '3217',
            ),
            177 =>
            array (
                'id' => 3218,
                'city' => 'KABUPATEN PANGANDARAN',
                'state_id' => 32,
                'city_code' => '3218',
            ),
            178 =>
            array (
                'id' => 3271,
                'city' => 'KOTA BOGOR',
                'state_id' => 32,
                'city_code' => '3271',
            ),
            179 =>
            array (
                'id' => 3272,
                'city' => 'KOTA SUKABUMI',
                'state_id' => 32,
                'city_code' => '3272',
            ),
            180 =>
            array (
                'id' => 3273,
                'city' => 'KOTA BANDUNG',
                'state_id' => 32,
                'city_code' => '3273',
            ),
            181 =>
            array (
                'id' => 3274,
                'city' => 'KOTA CIREBON',
                'state_id' => 32,
                'city_code' => '3274',
            ),
            182 =>
            array (
                'id' => 3275,
                'city' => 'KOTA BEKASI',
                'state_id' => 32,
                'city_code' => '3275',
            ),
            183 =>
            array (
                'id' => 3276,
                'city' => 'KOTA DEPOK',
                'state_id' => 32,
                'city_code' => '3276',
            ),
            184 =>
            array (
                'id' => 3277,
                'city' => 'KOTA CIMAHI',
                'state_id' => 32,
                'city_code' => '3277',
            ),
            185 =>
            array (
                'id' => 3278,
                'city' => 'KOTA TASIKMALAYA',
                'state_id' => 32,
                'city_code' => '3278',
            ),
            186 =>
            array (
                'id' => 3279,
                'city' => 'KOTA BANJAR',
                'state_id' => 32,
                'city_code' => '3279',
            ),
            187 =>
            array (
                'id' => 3301,
                'city' => 'KABUPATEN CILACAP',
                'state_id' => 33,
                'city_code' => '3301',
            ),
            188 =>
            array (
                'id' => 3302,
                'city' => 'KABUPATEN BANYUMAS',
                'state_id' => 33,
                'city_code' => '3302',
            ),
            189 =>
            array (
                'id' => 3303,
                'city' => 'KABUPATEN PURBALINGGA',
                'state_id' => 33,
                'city_code' => '3303',
            ),
            190 =>
            array (
                'id' => 3304,
                'city' => 'KABUPATEN BANJARNEGARA',
                'state_id' => 33,
                'city_code' => '3304',
            ),
            191 =>
            array (
                'id' => 3305,
                'city' => 'KABUPATEN KEBUMEN',
                'state_id' => 33,
                'city_code' => '3305',
            ),
            192 =>
            array (
                'id' => 3306,
                'city' => 'KABUPATEN PURWOREJO',
                'state_id' => 33,
                'city_code' => '3306',
            ),
            193 =>
            array (
                'id' => 3307,
                'city' => 'KABUPATEN WONOSOBO',
                'state_id' => 33,
                'city_code' => '3307',
            ),
            194 =>
            array (
                'id' => 3308,
                'city' => 'KABUPATEN MAGELANG',
                'state_id' => 33,
                'city_code' => '3308',
            ),
            195 =>
            array (
                'id' => 3309,
                'city' => 'KABUPATEN BOYOLALI',
                'state_id' => 33,
                'city_code' => '3309',
            ),
            196 =>
            array (
                'id' => 3310,
                'city' => 'KABUPATEN KLATEN',
                'state_id' => 33,
                'city_code' => '3310',
            ),
            197 =>
            array (
                'id' => 3311,
                'city' => 'KABUPATEN SUKOHARJO',
                'state_id' => 33,
                'city_code' => '3311',
            ),
            198 =>
            array (
                'id' => 3312,
                'city' => 'KABUPATEN WONOGIRI',
                'state_id' => 33,
                'city_code' => '3312',
            ),
            199 =>
            array (
                'id' => 3313,
                'city' => 'KABUPATEN KARANGANYAR',
                'state_id' => 33,
                'city_code' => '3313',
            ),
            200 =>
            array (
                'id' => 3314,
                'city' => 'KABUPATEN SRAGEN',
                'state_id' => 33,
                'city_code' => '3314',
            ),
            201 =>
            array (
                'id' => 3315,
                'city' => 'KABUPATEN GROBOGAN',
                'state_id' => 33,
                'city_code' => '3315',
            ),
            202 =>
            array (
                'id' => 3316,
                'city' => 'KABUPATEN BLORA',
                'state_id' => 33,
                'city_code' => '3316',
            ),
            203 =>
            array (
                'id' => 3317,
                'city' => 'KABUPATEN REMBANG',
                'state_id' => 33,
                'city_code' => '3317',
            ),
            204 =>
            array (
                'id' => 3318,
                'city' => 'KABUPATEN PATI',
                'state_id' => 33,
                'city_code' => '3318',
            ),
            205 =>
            array (
                'id' => 3319,
                'city' => 'KABUPATEN KUDUS',
                'state_id' => 33,
                'city_code' => '3319',
            ),
            206 =>
            array (
                'id' => 3320,
                'city' => 'KABUPATEN JEPARA',
                'state_id' => 33,
                'city_code' => '3320',
            ),
            207 =>
            array (
                'id' => 3321,
                'city' => 'KABUPATEN DEMAK',
                'state_id' => 33,
                'city_code' => '3321',
            ),
            208 =>
            array (
                'id' => 3322,
                'city' => 'KABUPATEN SEMARANG',
                'state_id' => 33,
                'city_code' => '3322',
            ),
            209 =>
            array (
                'id' => 3323,
                'city' => 'KABUPATEN TEMANGGUNG',
                'state_id' => 33,
                'city_code' => '3323',
            ),
            210 =>
            array (
                'id' => 3324,
                'city' => 'KABUPATEN KENDAL',
                'state_id' => 33,
                'city_code' => '3324',
            ),
            211 =>
            array (
                'id' => 3325,
                'city' => 'KABUPATEN BATANG',
                'state_id' => 33,
                'city_code' => '3325',
            ),
            212 =>
            array (
                'id' => 3326,
                'city' => 'KABUPATEN PEKALONGAN',
                'state_id' => 33,
                'city_code' => '3326',
            ),
            213 =>
            array (
                'id' => 3327,
                'city' => 'KABUPATEN PEMALANG',
                'state_id' => 33,
                'city_code' => '3327',
            ),
            214 =>
            array (
                'id' => 3328,
                'city' => 'KABUPATEN TEGAL',
                'state_id' => 33,
                'city_code' => '3328',
            ),
            215 =>
            array (
                'id' => 3329,
                'city' => 'KABUPATEN BREBES',
                'state_id' => 33,
                'city_code' => '3329',
            ),
            216 =>
            array (
                'id' => 3371,
                'city' => 'KOTA MAGELANG',
                'state_id' => 33,
                'city_code' => '3371',
            ),
            217 =>
            array (
                'id' => 3372,
                'city' => 'KOTA SURAKARTA',
                'state_id' => 33,
                'city_code' => '3372',
            ),
            218 =>
            array (
                'id' => 3373,
                'city' => 'KOTA SALATIGA',
                'state_id' => 33,
                'city_code' => '3373',
            ),
            219 =>
            array (
                'id' => 3374,
                'city' => 'KOTA SEMARANG',
                'state_id' => 33,
                'city_code' => '3374',
            ),
            220 =>
            array (
                'id' => 3375,
                'city' => 'KOTA PEKALONGAN',
                'state_id' => 33,
                'city_code' => '3375',
            ),
            221 =>
            array (
                'id' => 3376,
                'city' => 'KOTA TEGAL',
                'state_id' => 33,
                'city_code' => '3376',
            ),
            222 =>
            array (
                'id' => 3401,
                'city' => 'KABUPATEN KULON PROGO',
                'state_id' => 34,
                'city_code' => '3401',
            ),
            223 =>
            array (
                'id' => 3402,
                'city' => 'KABUPATEN BANTUL',
                'state_id' => 34,
                'city_code' => '3402',
            ),
            224 =>
            array (
                'id' => 3403,
                'city' => 'KABUPATEN GUNUNG KIDUL',
                'state_id' => 34,
                'city_code' => '3403',
            ),
            225 =>
            array (
                'id' => 3404,
                'city' => 'KABUPATEN SLEMAN',
                'state_id' => 34,
                'city_code' => '3404',
            ),
            226 =>
            array (
                'id' => 3471,
                'city' => 'KOTA YOGYAKARTA',
                'state_id' => 34,
                'city_code' => '3471',
            ),
        ));


    }
}
