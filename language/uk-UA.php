<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * @package Jomres\Core\Languages
 *
 * Language files.
 *
 **/
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Миттєве бронювання');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Показати профілі');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Заг. Конфігурація');
jr_define('_JOMRES_COM_MR_BACK', 'Назад');
jr_define('_JOMRES_COM_MR_YES', 'Так');
jr_define('_JOMRES_COM_MR_NO', 'Ні');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Новий тариф');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', "Новий об'єкт");
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Новий гість');
jr_define('_JOMRES_COM_MR_SAVE', 'Зберегти');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', "Ім'я");
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Поселення');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Виїзд');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', "Ім'я користувача");
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Рівень доступу');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Корустувача змінено');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Всі броні');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Редагувати бронь');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'прибуття/виїзд');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Гість');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Кімната');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Оплата');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', "Ім'я");
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Прізвище');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Особливі вимоги');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Зверніть увагу, деякі особливі вимоги можуть оплачуватися додатково.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Відмінити замовлення');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер будинку');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Вулиця');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Місто');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Поштовий індекс');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Телефонний номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобільний номер');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'Електронна пошта');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Не можна відмінити бронь, гість вже зареєстрований');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Без завдатку');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Підтвердіть відміну');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Замовлення скасоване');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Днів до прибуття');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Тип замовлення');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Чорний');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Рецепція');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Інтернет');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Назва кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Кімната');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Поверх');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Доступ для неповносправних');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Макс. число гостей');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Опис типу кімнати');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Список особливостей кімнати');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Завдаток сплачено');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Введіть депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Всього до оплати');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Довідка депозиту');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Замовити');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Депозит');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Депозит записаний');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Схожі квартири');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', "Об'єкт");
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Редагуйте деталі гостя');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', "Ім'я");
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Прізвище');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Дім');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Вулиця');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Місто');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Поштовий індекс');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'телефонный номер');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Мобильный телефон');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Номер факсу');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Зробіть ваш выбір');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Дні проживання');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Загальна кількість');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', "Перегляньте конфігурацію об'єкта та кімнати");
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Кімнати');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Атрибути кімнати');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Типи квартир');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', "Об'єкт");
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Атрибути квартири');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Квартира');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Тип');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', "Ім'я");
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Число');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Поверх');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Макс. гостей');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Атрибути');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Редагуйте пункт');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Атрибути квартири');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Опис атрибутів');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Особливість кімнати додана');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Особливість кімнати оновлена');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Тип кімнати');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Тип кімнати (скорочено)');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Опис типу кімнати');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Тип кімнати додано');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Редагуйте пункт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Назва');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Вулиця');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Місто');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Область');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Країна');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Поштовый індекс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Телефон');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Факс');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'Електронна пошта');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Веб-сайт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Особливості');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', "Об'єкт оновлено");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', "Особливості Об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', "Особливості Об'єкту (скорочено)");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', "Особливості Об'єкту повний опис");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', "Особливість Об'єкту оновлена");
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Тарифи');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Назва');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Дійсний з');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Дійсний до');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'За добу');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Мін. діб');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Макс. діб');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Мін. гостей');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Макс. гостей');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Тип квартири');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ігнорувати PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Дозволити на вихідні');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Редагувати пункт');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Клонувати пункт');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Тариф видалено');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Редагуйте тариф');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Бронь збережена');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Зареєструйте гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Відреєструйте гостя');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Список замовлень');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Контрольна панель');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Керування гостем');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', "Управління Об'єктом");
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Доступність');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', "Ім'я");
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Прізвище');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Номер будинку');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Вулиця');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Місто');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Поштовый індекс');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Номер телефону');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Мобільний');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Немає кімнат, які б підходили по вашому запиту');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Дякуємо, що бронюєте саме у нас.<br><br> Зверніть увагу, що це попереднє підтвердження. Остаточне підтвердження прийде на вашу електронну пошту');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Записати гостя');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Гість зареєструвався');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Виписати гостя');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Додатки');
jr_define('_JOMRES_COM_A_TARIFFS', 'Тарифи і Валюта');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'завантаження файлів');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Додатково на одного гостя');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'відміттьте Так, якщо всі додатки будуть оплачуватися');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Плата за доповнення для одного гостя');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'депозит - процент?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Депозит має бути % від вартості всієї броні? Якщо ні, то це депозит будет дорівнювати вартості');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Сума необхідного депозиту');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'З гостя за добу');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Виберіть Так, якщо розраховувати за гостя/ніч. Якщо ні, то витрати будуть розраховані від загальних витрат на кімнату');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Розмір файлу');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Максимальний розмір файлу зображення в кілобайтах');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Заброньовано');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Деталі бронювання');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', "Нагадуємо, що бронь - юридично обов'язковий контракт, тому, якщо буде необхідність відмінити чи скоротити бронь, вам все одно доведеться оплатити повну вартість");
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', 'Відміна та зміна бронювання:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', '14 днів до поселення');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Надрукувати підтвердження броні');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Роздрукувати рахунок');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Кількість ночей:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Вартість доби:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Загальна сума');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Друкувати рахунко');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Додати обслуговування до рахунку');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Опис обслуговування');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Вартість обслуговування');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Інше');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Пункт, доданий до рахунку');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Завантажити зображення');
jr_define('_JOMRES_FILE_UPLOAD', 'Завантаження файлу');
jr_define('_JOMRES_COM_A_ODDS', 'Різне');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Видалити це зображення');
jr_define('_JOMRES_FILE_DELETED', 'Файл видалено');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Видалити');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Кімнату неможливо видалити через відкриті броні. Відмініть броні на цю кімнату і повторіть спробу.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Кімнату видалено');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Видалити особливості кімнати');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Неможливо видалити особливість кімнати, вона присутня в інших кімнатах. Спершу видаліть цю особливість з інших кімнат.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Особливість кімнати видалено');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', "Видалити особливіть об'єкта");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', "Неможливо видалити особливіть об'єкта, вона прив'язана до об'єкта. Зніміть особливість з об'єкта і спробуйте повторити.");
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', "Особливість об'єкта видалено");
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Видалити тип кімнати');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Тип кімнати видалено');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', "Видалити об'єкт");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', "Об'єкт видалено");
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', "У вас недостатньо прав для видалення цього об'єкта.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Ширина повного зображення');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Розташування');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', "Опис об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Час поселення');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Активності поруч');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Як дістатися');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Аеропорт');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Дістатися іншим транспортом');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Правила');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Адреса');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Гості можуть забронювати онлайн');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Поставте Так, щоб гості могли бронювати онлайн.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Броні на фіксований період');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', "Якщо виставляєте Так, тоді броні будуть прийматися лише на вказаний період. Якщо Ні, тоді  зверніть увагу, щоб день прибуття не був встановлений 'Так' (якщо ви не хочете гостей проселятися в конкретний день)");
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Період бронювання:');
jr_define('_JOMRES_COM_A_BOOKING', 'Бронювання кімнат');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Максимальна кількість періоді, напр. 3 x 7 (період бронювання) = 21 день');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Що це - квартира/дім/вілла?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Переглянути бронь');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Підтвердити бронь');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'понеділок');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'вівторок');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'середа');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'четвер');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', "п'ятниця");
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'субота');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'неділя');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'пн');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'вт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'ср');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'чт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'пт');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'сб');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'нд');
jr_define('_JOMRES_COM_A_AVLCAL', 'Календар завантаженості');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Колір шрифту для поточної дати');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Колір шрифту для днів в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Колір шрифту для днів не в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', "Колір фону клітинки для днів, коли об'єкт/кімната доступіа");
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Колір фону клітинки для днів не в демонстрації місяця');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Колір фону клітинки для зайнятих днів');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Колір фону клітинки для зарезервованих номерів (без депозиту депозит)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Колір фону клітинки для минулих дат');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Занято/Не доступно');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'вільно');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Тимчасові броні');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Наперед встановлений день прибуття');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Лише для сайтів з встановленими датами прибуття. Виберіть день, коли починається прибуття.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Фіксований день прибуття');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Період перебування (днів)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Показати календар завантаженості?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Так, щоб показувати календар');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Доступність');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Клікніть на вільну дату, щоб побачити форму бронювання.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Чорнова броні');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Нова чорнова бронь');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Видалити гостя');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Гостя видалено');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', "Неможливо видалити цього гостя, оскільки з ним пов'язані броні. Вдмініть ці броні і спробуйте знову.");
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Не важливо');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Календарний вихідний формат');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Календарний вхідний формат');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Дозволяє користувачу міняти вхідний формат дат в межах Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Броні на фіксований період дозволяють коротке проживання');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Тривалість короткого проживания');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Опубліковано');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Аудиторський слід');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Дата');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', "Користувач (ім'я користувача)");
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Фільтр по датах');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Статус');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Очікуємо прибуття');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Прибуття сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Теперішній гість');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Виселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Пізній виїзд');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Не прибув');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Створена кімната');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Оновлена кімната');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Видалена кімната');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Створена особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Оновлена особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Видаленана особливість кімнаты');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', "Створено об'єкт");
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', "Оновлено об'єкт");
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', "Виалено об'єкт");
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', "Редаговані налаштування об'єкту");
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', "Об'єкт опубліковано");
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Створений тариф');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Оновлений тариф');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Додано податок на обслуговування');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Зареєстурвати гостя');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Введений депозит');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Створений гість');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Оновлений гість');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Заброньована кімната');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Створити додаток');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Оновити додаток');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Видалити додаток');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Опублікувати додаток');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Створено чорнову бронь');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Видалено чорнову бронь');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Додатки');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Опис');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Назва');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Ціна');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'додаток оновлено');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Редагувати пункт');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Додаток видалено');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Адміністративні додатки');
jr_define('_JOMRES_COM_A_EXTRAS', 'Показувати додатки під час замовлення?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Поставте Так, щоб показувати будь які додатки, які можна запропонувати гостю');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Допомога з додатками');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Дата початку чорнової броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Дата, коли відновлюється обслуговування');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Чорнові броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Виникла помилка, одна або декілька кімнат зайняті.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Кімнати що включені до чорнової броні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Немає чорнових броней');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Число поселень');
jr_define('_JOMRES_COM_A_RESET', 'Відхилити');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Бронь відмінена');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Шукайте тут:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Символ валюти');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Код валюти');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Більше інформації');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Обмежити попереднє бронювань?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Так, якщо хочете обмежити термін попереднього бронювання (кількість днів - в наступному полі). Якщо користувач буде бронювати більше ніж n днів наперед, то їх дата прибуття буде встановлена на сьогоднішню дату');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'На скільки днів обмежити попередні бронювання:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Податок');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Податок з кімнати');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Фіксований податок');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Процентний податок');
jr_define('_JOMRES_COM_A_EUROTAX', 'Податок');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', '% податку');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Архівувати всі звіти');
jr_define('_JOMRES_FRONT_TARIFFS', 'Наші тарифи');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Назва тарифу');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Опис тарифу');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Тип кімнати');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'ДДійсний від');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Дійсний до');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'З гостя за ніч');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'За добу');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Не на вихідні');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Мінімальна кількість ночей');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Максимум ночей');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Мінімум гостей');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Максимум гостей');
jr_define('_JOMRES_FRONT_PREVIEW', 'Попередній перегляд');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Редагування включено?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Оновлений custom текст.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Редагувати мову');
jr_define('_JOMRES_FRONT_PTYPE', "Тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', "Список типів об'єктів");
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', "Редагуйте тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_PTYPE', "Тип об'єкту");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', "Опис типу об'єкту");
jr_define('_JOMRES_COM_PTYPES_SAVED', "Тип об'єкта записано");
jr_define('_JOMRES_COM_PTYPES_DELETED', "Тип(и) об'єктів видалені");
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Залишилося до оплати');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Без додаткових послуг');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Депозит');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Повна оплата');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Оплата під час бронювання');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Виберіть депозит, якщо він необхідний, або вся сума.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'місяці, щоб показувати');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Скільки місяців показувати в календарі зайнятості?');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Шлюз оплат');
jr_define('_JOMRES_COM_A_CANCEL', 'Відмінити');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Виберіть кімнату, яку хочете закрити для бронювань на певні дати. <br> Якщо неможливо цього зробити - перевірте чи немає на ці дати інших броней і спочатку відмініть їх за потреби. <br/>, Коли виберете відповідні дати - клікніть синю кнопку -Виконати- щоб повторно перевірити наявність.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', 'Ви не виконували жодних дій, тому система автоматичо припинила вашу сесію. Будь ласка зайдіть в систему знову.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Причина');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Використовувати платіжний шлюз?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Виберіть, будь ласка, метод оплати.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Шлюз увімкнено');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Измененное урегулирование плагина');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Вставленное урегулирование плагина');
jr_define('_JOMRES_FRONT_GALLERYLINK', "Перейти на сайт об'єкта");
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Зовнішнє посилання');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Вставте посилання на ваш сайт.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Редагувати дані кредитки');
jr_define('_JOMRES_COM_A_EDITICON', 'Редагувати розмір зображення');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Слайд-шоу');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Показувати посилання на слайд-шоу?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Показувати одразу слайд-шоу?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Слайд-шоу');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Показувати посилання на тарифи?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Дозволяти виринаючі вікна (Popup)?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Завантажте зображення для слайд-шоу');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Використовуйте дану форму для масового завантаження фото <br/> УВАГА, Всі зображення з одинаковими назвами будуть перезаписані.<br/>Всі зображення записуються до /images/stories/jomres/*property_uid* папки. Якщо папка не існує - вона буде створена автоматично.');
jr_define('_JOMRES_A_TABS_MISC', 'Різне');
jr_define('_JOMRES_A', 'Конфігурація сайту');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Використовувати глобальні особливості сайту');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', "Щоб призначити фото на особливість, спочатку завантажте піктограму особливості об'єкта в папку  /jomres/uploadedimages/pfeatures/ .");
jr_define('_JOMRES_A_ICON', 'Пікторгама');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Вибрати пошуковий плагін.');
jr_define('_JOMRES_FRONT_NORESULTS', 'Нажаль, ваш пошук не дав результатів. Змініть ваш запит та спробуйте ще раз.');
jr_define('_JOMRES_AREYOUSURE', 'Ви впевнені?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Забронювати квартиру');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Забронювати квартиру');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Показати тарифи в тексті?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Адреса');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Детальна інформація');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Показати календар завантаженості');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Показати адресу під цим посиланням');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', "Показати детальну інформацію про об'єжт під цим посиланням");
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Показати кімнати та їх доступність під цим посиланням');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Єдиний тариф');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Середні значення');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Виберіть тарифну модель');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Є два методи підрахунку тарифу. 1 - єдиний тариф дозволяє пропонувати кілька тарифів, ціна в яких залишається однією протягом всього періоду бронювання. Наприклад: тариф 'все включено', або 'тільки сніданок', тощо. 2 - Середні значення. Jomres врахує всі ціни на проживання і покаже середнє значення за період.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Показувати форму вводу дати виїзду?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Поставте НІ, якщо не хочете показувати форму вводу дати виїзду. Робіть це лище тоді, коли знаєте що робите. Дата виїзду проставиться автоматично наступного дня після приїзду.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Обмеження опису');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', "Обмежує кількість символів в описі об'єкту, взятих з загального опису об'єкту");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Використовувати date() формат дати?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Опублікувати');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Скасувати публікацію');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Використовувати глобальні типи кімнат');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Щоб призначити зображення на цей тип кімнат, спочатку завантажте фото типів кімнат в папку /images/stories/jomres/rmtypes/.');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Помилка вводу (Input error background colour)');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Країна по замовчуванню в формі замовлення');
jr_define('_JOMRES_JAVASCRIPT_', "Пункти відмічені зірочкою - обов'язкові.");
jr_define('_JOMRES_COM_SELFREGISTRATION', "Користувачі можуть реєструвати об'єкти?");
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', "Так, тоді користувачі зможуть самостійно реєструвати свої об'єкти.");
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', "Пункти позначені зірочкою - обов'язкові.");
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', "Доданий об'єкт");
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Показувати календар від початку року?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Календар завантаженості буде відображатися з початку поточного року.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Кількість доступних комнат');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', "Повернутися до деталей об'єкту");
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Типи кімнат');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Random search limit');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Показувати посилання на курси валют?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Обмінний курс (приблизинй)');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Дозволити html-редактори?');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Це форма бронювання. Внесіть деталі бронювання такі як прибуття, виїзд, кількість гостей. Потім виберіть доступні кімнати. Клікніть на доступні кімнати щоб включити їх у бронь. Потім залишається тільки вибрати додаткові опції (якщо є) та вказати свої дані. Коли всі дані внесено - ви побачите кнопку підтвердження замовлення.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Це форма бронювання. Внесіть деталі бронювання такі як прибуття, виїзд, кількість гостей. Потім залишається тільки вибрати додаткові опції (якщо є) та вказати свої дані. Коли всі дані внесено - ви побачите кнопку підтвердження замовлення.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Особливості бронювання');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Виберіть деталі вашого бронювання');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Доступність');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Вибрати кімнати');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Дивитись тут чи доступна квартира на вказані дати.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Додатки');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Виберіть будь які додатки які бажаєте включити до бронювання');
jr_define('_JOMRES_COM_PERDAY', 'За ніч');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Ваша адреса');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', "Введіть ваші деталі. Поля відмічені зірочкою - обов'язкові");
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Доступні кімнати');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Відібрані кімнати');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Найшвидша дата прибуття:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'За добу:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Загальна кількість:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Додатково:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Податки:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Знижка:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Загальна кількість:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Гості');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Клікніть тут, щоб додати кімнату до вашої броні');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Клікніть тут, щоб видати кімнату з вашої броні');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Типи гостей');
jr_define('_JOMRES_VARIANCES_TYPE', 'Тип');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Тип клієнта, напр. Діти 5-10р, або Студент');
jr_define('_JOMRES_VARIANCES_NOTES', 'Нотатки');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Примітки до цього типу клієнтів');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Максимум');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Максимальна кількість гостей цього типу');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Є процентне');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Дане число це процент від базової величини для кімнати. Якщо НІ, тоді число просто буде додано або вирахувано від ціни кімнати.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Додати різницю?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Вирахуване число буде додане або відняте від базової ціни кімнати. Якщо поставите НІ, тоді це буде знижкою до базової ціни.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Різниця');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Величина різниці');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Змінено порядок типів клієнтів');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Видалений тип клієнта');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Створено тип клієнта');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Оновлено тип клієнта');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Тип клієнта оновлено');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', "Показувати посилання на кімнати об'єкта на сторінці деталей?");
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Показувати лише календар зайнятості?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', "Так, щоб не показувати заголовок об'єкту та деталі, а лише календар зайнятості. Ця опція для SRP об'єктів: квартир, віл, тощо.");
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Мінімальний інтервал посел-висел.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Мінімальний інтервал між датою поселення і виселення.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Показати номер кімнати в формі бронювання');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Показати назву кімнати в формі бронювання');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Показати назву тарифу в формі бронювання');
jr_define('_JOMRES_ORDER', 'Забронювати');
jr_define('_JOMRES_REQUIREDFIELDS', "Обов'язкові поля");
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Дні(-ів) перед прибуттям');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Мінімальна кількість днів, які мають пройти від -сьогодні-, до дати прибуття.');
jr_define('_JOMRES_DTV', 'Варіації типу дати');
jr_define('_JOMRES_DTV_DOW', 'День тижня');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Кількість гостей по замовчуванню');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Кількість гостей яка буде відображатися першою в формі бронювання.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Лише зареєстровані користувачі можуть бронювати онлайн?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Щоб бронювати онлайн вам потрібно буди зареєстрованим користувачем. Клікніть тут щоб зареєструватися.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Колір шрифта поточних броней');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Межі вікенду');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Кімната заброньована');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Чорнова бронь');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Заокруглити депозит до цілого числа?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Вимагати депозит?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Тарифні платежі є щотижневими?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ви можете зберігати тарифи як щоденні так і щотижневі значення. Для щотижневих виберіть ТАК.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Плата за тиждень');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Фіксовані дати прибуття повторюються:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Коли вибрані фіксовані дати заїзду, в переліку достпних дат для заїзду будуть доступні лише вони. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available)');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Неправильна дата прибуття');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Неправильна дата виїзду');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Надто малий період броні. Має бути як мінімум:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Ваш інтервал');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Неправильний тип гостя');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Выберите ваши числа/тип гостя');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Гостей більше ніж передбачено тарифом');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Ви вибрали більше кімнат, ніж є гостей. Видаліть зайві');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Надто багато гостей для доступних ліжок');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Виберіть більше кімнат');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Виберіть кімнату');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', "Необхідно ввести ім'я");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Необхідно ввести прізвище');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Необхідно ввести номер будинку');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Необхідно ввести вулицю');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Необхідно ввести місто');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Необхідно ввести Область');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Введіть поштовий індекс');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Введіть країну');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Введіть номер телефону');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Введіть номер мобільного');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Введіть email');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'У нас вільно!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Ви не вибрали жодної кімнати :( ');
jr_define('_JOMRES_BOOKING_NUMBER', 'Номер бронювання');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Можна бронювати, фон вікна повідомлення');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Dump template vars?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Set this to enable a DHTML dump of template variables for each FRONTEND template file as that page is viewed. Useful if you want to see if a certain element is available to be used in a given template.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Число - процент');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'ТАК, якщо плата за одного гостя - процент.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Доступна кількість кімнат/обмеження тарифу');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Для обмеження доступних кімнат чи тарифів у формі бронювання. 0 якщо не хочете вводити обмеження.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Наразі все заброньовано!');
jr_define('_JOMRES_BOOKITNOW', 'Бронювати зараз');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Глобальне редагування?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', "Уважніше з цією функцією. Якщо ТАК, тоді змінивши один опис одного об'єкту ви зміните його для всі об'єктів системи.");
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Використовувати глобальну валюту?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Так, щоб використовувати одну валюту (напр. & # 8 3 6 4 ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Глобальний символ валюти');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Компонент згорнутий');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Так, якщо хочете щоб модуль та заголовок були приховані (Set this to Yes if the component is wrapped so that module and header areas are not to be seen)');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Лише вихідні');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Вихідні');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Виставте дні, які належать до вихідних. Це буде враховуватися в тарифах.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Спершу виберіть країну');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', "Збережіть зміни до об'єкту перш ніж завантажувати фото");
jr_define('_JOMRES_TARIFFSFROM', 'Ціни від -');
jr_define('_JOMRES_SEARCH_ALL', 'Всі');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Країна');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Регіон');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Місто');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Опції');
jr_define('_JOMRES_SEARCH_BUTTON', 'Шукати');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Пошукова фраза');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Ключові слова');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Введіть ваші дати поселеня/виселення щоб ми змогли запропонувати вільні варіанти.');
jr_define('_JOMRES_SEARCH_PTYPES', "Показати всі об'єкти за типом");
jr_define('_JOMRES_SEARCH_RTYPES', "Показати всі об'єкти за типом кімнати");
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Звичайний порядок');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', "Назва об'єкту");
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', "Регіон об'єкту");
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', "Місто об'єкту");
jr_define('_JOMRES_SORTORDER_STARS', 'Зірковість');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Деталі житла');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Форма бронювання');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Оновити адресу');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ще раз перевіряю доступність кімнат<br/>(Вибір кімнат оновиться)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ще раз перевіряю доступність квартир');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Змінюю ваші додатки');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Змінюю вибір кімнат');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Оновлюю ваші адресні дані');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Вибачте, щось не гаразд з даними адреси.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Зображення кімнати');
jr_define('_JOMRES_CURRENCYFORMAT', 'Формат валюти');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Опції пошуку');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Доступні логи');
jr_define('JOMRES_COM_A_MESSAGE', 'Повідомлення');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Звичайний');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Просунутий');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Мікроуправління');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Режим конфігурації тарифу');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', "УВАГА: Переключаючись між типами тарифів ви ризикуєте втратити всі дані тарифів. Дивіться нижче для деталей.
<br/><br/>
Є три режими управління тарифами:<br/>
Звичайний: один тариф для одного типу кімнат на 10 років.<br/>
Мікроуправління: Можна змінювати ціну окремого дня для кожної кімнати/квартири. <br/>
Просунутий: -Старий- тарифний метод, дозволяє створювати кілька тарифів для однієї дати. <br/>
<br/>
Через специфіку кожного з режимів, не завжди можна спокійно змінювати режим для об'єкта. Ось як саме можна змінювати режим тарифу:
<br/>
Звичайний -> Просунутий. Без змін. Існуючі тарифи переписуються.<br/>
Звичайний -> Мікроуправління. Існуючий тариф видаляється.<br/>
Просунутий -> Звичайний. Існуючий тариф видаляється.<br/>
Просунутий -> Мікроуправління. Існуючий тариф видаляється.<br/>
Мікроуправління -> Просунутий. Існуючі взаємозвязки між тарифами видаляються, але самі тарифи залишаються.<br/>
Мікроуправління -> Звичайний. Існуючі взаємозвязки між тарифами та самі тарифи видаляються.<br/>");
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', "Показувати список кімнат у деталях об'єкта?");
jr_define('JOMRES_PROPERTYTYPE', "Тип об'єкта");
jr_define('JOMRES_MAXPEOPLEINROOM', 'Max гостей на кімнату');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Max гостей на бронювання');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Додати нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Редагувати нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Видалити нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Переглянути нотатку');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Додано нову нотаку');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Нотатку змінено');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Нотатку видалено');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Показати броні');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Мої броні');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Переглянути бронь');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Дивитися улюблене');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Ви поки не додали нічого до обраного!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', "Тип об'єкту");
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Розумна ціна');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Активно');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Цей плагін дозволяє динамічно керувати цінами.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', "Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn't busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Днів до поселення');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Зайнято 10% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Зайнято 25% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Зайнято 50% кімнат');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Зайнято 75% кімнат');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Знижка %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'ціну знижено з');
jr_define('_JOMCOMP_WISEPRICE_TO', 'до');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Знижки немає');
jr_define('JOMRES_COM_A_MAPSKEY', 'Google maps API key');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Активувати?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Так, якщо активувати last minute пропозиції.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Поріг');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Якщо дата прибуття N днів від дати бронювання, тоді можна надати знижку');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Знижка');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', '%');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'До цього бронювання надається знижка!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Бронювання стало дешевшим на');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', "Цей об'єкт пропонує last minute знижку");
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '% якщо прибуваєте до');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% або більше якщо прибуваєте до');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Бронюйте зараз щоб отримати максимум з цієї пропозиції!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Розширена інформація про тариф');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', "Так щоб розгорнути детальну інформацію про тариф у деталях об'єкту");
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Мінімальні опції налаштування');
jr_define('_JOMCOMP_AMEND', 'Amend Booking - Property Selection');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', "Вибрати новий об'єкт");
jr_define('_JOMCOMP_AMEND_HEADER', 'Original Contract:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Депозит сплачено');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Депозит не сплачено');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Override Deposit');
jr_define('_JRPORTAL_CANCEL', 'Відміна');
jr_define('_JRPORTAL_CPANEL', 'Control Panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Комісія по замовчуванню');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', "Виберіть % комісії який утримується з об'єкта.");
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Список комісійних');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Тарифи комісії');
jr_define('_JRPORTAL_CRATE_TITLE', 'Назва');
jr_define('_JRPORTAL_CRATE_TYPE', 'Тип');
jr_define('_JRPORTAL_CRATE_VALUE', 'Рівень комісії');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Код валюти');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', "Список об'єктів");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', "Назва об'єкту");
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', "Адреса об'єкту");
jr_define('_JRPORTAL_PROPERTIES_LEGEND', "Об'єкти з фоновим кольором червоний ще не мають встановленої комісії.");
jr_define('_JRPORTAL_STATS_PATETITLE', 'Статистика');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', '% комісії');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Показати броні');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Property id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Invoice id');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Booking total');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Date archived');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'You can have property type specific language files by setting the description to the name of a sub folder, e.g. -yachtbrokerage- and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', "Ви не можете видалити цей об'єкт оскільки він єдиний до якого ви маєте доступ. Якщо хочете приховати її, використовуйте кнопку скасування публікації на панелі інструментів.");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Всього за проживання');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'ночей');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'за кімнату');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Enhance Your Stay Total');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Підсумок ціни');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Будь ласка прочитайте та прийміть');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Підсумок вашого бронювання нижче.<br /> Щоб внести зміни, клікніть Змінити бронювання.');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Якщо є потреба змінити будь яку інформацію вище - клікайте тут');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Змінити бронювання');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Особливі запити введіть в поле нижче.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Я підтверджую що подана інформація є коректною та погоджуюся з');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'за особу за ніч');
jr_define('_PN_OF', 'з');
jr_define('_PN_START', 'Початок');
jr_define('_PN_PREVIOUS', 'Попередня');
jr_define('_PN_NEXT', 'Наступна');
jr_define('_PN_END', 'Кінець');
jr_define('_PN_RESULTS', 'Результати');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'NB! Це не форма для бронювання, ви просто надсилаєте повідомлення.<br/>Введіть повідомлення, яке хочете відправити.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Написати повідомлення');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Форма запиту квартири');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Спасибі за ваш запит, він вже надійшов до відповідального за це житло, а копія надіслана вам на пошту. Вам відпишуть якомога швидше.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'стосовно');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Запит');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Виберіть житло зі списку праворуч');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Мінімальна кількість кімнат вже вибрана');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Максимальна кількість кімнат вже вибрана');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Доступно');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Деякі броні');
jr_define('_JOMRES_AVLCAL_HALF', 'Наполовину заброньовано');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Переважно заброньовано');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Повністю заброньовано');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'За тиждень');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'За день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'За бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'З особи за бронь');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'З особи за день');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'З особи за тиждень');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per days X rooms selected');
jr_define('_JOMRES_REGISTRYREBUILD', 'Rebuild minicomponent registry');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', "Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registry rebuilt successfully');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Ціна');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Ви ще нічого не бронювали!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', "Редагувати тип вашого об'єкту");
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', "Вибрати тип вашого об'єкту");
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Your enquiry...');
jr_define('_JOMRES_COM_A_LISTLIMIT', "Ліміт списку об'єктів");
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', "Кількість об'єктів для показу на одній сторінці після пошуку");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Функція інтегрованого пошуку');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', "The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don't want to use Joomla search modules, or for other CMS users who's CMS doesn't have it's own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn't very pretty. That's because the template file that performs the layout has to include all possible options, some of which are incompatible.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Активувати цю функцію?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Використовувати колонки');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Search region by select combo dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Шукати за назвою об'єкту");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Показати поле для пошуку за назвою.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Місто/регіон');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Показати ввід регіону');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Шукати за типом об'єкту");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Show the search by property type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Шукати за типом кімнати');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Show the search by room type input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Set this to no to show the list as links');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Features');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Show the search by feature input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Показати як випадаюче меню?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Set this to no to show the list as tooltip images and checkboxes');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'ПОшук за описом');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Show the search by description input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Пошук за доступністю');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Show the search by availability input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Пошук за ціною');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Show the search by price ranges input');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Price range increments');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron job settings and logs');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Method');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Display logging in the browser');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Only works if the method is set to Minicomponent.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logging enabled');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Set this to Yes for logging to be enabled. The results of the logs will be output below.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Lots of logging output');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Редагування шаблону');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Custom fields');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Here you can define simple custom fields that will be shown in the booking form.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Назва поля (без пробілів)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Значення по замовчуванню');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Опис');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', "Обов'язково");
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Максимальна кількість');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Якщо максимальна кількість більше ніж 1 тоді гостям запропонують вибрати кількість додатків з випадаючого списку.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Податки');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Податковий номер');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Опис податку');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Цей податок неможливо видалити.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Ставка');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Рахунки');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Не оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Оплачено');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Відмінено');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'В процесі');
jr_define('_JRPORTAL_INVOICES_USER', 'Користувач');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Статус');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Raised');
jr_define('_JRPORTAL_INVOICES_DUE', 'Due');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Підписка');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Outstanding total');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Recurring frequency');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Recurring day of month');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Код валюти');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Line items');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Назва');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Опис');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Початкова ціна');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'початкова кількість');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Початкова знижка');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Початковий підсумок');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Податковий номер');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Опис податку');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Ставка податку');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Override standard Jomres gateway settings?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Показати мої рахунки');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Купони на знижку');
jr_define('_JRPORTAL_COUPONS_DESC', 'Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Код на знижку');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Дійсний від');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Дійсний до');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Сума знижки');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Знижка у %');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Лише для кімнати');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Якщо маєте купон на знижку, please enter it into the box and click the -Save coupon- link to save the coupon details against your booking.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Зберегти купон');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Coupon saved against booking');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Такий купон не знайдено');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Знижка по купону');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Бронювання зі знижкою. Купон/вартість знижки/налаштування купона :');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Вибрати мови');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Choose the language options to be shown in the language switch dropdown.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Показувати випадаючий список вибору мови?');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Шановний');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Дякуємо за реєстрацію');
jr_define('_JRPORTAL_NEWUSER_USERNAME', "Ваше ім'я користувача: ");
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Ваш пароль:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Щоб побачити ваші броні, будь ласка, увійдіть до системи');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Купон збережено');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Купон видалено');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Логін');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Пароль');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Номер для повідомлень');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Наприклад для Великобританії виокристовуйте формат '447979123456'. Або залиште порожнім, тоді жодні повідомлення не надходитимуть.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "Ви не можете використовувати цю функцію на localhost, лише на 'живому' сервері.
<br/>
<br/>
Щоб використовувати шлюз Clickatell вам потрібен Clickatell-акаунт та як мінімум одне з'єднання (API sub-product instance). Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
Step 1 - register for a Clickatell account<br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
Step 2 - add a registered API connection (sub-product)<br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select -Manage my Products- from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to /index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>");
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Booking form room list show disabled access');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Booking form room list show max people');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Зверніть увагу що ціни на кімнати є приблизними. Остаточна вартість буде порахована коли ви додасте відповідні кімнати і типи кімнат.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Пакети підписок');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Ім'я");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Опис');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Опубліковано');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Повна кількість');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Обмеження об'єкта");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Підписатися');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Використовувати функції управління підписками');
jr_define('_JOMRES_COM_NEWUSER', 'Створити нового користувача при бронюванні');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Створює новий акаунт при бронюванні невідомим користувачем.');
jr_define('_JOMRES_CLICKTOREGISTER', "Клікніть тут щоб зареєструвати свій об'єкт");
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Дякуємо з абронювання - нижче деталі нового користуквача');
jr_define('_JOMRES_LATLONG_DESC', "Використовуйте мишку для навігації по карті, перетягніть курсор на місце розташування вашого об'єкта.");
jr_define('_JOMRES_CONTROLPANEL', 'Панель іправління');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Показати рахунок');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Показати рахунки');
jr_define('_JOMRES_USER_LISTMYPROPERTY', "Додати мій об'єкт на сайт");
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'УВАГА :');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Sorry, but that package ID is not recognised.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.');
jr_define('_JOMRES_COM_YOURBUSINESS', "Деталі вашого об'єкту");
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', "Ім'я об'єкту");
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'Свідоцтво ПДВ');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Номер будинку');
jr_define('_JOMRES_INVOICE_NUMBER', 'Рахунок No.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the -apply- button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Вибачте, для цих дат чорнова бронь недоступна.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Можна закривати ці дати.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', "Ваш об'єкт налаштовано на тариф з особи за ніч, але ви не створили чи опублікували жодного типу гостя. Виправте цю прикру помилку.");
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'У вас не налаштований жодний тариф, ви не можете отримувати замовлення.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Режим редагування вкл.');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Режим редагування викл.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Сума депозиту зміннна?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', "Variable deposits allow you to define if you'd like to charge the full amount if the booking's arrival date is within N days from -today-. Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.");
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Кількість днів в межах яких запитувати повну вартість як депозит.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Лист про підтвердження вже надіслано. Це вікно можна закривати.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Написати агенту');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Позначити оплаченим');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Рахунок позначено як оплачений');
jr_define('_JOMRES_APIKEY_REMAKE', 'Створити новий API ключ');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', "Ця інсталяція для одного об'єкта?");
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Оплата залишку');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', "Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don't you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see the editing mode manual page for more information on this subject.");
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Персональна знижка');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', "Обмежити реєстрацію об'єктів однією країною?");
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', "Всі об'єкти знаходяться в:");
jr_define('_JOMRES_JQUERYTHEME', 'Тема Jquery');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', "Нам прикро це казати, але цей об'єкт більше не доступний.");
jr_define('_JOMRES_REVIEWS', 'Відгуки');
jr_define('_JOMRES_REVIEWS_TITLE', 'Заголовок відгука');
jr_define('_JOMRES_REVIEWS_DATE', 'Опубліковано');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', "Цей об'єкт поки не має відгуків.");
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Хочете першим залишити всі відгук?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Я погоджуюся з цим відгуком');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Я НЕ погоджуюся з цим відгуком');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Середній рейтинг:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Всього голосів:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Додати новий відгук.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Увійдіть в систему щоб залишити відгук.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', "Що ви думаєте про цей об'єкт :");
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Цей відгук нам розповів :');
jr_define('_JOMRES_REVIEWS_PROS', 'За:');
jr_define('_JOMRES_REVIEWS_CONS', 'Проти:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Подано:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', "Ви вже один раз залишали відгук про цей об'єкт.");
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ви не можете залишати відгуки на цьому сайті.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Показати відгуки');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'гості погоджуються з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'гості не погоджуються з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'гість погоджується з цим відгуком.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'гість не погоджується з цим відгуком.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Дякуємо що поділилися своєю думкою.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Дякуємо, але ви вже поділилися своєю думкою.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Прослідкуйте щоб усі поля були заповнені.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Підсумуте сій відгук у заголовку');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Будь ласка введіть більш детальний відгук');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Будь ласка введіть позитивні моменти вашого перебування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Будь ласка введіть негативні моменти вашого перебування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Оцініть гостинність персоналу');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Оцініть розташування');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Оцініть чистоту');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Оцініть комфорт проживання');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Чи хороше співвідношення ціна/якість');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Оцініть послуги');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Підсумок');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Ваш досвід в деталях');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Дякуємо за ваш відгук.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Дякуємо за ваш відгук. Наші модератори дуже швидко опубілують його.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Автоматично опубліковувати відгуки?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Тестовий режим для відгуків?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', "This is a list of all properties. To see a property's reviews, click on that property. From there you will be able to publish or delete a review.");
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Кількість не опублікованих відгуків');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Всього відгуків');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Видалити відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Повідомити про відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Переглянути відгуки');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Поскаржитися на відгук');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'відправити');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Скаргу подав');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = дуже погано 10 = відмінно)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Гостинність');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Розташування');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Чистота');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Кімнати');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Ціна/якість');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Сервіси');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Оцінили :');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Приховати відгуки');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', "Показати форму бронювання в деталях об'єкта?");
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Податки включено?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Додатковий податок:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Початок');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Кінець');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Ціна');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Встановити ціни');
jr_define('_JOMRES_PARTNERS_TITLE', 'Партнери');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Кімната');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'гість/гостей.');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Note that your property is not yet published, only you can see the property, site visitors will not see it');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Звичайний порядок пошукової видачі');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Стиль показу переліку кімнат');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the -classic- rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Класичний');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Типи номерів');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Календарний тиждень починається в неділю чи понеділок');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Відгук залишають лише гості?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'За кімнату');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Гостей на кімнату :');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Гостей за бронювання :');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Кількість кімнат');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Січень');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Лютий');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Березень');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Квітень');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Травень');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Червень');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Липень');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Серпень');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Вересень');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Жовтень');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Листопад');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Грудень');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'На весь екран');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Звичайний перегляд');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Знижка партнера');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Шукати користувача');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Існуючі партнери');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Партнер :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', "Знайти об'єкт");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', "Поточні об'єкти");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'This account has been suspended, it is not currently possible to administer your propert(ies) using this account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Акаунт призупинено');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Акаунт відновлено');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Архів інформації про бронбвання');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Існуючі менеджери');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Гостей');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Зірковість');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Гостей');
jr_define('_JOMRES_SEARCH_STARS', 'Зірковість');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', "Кількість об'єктів");
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', "Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.");
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Переклад міток');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Використовувати комісійну модель?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', "Use this option to change the site's language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to -Yacht Brokerage- then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called -yachtbrokerage-. If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can't be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.");
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', "Set this option to Yes if you want to use the advanced site configuration options. If you're just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as -admin- and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.");
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'За ціною (від дорожчих)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'За ціною (від дешевших)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'За ніч');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'За тиждень');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'За місяць');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'За гостя');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', "Affects all search modules. When using the guest number search feature, should the search feature look for properties who's tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater?");
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Клікніть тут');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Бронь дійсна від');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Бронь дійсна до');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', "Ім'я гостя");
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'З вашим купоном ця бронь коштуватиме не');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'а');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Всього, включно з податками');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', "Скасувати публікацію об'єкта");
jr_define('_JOMRES_CONVERSION_TITLE', 'Використовувати модель конверсії');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Обмін валют/валютні коди');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', "To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor's country, however you need to register for an API key at IPinfoDB first.");
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Проживання без податів');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Проживання з податками');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'податок з кімнати:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Відкрити форму бронювання');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', "Повернутися до деталей об'єкту");
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Залишок (після сплати депозиту)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Останні бронювання');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'секунда');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'хвилина');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'година');
jr_define('_JOMRES_DATEPERIOD_DAY', 'день');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'тиждень');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'місяць');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'рік');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'декада');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'тому');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'від зараз');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Бронювати цілий день?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January 2015 to the 2nd of January 2015 covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'За день');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'з особи за день');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'days(s) at');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Надто короктий термін. Ось скільки днів має бути між поселенням і виселенням:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Мінімальний інтервал між поселенням і виселенням');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', "The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that's automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.");
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'За день');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Днів до поселення');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from -today-, before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', "Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today's date");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Показувати форму вводу дати виселення?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', "If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that -defined pickup day- isn't set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.");
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Фіксована дата виселення');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Фіксована дата поселення повторюється:');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of з will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'З особи за день');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', "Variable deposits allow you to define if you'd like to charge the full amount if the booking's pickup date is within N days from -today-. Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.");
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', "Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn't busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.");
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Поріг (днів від сьогодні до поселення)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Поселення в процесі');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Поселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Поселили');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Виселення сьогодні');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Виселення відкладається');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Не заселився');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Дні');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Позначити як поселене.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Позначити як завершене.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Позначити як поселене');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Позначити як виселене');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Ціна за день:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Днів:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Переглянути суму за проживання');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Зберегти нову суму');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Відправляти поштою новим користувачам їхні дані для входу в систему?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Чи показувати додатково підсумок по податках у формі бронювання?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Поріг відміни броні');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Зареєстровані користувачі можуть відміняти власнів броні. Визначте поріг у днях, коли бронювання не може бути відмінене за стільки то днів до прибуття.');
jr_define('_JOMRES_EDIT_PROFILE', 'Редагувати профіль');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', "Зв'язок з типом об'єкту");
jr_define('_JOMRES_IMAGE', 'Фото');
jr_define('_JOMRES_CRATES_CLICKINITIAL', "Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their -edit- icon to view the business's statistics.");
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Редагувати особливі поля');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Версія модуля :');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Найновіша версія');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');
jr_define('_JOMRES_PRODUCT_INFORMATION', "Welcome to Jomres, we hope you enjoy using Joomla's favourite booking system. If you would like to purchase a Jomres Starter, Business or Enterprise license,  please visit our site for information on how you can upgrade.");
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the -Help- section in the menu, including the -Getting Started- page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', "Активний об'єкт");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Alternate SMTP Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Швидкий перегляд');
jr_define('_JOMRES_MENU_SHOW', 'Показати');
jr_define('_JOMRES_MENU_HIDE', 'Приховати');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'По замовчуванню');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Будь-хто');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Зареєстровані');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Супер менеджер');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Ніхто');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Меню управління доступом');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Рецепціоніст');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Повний контроль доступу');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set 00009user_option_03_search to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Повний контроль доступу');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.<br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes anybody can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for every Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', "Користувачі з правами адміна для цього об'єкту");
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Модель');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Параметри');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Примусово');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', "Додаємо ваш об'єкт : Крок 2 з 2");
jr_define('_JOMRES_CART_TITLE', 'Мої потенційні бронювання');
jr_define('_JOMRES_CART_INFO', 'Зверніть увагу, ці броні ще не збережені. Якщо ви вийдете з системи або сесія вичерпається, ці броні зникнуть. Підтверджуйте ваші броні!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Підтвердити бронь(і)');
jr_define('_JOMRES_CART_OR', 'або');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Зберегти до кращих часів');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'У вас поки немає збережених бронювань.');
jr_define('_JOMRES_CART_VIEWCART', 'Переглянути корзину');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'З якої адреси відправляти емейли?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Перегляд списком');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Перегляд фото');
jr_define('_JOMRES_COMPARE', 'Порівняти');
jr_define('_JOMRES_REMOVE', 'Видалити');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'До результатів пошуку');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Додати до списку');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Видалити зі списку');
jr_define('_JOMRES_VIEWSHORTLIST', 'Переглянути список');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Важливо: ПОлітика використання сookie');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Ми використовуємо cookies щоб цей сайт був релевантний для вас і добре працював.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Дізнатися більше...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a -cookie- which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Якщо так, тоді я приймаю умови.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Депозит дорівнює вартості першої ночі?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', "Prices are calculated on a per night basis. Do you want the deposit to be one night's charge? If so, you can ignore the following options.");
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Ви нічого ще не додали до свого списку.');
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Далі');
jr_define('COMMON_CANCEL', 'Відміна');
jr_define('COMMON_SUBMIT', 'Подати');
jr_define('COMMON_SAVE', 'Зберегти');
jr_define('COMMON_DELETE', 'Видалити');
jr_define('COMMON_RETURN', 'Повернутися');
jr_define('COMMON_CLOSE', 'Закрити');
jr_define('COMMON_BACK', 'Назад');
jr_define('COMMON_HOME', 'Додому');
jr_define('COMMON_NEW', 'Новий');
jr_define('COMMON_SEND', 'Відправити');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being -spammed- by robots on the internet. To use the Contact Us form in Jomres you will need to register at the Google reCaptcha home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Публічний ключ');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Приватний ключ');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'Перегляд');
jr_define('BACKTOTOP', 'Догори');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Input filtering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'.");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Allowed input tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at htmlpurifier.org. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Деталі об1єкту у вкладках?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');
jr_define('COMMON_PRINT', 'Версія для друку');
jr_define('COMMON_EDIT', 'Редагувати');
jr_define('COMMON_COPY', 'Копіювати');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', "Joomla 3 includes Twitter's Bootstrap framework by default, and Jomres has templates and functionality that will use these templates. By default, if you're running Jomres on Joomla 3 these switches are set to Yes but you can set them to No if so desired (not recommended). If you're running a version of Joomla lower than Joomla 3 you can still opt to use the Jomres Bootstrap templates and functionality, however by default these options are set to No.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Ось схожі варіанти для вас.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Автоматично визначати країну гостя?');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'Про Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'допомога');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'З чого почати');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Керування доступом');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'мови');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Генерація прибутку');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Структура сайту');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Мій акаунт (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'функціонал порталу');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Менеджер плагінів');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'інтеграція');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'звіти/статистика');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Оновлення');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'способи оплати');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'This only applies to new tariffs');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Скільки років показувати');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'в процесі редагування тарифу');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'рахунки');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Доступ для користувачів');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Пошук');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Головна панель');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'резерв');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'налаштування');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Змінити країну');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'id країни');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Код країни');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Назва країни');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Змінити регіон');
jr_define('_JOMRES_EDIT_REGION_ID', 'id регіону');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Код країни');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Назва регіону');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Перелік країн');
jr_define('_JOMRES_COM_LISTREGIONS', 'Перелік регіонів');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Мінімальне бронювання');
jr_define('_JOMRES_NIGHTSFOR', 'ночей за');
jr_define('_JOMRES_AGENT', 'Агент');
jr_define('_JOMRES_AGENT_DETAILS', 'Інформація про агента');
jr_define('_JOMRES_AGENT_LISTINGS', "Об'єкти агента");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', "Автоматично погджувати нові об'єкти");
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Підтвердження');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', "Цей об'єкт ще не одобрений адміністратором. Як тільки об'єкт буде одобрено ви зможете його опублікувати.");
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', "Вибачте, ви не можете опублікувати цей об'єкт оскільки його ще не одобив адміністратор.");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', "Новий об'єкт очікує схвалення");
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', "Новий об'єкт очікує схвалення. Клікніть на посилання щоб побачити який саме :");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', "Ваш об'єкт одобрено для публікації");
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Чудові новини. Ваш об'єкт одобрено. Кліктіть тут щоб перейти до панелі керування об'єктомl :");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region names are translatable');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Guest booked out.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');
jr_define('JOMRES_TAPTOCALL', 'Клікніть щоб подзвонити');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Новий відгук на');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Новий відгук залишили для');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Нова скарга');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Нова скарга на відгук');
jr_define('JOMRES_SUPERIOR', 'Супер-клас');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Кінцева вартість (без податків) :');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Кінцева вартість (з податками) :');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Всього податків :');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Введіть два слова:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Введіть що почули:');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Повторно відтворити аудіо');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Завантажити уривок у форматі MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Візуальний режим');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Аудіо режим');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Оновити');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Допомога');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Вибачте, щось тут не те. Спробуйте ще раз.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Показувати погоду?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Цельсія');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Фаренгейта');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Відскануйте цей код щоб отримати поради як до нас дістатися.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Показати правила оподаткування');
jr_define('_JOMRES_TAX_RULE', 'Правила оподаткування');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the -edit my account- page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Імпортувати ставки податку');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Редагувати ставки податку');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', "ПДВ-номер для цього об'єкта.");
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', "Введіть будь ласка ПДВ-номер для цього об'єкта.");
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Працюємо чи В розробці?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to -production-.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Працюємо');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'В розробці');
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Деталі кімнати');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Деталі тарифу');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Тільки');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'залишилось!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Опції кімнати');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Медіа центр');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Додати фото');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Фото кімнати');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Основна фотографія');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Фото для слайдшоу');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Очисити');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop файли сюди');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the -Main property image- only the first of those images will be used.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Переглянути фото');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Видалити фото');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Завантажити фото');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Фото типів кімнат');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Зображення опцій кімнат');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Завантажити все');
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE', "Ласкаво просимо на сторінку вашого об'єкту");
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT', 'Welcome to your Dashboard. This is your Main Menu. To view your property as your guests will see it, click on Properties, then Preview.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE', "Ваш об'єкт має назву");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT', "Whenever you are logged in as a property manager, you will always have an Active property, the name of which you can see here. This is the property you are working on. Please remember that you can only work on one property at a time, you can't have two tabs open in your browser and work on two different properties simultaneously.");
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE', 'Вибір часової зони.');
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT', "This is useful if you are in a different timezone to your server. It helps to keep your midnight and the server's midnight in sync.");
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE', 'Вибір мови.');
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT', 'You can change your current language by using this selector. This is useful if you want your property description to be available in several languages. You can go to the Property Details page and enter the description in language A, then use this selector to change to language B. Now, if you go to the Property Details setting page you can enter your description in language B.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE', 'Вибір режиму Редагування.');
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT', 'You can customise the labels on this page by switching on the Editing Mode. Once enabled labels that you can customise will have a dotted underline. Click that text and you will see a popup where you can enter the new text. This also works for different languages, so you can change the label in language A, then switch to language B and change the text again to something that suits your taste.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE', 'Зона контенту.');
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT', 'In this area you will see the page that you are working on. In the dashboard you will see a calendar which shows which rooms have been booked out and the period the bookings span. Click a date to create a new Quick Booking, or drag with the mouse to select more than one day.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE', 'Active property switch page.');
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT', "You can change your active property by selecting the first letter from the name of the property below. When you do, you'll be given a list of all the properties you have rights to manage.");
jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE', 'This is where your property names will show.');
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT', "Once you've clicked a property initial, your properties will show in this area. Click on a property name to switch to that property. This page is useful if you have to manage a lot of properties.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE', "Заголовок об'єкта.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT', 'This is shown on every guest facing page for your property. It shows your property name, the number of stars (if any), an optional link to another website, and a QR code. The code allows your guests to use their smart phone to get location details to your address.');
jr_define('TOUR_ID_GALLERYWRAPPER_TITLE', 'Ваша фотогалерея.');
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT', 'This is the slideshow area. You can upload photographs through the Media Centre page under the Settings -> Media Centre menu option.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE', 'Основні кнопки.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT', 'Which buttons are shown here depends on which options you have chosen in the Property Details tab under Settings -> Property Configuration.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE', 'Inline Calendar.');
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT', 'Using this calendar your guests can see, at a glance, how busy you are on a certain date and whether or not there are any vacancies. They can also click the arrows above the calendar to change the month viewed in that calendar.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE', 'Вкладка кімнат');
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT', "Тут список всіх кімнат об'єкта та календар доступності.");
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE', 'Відгуки.');
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT', 'Under this tab are all of the reviews that have been left for your property. Only users who have been booked through the system can post a review of your property.');
jr_define('TOUR_ID_MAPTAB_TITLE', 'Карта.');
jr_define('TOUR_ID_MAPTAB_CONTENT', 'Under this tab your guests can see your property in a zoomable map.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE', 'Вкладка з додатковою інформацією.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT', 'Under Settings -> Property details you can enter information about your property that might be of interest to your guests, like Check in times, Area activities, Driving directions, Airports, Other transport & Policies & disclaimers. Once entered, that information can be seen under this tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE', 'Форма бронювання.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT', 'Your guests can either go to a separate page, or they can use the booking form in this tab.');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE', "Основні деталі об'єкта.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT', "Under Settings -> Property details you can fill a form called Property description. This is the tab that's always opened first when a guest visits your property on this site so you should try to add some text that will immediately grab their attention.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE', 'всі поточні та майбутні тарифи');
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT', 'This is a list of all current and future tariffs. You can change the look of the list by going into Settings -> Property Configuration and clicking on the Property details tab. Change the setting of the Verbose tariff info option.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE', 'місцеві події.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT', 'If there are any events occurring local to your property they will show in this list. It is used for things like festivals, markets etc. Events that occur on specific dates.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE', 'Local Attractions.');
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT', 'If there are any attractions near to you, like museums or amusement parks they will be listed here.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE', 'Доступні аукціони.');
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT', 'If your property has any dates available for auction, then those auctions will be shown here. Auctions are a useful way of driving business to your property during quieter periods.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE', 'Налаштування бронювань.');
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT', 'On this tab you can configure parts of how your booking form works. If you rent out rooms in a property, such as in a hotel or B&B then you can configure things like the rooms list style.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE', 'Деталі бізнесу.');
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT', "Here you enter your business's address and VAT number if you have it. These details will be shown on the invoices your guests will see, and any invoices generated by the site for you.");
jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE', 'Зовнішні лінки.');
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT', 'Лінк на зовнішній сайт.');
jr_define('TOUR_ID_TAB_GATEWAYS_TITLE', 'Шлюзи.');
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT', 'Gateways are the term used to describe payment services. If you have an account with one of the gateway services shown in this tab you can enter your account details in this tab to take payments online.');
jr_define('TOUR_ID_TAB_MISC_TITLE', 'Інше.');
jr_define('TOUR_ID_TAB_MISC_CONTENT', "This tab is for settings that don't fit into any other tab.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE', "Сторінка деталей об'єкта.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT', "This tab allows you to modify various options as they're shown on your Property Details page (Go to the Jomres Main Menu -> Dashboard -> Preview to see that page).");
jr_define('TOUR_ID_TAB_REQUIRED_TITLE', "Обов'язкові пункти форми бронювання.");
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT', 'This tab allows you to set which items in the booking form that are required or optional.');
jr_define('TOUR_ID_TAB_SRPS_TITLE', 'Налаштуванння специфічні для віл/квартир.');
jr_define('TOUR_ID_TAB_SRPS_CONTENT', "This tab offers settings that are often used by villas and apartments. Any property where you're renting out the entire property, rather than rooms in a property individually. That said, these settings can be used by both villa and hotel type properties.");
jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE', 'Single Person Supplements.');
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT', 'Single person supplements are charges that are added to a booking if a room that can cater for two only holds on individual.');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE', 'Taрифи');
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT', 'On this page you can configure how tariffs and deposits are calculated.');
jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE', 'Туристичний збір.');
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT', 'If your country or city charges tourist taxes, you can configure them here.');
jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE', 'Налаштування мікроуправління цінами.');
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT', 'Micromange tariff editing mode specific settings.');
jr_define('TOUR_ID_TAB_WISEPRICE_TITLE', 'Налаштування динамічних цін.');
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT', 'This tab allows you to enable and configure your room prices dynamically, giving you the ability to offer discounted room prices if occupancy when the booking is made is low.');
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE', "Ваші об'єкти.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT', "This page shows you a list of the properties you are authorised to manage. On the left you can easily see if they're published or not. The property name is also a link, if you click on that link you will immediately switch your active property to that property.");
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE', 'Таблиця.');
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT', "Your data is presented as a table layout. On the left is a dropdown that allows you to change the number of items shown on each page. Next you have a number of buttons that allow you to export the data in the table to your local device. You can 1. Copy the data into your clipboard. 2. Export the data as a CSV (Comma seperated values). 3. Export in a format suitable for use in Excel. 4. Allows you to export the data as a PDF file and 5 Print, which will switch the layout so that you can print the data. Finally, on the far right, is an input field where you can search for a particular row or rows easily. Above each column there are titles, if you click on the title you can cause the column to be sorted, either ascending or descending, according to that column's contents.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE', "Створення об'єкту, крок 1.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT', "Creating a new property is a two step process. On this first page you will select the country and region of your property, select it's property type, and the process you will use to manage it.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE', "Країна об'єкта.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT', 'Here you will select your property country from a dropdown list. As soon as you select the country the page will reload and you will be able to choose the region for the property.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE', "Тип об'єкта.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT', "From this dropdown please choose your type of property. It can be something like a villa or an apartment if you're renting out the entire property, or if you're renting out rooms in the property then you would probably choose hotel or bed and breakfast.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE', 'Процес управління.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT', 'The management process is about how your property will be used by visitors on the site. If you are renting out a property, or rooms in the property then you would choose Rental. If you are not offering any kind of rental functionality and are only adding the property for information purposes, then choose Real Estate.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE', "Створення об'єкту, крок 2.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT', "You can now start entering information about your property. Don't worry about images for now, you can upload them later through Settings -> Media Centre.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE', 'MRP чи SRP.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT', "Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property. If it's an SRP you'll be given a new dropdown where you can select the number of rooms the property offers. You will need to choose one of those options.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE', "Назва та адреса об'єкту.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT', 'Please enter the property name and address in the following fields.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE', 'Зірковість.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT', 'If your property has been awarded a number of stars based on a recognised standard, select the number from the dropdown. Some countries have rating by a single public standard — Belgium, Denmark, Greece, Italy, Malta, Netherlands, Portugal, Spain and Hungary have laws defining the hotel rating. In Germany, Austria and Switzerland, the rating is defined by the respective hotel industry association using a five-star system — the German classifications are Tourist (*), Standard (**), Comfort (***), First Class (****) and Luxury (*****), with the mark Superior to flag extras beyond the minimum defined in the standard.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE', 'Розташування.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT', "On your property details page you will see a map. You configure your property's location here using either the latitude and longitude inputs or by dragging and dropping the marker in the map itself.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE', "Зручності об'єкта.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT', "Select the features that are applicable to your property. These features are used in the site's search functionality, so it's important that these accurately reflect your property.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE', "Інформація про ваш об'єкт.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT', 'You have a number of fields here where you can enter informaton about your property. The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE', 'Політики та обмежена відповідальність.');
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT', "This is where you should put your properties policies, such as cancellation charges etc. When the guest goes through the booking form, before they can complete the booking they are forced to accept your terms and have the option to click a link which will show the property's terms. When they click that link, the information entered into this input is shown in a small window.");
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE', 'Показати всі бронювання.');
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT', 'On this page you will see all bookings, regardless of whether or not a deposit has been paid. Click the Edit icon to the left of the booking to view the booking details page.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE', 'Показати нові бронювання.');
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT', "This page shows a list of all new bookings, that is, booking where a deposit hasn't yet been paid for the booking. Click the Edit icon to the left of the booking to view the booking details page.");
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE', 'Показати старі бронюваня.');
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT', "This page lists all historic bookings, that is, bookings that have either been cancelled or the guest has been booked out. Click the Edit icon to the left of the booking to see that booking's information.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE', 'Список гостей.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT', 'The page allows you to list all guests for your currently active property. By default only guests who are or will be guests are listed, however you can choose historic guests from a dropdown to include guests who have been booked out or have cancelled their bookings as well as current guests.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE', 'Overrides.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT', "The overrides here are only available to managers of the property, guests cannot see or use them. They allow you to override both the final room price of the booking (optional extras are not included in this override, they're still charged at full price) and the value of the deposit required.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE', 'Купони.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT', 'If you have created some coupon codes for this property, this input will be available and guests can enter the coupon codes here to get discounts on the value of their room booking.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE', 'Particulars.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT', 'Changing any of these options will cause the rooms list to change, because the list is re-evaluated based on the length of the booking and other variables. If you have created some guest types, then the booker will be able to change the number of guests for the booking here too.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE', 'Фільтр по зручностях кімнати.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT', "If you have configured the property to use the Classic Rooms list, guests can choose the specific room that they'd like to book, rather than simply a room of a certain type. This is more popular with up-market properties. The rooms list has clickable images which when clicked will popup more information about that individual room. An additional bonus of this layout is that if you have created some room features and marked a room as having a certain feature, then the booker can use the room features to filter through the available rooms to ensure that they're getting exactly what they want. Note, you can modify the number of rooms of each type that are shown in the room list through the Settings -> Property Configuration -> Booking rooms tab, by changing the Available rooms/tariff limit option. This will then show a smaller list of rooms to the guest, but as a property manager you will still see the full list of rooms.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE', 'Додатковий сервіс.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT', "You can create optional extras which will show here. They can be created according to several different models, e.g. Per Night, Per Person, Per Person Per Night etc. These are useful for when you want guests to add extras to the booking, but these items aren't finite resources. So, for example you could add Bunch of Flowers on Arrival, or Airport Transfer.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE', 'Існуючі гості.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT', "If you already have some guests entered you can choose them by selecting their name in a dropdown that appears here. This saves you having to add their details time and again. If you regularly make bookings on behalf of the same guests, you should always use this dropdown to select them otherwise you'll end up creating multiple guests with the same names if you enter their details manually every time.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE', 'Деталі гостя.');
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT', "If you'd like to change which fields you require to be filled by a guest, you can go to the Settings -> Property Configuration -> Required tab.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE', 'Чорнові броні.');
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT', "Black bookings are booking that have been made by the hotel but not always for a specific guest. They may be because the hotel is on it's annual holiday, or because a room is closed for refurbishment.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE', "Інформація про ваш об'єкт.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT', 'The Property Description will appear on the first tab on your Property Details/Preview page, so you need to put your attention grabbing text here.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE', 'Тарифи звичайного типу.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT', "This is the simplest way you can enter room prices. Choose the number of rooms of a given type, the price for the rooms, the number of guests that the room can accommodate and the total number of people you are prepared to entertain in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE', 'Тарифи звичайного типу.');
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT', "This is the simplest way you can enter room prices. Choose your property type, enter the price and the maximum number of people in a booking and click Save. The prices then will be set for the next ten years. If you'd like more control over the prices, then please change your tariff editing mode to Advanced or Micromanage.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE', 'Кімнати та тарифи.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT', "On this page you can edit Rooms, Tariffs and Room Features. There are three tabs which allow you to edit the individual items. Before you start editing rooms or tariffs, you will need to understand that there is a relationship between Rooms, Room Types and Tariffs. In the booking form, when you see a room type dropdown or a click button to select a room, what's happening is that you are actually selecting a combination of room and tariff. This approach allows you to create different tariffs for the same room/room types, so for example you can create one tariff for Bed and Breakfast, and a second tariff for Bed, Breakfast + evening meal. Rooms can have individual room features. If your rooms list is set to Classic, then your guests can use the Room Features to filter rooms in the booking form to find a room with a particular set of characteristics that they want.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE', 'Кімнати та тарифи.');
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT', 'On this page you can edit your property type and your tariffs.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE', 'Типи гостей.');
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT', "Guest types are an important part of your settings if you plan to charge per person per night, or simply because you need to know how many people you will be accommodating. You can create any guest type you like, for example Adults, Teenagers and Children. Guest types can be configured to cost more or less than the base rate (the rate you enter into the tariffs page) by either a flat rate, or a percentage. That way you can configure different prices for different types of guests. If you're not charging Per Person Per Night, then you can leave the settings to their defaults when you create the guest type.");
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE', 'Купони.');
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT', "Coupon codes are a useful method of building repeat business, or to pull in new custom. When you create a new coupon code, the system will automatically generate a random code for you, but you don't need to use that if you want, you can create your own code. When you create the coupon code, you can either assign it to a guest, or not. Codes that are not assigned to specific guests can be used by anybody, so those codes should be used on marketing materials. You can also define the dates between when the code should be used, and the dates that the booking must be on for the code to take effect. Once a coupon code has been created you will have the option to view a printable list of coupon codes, making it easy to hand codes out to guests or potential guests. They can then scan the QR code on the printout into their mobile phone/tablet PC. The code will take them direct to the booking form with the discount code already applied.");
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE', 'Додаткові сервіси.');
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT', "Optional extras are extra items that can be added to a booking. These are items that not constrained by limited availability, so there's no resource management associated with them. When you create an optional extra you are able to choose a variety of settings, for example the maximum number of them that can be added to a booking, and whether or not the extra should be Forced. By this, we mean if it's automatically selected in the booking form, and the guest cannot unselect it. This is useful for mandatory payments like towels or a cleaning fee. Additionally, you will need to choose a Model, which means how payments will be calculated for the extra. If you want a single charge to be applied (for example, for a bottle of champagne to be available on arrival) then you would set the model to Per Booking. If, however you wanted to charge for something for each day, then you would choose the Per Day option.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE', 'Resource picker.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT', "This is the resource picker. It allows you to choose what sort of resource you're uploading images for (e.g. Slideshow images or rooms) and if it's a room, then after you choose Rooms you'll be given the option to select which room you want to upload images for in another dropdown, next to it. This allows you to upload multiple images for each individual room, if you wish. Note, room image uploading only applies to properties like Hotels, B&Bs etc. Villas and Apartments will not have this option.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE', 'Існуючі фото.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT', 'This column shows the images that have already been uploaded. You can choose then to either view the image, or delete it. Every time you change the resource time this column is updated to show the images for that particular resource.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE', 'Керування завантаженнями.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT', "You have several controls here. You can use the Add Images button to choose the images you want to upload, or you can drag and drop images into the box underneath. The Clear button clears the list of images ready for uploading. Once you've selected the images for upload, you can either upload them individually, or all at once.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE', 'Вибрані фото.');
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT', "This column shows the images that are ready for upload, or that you've uploaded since you visited this page.");
jr_define('TOUR_ID_TOUR_TARGET_END_TITLE', 'Готово!');
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT', "That's the end of this page's help information. If you have any futher questions, please do not hesitate to contact us.");
jr_define('PRODUCT_TOUR_PAGE_INFORMATION', 'ДОПОМОГА');
jr_define('COMMON_PREV', 'Назад');
jr_define('COMMON_MORE', 'Більше');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Сьогодні');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Рік');
jr_define('_JOMRES_DASHBOARD_MONTH', 'місяць');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Тиждень');
jr_define('_JOMRES_DASHBOARD_DAY', 'День');
jr_define('_JOMRES_HLEGEND', 'Легенда');
jr_define('_JOMRES_HFILTER', 'Фільтр');
jr_define('_JOMRES_HFROM', 'Від');
jr_define('_JOMRES_HTO', 'До');
jr_define('_JOMRES_HNEW_BOOKING', 'Нова бронь');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Статус депозиту');
jr_define('_JOMRES_HSTATUS_GUEST', 'Статус гостя');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Статус броні');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Статус публікації');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Статус рахунку');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Тип рахунку');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Підтверджено');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Поточний бізнес');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Показати броні для');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Показати рахунки для');
jr_define('_JOMRES_STATUS_ANY', 'Будь які');
jr_define('_JOMRES_STATUS_PAID', 'Оплачені');
jr_define('_JOMRES_STATUS_NOTPAID', 'Не оплачені');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Виїхали');
jr_define('_JOMRES_STATUS_ACTIVE', 'Активні');
jr_define('_JOMRES_STATUS_CANCELLED', 'Відмінені');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Опубліковані');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Не опубліковані');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Гості з активними бронями');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Гості з минулими бронями');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Броні');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Підписки');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Комісії');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Усі мої бізнеси');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Встановити як поточний');
jr_define('_JOMRES_ACTION_CHECKIN', 'Поселення');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Виселення');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'бронювання');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', "об'єкти");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'гості');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'скарги');
jr_define('_JOMRES_HLIST_GUESTS', 'Гості');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Список гостей');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Показати рахунки');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Бізнеси');
jr_define('_JOMRES_HQUICK_BOOKING', 'Миттєве бронювання');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Дата бронювання');
jr_define('_JOMRES_HTWO_WEEKS', 'Два тижні');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Для скасування броні натисніть ОК.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Заселяються сьогодні');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Виселяються сьогодні');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Живуть зараз');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Розташуваня навігаційної панелі');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Стандартно (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Фіксовано згори');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Фіксовано знизу');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Інверсія кольору (colour change)');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Показати гостей для');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HFIXED_PERIODS', 'Фіксовані періоди');
jr_define('_JOMRES_HDEPOSITS', 'Депозити');
jr_define('_JOMRES_HBOOKING_FORM', 'Форма для бронювань');
jr_define('_JOMRES_HREQUIRED_FIELDS', "Обов'зкові поля");
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Іван');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Іванов');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '8');
jr_define('COMMON_PLACEHOLDER_STREET', 'Бейкер стріт');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Моє місто');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '+38000 0000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '+38000 0000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Мій готель');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXХXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Зручності кімнати');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Тип кімнати');
jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Редагувати тип гостя');
jr_define('_JOMRES_HEDIT_COUPON', 'Редагувати купон');
jr_define('_JOMRES_HEDIT_EXTRA', 'Редагувати додаткові сервіси');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Створити кілька кімнат');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Згенерувати кімнати');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Скільки кімнат?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Тип кімнати');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Максимально гостей на кімнату');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Видалити всі існуючі ресурси?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Записи від _START_ до _END_ з _TOTAL_ записів');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Погодити');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Відхилити запит');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Прийняти запит');
jr_define('_JOMRES_STATUS_APPROVED', 'Прийнято');
jr_define('_JOMRES_STATUS_REJECTED', 'Відхилено');
jr_define('_JOMRES_STATUS_INQUIRY', 'Запит');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Бронювання потребують ручного підтвердження?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Помилка');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Повідомлення');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Файл');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Шаблони емейлів');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Редагувати шаблон емейла');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Тема листа');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: Email Templates Help');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Підтверджуючий лист для гостя');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', "Ім'я:");
jr_define('_JOMRES_FOR', 'Для');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'ніч');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'ночі');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Січ');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Лют');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Бер');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Кві');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Тра');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Чер');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Лип');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Сер');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Вер');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Жов');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Лис');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Гру');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFOEMPTY', 'Записи з 0 по 0 із 0 записів');
jr_define('DATATABLES_SINFOFILTERED', '(відфільтровано з _MAX_ записів)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Показати _MENU_ записів');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Хвилинку...');
jr_define('DATATABLES_SSEARCH', 'Пошук:');
jr_define('DATATABLES_SZERORECORDS', 'Записи не знайдені.');
jr_define('DATATABLES_SFIRST', 'Перший');
jr_define('DATATABLES_SLAST', 'Останній');
jr_define('DATATABLES_SNEXT', 'Наступний');
jr_define('DATATABLES_SPREVIOUS', 'Попередній');
jr_define('DATATABLES_SSORTASCENDING', ': активувати для сорування за зростанням');
jr_define('DATATABLES_SSORTDESCENDING', ': активувати для сорування за спаданням');
jr_define('DATATABLES_SHOWHIDE', 'Змінити колонки');
jr_define('_BOOKING_ONREQUEST', 'Бронювання за запитом');
jr_define('_BOOKING_INSTANT', 'Миттєве бронювання');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Запит на бронювання');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Шановний');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");
jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Get Connected");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');


jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Get access to all plugins now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Connect to us for trouble free payment solutions and get access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Get access to all plugins now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');

jr_define('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define('CMF_CONFIG_KEY', 'Channel Management Framework Key');
jr_define('CMF_CONFIG_KEY_DESC', 'The Channel Management Framework license key. You will need to provide this key to be able to download Channel Management Framework plugins.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Your property has not been approved');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Your property as been unapproved. If you think that this was done in error please contact us. ");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD',"Is this a Child guest type?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC',"Set this to Yes if this guest type would be classed as a Child guest type.");

jr_define('_JOMRES_GUESTTYPES_INTRO',"If you want to charge per person per night then you will need to create some guest types.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS',"You can create as many guest types as you need, try starting out by creating just one guest type called 'Adult'. Leave all of the settings at their default values. Next, if for example you want to give children under 12 a discount of 50% you would create a new guest type, and call it 'Children under 12'. Set the 'Add variance?' option to - (negative) and set the 'Variance' to 50. This means when children are added to a booking they're charged 50% of the room cost of the room. " );

jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES',"Set prices manually");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS',"Set minimum nights manually");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS',"Set minimum nights");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW',"Set <em>price per night</em> by day of week");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES',"Set <em>price per night</em> by date range");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS',"Set <em>minimum nights</em> by date range");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES',"The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set price per night button.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS',"The date pickers and the minimum nights input allow you to set one value for the minimum nights for a given date range. Choose a start and end date, input a number for the minimum nights, and click 'Set minimum nights'.");

jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO',"Use this dropdown to change between setting prices for individual dates, to setting minimum nights for individual dates. You can use the <em>by day of week</em> picker, the <em>by date range</em> picker or set the prices/minimum nights by manually editing the dates.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT',"Use this dropdown to change between setting prices for individual dates, to setting minimum nights for individual dates. You can use the <em>by date range</em> picker or set the prices/minimum nights by manually editing the dates.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR',"Set prices or minimum nights");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW',"Set <em>minimum nights</em> by day of week");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO',"The day of week fields allow you to set a minimum number of nights for a given day of week, once you click the day of week button all days of the week will be set to that min nights setting.");


jr_define('_JOMRES_MICROMANAGE_MANUALLY',"Manually set prices/minimum nights");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES',"Set prices");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS',"Set minimum nights");

jr_define('_JOMRES_MICROMANAGE_PRICE',"Per night");
jr_define('_JOMRES_MICROMANAGE_MINDAYS',"Min nights");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS',"Max nights");

jr_define('_JOMRES_MICROMANAGE_INTRO',"Here you can create you tariffs, which are associated with the room types that you have in your property. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS',"Most commonly used options");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON',"Instructions");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS',"If you want to add different prices for different numbers of guests then <em>you can create more than several tariffs for each room type</em> and have different min/max guests values in those tariffs.");

jr_define('_JOMRES_MICROMANAGE_INFO',"Give the tariff a name, define the maximum number of nights, and the minimum and maximum number of guests that are required in the booking form before the tariff is offered.<br/><br/> Use the date picker panel to add prices and minimum nights settings to a range of dates, or edit the inputs directly. If you don't want the tariff to be offered at all on certain dates, leave the price set to 0 ( zero ) on those dates. <br/><br/> You can have different minimum nights on different dates, so if you want longer bookings during festival/conference weeks then you can set the min nights to be higher in just those periods.<br/><br/>If you charge Per Person Per Pight (PPPN) you can enable that setting in Settings > Property Configuration > Tariffs and Currency tab, then create the guest types that you require in Settings > Guest Types.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS',"Extra options");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS',"These are additional options that are not so commonly used, but nevertheless available to you. <br/><strong>Ignore PPPN</strong> Means Ignore Per Person Per Night. You can have several different tariffs for the same room type, for example one of which charges per person per night, and one that does not.<br/><strong>Allow weekends</strong> The Allow Weekends option gives you the option to make a tariff that's only available during weekdays, for example if you want a special tariff for business travellers. In that case you would set the option to No and the min nights to 1 and the max nights, at most, 5.  <br/><strong>Weekends only</strong>  The Weekends only option is the converse of the Allow Weekends option. What you consider to be weekend days can be configured in your Property Configuration settings. This gives you the ability to define a weekend only rate that you might want to offer for special events.<br/><strong>Check-in Day of week</strong> This option gives you the ability to force checkin to only be on certain days of the week and is best used in conjunction with the Property Configuration > Bookings tab > Fixed periods options. The majority of users will want to leave this option set to All.<br/>The final two options, <strong>Min rooms already selected</strong> and <strong>Max rooms already selected</strong> are very specialised and useful to properties with extremely complicated tariffs. <em>Unless you have a specific need, you should leave these options alone.</em> Use them if you only want this tariff to be offered when the guest has already selected N number of rooms in the booking form, so for example you could have one basic tariff where those options are left at the default, and a second tariff where the min rooms already selected option is set to 1, then this second tariff will be offered in the booking form once a room has been selected.");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE',"You can create multiple tariffs for the same room type, so you can create one tariff for min/max days of 1 - 7 and a second tariff where the min days is 7, the max days 14, and so on. This allows you create pricing schemes as simple or as complicated as you need. It also allows you to create multiple tariffs with different conditions, so you can have a second set of tariffs where the price is lower for Bed & Breakfast, and another set of more expensive tariffs for Bed, Breakfast and Evening Meal.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES',"Set date picker days only");
jr_define( '_JOMRES_PROPERTY_HCATEGORIES', 'Property Categories' );
jr_define( '_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Edit Property Category' );
jr_define('_JOMRES_STOP_READTHISFIRST1',"Stop!");
jr_define('_JOMRES_STOP_READTHISFIRST2',"Thanks for installing Jomres");
jr_define('_JOMRES_STOP_READTHISFIRST3',"Property management is performed in public facing pages, not the administrator area.");
jr_define('_JOMRES_STOP_READTHISFIRST4',"If you are not familiar with Jomres please visit the Help section > Getting Started page.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE',"Join the Jomres Syndicate");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC',"Once you have your site setup and ready to start receiving visitors, join the Jomres.net syndicate and get your properties listed on other Jomres sites.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1',"You need at least one room of one of the following types before you can create a tariff :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2',"Go to Settings > Rooms and create a room first, once  you have done that you will be able to create a tariff for that room type.");

jr_define('JOMRES_PLATFORM',"Jomres Platform");


jr_define('JOMRES_PLATFORM_CONNECTED',"Connected");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC',"Set this to Yes if you have already connected your Stripe account with the Jomres Platform.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID',"Stripe Live Account number");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC',"This is your Stripe Account id which can be found in your Stripe Dashboard under Settings > Account information and looks like acct_xxxxxxxxx You would use this field if you have multiple Jomres installations and you want to use the same account across all sites and you have already connected to us. If you have not connected to the Jomres Platform, it's not sufficient to enter your details here. Instead, please visit the Get Connected menu option in the toolbar, under the Help section. If you want to test payments, in the Debugging tab of Site Configuration set your site from Production to Development.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY',"Stripe live secret key");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC','Go to Developers > API keys in your Stripe Dashboard to find your secret keys. These are used by the system to verify booking data returned from the payment form is valid and that deposits have been paid before saving the booking.' );

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY',"Stripe test secret key");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC',' ' );



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Standard Tariff Mode');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'How many people can this property accommodate?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'The number of guests in your daily price');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Extra adults price ');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Children');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Per person per night?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 day modifier');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Discount on daily rate if booking is for 7 days or more. Leave this set to zero if you do not want the discount to be applied.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30 day modifier');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Discount on daily rate if booking is for 30 days or more. Leave this set to zero if you do not want the discount to be applied.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Adults');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Price based on 2 adults');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Booking discounted from ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' to ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', ' because the booking is greater than 7 days.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', ' because the booking is greater than 30 days.');


