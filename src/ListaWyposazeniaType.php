<?php

namespace pl\kir\sds\soap\api;

class ListaWyposazeniaType {

    /**
     * @var string $KodKonfiguracji
     */
    public $KodKonfiguracji;

    /**
     * @var string $LinkDoKonfiguracji
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
