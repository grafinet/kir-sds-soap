<?php

namespace pl\kir\sds\soap;

use SoapClient;

class SystemDokumentowStrukturyzowanychService extends SoapClient
{
    public const WSDL = __DIR__ . '/../resources/SystemDokumentowStrukturyzowanych.wsdl';

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
        'ListaWyposazeniaLiniaType' => ListaWyposazeniaLiniaType::class,
        'ListaWyposazeniaPodsumowanieType' => ListaWyposazeniaPodsumowanieType::class,
        'KlauzulaType' => KlauzulaType::class,
        'ZalacznikiType' => ZalacznikiType::class,
        'ZalacznikType' => ZalacznikType::class,
        'SzczegolyDokumentuType' => SzczegolyDokumentuType::class,
        'SzczegolyDealeraType' => SzczegolyDealeraType::class,
        'DokumentInfoType' => DokumentInfoType::class,
        'DokumentType' => DokumentType::class,
        'Zalaczniki' => Zalaczniki::class,
        'TrescPisma' => TrescPisma::class,
        'WyslijDokumentRequest' => WyslijDokumentRequest::class,
        'WyslijDokumentResponse' => WyslijDokumentResponse::class,
        'PobierzDokumentRequest' => PobierzDokumentRequest::class,
        'PobierzDokumentResponse' => PobierzDokumentResponse::class,
        'PobierzZalacznikRequest' => PobierzZalacznikRequest::class,
        'PobierzZalacznikResponse' => PobierzZalacznikResponse::class,
        'WyszukajDokumentyRequest' => WyszukajDokumentyRequest::class,
        'WyszukajDokumentyResponse' => WyszukajDokumentyResponse::class,
        'WyszukajDealerowRequest' => WyszukajDealerowRequest::class,
        'WyszukajDealerowResponse' => WyszukajDealerowResponse::class,
    );

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options An array of config values
     * @throws \SoapFault
     */
    public function __construct($wsdl = null, array $options = [])
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge([
            'features' => 1,
        ], $options);
        if (!$wsdl) {
            $wsdl = self::WSDL;
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param WyslijDokumentRequest $request
     * @return WyslijDokumentResponse
     * @throws \SoapFault
     */
    public function wyslijDokument(WyslijDokumentRequest $request)
    {
        return $this->__soapCall('wyslijDokument', [$request]);
    }

    /**
     * @param PobierzDokumentRequest $request
     * @return PobierzDokumentResponse
     * @throws \SoapFault
     */
    public function pobierzDokument(PobierzDokumentRequest $request)
    {
        return $this->__soapCall('pobierzDokument', [$request]);
    }

    /**
     * @param PobierzZalacznikRequest $request
     * @return PobierzZalacznikResponse
     * @throws \SoapFault
     */
    public function pobierzZalacznik(PobierzZalacznikRequest $request)
    {
        return $this->__soapCall('pobierzZalacznik', [$request]);
    }

    /**
     * @param WyszukajDokumentyRequest $request
     * @return WyszukajDokumentyResponse
     * @throws \SoapFault
     */
    public function wyszukajDokumenty(WyszukajDokumentyRequest $request)
    {
        return $this->__soapCall('wyszukajDokumenty', [$request]);
    }

    /**
     * @param WyszukajDealerowRequest $request
     * @return WyszukajDealerowResponse
     * @throws \SoapFault
     */
    public function wyszukajDealerow(WyszukajDealerowRequest $request)
    {
        return $this->__soapCall('wyszukajDealerow', [$request]);
    }

}
