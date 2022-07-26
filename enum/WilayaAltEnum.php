<?php

namespace ElaborateCode\AlgerianStates\Enum;

enum WilayaEnum
{
    case _1;
    case _2;
    case _3;
    case _4;
    case _5;
    case _6;
    case _7;
    case _8;
    case _9;
    case _10;
    case _11;
    case _12;
    case _13;
    case _14;
    case _15;
    case _16;
    case _17;
    case _18;
    case _19;
    case _20;
    case _21;
    case _22;
    case _23;
    case _24;
    case _25;
    case _26;
    case _27;
    case _28;
    case _29;
    case _30;
    case _31;
    case _32;
    case _33;
    case _34;
    case _35;
    case _36;
    case _37;
    case _38;
    case _39;
    case _40;
    case _41;
    case _42;
    case _43;
    case _44;
    case _45;
    case _46;
    case _47;
    case _48;
    case _49;
    case _50;
    case _51;
    case _52;
    case _53;
    case _54;
    case _55;
    case _56;
    case _57;
    case _58;

    public static function wilaya($id): string
    {
        return match (true) {
            $id === 1 => 'Adrar',
            $id === 2 => 'Chlef',
            $id === 3 => 'Laghouat',
            $id === 4 => 'Oum El Bouaghi',
            $id === 5 => 'Batna',
            $id === 6 => 'Béjaïa',
            $id === 7 => 'Biskra',
            $id === 8 => 'Béchar',
            $id === 9 => 'Blida',
            $id === 10 => 'Bouira',
            $id === 11 => 'Tamanrasset',
            $id === 12 => 'Tébessa',
            $id === 13 => 'Tlemcen',
            $id === 14 => 'Tiaret',
            $id === 15 => 'Tizi Ouzou',
            $id === 16 => 'Alger',
            $id === 17 => 'Djelfa',
            $id === 18 => 'Jijel',
            $id === 19 => 'Sétif',
            $id === 20 => 'Saïda',
            $id === 21 => 'Skikda',
            $id === 22 => 'Sidi Bel Abbès',
            $id === 23 => 'Annaba',
            $id === 24 => 'Guelma',
            $id === 25 => 'Constantine',
            $id === 26 => 'Médéa',
            $id === 27 => 'Mostaganem',
            $id === 28 => "M'Sila",
            $id === 29 => 'Mascara',
            $id === 30 => 'Ouargla',
            $id === 31 => 'Oran',
            $id === 32 => 'El Bayadh',
            $id === 33 => 'Illizi',
            $id === 34 => 'Bordj Bou Arreridj',
            $id === 35 => 'Boumerdès',
            $id === 36 => 'El Tarf',
            $id === 37 => 'Tindouf',
            $id === 38 => 'Tissemsilt',
            $id === 39 => 'El Oued',
            $id === 40 => 'Khenchela',
            $id === 41 => 'Souk Ahras',
            $id === 42 => 'Tipaza',
            $id === 43 => 'Mila',
            $id === 44 => 'Aïn Defla',
            $id === 45 => 'Naâma',
            $id === 46 => 'Aïn Témouchent',
            $id === 47 => 'Ghardaïa',
            $id === 48 => 'Relizane',
            $id === 49 => "El M'Ghair",
            $id === 50 => 'El Meniaa',
            $id === 51 => 'Ouled Djellal',
            $id === 52 => 'Bordj Badji Mokhtar',
            $id === 53 => 'Béni Abbès',
            $id === 54 => 'Timimoun',
            $id === 55 => 'Touggourt',
            $id === 56 => 'Djanet',
            $id === 57 => 'In Salah',
            $id === 58 => 'In Guezzam',
        };
    }
}
