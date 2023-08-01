# USAGE

### Certificate

Certificate must be in PEM format and include both certificate and private key, convert p12 with openssl:

```shell
openssl pkcs12 -in cert.p12 -out cert.pem -clcerts
```

### API

```php
<?php
namespace pl\kir\sds\soap;

$sds = new SystemDokumentowStrukturyzowanychService(null, [
    'keep_alive'    => true,
    'trace'         => true,
    'local_cert'    => 'cert.pem',
    'passphrase'    => 'p4$$w0rD',
    'cache_wsdl'    => \WSDL_CACHE_NONE,
    "stream_context" => stream_context_create([
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
        ]
    ]),
    'proxy_host' => 'proxy.company.int', 
    'proxy_port' => 8080,
]);

$req = new WyslijDokumentRequest;

$req->dokument = new DokumentType();
$req->dokument->typKomunikatu = TypDokumentuType::TYPE_1301->value;
$req->dokument->nazwaKomunikatu = 'test zamówienia';
$req->dokument->idKomunikatu = new idKomunikatuType('1234');
$req->dokument->potwierdzenieOdbioru = TakNieType::TYPE_TAK->value;
$req->dokument->wersjaKomunikatu = new wersjaKomunikatuType('0.0.1');
$req->dokument->idProfilu = new wersjaKomunikatuType('ZPL demo 0.0.1');

$req->dokument->NadawcaKomunikatu = new NadawcaKomunikatuType();

$req->dokument->NadawcaKomunikatu->Uczestnik = new UczestnikType();
$req->dokument->NadawcaKomunikatu->Uczestnik->KodUczestnika = '1';
$req->dokument->NadawcaKomunikatu->Uczestnik->NazwaUczestnika = 'testowy';
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika = new AdresType();
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->KodKraju = KodKrajuType::TYPE_PL->value;
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->Miejscowosc = 'Warszawa';
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->Ulica = 'Testowa';
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->NrDomu = '1';
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->NrLokalu = '2';
$req->dokument->NadawcaKomunikatu->Uczestnik->AdresUczestnika->KodPocztowy = new ZmiennaTekstowa100Type('01-234');

$req->dokument->NadawcaKomunikatu->Uzytkownik = new UzytkownikType();
$req->dokument->NadawcaKomunikatu->Uzytkownik->KodUzytkownika = new ZmiennaTekstowa100Type('TESTOWY-1');

$req->dokument->AdresatKomunikatu = new UczestnikType();
$req->dokument->AdresatKomunikatu->KodUczestnika = '2';
$req->dokument->AdresatKomunikatu->AdresUczestnika = new AdresType();
$req->dokument->AdresatKomunikatu->AdresUczestnika->KodKraju = KodKrajuType::TYPE_PL->value;
$req->dokument->AdresatKomunikatu->AdresUczestnika->Miejscowosc = 'Warszawa';
$req->dokument->AdresatKomunikatu->AdresUczestnika->Ulica = 'Testowa';
$req->dokument->AdresatKomunikatu->AdresUczestnika->NrDomu = '3';
$req->dokument->AdresatKomunikatu->AdresUczestnika->NrLokalu = '4';
$req->dokument->AdresatKomunikatu->AdresUczestnika->KodPocztowy = new ZmiennaTekstowa100Type('01-235');

$zamowienie = new TrescPisma\Zamowienie();
$zamowienie->DaneDostawcy = new DaneDostawcyType();
/* ... more properties */

$signature = new \XadesTools\Signature(\XadesTools\Settings('cert.p12', 'p4$$w0rD'));
$xades = $signature->signXml((string)$zamowienie);

$req->dokument->TrescPisma = new TrescPismaPodpisType(base64_encode($xades));
$req->dokument->TrescPisma->Zawartosc = ZawartoscTresciType::TYPE_PODPIS->value;
$req->dokument->TrescPisma->Typ = TypTresciType::TYPE_XADESBES->value;
$req->dokument->TrescPisma->Kodowanie = KodowanieTresciType::BASE64->value;

$res = $sds->wyslijDokument($req);

$kodSds = $res->kodSDS;
```
