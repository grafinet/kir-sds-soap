<?php

namespace pl\kir\sds\soap\api;

class SystemDokumentowStrukturyzowanychService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    public static $classmap = array(
        'NadawcaKomunikatuType' => NadawcaKomunikatuType::class,
        'UczestnikType' => UczestnikType::class,
        'UzytkownikType' => UzytkownikType::class,
        'NaglowekType' => NaglowekType::class,
        'AdresDoFakturowaniaType' => AdresDoFakturowaniaType::class,
        'AdresType' => AdresType::class,
        'StopkaType' => StopkaType::class,
        'TrescPismaPodpisType' => TrescPismaPodpisType::class,
        'DaneIdentyfikacyjneZapytanieOfertoweType' => DaneIdentyfikacyjneZapytanieOfertoweType::class,
        'DaneIdentyfikacyjneZamowienieType' => DaneIdentyfikacyjneZamowienieType::class,
        'DaneIdentyfikacyjneProtokolOdbioruType' => DaneIdentyfikacyjneProtokolOdbioruType::class,
        'DokumentyPowiazaneType' => DokumentyPowiazaneType::class,
        'DokumentyPowiazane2Type' => DokumentyPowiazane2Type::class,
        'IdentyfikatorPowiazaniaType' => IdentyfikatorPowiazaniaType::class,
        'NIPType' => NIPType::class,
        'DaneDostawcyType' => DaneDostawcyType::class,
        'DaneNabywcyType' => DaneNabywcyType::class,
        'DaneOdbiorcyType' => DaneOdbiorcyType::class,
        'PrzedmiotUslugaZapytanieType' => PrzedmiotUslugaZapytanieType::class,
        'PrzedmiotUslugaZamowienieType' => PrzedmiotUslugaZamowienieType::class,
        'PrzedmiotUslugaPotwierdznieRejestracjiType' => PrzedmiotUslugaPotwierdznieRejestracjiType::class,
        'DanePrzedmiotuZapytanieType' => DanePrzedmiotuZapytanieType::class,
        'DanePrzedmiotuZamowienieType' => DanePrzedmiotuZamowienieType::class,
        'DanePrzedmiotuPotwierdzenieRejestracjiType' => DanePrzedmiotuPotwierdzenieRejestracjiType::class,
        'DaneUslugiType' => DaneUslugiType::class,
        'PodsumowaniePrzedmiotuUslugaType' => PodsumowaniePrzedmiotuUslugaType::class,
        'DanePrzedmiotuZapytanieKonfiguracjaType' => DanePrzedmiotuZapytanieKonfiguracjaType::class,
        'DanePrzedmiotuZamowienieKonfiguracjaType' => DanePrzedmiotuZamowienieKonfiguracjaType::class,
        'DanePrzedmiotuPotwierdzenieRejestracjiKonfiguracjaType' => DanePrzedmiotuPotwierdzenieRejestracjiKonfiguracjaType::class,
        'OponyRozmiarType' => OponyRozmiarType::class,
        'ListaWyposazeniaType' => ListaWyposazeniaType::class,
        'LisaWyposazeniaLiniaType' => LisaWyposazeniaLiniaType::class,
        'ListaWyposazeniaPodsumowanieType' => ListaWyposazeniaPodsumowanieType::class,
        'KlauzulaType' => KlauzulaType::class,
        'ZalacznikiType' => ZalacznikiType::class,
        'ZalacznikType' => ZalacznikType::class,
        'SzczegolyDokumentuType' => SzczegolyDokumentuType::class,
        'SzczegolyDealeraType' => SzczegolyDealeraType::class,
        'DokumentType' => DokumentType::class,
        'Zalaczniki' => Zalaczniki::class,
        'TrescPisma' => TrescPisma::class,
        'WyslijDokumentRequest' => WyslijDokumentRequest::class,
        'WyslijDokumentResponse' => WyslijDokumentResponse::class,
        'PobierzDokumentRequest' => PobierzDokumentRequest::class,
        'PobierzDokumentResponse' => PobierzDokumentResponse::class,
        'WyszukajDokumentyRequest' => WyszukajDokumentyRequest::class,
        'WyszukajDokumentyResponse' => WyszukajDokumentyResponse::class,
        'WyszukajDealerowRequest' => WyszukajDealerowRequest::class,
        'WyszukajDealerowResponse' => WyszukajDealerowResponse::class,
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options An array of config values
     */
    public function __construct($wsdl = null, array $options = [])
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = __DIR__ . '/../resources/SystemDokumentowStrukturyzowanych.wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param WyslijDokumentRequest $request
     * @return WyslijDokumentResponse
     */
    public function wyslijDokument(WyslijDokumentRequest $request)
    {
        return $this->__soapCall('wyslijDokument', array($request));
    }

    /**
     * @param PobierzDokumentRequest $request
     * @return PobierzDokumentResponse
     */
    public function pobierzDokument(PobierzDokumentRequest $request)
    {
        return $this->__soapCall('pobierzDokument', array($request));
    }

    /**
     * @param WyszukajDokumentyRequest $request
     * @return WyszukajDokumentyResponse
     */
    public function wyszukajDokumenty(WyszukajDokumentyRequest $request)
    {
        return $this->__soapCall('wyszukajDokumenty', array($request));
    }

    /**
     * @param WyszukajDealerowRequest $request
     * @return WyszukajDealerowResponse
     */
    public function wyszukajDealerow(WyszukajDealerowRequest $request)
    {
        return $this->__soapCall('wyszukajDealerow', array($request));
    }

}
