<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \App\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'userType', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'token', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'creationDate', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'addresses', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'ips', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'brands', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'purchases'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'userType', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'token', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'creationDate', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'active', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'addresses', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'ips', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'brands', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'purchases'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(string $phone): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToken', []);

        return parent::getToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(string $token): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setToken', [$token]);

        return parent::setToken($token);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDate', []);

        return parent::getCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreationDate(\DateTimeInterface $creationDate): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreationDate', [$creationDate]);

        return parent::setCreationDate($creationDate);
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
    public function setActive(int $active): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresses(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresses', []);

        return parent::getAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddress(\App\Entity\Address $address): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddress', [$address]);

        return parent::addAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddress(\App\Entity\Address $address): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddress', [$address]);

        return parent::removeAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getIps(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIps', []);

        return parent::getIps();
    }

    /**
     * {@inheritDoc}
     */
    public function addIp(\App\Entity\Ips $ip): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addIp', [$ip]);

        return parent::addIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function removeIp(\App\Entity\Ips $ip): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeIp', [$ip]);

        return parent::removeIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrands(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrands', []);

        return parent::getBrands();
    }

    /**
     * {@inheritDoc}
     */
    public function addBrand(\App\Entity\Brand $brand): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBrand', [$brand]);

        return parent::addBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBrand(\App\Entity\Brand $brand): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBrand', [$brand]);

        return parent::removeBrand($brand);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserType(): ?\App\Entity\UserType
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserType', []);

        return parent::getUserType();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserType(?\App\Entity\UserType $userType): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserType', [$userType]);

        return parent::setUserType($userType);
    }

    /**
     * {@inheritDoc}
     */
    public function getPurchases(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPurchases', []);

        return parent::getPurchases();
    }

    /**
     * {@inheritDoc}
     */
    public function addPurchase(\App\Entity\Purchase $purchase): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPurchase', [$purchase]);

        return parent::addPurchase($purchase);
    }

    /**
     * {@inheritDoc}
     */
    public function removePurchase(\App\Entity\Purchase $purchase): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePurchase', [$purchase]);

        return parent::removePurchase($purchase);
    }

}
