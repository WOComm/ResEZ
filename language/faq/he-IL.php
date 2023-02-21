<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'שאלות נפוצות');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'כיצד אוכל ליצור נכס?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'לחץ על נכסים> נכס חדש כדי להוסיף נכס חדש.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'כיצד אוכל לראות כיצד נראה הנכס שלי לאורחים?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'לחץ על מאפיינים> תצוגה מקדימה כדי לראות כיצד הנכס שלך נראה לאורחים.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'כיצד אוכל להוסיף חדרים?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "אופן הוספת החדרים תלוי במצב עריכת התעריפים. במצב עריכת תעריפים רגילה, אין צורך להוסיף חדרים, שכן הם מתווספים אוטומטית בעת הגדרת המחירים. אם אתה משתמש מיקרו ניהול או עריכת תעריפים מתקדמת, ולאחר מכן בהגדרות> חדרים תוכל להוסיף, לערוך ולמחוק חדרים. תוכל גם ליצור תכונות חדר ולהקצות תכונות אלה לחדרים אלה. בנוסף, תוכל להעלות תמונות עבור אנשים בודדים. חדרים באמצעות מרכז המדיה. כאשר אתה יוצר חדרים, עליך לנסות להבטיח שהם ישקפו את החדרים שלך בעולם האמיתי בנכס שלך, כך שיהיה קל יותר לנהל אותם. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'כיצד אוכל לקבוע מחירי חדרים?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "זה תלוי במצב עריכת התעריפים שלך. אם אתה משתמש במצב עריכת תעריפים רגילה (תצורת נכסים> מצבי עריכת תעריפים), תוכל להגדיר את מספר החדרים שיש לך, המחיר, מספר אנשים שכל חדר יכול להכיל ואת המספר הכולל של אנשים שאתה רוצה בכל הזמנה. מצב זה מאפשר לך לקבוע מחירי חדרים ל -10 השנים הבאות. <br/> אם אתה משתמש במצבי עריכת תעריפים מתקדמים או מיקרו -ניהול, אז אתה תוכל לקבוע מחירי חדרים לכל יום לשנים הבאות. תוכל גם לקבל תעריפים מרובים עבור אותו סוג חדר, למשל תוכל לקבל תעריף אחד עבור לינה וארוחת בוקר ואחד אחר לארוחת לינה, ארוחת בוקר וערב. אלא אם כן יש לך צורך ספציפי. , אנו ממליצים שתשתמש ב- Micromanage כל הזמן, Advanced יעבוד באותו אופן אך עליך להקפיד על כך שתאריכי ההתחלה והסיום של התעריפים השונים שלך יהיו רצופים. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'כיצד אוכל ליצור תוספות אופציונאליות?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "ניתן להוסיף תוספות להזמנות ולהגדיר אותן בהגדרות> תוספות. אלה יכולות להיות אופציונאליות או כפויות , במילים אחרות, האורח אינו יכול לבחור אותן מההזמנה. תוכל להציע שיטות שונות של חיוב עבור תוספות אופציונליות, והאם הן מוצגות בדף פרטי הנכס שלך או לא. מכיוון שניתן לבצע תוספות להצגה רק אם ההזמנה היא בתוך תאריכים מסוימים (למשל עבור פירות העונה), עליך לוודא שאתה הגדרת את התאריכים חוקיים מ- ועד. לאחר שיצרת תוספות אופציונליות, תוכל להעלות להן תמונות באמצעות מנהל המדיה. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'כיצד אוכל לבצע תשלומים באינטרנט?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "כדי לקחת תשלומים באופן מקוון, עליך שיהיה לך חשבון אצל ספק תשלומים מקוון, הנקרא Gateway. כדי לראות את השערים הזמינים, עבור אל תצורת הנכס> שערים. לחץ על שם שער כדי לקחת אותו. לדף התצורה שלו. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'האם אוכל לתת הנחות?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "ניתן לתת הנחות, ישנן מספר דרכים שונות לעשות זאת. אם אתה מבצע הזמנה בשם לקוח, תוכל להגדיר את סכום ההפקדה וההזמנה שלך בטופס ההזמנה. , באמצעות השדות ביטול כללי הפקדה וביטול לינה (אורחים אינם יכולים להשתמש בתכונה זו). דרך נוספת לתת לאורח הנחה היא ליצור קופוני הנחה, אותם ניתן להגדיר כך שניתן להשתמש בהם רק בין תאריכים מסוימים (תקף מ/אל) או מיושם רק כאשר ההזמנה נופלת בין תאריכים מסוימים (תקף ההזמנה מ/עד). ניתן להקצות קופוני הנחה אלה לאורח אחד בלבד, או אם תרצה תוכל להדפיס את הקופונים. ההדפסה כוללת קוד QR. שאורחים יכולים לסרוק לטלפונים שלהם שלוקחים אותם לטופס ההזמנה שלך עם קוד ההנחה כבר חל. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'הזמנות');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'כשאני לוחץ על הזמנה חדשה, אני מועבר לטופס יצירת הקשר, מדוע?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'לפני שתוכל לבצע הזמנות באינטרנט, תחילה עליך להגדיר כמה מחירים (תעריפים) עבור כל סוג החדר שיש לך בנכס שלך בעולם האמיתי. לאחר שתיצור כמה תעריפים, תוכל לבצע הזמנות. . ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'מהן הזמנות שחורות?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "הזמנות שחורות הן הזמנות שנוצרו כדי להוציא חדר או חדרים מהשירות. הן אינן משויכות לאף אורח והן שימושיות, למשל, אם צריך לשפץ חדר.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'תמונות');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'איך אני מעלה תמונות?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "כדי להעלות תמונות, עליך לבקר בדף הגדרות> מרכז המדיה. בדף זה תראה מספר חלוניות. בחלק העליון תוכל לראות כמה הערות ומתחתיהן תראה נפתח. תפריט נפתח זה מאפשר לך לבחור לאיזה משאב אתה מעלה תמונות. <br/> בצד ימין נמצאת עמודה עם הוספת תמונות, נקה רשימה והעלאת הכל. לחץ על הוסף תמונות ובחר כמה תמונות משולחן העבודה או מהמכשיר הנייד שלך. כאשר עשית זאת, העמודה תשתנה לרשימת תמונות ממוזערות. מכאן תוכל להעלות תמונה אחת או יותר למשאבים שלך. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "מהי התמונה 'הראשית'?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'התמונה הראשית היא זו שמופיעה בתוצאות החיפוש ובכותרת הנכס שלך (האזור בראש הדפים שמראה משהו על הנכס שלך). עליך לבחור תמונה המציגה את הנכס שלך ב האור הטוב ביותר האפשרי. להעלאת תמונה ראשית, ודא שתמונה ראשית של נכס נבחרה ברשימה הנפתחת בצד שמאל למעלה ולאחר מכן העלה תמונה אחת או יותר. אם תעלה יותר מתמונה אחת, כל התמונות ישמשו בחיפוש דף התוצאות מוצג כמצגת שקופיות קטנה. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'מה הם סמלים של תכונות החדר?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "ניתן ליצור תכונות של חדרים על ידי משתמשים ב- Micromanage או מצבי עריכת תעריפים מתקדמים. ניתן לקשר אותם לחדר אחד או יותר ולהציג אותם בטופס ההזמנה. לאחר שיצרת תכונת חדר, תוכל ליצור העלה תמונה עבור תכונה זו על ידי בחירה ראשית בסמלי תכונות החדר בתפריט הנפתח במרכז המדיה ולאחר מכן בחירת שם תכונת החדר מהתפריט הנפתח שיופיע מתחת. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'איך אני מעלה תמונות חדרים?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'ניתן ליצור חדרים על ידי משתמשים במיקרו -ניהול או במצבי עריכת תעריפים מתקדמים. לאחר שנוצר חדר אחד או יותר, תוכל להעלות תמונות מרובות עבור כל חדר דרך מרכז המדיה (בחר את שם החדר/מספר לאחר מכן בחירת תמונות חדר בתפריט הנפתח). ניתן לראות תמונות אלה במצגת שקופיות על ידי צפייה בדף התצוגה המקדימה ובחירה בכרטיסייה החדרים שלנו ולאחר מכן לחיצה על הקישור זמינות. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'כיצד אוכל להעלות תמונות של מצגת?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'תמונות מצגת מוצגות בדף פרטי הנכס (תצוגה מקדימה), ליד הלחצן הזמן עכשיו.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'כיצד אני מעלה תמונות תוספות?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "בדומה לחדרים ולתכונות החדרים, עליך ליצור תוספת תחילה. לאחר שתסיים, תוכל לבחור תוספות בתפריט הנפתח העליון. לאחר שתעשה זאת, עליך לבחור את שם התוספת מהרשימה הנפתחת למטה. כאשר השם נבחר תוכל להעלות תמונה אחת או יותר לאותו תוספת. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'משהו שקשור לאורח');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'כיצד אוכל לשמור תיאורים במספר שפות?');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "כדי לשמור תיאורים במספר שפות, בקר תחילה בדף הגדרות> פרטי נכס. שמור את התיאור של הנכס שלך שם. לאחר מכן שנה את השפה שבה אתה צופה באתר. כעת עבור אל ההגדרות דף פרטי הנכס שוב ושמור את הפרטים שוב. לכן, אם האתר מסוגל להציג הן אנגלית והן ספרדית (או כל שפה אחרת), היית בוחר באנגלית, הזן את התיאור באנגלית ולאחר מכן לחץ על שמור. לאחר מכן, שנה את הנוכחי שלך שפה לספרדית, ולאחר מכן שמור את התיאור הספרדי החדש. זה עובד על כל התשומות בדף זה. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'האם אוכל לשנות נכסים אחרים באתר זה?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'לא, אינך יכול. תוכל לנהל נכסים שיצרת או שהוקצתם אליהם כמנהל נכסים.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'האם אוכל לשנות נכסים אחרים באתר זה?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "כן אתה יכול, אתה מנהל נכסי על ויכול לשנות כל נכס המוצג בדף מאפייני רשימה.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'מה הם סוגי אורחים/כיצד אוכל לשנות לאדם ללילה?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "בהגדרות> תצורת נכס> תעריפים ומטבעות, תוכל להחליט אם ברצונך לגבות תשלום לאדם ללילה. אם תחויב לאדם ללילה, יהיה עליך ליצור סוג אורח אחד או יותר. אתה יכול ליצור סוג אורח פשוט, שבו אתה פשוט נותן להם תיאור (למשל אנשים), או שאתה יכול ליצור כמה סוגי אורחים שונים, למשל 'מבוגרים' ו'ילדים מתחת לגיל 10. 'עבור הילדים, אם אתה רוצה להציע הנחה של 50% ואז היית מגדיר 'אחוז אחוז' ל- Yes, וערך וריאציה ל- 50. לחדרים יש תעריפי בסיס, הגדרה זו מאפשרת לך להתאים את מחיר החדר בהתאם לסוג האורח. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'מהן תכונות החדר?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "תכונות החדר הן דברים שגורמים לחדר להתבלט. הם יכולים להיות משהו פשוט כמו אמצעים להכנת תה וקפה, או שהם יכולים באמת לגרום לחדר להתעלות מעל האחרים, כמו 'נוף על פני bay '. לאחר שיצרת תכונת חדרים, תוכל להעלות תמונות עבור תכונה זו ב- Media Center. ניתן לצפות בתכונות החדרים בדף זמינות החדרים, ואם הגדרת את הנכס שלך כך שיציג את סגנון רשימת החדרים הקלאסיים. (שבו האורחים יכולים לבחור בדיוק את החדר שהם רוצים להזמין) ואז הם יכולים להשתמש בתכונות החדר כדי לסנן את המלונות המוצגים בטופס ההזמנה. ");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'תשלומים');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "אינך יכול לראות את שער התשלום לאחר ביצוע הזמנה.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "אם אתה מחובר כמנהל נכסים, לא תראה את שער התשלומים, כי אתה לא משלם בעצמך. רק משתמשים שאינם מנהלים יראו את השער בעת ביצוע הזמנות.");
