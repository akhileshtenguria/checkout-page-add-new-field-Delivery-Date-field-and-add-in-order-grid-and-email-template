var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/place-order': {
                'Magezon_Deliverydate/js/order/place-order-mixin': true
            },
        }
    },
    'map': {
        '*': {
            'Magento_Checkout/js/view/shipping': 'Magezon_Deliverydate/js/view/shipping'
        }
    }
};
