<?php
namespace Magezon\Deliverydate\Observer;
class SaveToOrder implements \Magento\Framework\Event\ObserverInterface
{   
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $event = $observer->getEvent();

        $quote = $event->getQuote();
        $order = $observer->getOrder();
    	// $order = $event->getOrder();
    	// print_r($quote->getData('delivery_date')); 
    	// die; 

         $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/custom.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('--observer file delivery_date');
        $logger->info($quote->getData('delivery_date'));
           $order->setData('delivery_date', $quote->getData('delivery_date'));
           $order->setDeliveryDate($quote->getData('delivery_date'));
            $order->save();
    }
}