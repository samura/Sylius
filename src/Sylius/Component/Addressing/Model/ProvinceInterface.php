<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Addressing\Model;

/**
 * @author Paweł Jędrzejewski <pjedrzejewski@sylius.pl>
 */
interface ProvinceInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getIsoName();

    /**
     * @param string $isoName
     */
    public function setIsoName($isoName);

    /**
     * @return CountryInterface
     */
    public function getCountry();

    /**
     * @param CountryInterface $country
     */
    public function setCountry(CountryInterface $country = null);
}
