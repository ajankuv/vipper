vipparcel.com PrestaShop usps shipping module
==========================

I found the need for this purely out of laziness. My wife and I run a large online store that is PrestaShop based. We found ourselfs manually doing all of the shipping at first (Copy and Paste / Rinse and Repeat).

We found this taking up way to much time, so we had someone write the first version of this. It was not complete and sloppy, so I decided to fix the issues and improve upon it.

So far it will do First Class and Media Mail. (USPS) (oz and lb's)

Installation is pretty straight forward, manually drop into the base module dir.

1. Install the module, then edit ajax.php with your api key for vipparcel.com
2. Drop view.tpl in admin/themes/default(or custom)/template/controllers/orders/helpers/view
3. From there is should activate the label creation section on the customers order page.

By default this works for the test-API for vipparcel not prod. You can change this in the ajax.php

Here is the interface added to the admin section https://imgur.com/a/ywJO9 it is pretty straight forward, you must setup your own profiles to charge shipping. As you can see in the example that is what I charged myself for test shipping it is not the actual shipping cost.

THIS IS PURELY TO PRINT SHIPPING LABELS FOR USPS via VIPparcel, not to do any of your shipping profiles.

If you have any questions, feel free to contact me. If you like it contribute and send me a PR :)



# jedicloudsolutions.com
