<?php

namespace TrescPismaTest;

use DOMDocument;
use PHPUnit\Framework\TestCase;
use pl\kir\sds\soap\AdresDoFakturowaniaType;
use pl\kir\sds\soap\AdresType;
use pl\kir\sds\soap\DaneDostawcyType;
use pl\kir\sds\soap\DaneIdentyfikacyjneZamowienieType;
use pl\kir\sds\soap\DaneNabywcyType;
use pl\kir\sds\soap\DaneOdbiorcyType;
use pl\kir\sds\soap\DanePrzedmiotuZamowienieType;
use pl\kir\sds\soap\DaneUslugiType;
use pl\kir\sds\soap\DokumentyPowiazaneType;
use pl\kir\sds\soap\IdentyfikatorPowiazaniaType;
use pl\kir\sds\soap\KwotaType;
use pl\kir\sds\soap\NaglowekType;
use pl\kir\sds\soap\NIPType;
use pl\kir\sds\soap\PodsumowaniePrzedmiotuUslugaType;
use pl\kir\sds\soap\PrzedmiotUslugaZamowienieType;
use pl\kir\sds\soap\StopkaType;
use pl\kir\sds\soap\TakNieType;
use pl\kir\sds\soap\TrescPisma\Zamowienie;
use pl\kir\sds\soap\TypDostawcy;
use pl\kir\sds\soap\TypNabywcy;
use pl\kir\sds\soap\TypOdbiorcy;
use pl\kir\sds\soap\UzytkownikType;

class ZamowinieTest extends TestCase
{
    public function testEmptyZamowienieToXml()
    {
        $zam = new Zamowienie();
        $this->assertSame('<zam:TrescPisma xmlns:zam="https://www.kir.pl/SystemDokumentowStrukturyzowanych/Zamowienie" Zawartosc="Tresc"></zam:TrescPisma>', (string)$zam);
    }

