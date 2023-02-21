<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('VIDEO_TUTORALS_TITLE', 'Відеоуроки');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Панель управління');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Цей підручник показує, як користуватися панеллю керування управління нерухомістю.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Хронологія');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Як користуватися календарем часової шкали. У цьому відео ми створюємо нового гостя, вводячи його дані у спливаючому вікні, існуючі гості можуть бути використані повторно, вибравши їх ім\'я зі спадного меню у спливаючому вікні.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Властивості списку');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Як використовувати сторінку властивостей списку для перегляду додаткової інформації, зміни стовпців та пошуку певних властивостей.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Редагувати дані власності');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Редагування деталей власності, включаючи перетягування по карті, щоб встановити ваше місцезнаходження.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Змінити режим редагування тарифів');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ваш режим редагування тарифів визначає метод, який ви можете використовувати для встановлення цін на вашу нерухомість. Ви це робите на сторінці конфігурації власності.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Звичайний режим редагування тарифів для готелів, пансіонатів, пансіонатів');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Звичайний режим редагування тарифів - це проста функція редагування тарифів, яка дозволяє вибрати кількість кімнат у помешканні, ціну номера, кількість гостей, які можуть розмістити кожну кімнату та максимальну кількість гостей) у разі збереження ці ціни дійсні протягом наступних 10 років. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Змінення звичайних тарифів для вілл та квартир');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Звичайний режим редагування тарифів - це проста функція редагування тарифів, що дозволяє вибрати підтип майна, ціну нерухомості за ніч та максимальну кількість гостей на вечірці. При збереженні ці ціни потім дійсний протягом наступних 10 років. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Режим редагування тарифів мікроуправління (рекомендовано)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Режим редагування тарифів Micromanage дозволяє налаштувати ціну та мінімальну кількість днів, протягом яких може бути дійсним перебування, для кожного дня в році. Це потужний інструмент, який дає вам повний контроль У цьому прикладі ми покажемо вам, як створити кілька наборів цін для одного типу кімнати, встановити різні ціни для різних періодів та різні ціни для певних днів тижня протягом певного періоду. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Режим редагування тарифів мікроуправління для вілл/квартир (рекомендовано)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Режим редагування тарифів Micromanage дозволяє налаштувати ціну та мінімальну кількість днів, протягом яких може бути дійсним перебування, для кожного дня в році. Це потужний інструмент, який дає вам повний контроль у цьому прикладі ми покажемо вам, як створити кілька наборів цін. Ми встановимо різні ціни для різних періодів та різні ціни для певних днів тижня протягом певного періоду. Після цього ми створимо кілька тарифів для одного і того ж власності, але з різними номерами гостей, що дозволяє нам точно контролювати ціни для кожного сценарію. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Різні тарифи для різних номерів гостей');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Ви можете створити декілька тарифів для одного типу номеру, тому, якщо ви хочете мати різні ціни для різної кількості гостей, ви можете це зробити.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'З особи за ніч - типи гостей');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Щоб стягувати плату з особи за ніч, вам потрібно буде створити типи гостей. Різні типи гостей можуть відрізнятися від базової ціни номера, тому діти різного віку можуть мати різні знижки залежно від їх віку. Вам не потрібно стягувати плату з особи за ніч, щоб користуватися типами гостей, ви також можете скористатися ними, якщо ви стягуєте фіксовану ставку, але все одно хочете врахувати кількість гостей або тому, що хочете обмежити кількість гостей у бронюванні. ');
	
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Медіацентр - завантаження зображень');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Усі зображення завантажуються через медіацентр. У цьому відео ми завантажимо зображення основної властивості, деякі зображення слайд -шоу, невеликий вибір зображень для показу на сторінці результатів пошуку та зображення для одного з кімнати. ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Медіацентр - завантаження зображень');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Усі зображення завантажуються через медіацентр. У цьому відео ми завантажимо зображення основної властивості, невеликий вибір зображень для показу на сторінці результатів пошуку та деякі зображення слайд -шоу.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Панель керування адміністратора');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Це цільова сторінка за умовчанням в області адміністрування. Ви можете побачити підсумок різноманітної статистики сайту та подивитися, які властивості системи є завершеними, а які завершені та очікують на розгляд перед затвердженням. . Після того, як майно буде затверджено, воно може бути опубліковане менеджером майна. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Менеджер плагінів, установка та використання');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'У цьому відео показано, як користуватися менеджером плагінів, включаючи встановлення менеджера плагінів, а потім установку та видалення плагіна. Якщо у вас немає ліцензійного ключа, вам буде запропоновано зберегти на сайті Налаштування перед тим, як ви зможете встановити менеджер. Якщо ви раніше не користувалися менеджером плагінів, цей список спочатку буде порожнім, у цьому прикладі у мене вже встановлено різноманітні плагіни. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Менеджери нерухомості');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Менеджери властивостей додаються одним із двох способів. Вони або самі створюють властивості (їх можна вимкнути в Конфігурації сайту), або адміністратор сайту може призначити існуючого менеджера певним властивостям. Менеджери мають доступ лише до властивостей, які вони мають створені або призначені. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Контроль доступу');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Ви можете використовувати функцію контролю доступу, щоб вимкнути параметри меню, зробивши їх видимими лише для певних класів користувачів, або навіть зникнути взагалі. Якщо на панелі меню немає жодних параметрів меню для відображення, повністю зникне, тому, якщо ви не хочете, щоб відвідувачі сайту бачили будь -які параметри, ви можете просто встановити, щоб усі параметри були видимими для вхідних користувачів, наприклад. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Типи власності та кімнат');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'У цьому відео ви побачите дві важливі концепції. Перша - це створення типів власності та відповідних типів кімнат. Ви також побачите зареєстрованого користувача, який ще не є менеджером, який створить власну власність і стане Менеджер (але може лише налаштувати створену ними властивість). Типи власності та кімнати зв’язані. Після створення типу властивості потрібно додати тип кімнати, інакше менеджери власності побачать червоні повідомлення про помилки під час спроби налаштувати свої властивості. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Завантаження маркерів карт');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Ви використовуєте Медіа -центр для завантаження маркерів карт. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Чудове джерело маркерів можна знайти тут. < /a> Процедура завантаження об’єктів нерухомості, особливостей кімнат, типів кімнат та інших однакова. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Особливості власності');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'У цьому відео ми покажемо вам, як створювати властивості властивостей та завантажувати для них зображення.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Шорткоди');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Шорткоди - це надзвичайно потужна функція Jomres. Принцип однаковий як для Joomla, так і для Wordpress. У цьому відео ми покажемо вам, де можна переглядати короткі коди (цей список буде змінюватися залежно від того, які плагіни є встановлені) і як ними користуватися. Ви можете використовувати коди у статтях або модулях. ');
	
	jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Файли журналу');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Це відео покаже вам, як переглядати файли журналів. Під час запуску системи відбувається широке ведення журналу. У режимі виробництва (Конфігурація сайту> Налагодження) створюється менше журналів, тому, якщо ви тестуєте нову функцію, вам слід налаштувати свій сайт на розробку. Якщо ви хочете додати власне ведення журналу до ваших сценаріїв Jomres, подивіться <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> нашу сторінку посібника про те, як це зробити. </a> Тут ми викинемо фальшиву помилку, а потім переглянемо файл журналу. Оскільки для сайту встановлено значення" Розробка " є багато інформації, зазвичай ви просто побачите повідомлення про те, що сталася помилка, і про неї повідомили. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Переклад міток та інших рядків');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Існує кілька способів перекладу мовних рядків у Jomres. Ви можете редагувати мовні файли, але вони можуть бути перезаписані під час оновлення. Натомість ми рекомендуємо використовувати вбудовані інструменти перекладу, унікальні лише для наших програмне забезпечення. Якщо рядок - це те, що було введено у форму, наприклад ім’я типу кімнати, ви можете скористатися сторінкою "Редагування міток". Якщо рядок із мовного файлу, можна скористатися засобом редагування мовних файлів. Просто скористайтесь інструментом пошуку веб -переглядача, щоб знайти рядок, який потрібно змінити, а потім натисніть посилання, щоб змінити його. Ці зміни зберігаються в базі даних і тому безпечні для оновлень. Ви можете мати різні мітки для різних типів властивостей, щоб ви могли змінити Нову властивість на Новий кемпінг, наприклад, змінивши спадне меню Мовний контекст у верхній частині сторінки перед зміною мітки. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Додавання властивостей');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> На цьому етапі Jomres був встановлений у CMS, і він був доданий до меню інтерфейсу (або у Wordpress ви створили сторінку і додали до неї основний шорткод Jomres). </ p>
