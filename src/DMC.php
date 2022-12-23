<?php

namespace pl\kir\sds\soap\api;

enum DMC: string {
    case TYPE_1 = '1) samochody ciężarowe o dopuszczalnej masie całkowitej powyżej 3,5 tony i poniżej 12 ton';
    case TYPE_2 = '2) samochody ciężarowe o dopuszczalnej masie całkowitej równej lub wyższej niż 12 ton';
    case TYPE_3 = '3) ciągniki siodłowe i balastowe przystosowane do używania łącznie z naczepą lub przyczepą o dopuszczalnej masie całkowitej zespołu pojazdów od 3,5 tony i poniżej 12 ton';
    case TYPE_4 = '4) ciągniki siodłowe i balastowe przystosowane do używania łącznie z naczepą lub przyczepą o dopuszczalnej masie całkowitej zespołu pojazdów równej lub wyższej niż 12 ton';
    case TYPE_5 = '5) przyczepy i naczepy, które łącznie z pojazdem silnikowym posiadają dopuszczalną masę całkowitą od 7 ton i poniżej 12 ton, z wyjątkiem związanych wyłącznie z działalnością rolniczą prowadzoną przez podatnika podatku rolnego';
    case TYPE_6 = '6) przyczepy i naczepy, które łącznie z pojazdem silnikowym posiadają dopuszczalną masę całkowitą równą lub wyższą niż 12 ton, z wyjątkiem związanych wyłącznie z działalnością rolniczą prowadzoną przez podatnika podatku rolnego';
    case TYPE_7 = '7) autobusy';
}
