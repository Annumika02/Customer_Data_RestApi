<?php
namespace Customer\Customerdata\Model;


//**************************FOR SINGLE ID**************************** */

// use Magento\Customer\Api\CustomerRepositoryInterface as MagentoCustomerRepositoryInterface;

// class CustomerRepository implements \Customer\Customerdata\Api\CustomerRepositoryInterface
// {
//     /**
//      * @var MagentoCustomerRepositoryInterface
//      */
//     protected $customerRepository;

//     public function __construct(
//         MagentoCustomerRepositoryInterface $customerRepository
//     ) {
//         $this->customerRepository = $customerRepository;
//     }

//     /**
//      * @inheritDoc
//      */
//     public function getById($customerId)
//     {
//         try {
//             return $this->customerRepository->getById($customerId);
//         } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
//             throw new \Magento\Framework\Exception\NoSuchEntityException(__('Customer not found.'));
//         }
//     }
// }


//************************FOR MULTILPE IDS******************************** */


use Magento\Customer\Api\CustomerRepositoryInterface as MagentoCustomerRepositoryInterface;

class CustomerRepository implements \Customer\Customerdata\Api\CustomerRepositoryInterface
{
    /**
     * @var MagentoCustomerRepositoryInterface
     */
    protected $customerRepository;

    public function __construct(
        MagentoCustomerRepositoryInterface $customerRepository
    ) {
        $this->customerRepository = $customerRepository;
    }

    /**
     * @inheritDoc
     */
    public function getByIds(array $customerIds)
    {
        $customers = [];

        foreach ($customerIds as $customerId) {
            try {
                $customer = $this->customerRepository->getById($customerId);
                $customers[] = $customer;
            } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
                // Handle exception if needed
                // $e->getMessage() will contain the exception message
            }
        }

        return $customers;
    }
}





//