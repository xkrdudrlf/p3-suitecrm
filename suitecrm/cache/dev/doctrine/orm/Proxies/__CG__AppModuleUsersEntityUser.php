<?php

namespace Proxies\__CG__\App\Module\Users\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Module\Users\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'user_name', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'userHash', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'systemGeneratedPassword', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'pwdLastChanged', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'authenticateId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'sugarLogin', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'isAdmin', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'externalAuthOnly', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'receiveNotifications', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'dateEntered', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'dateModified', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'modifiedUserId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'createdBy', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'title', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'photo', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'department', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneHome', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneMobile', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneWork', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneOther', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneFax', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressStreet', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressCity', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressState', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressCountry', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressPostalcode', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'deleted', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'portalOnly', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'showOnEmployees', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'employeeStatus', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'messengerId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'messengerType', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'reportsToId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'isGroup', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'factorAuth', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'factorAuthInterface'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'user_name', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'userHash', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'systemGeneratedPassword', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'pwdLastChanged', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'authenticateId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'sugarLogin', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'isAdmin', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'externalAuthOnly', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'receiveNotifications', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'description', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'dateEntered', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'dateModified', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'modifiedUserId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'createdBy', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'title', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'photo', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'department', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneHome', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneMobile', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneWork', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneOther', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'phoneFax', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'status', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressStreet', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressCity', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressState', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressCountry', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'addressPostalcode', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'deleted', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'portalOnly', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'showOnEmployees', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'employeeStatus', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'messengerId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'messengerType', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'reportsToId', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'isGroup', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'factorAuth', '' . "\0" . 'App\\Module\\Users\\Entity\\User' . "\0" . 'factorAuthInterface'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId(?string $id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystemGeneratedPassword(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystemGeneratedPassword', []);

        return parent::getSystemGeneratedPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystemGeneratedPassword(?bool $systemGeneratedPassword): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystemGeneratedPassword', [$systemGeneratedPassword]);

        return parent::setSystemGeneratedPassword($systemGeneratedPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwdLastChanged(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwdLastChanged', []);

        return parent::getPwdLastChanged();
    }

    /**
     * {@inheritDoc}
     */
    public function setPwdLastChanged(?\DateTimeInterface $pwdLastChanged): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwdLastChanged', [$pwdLastChanged]);

        return parent::setPwdLastChanged($pwdLastChanged);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthenticateId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthenticateId', []);

        return parent::getAuthenticateId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthenticateId(?string $authenticateId): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthenticateId', [$authenticateId]);

        return parent::setAuthenticateId($authenticateId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSugarLogin(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSugarLogin', []);

        return parent::getSugarLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setSugarLogin(?bool $sugarLogin): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSugarLogin', [$sugarLogin]);

        return parent::setSugarLogin($sugarLogin);
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
    public function setFirstName(?string $firstName): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
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
    public function setLastName(?string $lastName): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAdmin(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAdmin', []);

        return parent::getIsAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAdmin(?bool $isAdmin): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAdmin', [$isAdmin]);

        return parent::setIsAdmin($isAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalAuthOnly(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalAuthOnly', []);

        return parent::getExternalAuthOnly();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalAuthOnly(?bool $externalAuthOnly): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalAuthOnly', [$externalAuthOnly]);

        return parent::setExternalAuthOnly($externalAuthOnly);
    }

    /**
     * {@inheritDoc}
     */
    public function getReceiveNotifications(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReceiveNotifications', []);

        return parent::getReceiveNotifications();
    }

    /**
     * {@inheritDoc}
     */
    public function setReceiveNotifications(?bool $receiveNotifications): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReceiveNotifications', [$receiveNotifications]);

        return parent::setReceiveNotifications($receiveNotifications);
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
    public function setDescription(?string $description): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEntered(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEntered', []);

        return parent::getDateEntered();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEntered(?\DateTimeInterface $dateEntered): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEntered', [$dateEntered]);

        return parent::setDateEntered($dateEntered);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified(?\DateTimeInterface $dateModified): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedUserId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedUserId', []);

        return parent::getModifiedUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedUserId(?string $modifiedUserId): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedUserId', [$modifiedUserId]);

        return parent::setModifiedUserId($modifiedUserId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(?string $createdBy): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(?string $title): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', []);

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(?string $photo): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', [$photo]);

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(?string $department): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$department]);

        return parent::setDepartment($department);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneHome(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneHome', []);

        return parent::getPhoneHome();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneHome(?string $phoneHome): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneHome', [$phoneHome]);

        return parent::setPhoneHome($phoneHome);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneMobile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneMobile', []);

        return parent::getPhoneMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneMobile(?string $phoneMobile): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneMobile', [$phoneMobile]);

        return parent::setPhoneMobile($phoneMobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneWork(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneWork', []);

        return parent::getPhoneWork();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneWork(?string $phoneWork): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneWork', [$phoneWork]);

        return parent::setPhoneWork($phoneWork);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneOther(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneOther', []);

        return parent::getPhoneOther();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneOther(?string $phoneOther): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneOther', [$phoneOther]);

        return parent::setPhoneOther($phoneOther);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneFax(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneFax', []);

        return parent::getPhoneFax();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneFax(?string $phoneFax): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneFax', [$phoneFax]);

        return parent::setPhoneFax($phoneFax);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?string $status): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressStreet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressStreet', []);

        return parent::getAddressStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressStreet(?string $addressStreet): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressStreet', [$addressStreet]);

        return parent::setAddressStreet($addressStreet);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressCity', []);

        return parent::getAddressCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressCity(?string $addressCity): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressCity', [$addressCity]);

        return parent::setAddressCity($addressCity);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressState', []);

        return parent::getAddressState();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressState(?string $addressState): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressState', [$addressState]);

        return parent::setAddressState($addressState);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressCountry(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressCountry', []);

        return parent::getAddressCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressCountry(?string $addressCountry): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressCountry', [$addressCountry]);

        return parent::setAddressCountry($addressCountry);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddressPostalcode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddressPostalcode', []);

        return parent::getAddressPostalcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddressPostalcode(?string $addressPostalcode): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddressPostalcode', [$addressPostalcode]);

        return parent::setAddressPostalcode($addressPostalcode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted(?bool $deleted): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getPortalOnly(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPortalOnly', []);

        return parent::getPortalOnly();
    }

    /**
     * {@inheritDoc}
     */
    public function setPortalOnly(?bool $portalOnly): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPortalOnly', [$portalOnly]);

        return parent::setPortalOnly($portalOnly);
    }

    /**
     * {@inheritDoc}
     */
    public function getShowOnEmployees(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShowOnEmployees', []);

        return parent::getShowOnEmployees();
    }

    /**
     * {@inheritDoc}
     */
    public function setShowOnEmployees(?bool $showOnEmployees): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShowOnEmployees', [$showOnEmployees]);

        return parent::setShowOnEmployees($showOnEmployees);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmployeeStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmployeeStatus', []);

        return parent::getEmployeeStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmployeeStatus(?string $employeeStatus): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmployeeStatus', [$employeeStatus]);

        return parent::setEmployeeStatus($employeeStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessengerId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessengerId', []);

        return parent::getMessengerId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessengerId(?string $messengerId): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessengerId', [$messengerId]);

        return parent::setMessengerId($messengerId);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessengerType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessengerType', []);

        return parent::getMessengerType();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessengerType(?string $messengerType): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessengerType', [$messengerType]);

        return parent::setMessengerType($messengerType);
    }

    /**
     * {@inheritDoc}
     */
    public function getReportsToId(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReportsToId', []);

        return parent::getReportsToId();
    }

    /**
     * {@inheritDoc}
     */
    public function setReportsToId(?string $reportsToId): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReportsToId', [$reportsToId]);

        return parent::setReportsToId($reportsToId);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsGroup(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsGroup', []);

        return parent::getIsGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsGroup(?bool $isGroup): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsGroup', [$isGroup]);

        return parent::setIsGroup($isGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactorAuth(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactorAuth', []);

        return parent::getFactorAuth();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactorAuth(?bool $factorAuth): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactorAuth', [$factorAuth]);

        return parent::setFactorAuth($factorAuth);
    }

    /**
     * {@inheritDoc}
     */
    public function getFactorAuthInterface(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFactorAuthInterface', []);

        return parent::getFactorAuthInterface();
    }

    /**
     * {@inheritDoc}
     */
    public function setFactorAuthInterface(?string $factorAuthInterface): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFactorAuthInterface', [$factorAuthInterface]);

        return parent::setFactorAuthInterface($factorAuthInterface);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isEqualTo(\Symfony\Component\Security\Core\User\UserInterface $user): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEqualTo', [$user]);

        return parent::isEqualTo($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserHash(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserHash', []);

        return parent::getUserHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserHash(?string $userHash): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserHash', [$userHash]);

        return parent::setUserHash($userHash);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', []);

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName(?string $userName): \App\Module\Users\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', [$userName]);

        return parent::setUserName($userName);
    }

}
