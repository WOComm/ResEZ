<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 *  @version Jomres 10.5.2
 * @package Jomres
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('_JOMRES_FAQ', 'คำถามที่ถามบ่อย');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'คุณสมบัติ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'ฉันจะสร้างคุณสมบัติได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'คลิกที่คุณสมบัติ > คุณสมบัติใหม่เพื่อเพิ่มคุณสมบัติใหม่');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'ฉันจะทราบได้อย่างไรว่าสถานที่ให้บริการของฉันเป็นอย่างไรสำหรับแขก');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'คลิกที่คุณสมบัติ > ดูตัวอย่างเพื่อดูว่าสถานที่ให้บริการของคุณมีลักษณะอย่างไรสำหรับแขก');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'ฉันจะเพิ่มห้องได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "วิธีที่คุณเพิ่มห้องขึ้นอยู่กับโหมดการแก้ไขภาษีของคุณ ในโหมดแก้ไขภาษีปกติ คุณไม่จำเป็นต้องเพิ่มห้อง เนื่องจากห้องนั้นจะถูกเพิ่มโดยอัตโนมัติเมื่อคุณกำหนดราคา หากคุณใช้ โหมด Micromanage หรือโหมดแก้ไขภาษีขั้นสูง จากนั้นใน การตั้งค่า > ห้อง คุณสามารถเพิ่ม แก้ไข และลบห้องได้ คุณยังจะสามารถสร้างคุณสมบัติของห้องและกำหนดคุณสมบัติเหล่านี้ให้กับห้องเหล่านั้นได้ นอกจากนี้ คุณจะสามารถอัปโหลดภาพสำหรับบุคคลได้ ห้องโดยใช้ Media Center เมื่อคุณสร้างห้อง คุณควรพยายามทำให้มั่นใจว่าห้องเหล่านั้นสะท้อนถึงห้องในชีวิตจริงในทรัพย์สินของคุณเพราะจะทำให้จัดการได้ง่ายขึ้น");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'ฉันจะกำหนดราคาห้องพักได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "ขึ้นอยู่กับโหมดการแก้ไขภาษีของคุณ หากคุณใช้โหมดแก้ไขพิกัดอัตราปกติ ( การกำหนดค่าคุณสมบัติ > แท็บโหมดแก้ไขภาษี) คุณสามารถกำหนดจำนวนห้องที่คุณมี ราคา จำนวนห้อง แต่ละห้องสามารถรองรับได้และจำนวนคนทั้งหมดที่คุณต้องการในการจองแต่ละครั้ง โหมดนี้ช่วยให้คุณกำหนดราคาห้องพักได้ในอีก 10 ปีข้างหน้า <br/>หากคุณใช้โหมดแก้ไขภาษีขั้นสูงหรือ Micromanage คุณจะ สามารถกำหนดราคาห้องพักได้ทุกวันสำหรับปีต่อ ๆ ไป นอกจากนี้คุณยังสามารถมีอัตราภาษีหลายรายการสำหรับห้องพักประเภทเดียวกันเช่นคุณสามารถมีอัตราภาษีหนึ่งสำหรับที่พักและอาหารเช้าและอีกอัตราสำหรับที่พัก อาหารเช้า และอาหารเย็น เว้นแต่คุณจะต้องมีความต้องการเฉพาะ เราขอแนะนำให้คุณใช้ Micromanage ตลอดเวลา ขั้นสูงจะทำงานในลักษณะเดียวกัน แต่คุณต้องระมัดระวังเพื่อให้แน่ใจว่าวันที่เริ่มต้นและสิ้นสุดของภาษีที่แตกต่างกันจะติดต่อกัน");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'ฉันจะสร้างตัวเลือกเพิ่มเติมได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "คุณสามารถเพิ่มรายการพิเศษลงในการจองและกำหนดค่าในการตั้งค่า > พิเศษ สิ่งเหล่านี้สามารถเลือกได้หรือ 'บังคับ' กล่าวคือ แขกไม่สามารถยกเลิกการเลือกรายการดังกล่าวในการจองได้ คุณสามารถเสนอวิธีการต่างๆ ได้ ของการเรียกเก็บค่าบริการเสริมและไม่ว่าจะแสดงในหน้ารายละเอียดที่พักของคุณหรือไม่ เนื่องจาก รายการพิเศษสามารถแสดงได้เฉพาะในกรณีที่การจองอยู่ภายในวันที่กำหนด (เช่น ผลไม้ตามฤดูกาล ) คุณควรตรวจสอบให้แน่ใจว่าคุณ ได้ตั้งค่าวันที่ที่ถูกต้องจากและถึงวันที่ เมื่อคุณสร้าง extas ที่เป็นตัวเลือกแล้ว คุณสามารถอัปโหลดรูปภาพสำหรับพวกเขาผ่าน Media Manager");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'ฉันจะชำระเงินออนไลน์ได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "ในการชำระเงินออนไลน์ คุณต้องมีบัญชีกับผู้ให้บริการชำระเงินออนไลน์ที่เรียกว่าเกตเวย์ หากต้องการดูเกตเวย์ที่มีอยู่ ให้ไปที่แท็บ การกำหนดค่าคุณสมบัติ > เกตเวย์ คลิกที่ชื่อเกตเวย์ที่จะรับ ไปที่หน้าการกำหนดค่า");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'ฉันสามารถให้ส่วนลดได้หรือไม่');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "สามารถให้ส่วนลดได้ ซึ่งสามารถทำได้หลายวิธี หากคุณทำการจองในนามของลูกค้า คุณสามารถตั้งค่าเงินฝากและยอดรวมการจองของคุณเองได้ในแบบฟอร์มการจอง โดยใช้ฟิลด์ Override Accommodation Total และ Override Deposit (แขกไม่สามารถใช้คุณสมบัตินี้ได้ ) อีกวิธีหนึ่งในการมอบส่วนลดให้แขกคือการสร้างคูปองส่วนลดซึ่งสามารถกำหนดค่าเพื่อให้สามารถใช้ได้ระหว่างวันที่บางวันเท่านั้น ( ใช้ได้ from/to ) หรือใช้เฉพาะเมื่อการจองอยู่ระหว่างวันที่กำหนด ( Booking valid from/to ) คูปองส่วนลดนี้สามารถกำหนดให้กับแขกได้เพียงคนเดียวหรือหากต้องการคุณสามารถพิมพ์คูปองได้ ผลงานพิมพ์มีรหัส QR ซึ่งแขกสามารถสแกนลงในโทรศัพท์ของตนเพื่อนำไปที่แบบฟอร์มการจองของคุณด้วยรหัสส่วนลดที่ใช้อยู่แล้ว ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'การจอง');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'เมื่อฉันคลิกการจองใหม่ ฉันจะถูกนำไปที่แบบฟอร์มติดต่อ เพราะอะไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'ก่อนที่คุณจะสามารถทำการจองทางออนไลน์ได้ คุณต้องกำหนดราคา (ภาษี) บางประเภทสำหรับห้องแต่ละประเภทที่คุณมีในทรัพย์สินในโลกความเป็นจริงของคุณเสียก่อน เมื่อคุณสร้างภาษีแล้ว คุณจะสามารถดำเนินการจองได้ .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'การจองสีดำคืออะไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "การจองสีดำคือการจองที่สร้างขึ้นเพื่อนำห้องหรือห้องออกจากบริการ ซึ่งไม่เกี่ยวข้องกับผู้เข้าพักและมีประโยชน์ เช่น หากจำเป็นต้องตกแต่งห้องใหม่") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'รูปภาพ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'ฉันจะอัปโหลดรูปภาพได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "ในการอัปโหลดภาพ คุณต้องไปที่หน้า การตั้งค่า > Media Center ในหน้านี้ คุณจะเห็นบานหน้าต่างหลายบาน ที่ด้านบน คุณอาจเห็นบันทึกย่อ และด้านล่าง คุณจะเห็นรายการแบบเลื่อนลง ดรอปดาวน์นี้ให้คุณเลือกทรัพยากรที่คุณกำลังอัปโหลดรูปภาพ <br/> ทางด้านขวาคือคอลัมน์ที่มี เพิ่มรูปภาพ ล้างรายการ และอัปโหลดทั้งหมด คลิก เพิ่มรูปภาพ และเลือกรูปภาพบางส่วนจากเดสก์ท็อปหรืออุปกรณ์มือถือของคุณ เมื่อ คุณทำเสร็จแล้ว คอลัมน์จะเปลี่ยนเป็นรายการภาพขนาดย่อ จากที่นี่ คุณสามารถอัปโหลดรูปภาพสำหรับทรัพยากรของคุณได้หนึ่งภาพขึ้นไป");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "รูปภาพ 'หลัก' คืออะไร");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'รูปภาพหลักคือรูปภาพที่ปรากฏในผลการค้นหาและในส่วนหัวของพร็อพเพอร์ตี้ของคุณ (บริเวณด้านบนสุดของหน้าที่แสดงบางอย่างเกี่ยวกับสถานที่ให้บริการของคุณ) คุณควรเลือกรูปภาพที่แสดงคุณสมบัติของคุณใน แสงที่ดีที่สุด ในการอัปโหลดภาพหลัก ตรวจสอบให้แน่ใจว่าได้เลือก Property Main Image ในรายการแบบหล่นลงที่ด้านบนซ้าย จากนั้นอัปโหลดรูปภาพอย่างน้อยหนึ่งภาพ หากคุณอัปโหลดมากกว่าหนึ่งภาพ รูปภาพทั้งหมดจะถูกใช้ในการค้นหา หน้าผลลัพธ์ที่แสดงเป็นสไลด์โชว์ขนาดเล็ก');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'ไอคอนคุณลักษณะห้องคืออะไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "คุณสมบัติของห้องสามารถสร้างได้โดยผู้ใช้โหมด Micromanage หรือโหมดแก้ไขภาษีขั้นสูง สิ่งเหล่านี้สามารถเชื่อมโยงกับห้องตั้งแต่หนึ่งห้องขึ้นไป และแสดงในแบบฟอร์มการจอง เมื่อคุณสร้างคุณลักษณะห้องพักแล้ว คุณจะสามารถ อัปโหลดรูปภาพสำหรับสถานที่นั้นโดยเลือกไอคอนคุณสมบัติของห้องในรายการดรอปดาวน์ใน Media Center ก่อน แล้วเลือกชื่อคุณสมบัติของห้องจากเมนูดร็อปดาวน์ที่จะปรากฏด้านล่าง");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'ฉันจะอัปโหลดรูปภาพของห้องได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'ห้องสามารถสร้างได้โดยผู้ใช้โหมด Micromanage หรือโหมดแก้ไขภาษีขั้นสูง เมื่อสร้างห้องแล้วหนึ่งห้องขึ้นไป คุณสามารถอัปโหลดภาพหลายภาพสำหรับแต่ละห้องผ่าน Media Center (เลือกชื่อ/หมายเลขห้องหลังจาก เลือกรูปภาพห้องในรายการแบบเลื่อนลง) รูปภาพเหล่านี้สามารถเห็นได้ในสไลด์โชว์โดยดูหน้าตัวอย่างและเลือกแท็บห้องของเราแล้วคลิกลิงก์ห้องว่าง');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'ฉันจะอัปโหลดภาพสไลด์โชว์ได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'แสดงภาพสไลด์ในหน้ารายละเอียดที่พัก ( Preview ) ข้างปุ่ม Book Now');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'ฉันจะอัปโหลดรูปภาพพิเศษได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "คุณต้องสร้างรายการพิเศษที่คล้ายกับห้องและคุณลักษณะของห้องก่อน เมื่อเสร็จแล้ว คุณสามารถเลือกรายการพิเศษในรายการแบบหล่นลงด้านบนได้ เมื่อคุณทำเสร็จแล้ว คุณต้องเลือกชื่อ พิเศษจากรายการดรอปดาวน์ด้านล่าง เมื่อเลือกชื่อแล้ว คุณสามารถอัปโหลดรูปภาพสำหรับรายการพิเศษนั้นได้หนึ่งภาพขึ้นไป");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'สิ่งที่เกี่ยวข้องกับแขก');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'ฉันจะ blahblahblah ได้อย่างไร');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'คุณ blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'ฉันจะบันทึกคำอธิบายในหลายภาษาได้อย่างไร');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "หากต้องการบันทึกคำอธิบายในหลายภาษา ขั้นแรกให้ไปที่หน้า การตั้งค่า > รายละเอียดคุณสมบัติ บันทึกคำอธิบายสำหรับทรัพย์สินของคุณที่นั่น จากนั้น เปลี่ยนภาษาที่คุณกำลังดูไซต์ ไปที่การตั้งค่า หน้ารายละเอียดทรัพย์สินอีกครั้งและบันทึกรายละเอียดอีกครั้ง ดังนั้น หากเว็บไซต์สามารถแสดงทั้งภาษาอังกฤษและสเปน (หรือภาษาอื่น ๆ ) คุณจะต้องเลือกภาษาอังกฤษป้อนคำอธิบายเป็นภาษาอังกฤษแล้วคลิกบันทึก ถัดไป เปลี่ยนปัจจุบันของคุณ ภาษาเป็นภาษาสเปน จากนั้นบันทึกคำอธิบายภาษาสเปนใหม่ ซึ่งใช้ได้กับอินพุตทั้งหมดในหน้านั้น");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'ฉันสามารถแก้ไขคุณสมบัติอื่นๆ บนไซต์นี้ได้หรือไม่');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'ไม่ได้ คุณไม่สามารถทำได้ คุณสามารถจัดการคุณสมบัติที่คุณสร้างหรือได้รับมอบหมายให้เป็นผู้จัดการทรัพย์สินเท่านั้น');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'ฉันสามารถแก้ไขคุณสมบัติอื่นๆ บนไซต์นี้ได้หรือไม่');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "ใช่ คุณเป็น Super Property Manager และสามารถแก้ไขคุณสมบัติที่แสดงในหน้าคุณสมบัติของรายการได้");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'ประเภทของแขกคืออะไร/ฉันจะเปลี่ยนแปลงต่อคนต่อคืนได้อย่างไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "ในแท็บ การตั้งค่า > การกำหนดค่าคุณสมบัติ > ภาษีและสกุลเงิน คุณสามารถตัดสินใจได้ว่าต้องการเรียกเก็บเงินต่อคนต่อคืนหรือไม่ หากคุณคิดค่าบริการต่อคนต่อคืน คุณจะต้องสร้างประเภทผู้เข้าพักอย่างน้อยหนึ่งประเภท คุณสามารถสร้างประเภทแขกง่ายๆ โดยเพียงแค่ให้คำอธิบาย (เช่น บุคคล) หรือคุณสามารถสร้างประเภทแขกได้หลายประเภท เช่น 'ผู้ใหญ่' และ 'เด็กอายุต่ำกว่า 10 ขวบ' สำหรับเด็ก หากคุณต้องการเสนอ ส่วนลด 50% จากนั้นคุณจะตั้งค่า 'เป็นเปอร์เซ็นต์' เป็น ใช่ และค่าความแปรปรวนเป็น 50 ห้องพักมีอัตราฐาน การตั้งค่านี้ช่วยให้คุณสามารถปรับราคาของห้องตามประเภทของผู้เข้าพักได้");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'คุณสมบัติของห้องคืออะไร');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "คุณสมบัติของห้องคือสิ่งที่ทำให้ห้องโดดเด่น อาจเป็นอะไรที่ธรรมดาๆ เช่น อุปกรณ์ชงชา/กาแฟ หรืออาจเป็นสิ่งที่ทำให้ห้องอยู่เหนือคนอื่นๆ ได้ เช่น 'วิวทิวทัศน์ เบย์' เมื่อคุณสร้างฟีเจอร์ของห้องแล้ว คุณสามารถอัปโหลดรูปภาพสำหรับฟีเจอร์นั้นใน Media Center ได้ คุณสามารถดูฟีเจอร์ของห้องเหล่านี้ได้ในหน้าห้องว่าง และหากคุณกำหนดค่าที่พักของคุณให้แสดงรูปแบบรายการห้องคลาสสิก (ซึ่งแขกสามารถเลือกห้องที่ต้องการจองได้อย่างแม่นยำ) จากนั้นพวกเขาก็สามารถใช้คุณสมบัติของห้องเพื่อกรอง oom ที่แสดงในแบบฟอร์มการจองได้");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'การชำระเงิน');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "คุณไม่สามารถดูช่องทางการชำระเงินได้หลังจากทำการจอง");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "หากคุณเข้าสู่ระบบในฐานะผู้จัดการทรัพย์สิน คุณจะไม่เห็นเกตเวย์การชำระเงิน เนื่องจากคุณไม่ชำระเงินเอง เฉพาะผู้ใช้ที่ไม่ใช่ผู้จัดการเท่านั้นที่จะเห็นเกตเวย์เมื่อทำการจอง");

