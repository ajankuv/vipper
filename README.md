vipparcel.com PrestaShop usps shipping module
==========================

I found the need for this purely out of laziness. My wife and I run a large online store that is PrestaShop based. We found ourselfs manually doing all of the shipping at first (Copy and Paste / Rinse and Repeat).

We found this taking up way to much time, so we had someone write the first version of this. It not complete and sloppy, I have done what I can to fix it and get it properly working.

So far it will do First Class and Media Mail. (USPS)

Installation is pretty straight forward, manual drop into the module directory.

1. install the module, then edit ajax.php with your api key for vipparcel.com
2. drop view.tpl in admin/themes/default(or custom)/template/controllers/orders/helpers/view

By default this works for the test-API for vipparcel not prod. You can change this in the ajax.php

Here is the interface added to the admin section https://imgur.com/a/ywJO9 it is pretty straight forward, you must setup your own profiles to charge shipping. As you can see in the example that is what I changed myself for test shipping it is not the actual shipping cost.

THIS IS PURELY TO PRINT SHIPPING LABELS FOR USPS via VIPparcel, not do any of your shipping profiles.



# vipper
