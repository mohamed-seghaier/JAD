<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'brand', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stock', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'purchaseItems'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'brand', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'picture', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'stock', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'purchaseItems'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getBrand(): ?\App\Entity\Brand
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrand', []);

        return parent::getBrand();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrand(?\App\Entity\Brand $brand): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrand', [$brand]);

        return parent::setBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function increment_stock(): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increment_stock', []);

        return parent::increment_stock();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPicture(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPicture', []);

        return parent::getPicture();
    }

    /**
     * {@inheritDoc}
     */
    public function setPicture(string $picture): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPicture', [$picture]);

        return parent::setPicture($picture);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(int $price): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getStock(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStock', []);

        return parent::getStock();
    }

    /**
     * {@inheritDoc}
     */
    public function setStock(int $stock): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStock', [$stock]);

        return parent::setStock($stock);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOneStock(): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOneStock', []);

        return parent::removeOneStock();
    }

    /**
     * {@inheritDoc}
     */
    public function getActive(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive(int $active): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchaseItems(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPurchaseItems', []);

        return parent::getPurchaseItems();
    }

    /**
     * {@inheritDoc}
     */
    public function addPurchaseItem(\App\Entity\PurchaseItem $purchaseItem): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPurchaseItem', [$purchaseItem]);

        return parent::addPurchaseItem($purchaseItem);
    }

    /**
     * {@inheritDoc}
     */
    public function removePurchaseItem(\App\Entity\PurchaseItem $purchaseItem): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePurchaseItem', [$purchaseItem]);

        return parent::removePurchaseItem($purchaseItem);
    }

}
