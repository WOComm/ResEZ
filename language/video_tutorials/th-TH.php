<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 10.2.1
 * @package Jomres
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'วิดีโอสอน');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'แผงควบคุม');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'บทช่วยสอนนี้จะแสดงให้คุณเห็นถึงวิธีใช้แผงควบคุมการจัดการคุณสมบัติ');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'ไทม์ไลน์');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'วิธีใช้ปฏิทินไทม์ไลน์ ในวิดีโอนี้ เราสร้างแขกใหม่โดยการป้อนรายละเอียดของพวกเขาในป๊อปอัป ผู้เข้าร่วมที่มีอยู่สามารถนำกลับมาใช้ใหม่ได้โดยเลือกชื่อจากเมนูดรอปดาวน์ในป๊อปอัป') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'รายการคุณสมบัติ');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'วิธีใช้หน้าคุณสมบัติของรายการเพื่อดูข้อมูลเพิ่มเติม เปลี่ยนคอลัมน์ และค้นหาคุณสมบัติเฉพาะ');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'แก้ไขรายละเอียดคุณสมบัติของคุณ');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'กำลังแก้ไขรายละเอียดคุณสมบัติของคุณ รวมถึงการลากบนแผนที่เพื่อกำหนดตำแหน่งของคุณ');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'เปลี่ยนโหมดแก้ไขภาษี');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'โหมดแก้ไขภาษีของคุณจะกำหนดวิธีการที่คุณสามารถใช้กำหนดราคาสำหรับทรัพย์สินของคุณ โดยดำเนินการผ่านหน้าการกำหนดค่าคุณสมบัติ');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'โหมดแก้ไขภาษีปกติสำหรับโรงแรม บำนาญ B&Bs');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'โหมดการแก้ไขภาษีปกติเป็นคุณลักษณะการแก้ไขภาษีอย่างง่ายที่ให้คุณเลือกจำนวนห้องในที่พัก ราคาห้อง จำนวนผู้เข้าพักแต่ละห้องสามารถรองรับได้ และจำนวนผู้เข้าพักสูงสุด ในงานปาร์ตี้ เมื่อบันทึกแล้ว ราคาเหล่านี้จะใช้ได้ในอีก 10 ปีข้างหน้า');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'การแก้ไขภาษีปกติสำหรับวิลล่าและอพาร์ตเมนต์');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'โหมดการแก้ไขภาษีปกติเป็นคุณลักษณะการแก้ไขภาษีอย่างง่ายที่ให้คุณเลือกประเภทย่อยของที่พัก ราคาของที่พักต่อคืน และจำนวนผู้เข้าพักสูงสุดในปาร์ตี้ เมื่อบันทึกราคาเหล่านี้จะเป็น แล้วมีอายุอีก 10 ปี');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'โหมดแก้ไขภาษี Micromanage (แนะนำ)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'โหมดแก้ไขภาษี Micromanage ช่วยให้คุณสามารถกำหนดค่าทั้งราคาและจำนวนวันขั้นต่ำที่สามารถใช้ได้สำหรับทุกวันของปี เป็นเครื่องมือที่ทรงพลังที่ให้คุณควบคุมได้อย่างสมบูรณ์ เกินราคา ในตัวอย่างนี้ เราจะแสดงให้คุณเห็นถึงวิธีการสร้างชุดราคาหลายชุดสำหรับห้องประเภทเดียวกัน');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'โหมดแก้ไขภาษีแบบ Micromanage สำหรับวิลล่า/อพาร์ตเมนต์ (แนะนำ)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'โหมดแก้ไขภาษี Micromanage ช่วยให้คุณสามารถกำหนดค่าทั้งราคาและจำนวนวันขั้นต่ำที่สามารถใช้ได้สำหรับทุกวันของปี เป็นเครื่องมือที่ทรงพลังที่ให้คุณควบคุมได้อย่างสมบูรณ์ เกินราคา ในตัวอย่างนี้ เราจะแสดงวิธีสร้างชุดราคาหลายชุด เราจะกำหนดราคาที่แตกต่างกันสำหรับช่วงเวลาต่างๆ และราคาที่แตกต่างกันสำหรับวันที่เฉพาะเจาะจงของสัปดาห์ภายในระยะเวลาหนึ่ง เมื่อเสร็จแล้ว เราจะสร้างภาษีหลายรายการสำหรับค่าเดียวกัน แต่ด้วยจำนวนผู้เข้าพักที่แตกต่างกันทำให้เราสามารถควบคุมราคาได้อย่างแม่นยำสำหรับทุกสถานการณ์');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'อัตราภาษีที่แตกต่างกันสำหรับจำนวนแขกที่แตกต่างกัน');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'คุณสามารถสร้างภาษีได้หลายรายการสำหรับห้องประเภทเดียวกัน ดังนั้นหากคุณต้องการราคาที่แตกต่างกันสำหรับจำนวนแขกที่แตกต่างกัน คุณสามารถทำได้');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'ต่อคนต่อคืน - ประเภทแขก');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'คุณจะต้องสร้างประเภทของผู้เข้าพักในการเรียกเก็บเงินต่อคนต่อคืน ผู้เข้าพักประเภทต่างๆ อาจมีความแตกต่างกันจากราคาฐานของห้อง ดังนั้น เด็กที่มีอายุต่างกันสามารถมีส่วนลดที่แตกต่างกันตามอายุของพวกเขาได้ คุณ ไม่จำเป็นต้องเรียกเก็บเงินต่อคนต่อคืนเพื่อใช้ประเภทผู้เข้าพัก คุณสามารถใช้ได้หากคุณคิดค่าบริการแบบเหมาจ่าย แต่ยังต้องการเก็บจำนวนแขก หรือเนื่องจากคุณต้องการจำกัดจำนวนผู้เข้าพักในการจอง' );

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'ศูนย์สื่อ - การอัปโหลดรูปภาพ');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'รูปภาพทั้งหมดถูกอัปโหลดผ่านศูนย์มีเดีย ในวิดีโอนี้ เราจะอัปโหลดรูปภาพคุณสมบัติหลัก รูปภาพสไลด์โชว์บางส่วน เลือกรูปภาพขนาดเล็กที่จะแสดงในหน้าผลการค้นหา และรูปภาพสำหรับหนึ่งใน ห้อง.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'ศูนย์สื่อ - การอัปโหลดรูปภาพ');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'รูปภาพทั้งหมดถูกอัปโหลดผ่านศูนย์มีเดีย ในวิดีโอนี้ เราจะอัปโหลดรูปภาพคุณสมบัติหลัก รูปภาพขนาดเล็กบางส่วนที่จะแสดงในหน้าผลการค้นหา และรูปภาพสไลด์โชว์บางส่วน');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'แผงควบคุมผู้ดูแลระบบ');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'นี่คือหน้า Landing Page เริ่มต้นของคุณในพื้นที่ผู้ดูแลระบบ คุณสามารถดูข้อมูลสรุปของสถิติไซต์ต่างๆ และดูคุณสมบัติที่มีอยู่ในระบบ ซึ่งเสร็จสมบูรณ์แล้ว และที่เสร็จสมบูรณ์แล้ว และกำลังรอการตรวจสอบก่อนที่จะอนุมัติ เมื่อทรัพย์สินได้รับการอนุมัติแล้วก็สามารถเผยแพร่ได้โดยผู้จัดการทรัพย์สิน');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'ตัวจัดการปลั๊กอิน, การติดตั้งและการใช้งาน');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'วิดีโอนี้แสดงวิธีใช้ Plugin Manager รวมถึงการติดตั้งตัวจัดการปลั๊กอิน จากนั้นทำการติดตั้งและถอนการติดตั้งปลั๊กอิน หากคุณไม่มีรหัสใบอนุญาต คุณจะได้รับแจ้งให้บันทึกในไซต์ การกำหนดค่าก่อนที่คุณจะสามารถติดตั้งตัวจัดการได้ หากคุณไม่เคยใช้ตัวจัดการปลั๊กอินมาก่อน รายการนี้จะว่างเปล่าในตอนแรก ในตัวอย่างนี้ ฉันมีปลั๊กอินหลายตัวติดตั้งอยู่แล้ว');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'ผู้จัดการทรัพย์สิน');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Property manager จะถูกเพิ่มด้วยวิธีใดวิธีหนึ่งจากสองวิธี พวกเขาสร้างคุณสมบัติด้วยตนเอง (สามารถปิดใช้งานได้ในการกำหนดค่าไซต์) หรือผู้ดูแลระบบไซต์สามารถกำหนดผู้จัดการที่มีอยู่ให้กับคุณสมบัติบางอย่าง ผู้จัดการสามารถเข้าถึงเฉพาะคุณสมบัติที่พวกเขามี สร้างหรือได้รับมอบหมายให้.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'การควบคุมการเข้าถึง');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'คุณสามารถใช้คุณสมบัติการควบคุมการเข้าถึงเพื่อปิดใช้งานตัวเลือกเมนู ทำให้มองเห็นได้เฉพาะผู้ใช้บางคลาส หรือแม้แต่ทำให้หายไปทั้งหมด หากแถบเมนูไม่มีตัวเลือกเมนูใด ๆ ให้แสดง จะหายไปอย่างสมบูรณ์ ดังนั้นหากคุณไม่ต้องการให้ผู้เยี่ยมชมไซต์เห็นตัวเลือกใดๆ คุณสามารถตั้งค่าตัวเลือกทั้งหมดให้ปรากฏแก่ผู้ใช้ที่เข้าสู่ระบบได้ ตัวอย่างเช่น');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'ประเภทที่พักและห้องพัก');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'ในวิดีโอนี้ คุณจะเห็นแนวคิดที่สำคัญสองประการ ประการแรกคือการสร้างประเภทที่พัก และประเภทห้องที่เกี่ยวข้อง นอกจากนี้ คุณยังจะเห็นผู้ใช้ที่ลงทะเบียนซึ่งยังไม่ได้เป็นผู้จัดการสร้างทรัพย์สินของตนเองและกลายเป็น ผู้จัดการ (แต่สามารถกำหนดค่าคุณสมบัติที่พวกเขาสร้างขึ้นเท่านั้น) ที่พักและประเภทห้องเชื่อมโยงกัน เมื่อคุณสร้างประเภทคุณสมบัติแล้ว คุณต้องเพิ่มประเภทห้อง มิฉะนั้น ผู้จัดการทรัพย์สินจะเห็นข้อความแสดงข้อผิดพลาดสีแดงเมื่อพยายามกำหนดค่าคุณสมบัติของพวกเขา ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'กำลังอัปโหลดตัวทำเครื่องหมายแผนที่');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'คุณใช้ Media Center เพื่ออัปโหลดเครื่องหมายบนแผนที่ <a href="https://mapicons.mapsmarker.com/" target="_blank"> แหล่งเครื่องหมายที่ดีมีอยู่ที่นี่< /a> ขั้นตอนการอัพโหลดคุณสมบัติคุณสมบัติ ลักษณะห้องพัก ประเภทห้อง และอื่นๆ นั้นเหมือนกัน');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'คุณสมบัติคุณสมบัติ');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'ในวิดีโอนี้ เราจะแสดงวิธีสร้างคุณสมบัติคุณสมบัติ และอัปโหลดรูปภาพสำหรับคุณสมบัติเหล่านี้');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'รหัสย่อ');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes เป็นคุณลักษณะที่มีประสิทธิภาพมากของ Jomres หลักการเหมือนกันสำหรับทั้ง Joomla และ Wordpress ในวิดีโอนี้ เราจะแสดงให้คุณเห็นถึงตำแหน่งที่จะดูรหัสย่อ (รายการนี้จะเปลี่ยนแปลงขึ้นอยู่กับว่าปลั๊กอินใดบ้าง) ติดตั้ง) และวิธีใช้งาน คุณสามารถใช้รหัสในบทความหรือโมดูลได้');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'ไฟล์บันทึก');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'วิดีโอนี้จะแสดงวิธีดูไฟล์บันทึก การบันทึกจำนวนมากเกิดขึ้นเมื่อระบบทำงาน เมื่ออยู่ในโหมดการผลิต (การกำหนดค่าไซต์ > การดีบัก) บันทึกจะน้อยลง ดังนั้นหากคุณกำลังทดสอบคุณลักษณะใหม่ คุณควรตั้งค่าไซต์ของคุณเป็น Development หากคุณต้องการเพิ่มการบันทึกของคุณเองลงในสคริปต์ Jomres โปรดดูที่ <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">หน้าคู่มือของเราเกี่ยวกับวิธีการทำ</a> เราจะโยนข้อผิดพลาดปลอมจากนั้นดูไฟล์บันทึก เนื่องจากไซต์ถูกตั้งค่าเป็นการพัฒนาที่นั่น เป็นข้อมูลจำนวนมาก โดยปกติคุณจะเห็นข้อความแจ้งว่ามีข้อผิดพลาดและได้รับการรายงานแล้ว');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'กำลังแปลป้ายกำกับและสตริงอื่นๆ');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'มีหลายวิธีในการแปลสตริงภาษาใน Jomres คุณสามารถแก้ไขไฟล์ภาษาได้ แต่ไฟล์เหล่านั้นอาจถูกเขียนทับเมื่อคุณอัปเกรด เราขอแนะนำให้คุณใช้เครื่องมือการแปลในตัวที่เป็นเอกลักษณ์ของเรา ซอฟต์แวร์ หากสตริงเป็นสิ่งที่ได้รับการป้อนลงในแบบฟอร์มเช่นชื่อประเภทห้องคุณสามารถใช้หน้าแก้ไขป้ายกำกับได้หากสตริงมาจากไฟล์ภาษาคุณสามารถใช้เครื่องมือแก้ไขไฟล์ภาษาได้ เพียงใช้เครื่องมือค้นหาเบราว์เซอร์เพื่อค้นหาสตริงที่คุณต้องการเปลี่ยน จากนั้นคลิกที่ลิงก์เพื่อเปลี่ยน การเปลี่ยนแปลงเหล่านี้จะถูกบันทึกไว้ในฐานข้อมูล ดังนั้นจึงสามารถอัปเดตได้อย่างปลอดภัย คุณสามารถมีป้ายกำกับที่แตกต่างกันสำหรับประเภทคุณสมบัติที่แตกต่างกัน ดังนั้นคุณจึงสามารถ เปลี่ยน New Property เป็น New Campsite เช่น โดยการเปลี่ยนรายการแบบเลื่อนลงบริบทภาษาที่ด้านบนของหน้าก่อนที่จะเปลี่ยนป้ายกำกับ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'กำลังเพิ่มคุณสมบัติ');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>ในขั้นตอนนี้ Jomres ได้รับการติดตั้งใน CMS และได้ถูกเพิ่มลงในเมนูส่วนหน้าแล้ว (หรือใน Wordpress คุณได้สร้างเพจและเพิ่มรหัสย่อ Jomres พื้นฐานลงไป)</ p>
<p>ที่นี่ คุณจะเห็นว่าผู้ใช้ที่ลงทะเบียนซึ่งยังไม่ได้เป็นผู้จัดการทรัพย์สินใน Jomres สามารถสร้างทรัพย์สินใหม่ กำหนดการตั้งค่าพื้นฐานบางอย่าง และเผยแพร่ได้อย่างไร</p>
<p>ในตอนท้าย คุณจะเห็นว่าผู้จัดการได้รับการตั้งค่าให้เป็นผู้จัดการทรัพย์สินโดยอัตโนมัติ อย่างไรก็ตาม พวกเขาสามารถกำหนดค่าคุณสมบัติของตนเองได้เท่านั้น</p>
<p>แม้ว่าอินเทอร์เฟซใน Wordpress จะดูแตกต่าง แต่กระบวนการก็เหมือนกันทุกประการสำหรับ Joomla หรือ Wordpress</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'หมวดหมู่พร็อพเพอร์ตี้');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'หมวดหมู่อสังหาริมทรัพย์เป็นคุณลักษณะง่ายๆ ที่ช่วยให้ผู้จัดการทรัพย์สินสามารถกำหนดคุณสมบัติของตนให้กับบางหมวดหมู่ได้ ผู้ดูแลไซต์สามารถสร้างรหัสย่อที่จะแสดงรายการคุณสมบัติทั้งหมดในหมวดหมู่ตามที่แสดงในวิดีโอนี้');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'ผู้ดูแลไซต์กำลังดูคุณสมบัติ');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>คุณไม่ได้จัดการพร็อพเพอร์ตี้จากที่นี่ คุณสามารถจัดการคุณสมบัติจากฟรอนต์เอนด์เท่านั้น อย่างไรก็ตาม ในรายการนี้ คุณสามารถดูคุณสมบัติที่รอการอนุมัติ (หากเปิดใช้งานคุณลักษณะนี้) และคุณสมบัติอื่นๆ ที่ ไม่สมบูรณ์ (เช่น ยังคงต้องอัปโหลดรูปภาพ ตั้งราคา ฯลฯ) คลิกที่ชื่อที่พักเพื่อไปยังแดชบอร์ดของที่พักนั้น ๆ จากนั้นคุณจะสามารถใช้ส่วนคำแนะนำที่ด้านบนของหน้าเพื่อดูขั้นตอนที่ คุณต้องดำเนินการเพื่อให้สมบูรณ์และเผยแพร่คุณสมบัติ</p> ');


