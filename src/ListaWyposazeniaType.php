<?php

/**
 * Sekcja opisana w rozdziale 7.32 Specyfikacji technicznej
 */
namespace pl\kir\sds\soap;

final class ListaWyposazeniaType {

    /**
     * @var string|ZmiennaTekstowa100Type $KodKonfiguracji
     */
    public $KodKonfiguracji;

    /**
     * @var string|ZmiennaTekstowa255Type $LinkDoKonfiguracji
     */
    public $LinkDoKonfiguracji;

    /**
     * @var ListaWyposazeniaLiniaType[] $ListaWyposazeniaLinia
     */
    public $ListaWyposazeniaLinia;

    /**
     * @var ListaWyposazeniaPodsumowanieType $ListaWyposazeniaPodsumowanie
     */
    public $ListaWyposazeniaPodsumowanie;

}
