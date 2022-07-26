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

    public function wilaya(): string
    {
        return match ($this) {
            WilayaEnum::_1 => 'Adrar',
            WilayaEnum::_2 => 'Chlef',
            WilayaEnum::_3 => 'Laghouat',
            WilayaEnum::_4 => 'Oum El Bouaghi',
            WilayaEnum::_5 => 'Batna',
            WilayaEnum::_6 => 'Béjaïa',
            WilayaEnum::_7 => 'Biskra',
            WilayaEnum::_8 => 'Béchar',
            WilayaEnum::_9 => 'Blida',
            WilayaEnum::_10 => 'Bouira',
            WilayaEnum::_11 => 'Tamanrasset',
            WilayaEnum::_12 => 'Tébessa',
            WilayaEnum::_13 => 'Tlemcen',
            WilayaEnum::_14 => 'Tiaret',
            WilayaEnum::_15 => 'Tizi Ouzou',
            WilayaEnum::_16 => 'Alger',
            WilayaEnum::_17 => 'Djelfa',
            WilayaEnum::_18 => 'Jijel',
            WilayaEnum::_19 => 'Sétif',
            WilayaEnum::_20 => 'Saïda',
            WilayaEnum::_21 => 'Skikda',
            WilayaEnum::_22 => 'Sidi Bel Abbès',
            WilayaEnum::_23 => 'Annaba',
            WilayaEnum::_24 => 'Guelma',
            WilayaEnum::_25 => 'Constantine',
            WilayaEnum::_26 => 'Médéa',
            WilayaEnum::_27 => 'Mostaganem',
            WilayaEnum::_28 => "M'Sila",
            WilayaEnum::_29 => 'Mascara',
            WilayaEnum::_30 => 'Ouargla',
            WilayaEnum::_31 => 'Oran',
            WilayaEnum::_32 => 'El Bayadh',
            WilayaEnum::_33 => 'Illizi',
            WilayaEnum::_34 => 'Bordj Bou Arreridj',
            WilayaEnum::_35 => 'Boumerdès',
            WilayaEnum::_36 => 'El Tarf',
            WilayaEnum::_37 => 'Tindouf',
            WilayaEnum::_38 => 'Tissemsilt',
            WilayaEnum::_39 => 'El Oued',
            WilayaEnum::_40 => 'Khenchela',
            WilayaEnum::_41 => 'Souk Ahras',
            WilayaEnum::_42 => 'Tipaza',
            WilayaEnum::_43 => 'Mila',
            WilayaEnum::_44 => 'Aïn Defla',
            WilayaEnum::_45 => 'Naâma',
            WilayaEnum::_46 => 'Aïn Témouchent',
            WilayaEnum::_47 => 'Ghardaïa',
            WilayaEnum::_48 => 'Relizane',
            WilayaEnum::_49 => "El M'Ghair",
            WilayaEnum::_50 => 'El Meniaa',
            WilayaEnum::_51 => 'Ouled Djellal',
            WilayaEnum::_52 => 'Bordj Badji Mokhtar',
            WilayaEnum::_53 => 'Béni Abbès',
            WilayaEnum::_54 => 'Timimoun',
            WilayaEnum::_55 => 'Touggourt',
            WilayaEnum::_56 => 'Djanet',
            WilayaEnum::_57 => 'In Salah',
            WilayaEnum::_58 => 'In Guezzam',
        };
    }
}