jr_define('JOMRES_CITY_TAX_HEADING', 'City taxes');
jr_define('JOMRES_CITY_TAX_VALUE', 'City tax value');
jr_define('JOMRES_CITY_TAX_METHOD', 'Tax calculation method');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Single fee');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Per night');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Per guest');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Per guest per night');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Percentage of booking value');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Cleaning fee');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Cleaning fee cost');


jr_define('JOMRES_COMPATABILITY_MODE', 'Force Compatability property configuration mode?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Compatability property configuration mode forces several things to happen. In older versions of Jomres, property managers could choose which tariff editing mode to use, and a variety of other settings (some of which may appear confusing) may have been available to them. Enabling Compatability configuration forces all new properties to use just the Standard tariff editing mode, which models the booking.com property configuration functionality with respect to pricing, child pricing etc. It is recommended that for installations that were created after 9.22.0, this option should be set to Yes, but for older installations it's up to you to decide if new properties should be automatically set to Compatability mode when they are created.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Do you accept children under 18 years of age?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Set this option to Yes if you allow children. If yes, then in the Settings menu you will have an option called Child Policies where you can edit children related settings.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Child policies');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'At what ages are children allowed?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Per child, per night');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Per child, per stay');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Child rates');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'New child rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Edit child rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Create your free or paid child rates here. Rates will only apply when you have created occupancy levels for room types.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Age from');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Age to');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'per night or per stay?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Rate');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'If zero or not set, children of this age range will be free.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Ages at checkin');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages ');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Occupancy levels');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximum adults');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum children');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximum occupancy');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edit occupancy level for : ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edit occupancy levels for this room type. Do not include guests sleeping on cots (those are added by creating an Extra) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'For each additional adult, how much should they be charged?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra adults');

jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'You have not configured child rates yet.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Set child rate(s) now');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'You have configured your property to allow children but you have not set any occupancy levels for children yet.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Set occupancy levels');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Any time you edit a room or your property type you should check and update the occupancy levels for your property/rooms as these affect the number of guests who can be accepted in the booking form.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Adults');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Admin options level');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres has many menu and configuration options that you can use when configuring your site. The huge majority of them you will never need to change so they are hidden by default. You can choose to show those options by setting the Admin Options level.  Basic level shows you just what you need when setting up a site for the first time. Common level shows you those options which are most commonly changed, and Everything shows you all possible settings and menus options in the administrator area.');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Basic');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Everything');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Can we collect information about how you use Jomres?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'We would like to collect information about how you use Jomres. No personally identifyable information will be stored, usage will be anonymised and only used to help us to understand how people use Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', ' Yep, that\'s ok ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' No, I don\'t agree ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Will you be taking bookings for more than one property?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres can be used for single or multi-property sites. If you will be taking bookings for just one property then many options will be redundant and potentially confusing. You can change this setting later in the Settings > Site Configuration > Portal functionality tab.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', ' Just one property ');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' I will be listing more than one property ');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Which version of the Bootstrap framework does your template/theme support?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Each version of the Bootstrap framework requires slightly different html markup. Jomres has three sets of Bootstrap compatible template sets, one for each Bootstrap version. You must ensure that you configure it to use the appropriate template set. If you don't then output such as layout, modals and menus will not work properly. If you decide to use a template/theme later with a different Bootstrap version you can change the Bootstrap template set that Jomres should use in Admin > Jomres > Settings > Misc tab. <br/><br/>Joomla 3 is distributed with Bootstrap 2 by default, Joomla 4 will use Bootstrap 4. Jomres Leohtian template (Joomla) and theme (Wordpress) uses Bootstrap 3. Different templates/themes may be distributed with their own Bootstrap files so if you are in any doubt, please contact your template/theme's developer.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