<p> Тут ви побачите, як зареєстрований користувач, який ще не є менеджером власності в Jomres, може створити нову властивість, налаштувати деякі основні параметри та опублікувати її. </p>
<p> Наприкінці ви побачите, що менеджер був автоматично встановлений як менеджер власності, однак вони можуть налаштувати лише власні властивості. </p>
<p> Хоча інтерфейс у Wordpress виглядає інакше, процес абсолютно однаковий для Joomla або Wordpress. </p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Категорії власності');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Категорії властивостей - це проста функція, яка дозволяє менеджерам властивостей призначати свої властивості певній категорії. Адміністратори сайту можуть створювати короткі коди, у яких будуть перераховані всі властивості категорії, як показано у цьому відео.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Властивості перегляду адміністратора сайту');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Ви не керуєте властивостями тут, ви можете керувати лише властивостями з інтерфейсу, однак у цьому списку ви можете побачити властивості, які очікують на затвердження (якщо ця функція ввімкнена) та будь -які з них неповні (наприклад, потрібно завантажити зображення, встановити ціни тощо). Натисніть на назву властивості, щоб потрапити на інформаційну панель цієї властивості. Після цього ви зможете скористатися розділами керівництва у верхній частині сторінки, щоб побачити кроки, які вам потрібно взяти, щоб заповнити та опублікувати властивість. </p> ');
