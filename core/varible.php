<?php
//menu
$assortment = array(
    'Square' => array('Square', 'Квадрат'),
    'Circle' => array('Circle', 'Круг/пруток'),
    'Ribbon' => array('Ribbon', 'Лента'),
    'List' => array('List', 'Лист/плита'),
   // 'Branch' => array('Branch', 'Отвод'),
    'PipeCircle' => array('PipeCircle', 'Труба круглая'),
    'PipeProf' => array('PipeProf', 'Труба профильная'),
    'Corner' => array('Corner', 'Уголок'),
  //  'Flange' => array('Flange', 'Фланец плоский'),
    'ChannelP' => array('ChannelP', 'Швеллер'),
    'Hexahedron' => array('Hexahedron', 'Шестигранник')
);

//марки стали
$steel_grade = array('12Х18Н10Т' => 7.9,
                    '08X17T' => 7.76,
                    '20Х13' => 7.67,
                    '30Х13' => 7.67,
                    '40Х13' => 7.65,
                    '08X18H10' => 7.85,
                    '10X17H13M2T' => 7.9,
                    '06ХН28МДТ' => 7.96,
                    '20Х23Н18' => 7.9,
                    'AISI 304' => 7.85,
                    'AISI 316L' => 8,
                    'AISI 316Ti' => 7.95,
                    'AISI 321' => 7.9,
                    'AISI 409' => 7.76,
                    'AISI 430' => 7.72,
                    'AISI 904L' => 7.96,
                    'Прочее' => 7.9
);
//исполнение отвод
$branch_rendering = array('исполнение 1' => 1,
                    'исполнение 2' => 2);

//размер отвод
$branch_size = array(  '21.3х2' => 1,
                '21.3х3.2' => 2,
                '21.35х4' => 3,
                '26.9х2' => 4,
                '26.9х3.2' => 5,
                '26.9х4' => 6,
                '33.7х2.3' => 7,
                '33.7х2.3' => 8,
                '33.7х2.3' => 9,
                '42.4х2.6' => 10,
                '42.4х3.6' => 11,
                '42.4х5' => 12,
                '48.3х2.6' => 13,
                '48.3х3.6' => 14,
                '48.3х5' => 15,
                '60.3х2.9' => 16,
                '60.3х4' => 17,
                '60.3х5.6' => 18,
                '76х2.9' => 19,
                '76х5' => 20,
                '76х7.1' => 21,
                '89х3.2' => 22,
                '89х5.6' => 23,
                '89х8' => 24,
                '114х3.6' => 25,
                '114х6.3' => 26,
                '114х8.8' => 27,
                '139х4' => 28,
                '139х6.3' => 29,
                '139х10' => 30,
                '168х4.5' => 31,
                '168х7.1' => 32,
                '168х11' => 33,
                '219х6.3' => 34,
                '219х8' => 35,
                '219х12.5' => 36,
                '273х6.3' => 37,
                '273х10' => 38,
                '323х7.1' => 39,
                '323х10' => 40,
                '355х8' => 41,
                '355х11' => 42
            );
//давление фланец
$flange_pressure = array('Ру 6' => 1,
                        'Ру 10' => 2,
                        'Ру 16' => 3,
                        'Ру 25' => 4
);
//условный диаметр фланец
$flange_diam = array('15' => 1,
                    '20' => 2,
                    '25' => 3,
                    '32' => 4,
                    '40' => 5,
                    '50' => 6,
                    '65' => 7,
                    '80' => 8,
                    '100' => 9,
                    '125' => 10,
                    '150' => 11,
                    '200' => 12,
                    '250' => 13,
                    '300' => 14,
                    '350' => 15,
                    '400' => 16,
                    '500' => 17,
                    '600' => 18,
                    '800' => 19,
                    '1000' => 20,
                    '1200' => 21
);

//номер швеллера
$channel = array('5П' => 1,
                '5У' => 2,
                '6,5П' => 3,
                '6,5У' => 4,
                '8П' => 5,
                '8У' => 6,
                '10П' => 7,
                '10У' => 8,
                '12П' => 9,
                '12У' => 10,
                '14П' => 11,
                '14у' => 12,
                '16аП' => 13,
                '16П' => 14,
                '16у' => 15,
                '18аП' => 16,
                '18аУ' => 17,
                '18П' => 18,
                '18у' => 19,
                '20П' => 20,
                '20У' => 21,
                '20У' => 22,
                '22П' => 23,
                '24П' => 24,
                '24У' => 25,
                '27П' => 26,
                '30П' => 27,
                '30У' => 28,
                '33П' => 29,
                '33У' => 30,
                '36П' => 31,
                '36у' => 32,
                '40П' => 33,
                '40У' => 34
);
if (empty($_SESSION['path'])){
    $_SESSION['path'] = 'qwerty';
}



