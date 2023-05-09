<?php

namespace Homeinfo\Deployments\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Deployments extends AbstractEntity
{
    /**
     * @var int $pid
     */
    public $pid;

    /**
     * @var string $street
     */
    public $street;

    /**
     * @var string $house_number
     */
    public $house_number;

    /**
     * @var string $zip_code
     */
    public $zip_code;

    /**
     * @var string $city
     */
    public $city;

    /**
     * @var string $lpt_street
     */
    public $lpt_street;

    /**
     * @var string $lpt_house_number
     */
    public $lpt_house_number;

    /**
     * @var string $lpt_zip_code
     */
    public $lpt_zip_code;

    /**
     * @var string $lpt_city
     */
    public $lpt_city;

    /**
     * @var string $annotation
     */
    public $annotation;

    public function getAddress(): Address
    {
        return new Address($this->street, $this->house_number, $this->zip_code, $this->city);
    }

    public function getLPTAddress(): Address
    {
        return new Address($this->lpt_street, $this->lpt_house_number, $this->lpt_zip_code, $this->lpt_city);
    }
}