    public function testMinimalDataValidatedAgainstXsd()
    {
        $zamowienie = new Zamowienie();
        $zamowienie->Naglowek = new NaglowekType();
        $zamowienie->Naglowek->Miejscowosc = 'WARSZAWA';
        $zamowienie->Naglowek->DataWystawieniaDokumentuKomunikatu = date('Y-m-d');
        $zamowienie->DaneIdentyfikacyjne = new DaneIdentyfikacyjneZamowienieType();
        $zamowienie->DaneIdentyfikacyjne->NumerDokumentu = 'ZAMÓWIENIE 1234';
        $zamowienie->DaneIdentyfikacyjne->WalutaDokumentu = 'PLN';
        $zamowienie->DaneIdentyfikacyjne->KodWalutyPodatkuVAT = 'PLN';
        $zamowienie->DokumentyPowiazane = new DokumentyPowiazaneType();
        $zamowienie->DokumentyPowiazane->NumerUmowy = new IdentyfikatorPowiazaniaType();
        $zamowienie->DokumentyPowiazane->NumerUmowy->IdentyfikatorDokumentu = '1234';
        $zamowienie->DokumentyPowiazane->NumerOferty = new IdentyfikatorPowiazaniaType();
        $zamowienie->DokumentyPowiazane->NumerOferty->IdentyfikatorDokumentu = 'ZAM/1234';
        $zamowienie->CzySkroconyProces = TakNieType::TYPE_TAK->value;
        $zamowienie->DaneDostawcy = new DaneDostawcyType();
        $zamowienie->DaneDostawcy->TypDostawcy = TypDostawcy::TYPE_DEALER->value;
        $zamowienie->DaneDostawcy->NazwaFirmy = 'DILER SP. Z O.O.';
        $zamowienie->DaneDostawcy->NIP = new NIPType();
        $zamowienie->DaneDostawcy->NIP->NIPPolski = '1234567890';
        $zamowienie->DaneDostawcy->REGON = '012345678';
        $zamowienie->DaneDostawcy->Adres = new AdresType();
        $zamowienie->DaneDostawcy->Adres->KodKraju = 'PL';
        $zamowienie->DaneDostawcy->Adres->Miejscowosc = 'Warszawa';
        $zamowienie->DaneDostawcy->Adres->Ulica = 'Uliczna';
        $zamowienie->DaneDostawcy->Adres->NrDomu = '2A';
        $zamowienie->DaneDostawcy->Adres->KodPocztowy = '01-234';
        $zamowienie->DaneDostawcy->ImieINazwiskoWystawcyDokumentu = 'Imię Nazwisko';
        $zamowienie->DaneDostawcy->AdresDoKorespondencji = $zamowienie->DaneDostawcy->Adres;

        $zamowienie->DaneNabywcy = new DaneNabywcyType();
        $zamowienie->DaneNabywcy->TypNabywcy = TypNabywcy::TYPE_KUPUJACY->value;
        $zamowienie->DaneNabywcy->NazwaFirmy = 'LEASING SP Z O.O.';
        $zamowienie->DaneNabywcy->NIP = new NIPType();
        $zamowienie->DaneNabywcy->NIP->NIPPolski = '1111111111';
        $zamowienie->DaneNabywcy->Adres = new AdresDoFakturowaniaType();
        $zamowienie->DaneNabywcy->Adres->AdresUwzgledniajacyFakturowanie = TakNieType::TYPE_TAK->value;
        $zamowienie->DaneNabywcy->Adres->Adres = new AdresType();
        $zamowienie->DaneNabywcy->Adres->Adres->Miejscowosc = 'WARSZAWA';
        $zamowienie->DaneNabywcy->Adres->Adres->Ulica = 'ul. Związku Polskiego Leasingu';
        $zamowienie->DaneNabywcy->Adres->Adres->NrDomu = '2023';
        $zamowienie->DaneNabywcy->Adres->Adres->KodPocztowy = '98-765';
        $zamowienie->DaneNabywcy->Adres->Adres->KodKraju = 'PL';
        $zamowienie->DaneNabywcy->AdresEmail = 'test@example.com';

        $zamowienie->DaneOdbiorcy = new DaneOdbiorcyType();
        $zamowienie->DaneOdbiorcy->TypOdbiorcy = TypOdbiorcy::TYPE_KORZYSTAJACY->value;
        $zamowienie->DaneOdbiorcy->NazwaFirmy = 'KORZYSTAJĄCY S.C.';

        $zamowienie->PrzedmiotUsluga = new PrzedmiotUslugaZamowienieType();
        $zamowienie->PrzedmiotUsluga->LiczbaPorzadkowaLinia = '1';
        $zamowienie->PrzedmiotUsluga->DaneUslugiLinia = new DaneUslugiType();
        $zamowienie->PrzedmiotUsluga->DaneUslugiLinia->NazwaUslugi = 'ZAMÓWIENIE SUZUKI VITARA HYBRID';

        $danePrzedmiotu = new DanePrzedmiotuZamowienieType;
        $danePrzedmiotu->LiczbaPorzadkowaPrzedmiotu = '1';
        $danePrzedmiotu->CzyPojazd = TakNieType::TYPE_TAK->value;
        $danePrzedmiotu->CzyPrzedmiotRejestrowalny = TakNieType::TYPE_TAK->value;
        $danePrzedmiotu->CzyPrzedmiotUprzednioZarejestrowany = (TakNieType::TYPE_NIE)->value;
        $danePrzedmiotu->Marka = 'Suzuki';
        $danePrzedmiotu->Model = 'Vitara';
        $danePrzedmiotu->Typ = '1.4 BOOSTERJET 4WD 6MT Elegance Sun';
        $zamowienie->PrzedmiotUsluga->DanePrzedmiotuLinia = [$danePrzedmiotu];

        $zamowienie->PrzedmiotUsluga->RodzajStatusPojazduLinia = 'NOWY';
        $zamowienie->PrzedmiotUsluga->OpisPrzedmiotuLinia = 'Samochód osobowy SUZUKI VITARA HYBRID 1.4 BOOSTERJET 4WD 6MT Elegance Sun';

        $zamowienie->Podsumowanie = new PodsumowaniePrzedmiotuUslugaType();
        $zamowienie->Podsumowanie->KwotaNettoPodsumowanie = new KwotaType('123000,00');

        $zamowienie->Stopka = new StopkaType();
        $zamowienie->Stopka->Uzytkownik = new UzytkownikType();
        $zamowienie->Stopka->Uzytkownik->KodUzytkownika = '123456';
        $zamowienie->Stopka->ImieINazwisko = 'Imię Nazwisko';
        $xmlString = (string)$zamowienie;

        libxml_use_internal_errors(true);
        $xml = new DOMDocument();
        $xml->loadXML($xmlString);

        $this->assertTrue($xml->schemaValidate(__DIR__ . '/../../resources/Zamowienie.xsd'), implode("\n", $this->libxml_display_errors()));
    }
    private function libxml_display_error($error)
    {
        $return = "";
        switch ($error->level) {
            case LIBXML_ERR_WARNING:
                $return .= "<b>Warning $error->code</b>: ";
                break;
            case LIBXML_ERR_ERROR:
                $return .= "<b>Error $error->code</b>: ";
                break;
            case LIBXML_ERR_FATAL:
                $return .= "<b>Fatal Error $error->code</b>: ";
                break;
        }
        $return .= trim($error->message);
        if ($error->file) {
            $return .= " in <b>$error->file</b>";
        }
        $return .= " on line <b>$error->line</b>";

        return $return;
    }

    private function libxml_display_errors() {
        $errors = [];
        foreach (libxml_get_errors() as $error) {
            $errors[] = $this->libxml_display_error($error);
        }
        libxml_clear_errors();
        return $errors;
    }
}
