The module works as payment method for Payment module (https://www.drupal.org/project/payment).

## INSTALLATION
Before starting the installation process you must register/login on Paytm
https://dashboard.paytm.com account and generate your API Keys.

* Install the module as normal, see link for instructions.
   Link: https://www.drupal.org/documentation/install/modules-themes/modules-8
* Go to /admin/config/services/payment/method/configuration-add and add Paytm payment method.
* Configure the paytm payment method as per your data in paytm.
* Enable the Paytm to use it as a payment method.
* Select your mode i.e. TEST/LIVE.
* Enter generated Merchant ID, API Secret Key to the respective textbox.
* Enter the merchant website, keep it "WEBSTAGING" for testing purpose.
* Enter the Amount to be used as TXNAMOUNT.

That's it :)
