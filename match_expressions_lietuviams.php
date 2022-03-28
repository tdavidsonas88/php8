<?php

/**
 * Daugiabutis - daugiabučio namo statybos.
 */
class Daugiabutis {
    const DAUGIABUCIO_NAMO_TIPAS_STATYBOS = 'Daugiabučio statybų pradžia';
}

/**
 * Karkasinis namo konstrukcijos tipas.
 */
class Karkasinis {
    const KARKASINIS_NAMO_TIPAS = 'Karkasinio namo statybų pradžia';
}

/**
 * Lego namo konstrukcijos tipas
 */
class Lego {
    const LEGO_NAMO_TIPAS = 'Lego namo tipo statybų pradžia';
}

$obj = new Lego();

//switch (get_class($obj)) {
//    case 'Daugiabutis':
//       $namoTipas = Daugiabutis::DAUGIABUCIO_NAMO_TIPAS_STATYBOS;
//       break;
//    case 'Karkasinis':
//        $namoTipas = Karkasinis::KARKASINIS_NAMO_TIPAS;
//        break;
//    case 'Lego':
//        $namoTipas = Lego::LEGO_NAMO_TIPAS;
//        break;
//}

$namoTipas = match (get_class($obj)){
    'Daugiabutis' => Daugiabutis::DAUGIABUCIO_NAMO_TIPAS_STATYBOS,
    'Karkasinis' => Karkasinis::KARKASINIS_NAMO_TIPAS,
    'Lego' => Lego::LEGO_NAMO_TIPAS,
};

echo $namoTipas;




