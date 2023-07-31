<?php

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
     * @var LisaWyposazeniaLiniaType[] $ListaWyposazeniaLinia
     */
    public $ListaWyposazeniaLinia;

    /**
     * @var ListaWyposazeniaPodsumowanieType $ListaWyposazeniaPodsumowanie
     */
    public $ListaWyposazeniaPodsumowanie;

}
