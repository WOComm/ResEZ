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

jr_define ('_JOMRES_FAQ', 'Често задавани въпроси');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Свойства');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Как да създам свойство?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Щракнете върху Свойства> Нова собственост, за да добавите нова собственост.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Как мога да видя как изглежда моят имот на гостите?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Кликнете върху Свойства> Визуализация, за да видите как имотът ви изглежда пред гостите.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Как да добавя стаи?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Начинът, по който добавяте стаи, зависи от вашия режим на редактиране на тарифи. В нормалния режим за редактиране на тарифи не е необходимо да добавяте стаи, тъй като те се добавят автоматично, когато конфигурирате цените си. Ако използвате Режим за редактиране на микроуправление или разширени тарифи, след това в Настройки> Стаи можете да добавяте, редактирате и изтривате стаи. Ще можете също да създавате функции на стаята и да присвоявате тези функции на тези стаи. Освен това ще можете да качвате изображения за отделни стаи, използващи Media Center. Когато създавате стаи, трябва да се опитате да гарантирате, че те отразяват вашите стаи в реалния свят във вашия имот, тъй като това ще ги направи по-лесни за управление. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Как да определя цените на стаите?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Това зависи от вашия режим на редактиране на тарифи. Ако използвате режим за редактиране на нормална тарифа (Раздел Конфигурация> Режими за редактиране на тарифи), тогава можете да конфигурирате броя на стаите, които имате, цената, броя на души, които всяка стая може да настани, и общия брой хора, които искате при всяка резервация. Този режим ви позволява да зададете цените на стаите за следващите 10 години. <br/> Ако използвате режимите за редактиране на тарифи Advanced или Micromanage, тогава вие сте можете да зададете цените на стаите за всеки ден през следващите години. Можете също да имате множество тарифи за един и същ тип стая, например можете да имате една тарифа за нощувка със закуска и друга за нощувка, закуска и вечеря. Освен ако нямате конкретна нужда , препоръчваме ви да използвате Micromanage през цялото време, Advanced ще работи по същия начин, но трябва да внимавате, за да сте сигурни, че началната и крайната дата на различните ви тарифи са последователни. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Как да създам допълнителни екстри по избор?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Екстрите могат да се добавят към резервациите и се конфигурират в Настройки> Екстри. Те могат да бъдат или незадължителни или" принудителни ", с други думи, гостът не може да ги премахне в резервацията. Можете да предложите различни методи на таксуване за допълнителни екстри и независимо дали са показани или не на страницата Ви с подробности за имота. Тъй като екстрите могат да се покажат само ако резервацията е в рамките на определени дати (например за сезонни плодове), трябва да се уверите, че са задали валидните дати от и до. След като създадете допълнителни опции, можете да качвате изображения за тях чрез Media Manager. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Как мога да получа плащания онлайн?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "За да извършвате плащания онлайн, трябва да имате акаунт в доставчик на онлайн плащания, наречен Gateway. За да видите наличните шлюзове, отидете в раздел Configuration Property> Gateways. Кликнете върху името на шлюз към конфигурационната му страница. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Мога ли да дам отстъпки?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Могат да се дават отстъпки, има няколко различни начина, по които това може да стане. Ако правите резервация от името на клиент, тогава можете да зададете свой собствен депозит и суми за резервации във формуляра за резервация , използвайки полетата Override Accommodation Total и Override Deposit (Гостите не могат да използват тази функция). Друг начин да се даде отстъпка на гост е да се създадат купони за отстъпка, които могат да бъдат конфигурирани така, че да могат да се използват само между определени дати (Валидно от/до) или се прилага само когато резервацията попада между определени дати (Резервацията е валидна от/до). Тези купони за отстъпка могат да бъдат присвоени само на един гост или ако искате можете да разпечатате купоните. Разпечатката включва QR код които гостите могат да сканират в телефоните си, които ги отвеждат във формуляра ви за резервация с вече приложим код за отстъпка. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Резервации');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Когато щракна върху Нова резервация, ще бъда отворен във формуляра за контакт, защо?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Преди да можете да правите резервации онлайн, първо трябва да конфигурирате някои цени (тарифи) за всеки тип стая, която имате във вашия недвижим имот. След като сте създали някои тарифи, ще можете да приемате резервации . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Какво представляват черните резервации?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Черните резервации са резервации, които са създадени за изваждане на стая или стаи от обслужване. Те не са свързани с никакви гости и са полезни например, ако трябва да се ремонтира стая.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Изображения');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Как да качвам изображения?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', 'За да качите изображения, трябва да посетите страницата Настройки> Media Center. На тази страница ще видите няколко екрана. В горната част може да видите някои бележки, а под тях ще видите падащо меню. Това падащо меню ви позволява да изберете за кой ресурс качвате изображения. <br/> Вдясно е колона с Добавяне на изображения, Изчистване на списъка и Качване на всички. Щракнете върху Добавяне на изображения и изберете някои изображения от вашия настолен компютър или мобилно устройство. Когато сте направили това, колоната ще се промени в списък с миниатюри. От тук можете да качите едно или повече изображения за вашите ресурси. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'Какво е" основното "изображение?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Основното изображение е това, което се появява в резултатите от търсенето и в заглавката на собствеността ви (областта в горната част на страниците, която показва нещо за вашата собственост). Трябва да изберете изображение, което показва вашата собственост в възможно най -добра светлина. За да качите основно изображение, уверете се, че е избрано Основно изображение на имота в падащия списък в горния ляв ъгъл, след това качете едно или повече изображения. Ако качите повече от едно изображение, всички изображения ще бъдат използвани в търсенето страницата с резултати се показва като малко слайдшоу. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Какви са иконите за функции на стаята?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Функциите на стаята могат да бъдат създадени от потребители на режими за редактиране на тарифи Micromanage. Те могат да бъдат свързани с една или повече стаи и се показват във формуляра за резервация. След като създадете функция за стая, можете качете изображение за тази функция, като първо изберете Иконите на функциите на стаята в падащото меню в Media Center, след което изберете името на функцията на стаята от падащото меню, което ще се появи отдолу. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Как да кача изображения на стаи?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Стаите могат да се създават от потребители на режими за редактиране на тарифи Micromanage или Advanced. След като бъдат създадени една или повече стаи, можете да качите няколко изображения за всяка стая чрез Media Center (изберете името на стаята/номера след избор на изображения на стаята в падащото меню). Тези изображения могат да се видят в слайдшоу, като прегледате страницата за визуализация и изберете раздела Нашите стаи, след което щракнете върху връзката Наличност. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Как да кача изображения за слайдшоу?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Изображенията за слайдшоу се виждат на страницата с подробности за имота (визуализация), до бутона Резервирай сега.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Как да кача допълнителни снимки?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Подобно на стаите и функциите на стаите, първо трябва да създадете Екстра. След като направите това, можете да изберете Екстри в горното падащо меню. Когато сте направили това, трябва да изберете името на екстрата от падащия списък по -долу. Когато е избрано името, можете да качите едно или повече изображения за тази екстра. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Нещо свързано с гост');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Как да блахблаба?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ти блаблабла');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Как да запазя описания на няколко езика?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "За да запазите описания на няколко езика, първо посетете страницата Настройки> Подробности за собствеността. Запишете описанието за собствеността си там. След това променете езика, на който разглеждате сайта. Сега отидете на Настройки Страницата с подробности за имота отново и запишете подробностите отново. Така че, ако сайтът може да показва както английски, така и испански (или всеки друг) език, бихте избрали английски, въведете описанието на английски, след което щракнете върху Запазване. След това променете текущия си език на испански, след което запишете новото описание на испански. Това работи за всички входове на тази страница. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Мога ли да променя други имоти на този сайт?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Не, не можете. Можете да администрирате само имоти, които сте създали или на които сте били назначени като мениджър на имоти.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Мога ли да променя други имоти на този сайт?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Да, можете, вие сте супер мениджър на имоти и можете да променяте всички свойства, показани на страницата Свойства на списъка.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Какви са типовете гости/Как да променя на човек на вечер?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'В раздела Настройки> Конфигурация на имота> Тарифи и валути можете да решите дали искате да таксувате на човек на вечер. Ако таксувате на човек на вечер, ще трябва да създадете един или повече типове гости. Можете да създадете обикновен тип гост, където просто му давате описание (например Лица), или можете да създадете няколко различни типа гости, например "Възрастни" и "Деца под 10". За децата, ако искате да предложите отстъпка от 50%, след което бихте задали "Има процент" на "Да", а стойността на "Разлика" на 50. Стаите имат базови цени, тази настройка ви позволява да коригирате цената на стаята в зависимост от типа на госта. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Какви са функциите на стаята?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', 'Характеристиките на стаята са неща, които правят стаята да се откроява. Те могат да бъдат нещо просто като удобства за приготвяне на чай и кафе, или могат да бъдат неща, които наистина карат стаята да се издига над останалите, като например\" Изгледи над bay \". След като създадете функция за стая, можете да качвате изображения за тази функция в Media Center. Тези функции на стаята могат да се видят на страницата за наличност на стаята и ако сте конфигурирали собствеността си да показва стила на списъка с класически стаи (където гостите могат да изберат точно коя стая искат да резервират), след това могат да използват функциите на стаята, за да филтрират ooms, показани във формуляра за резервация. ');

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Плащания');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Не можете да видите шлюза за плащане след извършване на резервация.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ако сте влезли като Property Manager, няма да видите шлюза за плащане, защото не плащате сами. Само потребители, които не са мениджъри, ще виждат шлюза при извършване на резервации.");

