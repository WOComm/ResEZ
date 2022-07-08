<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE' , 'آموزشهای تصویری') ;

jr_define ('_JOMRES_TUTORIAL_CPANEL' , 'Control Panel') ;
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC' , 'این آموزش نحوه استفاده از کنترل پنل مدیریت املاک را به شما نشان می دهد.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE' , 'Timeline') ;
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC' , 'نحوه استفاده از تقویم جدول زمانی. در این ویدئو با وارد کردن مشخصات آنها در پنجره بازشو , مهمان جدیدی ایجاد می کنیم , می توان از مهمانان موجود با انتخاب نام آنها از پنجره بازشو مجددا استفاده کرد.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES' , 'لیست خواص') ;
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC' , 'نحوه استفاده از صفحه خواص فهرست برای مشاهده اطلاعات بیشتر , تغییر ستون ها و جستجوی ویژگی های خاص.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP' , 'جزئیات دارایی خود را ویرایش کنید') ;
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC' , 'ویرایش جزئیات دارایی خود , از جمله کشیدن روی نقشه برای تنظیم موقعیت مکانی شما.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE' , 'تغییر حالت ویرایش تعرفه') ;
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC' , 'حالت ویرایش تعرفه شما روشی را تعیین می کند که می توانید برای تعیین قیمت ملک خود استفاده کنید. این کار را از طریق صفحه تنظیمات ویژگی انجام دهید.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP' , 'حالت ویرایش تعرفه معمولی برای هتل ها , حقوق بازنشستگی , B & B') ;
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC' , 'حالت ویرایش عادی تعرفه یک ویژگی ساده ویرایش تعرفه است که به شما امکان می دهد تعداد اتاقهای یک ملک , قیمت اتاق , تعداد مهمانان هر اتاق و حداکثر تعداد مهمان را انتخاب کنید در صورت صرفه جویی , این قیمت ها تا 10 سال آینده معتبر است. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP' , 'ویرایش عادی تعرفه برای ویلا و آپارتمان') ;
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC' , 'حالت ویرایش عادی تعرفه یک ویژگی ساده ویرایش تعرفه است که به شما امکان می دهد نوع فرعی ملک , قیمت ملک در شب و حداکثر تعداد مهمان را در یک مهمانی انتخاب کنید. در صورت ذخیره این قیمت ها سپس برای 10 سال آینده معتبر است. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP' , 'حالت ویرایش تعرفه ریز مدیریت (توصیه می شود)') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC' , 'ویرایش تعرفه Micromanage به شما امکان می دهد هم قیمت و هم حداقل تعداد روزهایی که اقامت می تواند برای هر روز از سال معتبر باشد را پیکربندی کنید. این یک ابزار قدرتمند است که به شما کنترل کامل می دهد در این مثال ما به شما نحوه ایجاد چندین مجموعه قیمت برای یک نوع اتاق , تعیین قیمت های متفاوت برای دوره های مختلف و قیمت های متفاوت برای روزهای خاص هفته در یک دوره را نشان می دهیم. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP' , 'حالت ویرایش تعرفه ریز مدیریت برای ویلا/آپارتمان (توصیه می شود)') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC' , 'حالت ویرایش تعرفه Micromanage به شما امکان می دهد تا قیمت و حداقل تعداد روزهایی که مدت اقامت برای آنها معتبر است را برای هر روز از سال پیکربندی کنید. این یک ابزار قدرتمند است که به شما کنترل کامل می دهد در این مثال ما نحوه ایجاد چندین مجموعه قیمت را به شما نشان خواهیم داد. ما قیمتهای متفاوتی را برای دوره های مختلف و قیمتهای مختلف را برای روزهای خاصی از هفته در یک دوره تعیین می کنیم. پس از انجام این کار , چندین تعرفه برای یک ملک , اما با تعداد مهمانان مختلف به ما امکان می دهد قیمت ها را برای هر سناریویی دقیق کنترل کنیم. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP' , 'تعرفه های مختلف برای شماره های مختلف مهمان') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC' , 'شما می توانید برای یک نوع اتاق چندین تعرفه ایجاد کنید , بنابراین اگر قیمت متفاوتی برای تعداد مختلف مهمان می خواهید , می توانید این کار را انجام دهید.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES' , 'برای هر نفر در شب - انواع مهمان') ;
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC' , 'برای دریافت هزینه برای هر نفر در شب , باید انواع مهمان را ایجاد کنید. انواع مختلف مهمان می توانند با قیمت پایه یک اتاق تفاوت داشته باشند , بنابراین کودکان در سنین مختلف می توانند بر اساس سن خود تخفیف های متفاوتی داشته باشند. شما برای استفاده از انواع مهمان نیازی به پرداخت هزینه برای هر نفر در شب ندارید , همچنین می توانید از آنها استفاده کنید اگر نرخ ثابت دریافت می کنید اما همچنان می خواهید تعداد مهمانان را جلب کنید یا بخواهید تعداد مهمانان را در رزرو محدود کنید. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP' , 'مرکز رسانه - بارگذاری تصویر') ;
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC' , 'همه تصاویر از طریق مرکز رسانه بارگذاری می شوند. در این ویدئو ما تصویر ویژگی اصلی را بارگذاری می کنیم , تعدادی از تصاویر نمایش اسلاید , مجموعه کوچکی از تصاویر که در صفحه نتایج جستجو نشان داده می شود , و تصاویر یکی از اتاقها.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP' , 'مرکز رسانه - بارگذاری تصویر') ;
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC' , 'همه تصاویر از طریق مرکز رسانه بارگذاری می شوند. در این ویدئو ما تصویر ویژگی اصلی را انتخاب می کنیم , مجموعه کوچکی از تصاویر که در صفحه نتایج جستجو نشان داده می شود , و برخی از تصاویر نمایش اسلاید.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL' , 'Administrator Control Panel') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC' , 'این صفحه فرود پیش فرض شما در ناحیه سرپرست است. شما می توانید خلاصه ای از آمار مختلف سایت را مشاهده کنید و ببینید چه ویژگی هایی در سیستم وجود دارد , که کامل است و تکمیل شده است و قبل از تأیید در انتظار بررسی هستند. هنگامی که یک ملک تأیید شد , می تواند توسط مدیر املاک منتشر شود. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER' , 'مدیر افزونه , نصب و استفاده از آن') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC' , 'این ویدئو نحوه استفاده از مدیر افزونه , از جمله نصب مدیر افزونه و سپس نصب و حذف افزونه را نشان می دهد. در صورت نداشتن کلید مجوز از شما خواسته می شود که در سایت ذخیره کنید پیکربندی قبل از نصب مدیر. اگر قبلاً از مدیر افزونه استفاده نکرده اید , این لیست در ابتدا خالی خواهد بود , در این مثال من قبلاً انواع افزونه ها را نصب کرده ام. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS' , 'مدیران املاک') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC' , 'مدیران املاک به یکی از دو روش اضافه می شوند. یا خودشان ویژگی ایجاد می کنند (در پیکربندی سایت غیرفعال می شوند) یا مدیر سایت می تواند مدیر خاصی را به برخی از ویژگی ها اختصاص دهد. مدیران فقط می توانند به ویژگی هایی که دارند دسترسی پیدا کنند ایجاد شده یا به آن اختصاص داده شده است. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL' , 'کنترل دسترسی') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC' , 'شما می توانید از ویژگی Access Control برای غیرفعال کردن گزینه های منو استفاده کنید , آنها را فقط برای دسته خاصی از کاربران قابل مشاهده می کند یا حتی آنها را به طور کلی ناپدید می کند. اگر نوار منو هیچ گزینه منویی برای نمایش ندارد به طور کامل ناپدید می شود , بنابراین اگر نمی خواهید بازدیدکنندگان سایت هیچ گزینه ای را مشاهده کنند , می توانید به عنوان مثال همه گزینه ها را برای ورود کاربران ثبت شده تنظیم کنید. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES' , 'نوع ملک و اتاق') ;
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC' , 'در این ویدئو دو مفهوم مهم را مشاهده خواهید کرد. اول ایجاد انواع املاک و انواع اتاق های مرتبط است. همچنین یک کاربر ثبت شده را خواهید دید که هنوز مدیر نبوده است که اموال خود را ایجاد کرده و تبدیل به یک مدیر (اما فقط قادر به پیکربندی خاصیتی است که ایجاد کرده اند). ویژگی ها و انواع اتاق به هم متصل هستند , پس از ایجاد نوع ویژگی , باید نوع اتاق را اضافه کنید , در غیر این صورت مدیران دارایی هنگام تلاش برای پیکربندی ویژگی های خود , پیام های خطای قرمز را مشاهده می کنند. ') ;



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS' , 'بارگذاری نشانگرهای نقشه') ;
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC' , 'از مرکز رسانه ای برای بارگذاری نشانگرهای نقشه استفاده می کنید. <a href="https://mapicons.mapsmarker.com/" target="_blank"> منبع عالمی از نشانگرها در اینجا یافت می شود. < /a> روش بارگذاری ویژگی های ملک , ویژگی های اتاق , انواع اتاق و سایر موارد یکسان است. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Properties Features');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC' , 'در این ویدئو نحوه ایجاد ویژگی های دارایی و بارگذاری تصاویر برای آنها را نشان می دهیم.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES' , 'Shortcodes') ;
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC' , 'کد کوتاه یک ویژگی فوق العاده قدرتمند در Jomres است. این اصل برای جوملا و وردپرس یکسان است. در این ویدئو به شما نشان خواهیم داد که کجا می توانید کدهای کوتاه را مشاهده کنید (این لیست بسته به افزونه هایی که تغییر می دهد) نصب شده) و نحوه استفاده از آنها. می توانید از کدهای مقالات یا ماژول ها استفاده کنید. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES' , 'ثبت پرونده ها') ;
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC' , 'این ویدیو نحوه مشاهده فایل های گزارش را به شما نشان می دهد. هنگام اجرای سیستم ورود به سیستم گسترده رخ می دهد. هنگامی که در حالت تولید (پیکربندی سایت> اشکال زدایی) گزارشات کمتری ایجاد می شود بنابراین اگر در حال آزمایش ویژگی جدید هستید شما باید سایت خود را بر روی توسعه تنظیم کنید. اگر می خواهید ورود خود را به اسکریپت های Jomres خود اضافه کنید , به <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> صفحه راهنمای ما در مورد نحوه انجام این کار. </a> در اینجا ما یک خطای جعلی ارسال می کنیم , سپس فایل log را مشاهده می کنیم. زیرا سایت در آنجا روی Development تنظیم شده است اطلاعات زیادی است , به طور معمول شما فقط پیامی را می بینید که می گوید خطایی وجود دارد و گزارش شده است. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS' , 'ترجمه برچسب ها و رشته های دیگر') ;
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC' , 'چندین روش برای ترجمه رشته های زبان در Jomres وجود دارد , شما می توانید فایل های زبان را ویرایش کنید , اما ممکن است هنگام ارتقاء آنها رونویسی شوند. در عوض توصیه می کنیم از ابزارهای ترجمه داخلی استفاده کنید که منحصر به ما هستند اگر رشته چیزی است که در فرم وارد شده است , مانند نام نوع اتاق , می توانید از صفحه ویرایش برچسب استفاده کنید. اگر رشته از فایل زبان است , می توانید از ابزار ویرایش فایل های زبان استفاده کنید. کافی است از ابزار جستجوی مرورگر برای پیدا کردن رشته ای که می خواهید تغییر دهید استفاده کنید و سپس روی پیوند کلیک کنید تا آن را تغییر دهید. این تغییرات در پایگاه داده ذخیره می شوند و بنابراین ایمن هستند. شما می توانید برچسب های مختلفی برای انواع ویژگی های مختلف داشته باشید , بنابراین می توانید به عنوان مثال , با تغییر منوی کشویی Language Context در بالای صفحه قبل از تغییر برچسب , New Property را به New Campsite تغییر دهید. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY' , 'افزودن خواص') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> در این مرحله Jomres در CMS نصب شده است و به منوی پیشین اضافه شده است (یا در Wordpress شما یک صفحه ایجاد کرده اید و کد کوتاه اولیه Jomres را به آن اضافه کرده اید). </ p>
<p> در اینجا خواهید دید که چگونه یک کاربر ثبت شده که هنوز مدیر املاک در Jomres نیست می تواند یک ویژگی جدید ایجاد کند , برخی تنظیمات اساسی را پیکربندی کرده و آن را منتشر کند. </p>
<p> در پایان خواهید دید که مدیر به طور خودکار به عنوان مدیر املاک تنظیم شده است , با این حال آنها فقط قادر به پیکربندی ویژگی های خود هستند. </p>
<p> اگرچه رابط کاربری در وردپرس متفاوت به نظر می رسد , اما این فرآیند برای جوملا یا وردپرس کاملاً یکسان است. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES' , 'دسته بندی املاک') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC' , 'دسته بندی املاک یک ویژگی ساده است که به مدیران املاک اجازه می دهد تا خواص خود را به یک دسته خاص اختصاص دهند. مدیران سایت می توانند کدهای کوتاهی ایجاد کنند که همه ویژگی های یک دسته را فهرست کند , همانطور که در این ویدیو نشان داده شده است.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY' , 'مشاهده ویژگی های سرپرست سایت') ;
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC' , '<p> شما از اینجا ویژگی ها را مدیریت نمی کنید , فقط می توانید ویژگی ها را از نمای جلو مدیریت کنید , با این حال در این لیست می توانید ویژگی هایی را که در انتظار تأیید هستند (در صورت فعال بودن ویژگی) و مواردی را که مشاهده می کنید , مشاهده کنید. ناقص (به عنوان مثال هنوز نیاز به بارگذاری تصاویر , تعیین قیمت و غیره). روی نام دارایی کلیک کنید تا به داشبورد آن ویژگی منتقل شوید. سپس می توانید از بخشهای راهنما در بالای صفحه برای مشاهده مراحل زیر استفاده کنید. برای تکمیل و انتشار یک ملک باید اقدام کنید. </p> ');



