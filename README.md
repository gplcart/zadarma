[![Build Status](https://scrutinizer-ci.com/g/gplcart/zadarma/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gplcart/zadarma/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gplcart/zadarma/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gplcart/zadarma/?branch=master)

Zadarma is a [GPL Cart](https://github.com/gplcart/gplcart) module that integrates ["Call Me" widget](https://zadarma.com/en/services/callme) into your site.

The widget increases the effectiveness of your site by opening a new line of communication with its visitors. It's no longer necessary to pick up the phone to reach you. Now, it can be done with a simple click on your website.

In order to use this module you must register an account on https://zadarma.com


**Installation**

1. Download and extract to `system/modules` manually or using composer `composer require gplcart/zadarma`. IMPORTANT: If you downloaded the module manually, be sure that the name of extracted module folder doesn't contain a branch/version suffix, e.g `-master`. Rename if needed.
2. Go to `admin/module/list` end enable the module
3. Go to https://my.zadarma.com/callback/widget/add, create and copy your widget code then paste it on `admin/module/settings/zadarma`
3. Choose when to show the widget by selecting a system trigger