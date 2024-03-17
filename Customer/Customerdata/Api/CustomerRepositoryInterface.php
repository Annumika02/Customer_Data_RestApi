<?php
namespace Customer\Customerdata\Api;

interface CustomerRepositoryInterface
{
  //*******************FOR SINGLE ID****************** */
    // /**
    //  * Get customer data by ID
    //  *
    //  * @param int $customerId
    //  * @return \Magento\Customer\Api\Data\CustomerInterface
    //  * @throws \Magento\Framework\Exception\NoSuchEntityException
    //  */
    // public function getById($customerId);


// ************FOR MULTIPLE IDS************
    /**
     * Get customer data by IDs
     *
     * @param int[] $customerIds
     * @return \Magento\Customer\Api\Data\CustomerInterface[]
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByIds(array $customerIds);

}


    
