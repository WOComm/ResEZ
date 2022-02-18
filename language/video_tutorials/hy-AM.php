<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Video Tutorials');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Control Panel');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Այս ձեռնարկը ցույց է տալիս, թե ինչպես օգտագործել Properties Management կառավարման վահանակը');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Timeline');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Ինչպես օգտագործել ժամանակացույցի օրացույցը: Այս տեսանյութում մենք ստեղծում ենք նոր հյուր `մուտքագրելով նրանց տվյալները թռուցիկ դաշտում, առկա հյուրերը կարող են նորից օգտագործվել` ընտրելով նրանց անունը բացվող պատուհանում:') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Listանկի հատկություններ');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Ինչպես օգտագործել Listանկի հատկությունների էջը լրացուցիչ տեղեկություններ դիտելու, սյունակներ փոխելու և հատուկ հատկություններ որոնելու համար');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Խմբագրել ձեր սեփականության տվյալները');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Ձեր սեփականության մանրամասների խմբագրում, ներառյալ քարտեզի վրա քաշելը `ձեր գտնվելու վայրը սահմանելու համար');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Փոխել սակագնի խմբագրման ռեժիմը');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Ձեր սակագնային խմբագրման ռեժիմը որոշում է այն մեթոդը, որը կարող եք օգտագործել ձեր գույքի գները սահմանելու համար: Դուք դա անում եք Հատկությունների կազմաձևման էջի միջոցով:');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Հյուրանոցների, կենսաթոշակների, B & B- ի սակագների խմբագրման սովորական ռեժիմ');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Սակագների սովորական խմբագրման ռեժիմը պարզ սակագնային խմբագրման գործառույթ է, որը թույլ է տալիս ընտրել գույքի սենյակների քանակը, սենյակի գինը, յուրաքանչյուր սենյակի հյուրերի թիվը և հյուրերի առավելագույն թիվը խնջույքում: Պահպանվելուց հետո այս գները գործում են հաջորդ 10 տարիների ընթացքում: ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Նորմալ սակագնի խմբագրում վիլլաների և բնակարանների համար');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Սակագների սովորական խմբագրման ռեժիմը պարզ սակագնային խմբագրման գործառույթ է, որը թույլ է տալիս ընտրել գույքի ենթատեսակը, մեկ գիշերվա գույքի գինը և խնջույքի հյուրերի առավելագույն քանակը: ապա ուժի մեջ է հաջորդ 10 տարիների ընթացքում: ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Մանրառավարման սակագնային խմբագրման ռեժիմ (խորհուրդ է տրվում)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage սակագնային խմբագրման ռեժիմը թույլ է տալիս կարգավորել և՛ գինը, և՛ օրերի նվազագույն քանակը, որոնց համար կարող է վավեր լինել տարվա յուրաքանչյուր օրվա համար: գների ավելցուկ: Այս օրինակում մենք ձեզ ցույց կտանք, թե ինչպես կարելի է ստեղծել միևնույն սենյակի համար մի քանի գների հավաքածուներ, տարբեր ժամանակաշրջանների համար տարբեր գներ և շաբաթվա որոշակի օրերի համար տարբեր գներ: ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Վիլլաների/բնակարանների սակագնային խմբագրման միկրոկառավարման ռեժիմ (խորհուրդ է տրվում)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage սակագնային խմբագրման ռեժիմը թույլ է տալիս կարգավորել և՛ գինը, և՛ օրերի նվազագույն քանակը, որոնց համար կարող է վավեր լինել տարվա յուրաքանչյուր օրվա համար: Դա հզոր գործիք է, որը տալիս է ամբողջական վերահսկողություն: գների ավելացում: Այս օրինակում մենք ձեզ ցույց կտանք, թե ինչպես ստեղծել բազմաթիվ գների հավաքածուներ: Մենք տարբեր ժամանակաշրջաններում տարբեր գներ և շաբաթվա որոշակի օրերի տարբեր գներ կտրամադրենք: Դա անելուց հետո մենք կստեղծենք մի քանի սակագին սեփականություն, բայց հյուրերի տարբեր համարներով, ինչը թույլ է տալիս մեզ ճշգրիտ վերահսկել գները յուրաքանչյուր սցենարի համար: ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Տարբեր սակագներ հյուրերի տարբեր համարների համար');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Դուք կարող եք ստեղծել մի քանի սակագներ նույն սենյակի համար, այնպես որ, եթե ցանկանում եք տարբեր գներ հյուրերի տարբեր քանակի համար, կարող եք դա անել');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Մեկ անձի համար մեկ գիշերվա համար - հյուրերի տեսակներ');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Գիշերը մեկ անձից գանձելու համար հարկավոր է ստեղծել հյուրերի տեսակներ: Հյուրերի տարբեր տեսակներ կարող են տարբերություններ ունենալ սենյակի բազային արժեքից, այնպես որ տարբեր տարիքի երեխաները կարող են ունենալ տարբեր զեղչեր `կախված իրենց տարիքից: կարիք չկա մեկ անձի համար վճարել մեկ գիշերվա համար ՝ Հյուրերի տեսակներից օգտվելու համար, դրանք կարող եք օգտագործել նաև այն դեպքում, երբ դուք գանձում եք հաստատուն դրույքաչափ, բայց դեռ ցանկանում եք գրավել հյուրերի թիվը, կամ քանի որ ցանկանում եք սահմանափակել ամրագրման հյուրերի թիվը ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Մեդիա կենտրոն - Պատկերի վերբեռնում');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Բոլոր պատկերները վերբեռնվում են մեդիա կենտրոնի միջոցով: Այս տեսանյութում մենք կբեռնենք Հիմնական հատկության պատկերը, սլայդերի ցուցադրման պատկերներ, որոնման արդյունքների էջում ցուցադրվող պատկերների փոքր ընտրություն և պատկերներից մեկի համար սենյակները ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Մեդիա կենտրոն - Պատկերի վերբեռնում');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Բոլոր պատկերները վերբեռնվում են մեդիա կենտրոնի միջոցով: Այս տեսանյութում մենք կբեռնենք Հիմնական հատկության պատկերը, որոնումների արդյունքների էջում ցուցադրվող պատկերների փոքր ընտրությունը և սլայդերի ցուցադրման որոշ պատկերներ:');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Սա ձեր կանխադրված վայրէջքի էջն է ադմինիստրատորի տարածքում: Դուք կարող եք տեսնել կայքի տարբեր վիճակագրությունների ամփոփում և տեսնել, թե համակարգում որ հատկություններն են ամբողջական, որոնք ավարտված են և սպասում են ստուգման նախքան հաստատումը Երբ գույքը հաստատվի, այն կարող է հրապարակվել գույքի կառավարչի կողմից: ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, տեղադրում և օգտագործում');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Այս տեսանյութը ցույց է տալիս, թե ինչպես օգտագործել Plugin Manager- ը, ներառյալ plugin Manager- ի տեղադրումը, այնուհետև plugin- ի տեղադրումն ու տեղահանումը: Եթե լիցենզիայի բանալին չունեք, ձեզ կառաջարկվի կայքում պահել Կառավարիչը նախքան կառավարիչը տեղադրելը: Եթե նախկինում չեք օգտագործել plugin- ի կառավարիչը, ապա այս ցուցակը սկզբում դատարկ կլինի, այս օրինակում ես արդեն տեղադրել եմ մի շարք հավելումներ: ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Գույքի կառավարիչներ');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Գույքի կառավարիչները ավելացվում են երկու եղանակներից մեկով. Կամ նրանք իրենք են ստեղծում հատկություններ (կարող են անջատվել Կայքի կազմաձևում), կամ կայքի ադմինիստրատորը կարող է գոյություն ունեցող կառավարիչ հատկացնել որոշակի հատկությունների: ստեղծվել կամ նշանակվել է: ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Մուտքի վերահսկում');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Դուք կարող եք օգտագործել Access Control գործառույթը `ընտրացանկի ընտրանքներն անջատելու համար, դրանք տեսանելի դարձնելով միայն օգտագործողների որոշակի դասերի համար, կամ նույնիսկ ընդհանրապես անհետացնելը: Եթե ընտրացանկի ցանկում չկա ընտրացանկի որևէ տարբերակ, ապա այն ամբողջությամբ կվերանա, այնպես որ, եթե չեք ցանկանում, որ կայքի այցելուները տեսնեն որևէ տարբերակ, ապա կարող եք պարզապես սահմանել, որ բոլոր տարբերակները տեսանելի լինեն, օրինակ `մուտք գործած օգտվողների համար, օրինակ. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Գույքի և սենյակի տեսակներ');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Այս տեսահոլովակում դուք կտեսնեք երկու կարևոր հասկացություն: Առաջինը ՝ գույքի տեսակների ստեղծումն է և դրա հետ կապված սենյակների տեսակները: Դուք նաև տեսնելու եք գրանցված օգտվող, որը դեռ կառավարիչ չէ, ստեղծում է սեփականություն և դառնում մենեջեր (բայց միայն կարող է կարգավորել իրենց ստեղծած գույքը): Գույքի և սենյակի տեսակները կապված են, երբ որևէ տիպ ստեղծեք, պետք է ավելացնեք սենյակի տեսակը, հակառակ դեպքում գույքի կառավարիչները կտեսնեն կարմիր սխալի հաղորդագրություններ, երբ փորձում են կարգավորել իրենց հատկությունները: ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Քարտեզի նշիչների վերբեռնում');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Դուք օգտագործում եք Մեդիա կենտրոնը `քարտեզի նշիչները վերբեռնելու համար: <a href="https://mapicons.mapsmarker.com/" target="_blank"> Մարկերների մեծ աղբյուր կարելի է գտնել այստեղ: < /ա> Գույքի առանձնահատկությունները, սենյակի առանձնահատկությունները, սենյակների տեսակները և այլ նյութեր վերբեռնելու կարգը նույնն է: ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Գույքի առանձնահատկություններ');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Այս տեսանյութում մենք ձեզ ցույց կտանք, թե ինչպես ստեղծել սեփականության հատկություններ և դրանց համար պատկերներ վերբեռնել:');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Կարճ կոդեր');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Կարճ կոդերը Jomres- ի բացառիկ հզոր հատկանիշն են: Սկզբունքը նույնն է ինչպես Joomla- ի, այնպես էլ Wordpress- ի համար: Այս տեսանյութում մենք ձեզ ցույց կտանք, թե որտեղ դիտել կարճ կոդերը (այս ցուցակը կփոխվի `կախված նրանից, թե որ plugin- ներն են տեղադրված) և ինչպես օգտագործել դրանք: Կարող եք օգտագործել հոդվածների կամ մոդուլների ծածկագրերը: ');
    
jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Մատյան ֆայլեր');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Այս տեսանյութը ցույց կտա, թե ինչպես դիտել տեղեկամատյան ֆայլերը: Լայնածավալ մուտքագրումը տեղի է ունենում, երբ համակարգը աշխատում է: Արտադրության ռեժիմում (Կայքի կազմաձևում> Վրիպազերծում) ավելի քիչ տեղեկամատյաններ են ստեղծվում, այնպես որ, եթե նոր գործառույթ եք փորձարկում, ապա Դուք պետք է ձեր կայքը դնեք Developmentարգացման: Եթե ցանկանում եք ավելացնել ձեր սեփական անտառահատումները ձեր Jomres սցենարներին, նայեք <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> մեր ձեռնարկի էջը, թե ինչպես դա անել: </a> Այստեղ մենք կեղծ սխալ թույլ կտանք, այնուհետև կտեսնենք տեղեկամատյան ֆայլը: Քանի որ կայքը տեղադրված է Developmentարգացում այնտեղ շատ տեղեկատվություն է, սովորաբար դուք պարզապես հաղորդագրություն կտեսնեիք, որտեղ ասվում էր, որ սխալ է եղել և այն արդեն հաղորդվել է: ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Պիտակների և այլ տողերի թարգմանություն');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Jomres- ում լեզվական տողեր թարգմանելու մի շարք եղանակներ կան, որոնք կարող եք խմբագրել լեզվական ֆայլեր, սակայն դրանք կատարելագործվելիս կարող են վերագրվել: Փոխարենը խորհուրդ ենք տալիս օգտագործել ներկառուցված թարգմանական գործիքներ, որոնք հատուկ են մեզ ծրագրային ապահովում: Եթե տողը ձևի մեջ մուտքագրված բան է, օրինակ ՝ սենյակի տիպի անվանումը, կարող եք օգտագործել Պիտակի խմբագրման էջը: Եթե տողը լեզվական ֆայլից է, ապա կարող եք օգտագործել Լեզվի ֆայլերի խմբագրման գործիքը: Պարզապես օգտագործեք զննարկչի որոնման գործիքը ՝ գտնելու այն տողը, որը ցանկանում եք փոխել, այնուհետև կտտացրեք հղմանը ՝ այն փոխելու համար: Այս փոփոխությունները պահվում են տվյալների բազայում և, հետևաբար, անվտանգ են թարմացվում: Կարող եք ունենալ տարբեր պիտակներ գույքի տարբեր տեսակների համար, փոխել Նոր սեփականությունը Նոր ճամբարով, օրինակ ՝ էջանշանի փոփոխությունից առաջ էջանշանի լեզվի համատեքստը փոխելով: ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Ավելացնելով հատկություններ');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> Այս փուլում Jomres- ը տեղադրվել է CMS- ում և այն ավելացվել է առջևի ընտրացանկին (կամ Wordpress- ում դուք ստեղծել եք էջ և դրան ավելացրել եք Jomres- ի հիմնական կարճ կոդը): </ p>
<p> Այստեղ դուք կտեսնեք, թե ինչպես գրանցված օգտվողը, որը դեռ aոմրեսի սեփականության կառավարիչ չէ, կարող է ստեղծել նոր սեփականություն, կարգավորել որոշ հիմնական կարգավորումներ և հրապարակել այն: </p>
<p> Վերջում կտեսնեք, որ կառավարիչը ինքնաբերաբար սահմանվել է որպես գույքի կառավարիչ, սակայն նրանք կարող են միայն սեփական հատկությունները կարգավորել: </p>
<p> Չնայած Wordpress- ի ինտերֆեյսը այլ տեսք ունի, բայց գործընթացը նույնն է Joomla- ի կամ Wordpress- ի համար: </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Գույքի կատեգորիաներ');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Գույքի կատեգորիան պարզ հատկություն է, որը թույլ է տալիս գույքի կառավարիչներին հատկացնել իրենց հատկությունները որոշակի կատեգորիայի: Կայքի ադմինիստրատորները կարող են ստեղծել կարճ ծածկագրեր, որոնք կցուցադրեն կատեգորիայի բոլոր հատկությունները, ինչպես ցույց է տրված այս տեսանյութում:');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Կայքի ադմինիստրատորի դիտման հատկություններ');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Դուք այստեղից չեք կառավարում հատկությունները, կարող եք կառավարել միայն առջևի հատկությունները, սակայն այս ցուցակում կարող եք տեսնել հաստատման սպասող հատկություններ (եթե գործառույթը միացված է) և ցանկացած թերի (օրինակ ՝ դեռ պետք է նկարներ վերբեռնել, գներ սահմանել և այլն): Կտտացրեք գույքի անվան վրա, որը պետք է տեղափոխվի այդ գույքի վահանակ: Այնուհետև կկարողանաք օգտագործել էջի վերևի ուղեցույցի բաժինները `տեսնելու այն քայլերը, որոնք դուք պետք է վերցնեք գույքը լրացնելու և հրապարակելու համար: </p> ');