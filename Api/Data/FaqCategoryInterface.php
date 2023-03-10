<?php
/**
 * Interface FaqCategoryInterface
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_Faq
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */
namespace Risecommerce\Faq\Api\Data;

interface FaqCategoryInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const FAQ_CATEGORY_ID = 'faq_category_id';
    const FAQ_CATEGORY_NAME = 'faq_category_name';
    const FAQ_CATEGORY_DESCRIPTION = 'faq_category_description';
    const SORT_ORDER = 'sort_order';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    const IS_ACTIVE     = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();
    /**
     * Get Name
     *
     * @return string
     */
    public function getName();
    /**
     * Get Description
     *
     * @return string|null
     */
    public function getDescription();
    /**
     * Get SortOrder
     *
     * @return string|null
     */
    public function getSortOrder();
    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();
    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();
    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();
    /**
     * Set ID
     *
     * @param int $id id
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setId($id);
    /**
     * Set Name
     *
     * @param string $name name
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setName($name);
    /**
     * Set Desription
     *
     * @param string $desription desription
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setDescription($desription);
    /**
     * Set Sortorder
     *
     * @param string $sortorder sortorder
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setSortOrder($sortorder);
    /**
     * Set creation time
     *
     * @param string $creationTime creationTime
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setCreationTime($creationTime);
    /**
     * Set update time
     *
     * @param string $updateTime updateTime
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setUpdateTime($updateTime);
    /**
     * Set is active
     *
     * @param int|bool $isActive isActive
     *
     * @return \Risecommerce\Faq\Api\Data\FaqCategoryInterface
     */
    public function setIsActive($isActive);
}
