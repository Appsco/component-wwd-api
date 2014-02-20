<?php

namespace BWC\Component\WWDAPI;

class Nexus {

  const USE_PERSONAL = 'personal';
  const USE_BUSINESS_PROFIT = 'business use for profit';
  const USE_NON_PROFIT = 'non-profit business or organization';
  const USE_EDUCATIONAL = 'educational purpose';
  const USE_GOVERNMENT = 'government purpose';

  const CATEGORY_CITIZEN = 'citizen of US';
  const CATEGORY_PERMANENT = 'permanent resident of US';
  const CATEGORY_DOMICILE = 'primary domicile of US';
  const CATEGORY_INCORPORATED = 'incorporated or organized in US';
  const CATEGORY_FOREIGN_BUSINESS = 'foreign entity doing business in US';
  const CATEGORY_FOREIGN_PROPERTY = 'foreign entity with office of property in US';

  /**
   * Describes the prospective owner of the domain
   * @var string
   */
  public $category;

  /**
   * Describes the use of domain
   * @var string
   */
  public $use;

  /**
   * Two letter country code
   * @var string
   */
  public $Country;

  public function __construct($category, $use, $country) {
    $this->category = $category;
    $this->use = $use;
    $this->Country = $country;
  }

}