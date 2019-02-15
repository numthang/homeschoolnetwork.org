<?php 
class Cms5c62a61d4bd84494318346_26dc35e2a86a757888291c0d00fe1572Class extends Cms\Classes\PageCode
{
public function onStart() {
	/*//ตอนนี้ไม่ต้องใช้ด้านล่างเป็นค่า default แล้ว เพราะว่าได้บันทึกเป็น template เรียบร้อยแล้วใช้อีกทีกรณีที่ template ถูกลบหายหมดให้กลับมาค่าตั้งต้นใหม่
	$this->page['default_3'] = '
		<p><strong>เหตุผลในการจัดการศึกษาของครอบครัว</strong></p>
<p><span style="color: #333399;">เนื่องจากครอบครัวต้องการดูและส่งเสริมลูกอย่างใกล้ชิดเพื่อให้ลูกได้เติบโตอย่างเต็มศักยภาพ ทั้งในด้านร่างกาย ความคิดและจิตใจ ประกอบกับเทคโนโลยีในปัจจุบันที่ก้าวหน้าไปอย่างรวดเร็ว ทำให้การเข้าถึงความรู้เป็นไปได้โดยง่าย ผ่านช่องทางต่าง ๆ เช่น สื่อออนไลน์ ชั้นเรียน การฝึกอบรมต่าง ๆ เด็กสามารถเรียนรู้สิ่งต่าง ๆ ได้ด้วยตัวเองในหลากหลายเรื่อง ทางครอบครัวจึงให้ความสำคัญกับแรงบันดาลใจหรือความสุขในการเรียนรู้ของเด็กแต่ละคน ตลอดจนต้องการจัดกระบวนการเรียนรู้ให้เหมาะสมกับ บุคลิก ลักษณะนิสัยของลูก จึงตัดสินใจจัดการศึกษาโดยครอบครัว</span></p>';
	$this->page['default_4'] = '<p>ครอบครัวใช้แนวทางการจัดการศึกษาตามพระราชบัญญัติการศึกษาแห่งชาติ หมวด 4 มาตรา 23 มีหลักการและแนวทางในการพัฒนาคุณภาพของลูก โดยยึดตามจุดหมาย สมรรถนะ และ คุณลักษณะอันพึงประสงค์ สอดคล้องกับหลักสูตรแกนกลางขั้นพื้นฐาน พ.ศ. 2551 โดยมีรายละเอียดดังนี้ <br /><br />๑. มีคุณธรรม จริยธรรม และค่านิยมที่พึงประสงค์ เห็นคุณค่าของตนเอง มีวินัยและปฏิบัติตนตามหลักธรรมของพระพุทธศาสนา หรือศาสนาที่ตนนับถือ ยึดหลักปรัชญาของเศรษฐกิจพอเพียง<br />๒. มีความรู้ ความสามารถในการสื่อสาร การคิด การแก้ปัญหา การใช้เทคโนโลยี และมีทักษะ ชีวิต<br />๓. มีสุขภาพกายและสุขภาพจิตที่ดี มีสุขนิสัย และรักการออกกําลังกาย<br />๔. มีความรักชาติ มีจิตสํานึกในความเป็นพลเมืองไทยและพลโลก ยึดมั่นในวิถีชีวิตและ<br />การปกครองตามระบอบประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข<br />๕. มีจิตสํานึกในการอนุรักษ์วัฒนธรรมและภูมิปัญญาไทย การอนุรักษ์และพัฒนาสิ่งแวดล้อม<br />มีจิตสาธารณะที่มุ่งทําประโยชน์และสร้างสิ่งที่ดีงามในสังคม และอยู่ร่วมกันในสังคมอย่างมีความสุข</p>
<p><span style="background-color: #ff9900; color: #000000;">เราสามารถเพิ่มเติมจุดมุ่งหมายได้ตามความประสงค์ของครอบครัวหรือถ้าไม่ต้องการเพิ่มเติมลบข้อความนี้ทิ้ง</span></p>';
	$this->page['default_5'] = '<p>1. จัดการศึกษาแบบครอบครัวเดียว เนื่องจากไม่สามารถร่วมกิจกรรมกับกลุ่ม บ้านเรียน หรือครอบครัวอื่น และมีความสนใจเฉพาะด้านแตกต่างกัน<br />2. จัดการศึกษาแบบมีข้อตกลงร่วมกับโรงเรียนหรือหน่วยงานอื่น โดยมีการเข้าไปใช้ทรัพยากรในโรงเรียนหรือเข้าไปทํากิจกรรมร่วมกัน เนื่องจากต้องการให้บุตรได้มีความรู้ประสบการณ์ที่สามารถเชื่อมโยงเข้าสู่ระบบโรงเรียน<br />3. จัดการศึกษาแบบกลุ่มครอบครัวที่มีแนวคิดคล้ายๆ กัน เป็นการจําลองสังคมเล็กๆ เชื่อว่าการ เชื่อมโยงกับกลุ่มเป็นการช่วยเสริมพัฒนาการของบุตรได้<br />4. อื่นๆ (ระบุ).......................</p>';

	$this->page['default_6'] = '<p><span style="background-color: #ff9900;">ในส่วนของข้อ 6 และ 7 เกี่ยวกับโครงสร้างเวลาเรียนและการจัดกลุ่มสาระการเรียนรู้ ผู้จัดการศึกษาสามารถตั้งกลุ่มประสบการณ์ขึ้นมาเอง ตามความต้องการของครอบครัวหรือเลือกใช้ 8 กลุ่มสาระที่มีในหลักสูตรแกนกลางได้คือ </span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้ภาษาไทย</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้คณิตศาสตร์</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้วิทยาศาสตร์</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้ศิลปะ</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี</span><br /><span style="background-color: #ff9900;">กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</span></p>
<p><span style="background-color: #ff9900;">โดยแผนฉบับสากลนี้ได้จัดทำ สร้างกลุ่มประสบการณ์สำเร็จรูปให้แล้วจำนวน 10 กลุ่มพร้อมคำบรรยาย ซึ่งท่านสามารถแก้ไขชื่อและคำบรรยายได้ตามต้องการ และหากไม่มีกลุ่มประสบการณ์ที่ตรงกับความต้องการของครอบครัว ท่านสามาถสร้างขึ้นใหม่แล้วเขียนคำบรรยายเพิ่มเติมได้ </span><br /><span style="background-color: #ff9900;">กลุ่มภาษา เรียนเกี่ยวกับภาษาต่าง ๆ เช่น ภาษาไทย ภาษาอังกฤษ และภาษาอื่น ๆ ตามความสนใจของเด็ก</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์ภาษาต่างประเทศ </span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์ด้านสังคม วัฒนธรรมและสิ่งแวดล้อม</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์ศิลปะ </span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์ดนตรี</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์สุขศึกษาและพลศึกษา</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์วิทยาศาสตร์และเทคโนโลยี</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์คณิตศาตร์และการใช้เหตุผล</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์เกษตรและการพึ่งตนเอง</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์ศรษฐศาสตร์และการเงิน </span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์อาหารและโภชนาการ</span><br /><span style="background-color: #ff9900;">กลุ่มประสบการณ์อื่น ๆ (ครอบครัวสร้างขึ้นตามความต้องการ)</span><br /><span style="background-color: #ff9900;">ข้อแตกต่างระหว่างกลุ่มสาระการเรียนรู้กับกลุ่มประสบการณ์ คือ กลุ่มสาระการเรียนรู้จะมีลักษณะที่มีการเรียนการสอน การเรียนจากหนังสือหรือสื่อต่าง ๆ แต่กลุ่มประสบการณ์เป็นการเรียนรู้จากประสบการณ์ตรง ผ่านกิจกรรมต่าง ๆ ที่เด็กเข้าร่วม หรืออาจเรียนรู้กิจกรรมประจำวัน ตามวิถีชีวิต ซึ่งอาจจะมีลักษณะบูรณาการวิชาต่าง ๆ เข้าด้วยกัน</span></p>
<p><span style="color: #333399;">ครอบครัวจัดการเรียนรู้เป็นรายปี โดยมีโครงสร้างดังนี้ </span></p>
<table style="border-collapse: collapse; width: 100%; height: 516px;" border="1">
<tbody>
<tr style="height: 36px;">
<td style="width: 24.4175%; height: 36px;"><span style="color: #333399;">กลุ่มประสบการณ์ /กลุ่มสาระการเรียนรู้ (ตามตารางในข้อ 7)</span></td>
<td style="width: 75.5825%; text-align: center; height: 36px;" colspan="3"><span style="color: #000000;">เวลาเรียน</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;">&nbsp;</td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">ป.1 (ชั่วโมง/ปี)</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">ป.2 (ชั่วโมง/ปี)</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">ป.3 (ชั่วโมง/ปี)</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้ภาษาไทย</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้คณิตศาสตร์</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้วิทยาศาสตร์</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้สังคมศึกษา ศาสนา และวัฒนธรรม</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้สุขศึกษาและพลศึกษา</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้ศิลปะ</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 36px;">
<td style="width: 24.4175%; height: 36px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้การงานอาชีพและเทคโนโลยี</span></td>
<td style="width: 25.045%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้ภาษาต่างประเทศ</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์ด้านภาษา </span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 36px;">
<td style="width: 24.4175%; height: 36px;"><span style="color: #333399;">กลุ่มประสบการณ์ด้านสังคม วัฒนธรรมและสิ่งแวดล้อม</span></td>
<td style="width: 25.045%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 36px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์ศิลปะ</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์ดนตรี</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์สุขศึกษาและพลศึกษา</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์วิทยาศาสตร์และเทคโนโลยี</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์คณิตศาตร์และการใช้เหตุผล</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์เกษตรและการพึ่งตนเอง</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์ศรษฐศาสตร์และการเงิน</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์อาหารและโภชนาการ<br /></span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;"><span style="color: #333399;">กลุ่มประสบการณ์อื่น ๆ (ครอบครัวสร้างขึ้นตามความต้องการ)</span></td>
<td style="width: 25.045%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2687%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
<td style="width: 25.2688%; text-align: center; height: 18px;"><span style="color: #333399;">200</span></td>
</tr>
<tr style="height: 18px;">
<td style="width: 24.4175%; height: 18px;">กิจกรรมพัฒนาผู้เรียน</td>
<td style="width: 25.045%; text-align: center; height: 18px;">120</td>
<td style="width: 25.2687%; text-align: center; height: 18px;">120</td>
<td style="width: 25.2688%; text-align: center; height: 18px;">120</td>
</tr>
<tr style="height: 36px;">
<td style="width: 24.4175%; height: 36px;">รวมเวลาเรียน</td>
<td style="width: 25.045%; text-align: center; height: 36px;"><span style="color: #333399;">1000</span> <span style="color: #000000; background-color: #ff9900;">(ป.1-6 รวมไม่เกิน 1000 / ม.1-3 รวมไม่เกิน 1200 / ม.4-6 รวมไม่น้อยว่า 1200)</span></td>
<td style="width: 25.2687%; text-align: center; height: 36px;"><span style="color: #333399;">1000</span> <span style="color: #000000; background-color: #ff9900;">(ป.1-6 รวมไม่เกิน 1000 / ม.1-3 รวมไม่เกิน 1200 / ม.4-6 รวมไม่น้อยว่า 1200)</span></td>
<td style="width: 25.2688%; text-align: center; height: 36px;"><span style="color: #333399;">1000</span> <span style="color: #000000; background-color: #ff9900;">(ป.1-6 รวมไม่เกิน 1000 / ม.1-3 รวมไม่เกิน 1200 / ม.4-6 รวมไม่น้อยว่า 1200)</span></td>
</tr>
<tr style="height: 30px;">
<td style="width: 24.4175%; height: 30px;">&nbsp;</td>
<td style="width: 75.5825%; height: 30px; text-align: center;" colspan="3"><span style="color: #000000; background-color: #ff9900;">นำเวลาเรียนหารใส่ในกลุ่มประสบการณ์ต่าง ๆ ดังตัวอย่าง หรือถ้าแต่ละกลุ่มประสบการ/กลุ่มสาระวิชา เราต้องการเน้นแตกต่างกัน ก็ให้มากน้อยตามแต่ลูกเราจะใช้เวลามากน้อยในกลุ่มไหน (เสร็จแล้วแถวนี้ลบทิ้งทั้งหมด)</span></td>
</tr>
</tbody>
</table>';
	$this->page['default_7'] = '<p><span style="color: #333399;">ในการจัดสาระการเรียนรู้นั้น ทางครอบครัวให้ความสำคัญกับการพัฒนาศักยภาพเด็กเป็นรายบุคคล และกระบวนทัศน์แบบ &ldquo;องค์รวม&rdquo; คือ ศาสตร์ต่าง ๆ มีความเชื่อมโยงเกี่ยวข้องกัน การจัดกระบวนการเรียนรู้จึงเริ่มต้นจาก ความสนใจของเด็ก ทรัพยากร บุคลากรและสิ่งแวดล้อมที่อยู่รอบตัว </span><br /><span style="color: #333399;">โดยการจัดกลุ่มสาระการเรียนรู้ของศูนย์การเรียนเด็กเรียนรู้เองแบ่งเป็น ......... กลุ่มดังนี้</span> <span style="background-color: #ff9900;">(เลือกเฉพาะกลุ่มที่เหมาะสมกับครอบครัวตนเอง)</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านภาษา </span><br /><span style="color: #333399;">กลุ่มประสบการณ์ด้านสังคม วัฒนธรรมและสิ่งแวดล้อม</span><br /><span style="color: #333399;">กลุ่มประสบการณ์ศิลปะ</span><br /><span style="color: #333399;">กลุ่มประสบการณ์ดนตรี</span><br /><span style="color: #333399;">กลุ่มประสบการณ์สุขศึกษาและพลศึกษา</span><br /><span style="color: #333399;">กลุ่มประสบการณ์วิทยาศาสตร์และเทคโนโลยี</span><br /><span style="color: #333399;">กลุ่มประสบการณ์คณิตศาตร์และการใช้เหตุผล</span><br /><span style="color: #333399;">กลุ่มประสบการณ์เกษตรและการพึ่งตนเอง</span><br /><span style="color: #333399;">กลุ่มประสบการณ์เศรษฐศาสตร์และการเงิน</span><br /><span style="color: #333399;">กลุ่มประสบการณ์อาหารและโภชนาการ</span><br /><span style="color: #333399;">กลุ่มประสบการณ์อื่น ๆ (ครอบครัวสร้างขึ้นตามความต้องการ)</span></p>
<p><span style="color: #333399;">โดยแต่ละกลุ่มสาระการเรียนรู้มีรายละเอียดดังนี้</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านภาษา เรียนเกี่ยวกับภาษาต่าง ๆ เช่น ภาษาไทย ภาษาอังกฤษ และภาษาอื่น ๆเรียนรู้ในการใช้ภาษาต่าง ๆ เพื่อการสื่อสาร แสวงหาความรู้ ประกอบอาชีพ และศึกษาต่อ ในระดับที่สูงขึ้น รวมทั้งมีความรู้ความเข้าใจในเรื่องราวและวัฒนธรรมอันหลากหลายของประชาคมโลก โดย ประกอบด้วย สาระสำคัญ ดังนี้ </span><br /><span style="color: #333399;">1) ภาษาเพื่อการสื่อสาร การใช้ภาษาในการฟัง-พูด-อ่าน-เขียน แลกเปลี่ยน ข้อมูล ข่าวสาร แสดงความรู้สึกและความคิดเห็น ตีความ นำเสนอข้อมูล ความคิดรวบยอดและความคิดเห็นในเรื่องต่าง ๆ และสร้างความสัมพันธ์ระหวางบุคคลอย่างเหมาะสม </span><br /><span style="color: #333399;">2) ภาษาและวัฒนธรรม การใช้ภาษาต่างประเทศตามวัฒนธรรมของเจ้าของภาษา ความสัมพันธ์ ความเหมือนและความแตกต่างระหว่างภาษากับวัฒนธรรมของเจ้าของภาษาต่าง ๆ </span><br /><span style="color: #333399;">3) ภาษากับความสัมพันธ์กับกลุ่มสาระการเรียนรู้อื่น การใช้ภาษาต่างประเทศในการ เชื่อมโยงความรู้กับกลุ่มสาระการเรียนรู้อื่น เป็นพื้นฐานในการพัฒนา แสวงหาความรู้ และ เปิดโลกทัศน์ของตน </span><br /><span style="color: #333399;">4) ภาษากับความสัมพันธ์กับชุมชนและโลก การใช้ภาษาต่าง ๆ ในสถานการณ์ที่แตกต่างกัน ทั้งในห้องเรียนและนอกห้องเรียน ชุมชน และสังคมโลก เป็นเครื่องมือพื้นฐานในการศึกษาต่อ ประกอบอาชีพ และแลกเปลี่ยนเรียนรู้และเชื่อมโยงกับสังคมโลก</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านสังคม วัฒนธรรมและสิ่งแวดล้อม</span><br /><span style="color: #333399;">เรียนรู้ความสัมพันธ์ที่เชื่อมโยงกันระหว่าง บุคคลต่าง ๆ ที่เรียงร้อยเป็นสังคม มีวัฒนธรรม ความคิดความเชื่อที่แตกต่างกันไปตามบริบท ของประวัติศาสตร์ สิ่งแวดล้อม เชื่อมสัมพันธกัน เพื่อช่วยให้ผู้เรียนเข้าใจและสามารถปรับตนเองกับบริบทสังคมที่แตกต่างกันได้ เป็นพลเมืองดี มีความรับผิดชอบ มีความรู้ ทักษะ คุณธรรม</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านศิลปะ</span><br /><span style="color: #333399;">เรียนรู้เพื่อสร้างเสริมจินตนาการ ทักษะในกระบวนการคิด วางแผน การทำงาน การพัฒนาทักษะต่าง ๆ ทั้งในด้านการใช้ร่างกายและการใช้อุปกรณ์เครื่องมือ การเลือกสี วัสดุต่าง ๆ เพื่อการถ่ายทอด ความคิด อารมณ์ ความรู้สึก ผ่านงานศิลปะในรูปแบบต่าง ๆ</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านกลุ่มดนตรี</span><br /><span style="color: #333399;">เรียนรู้ดนตรีในฐานะภาษาเพื่อสื่อสาร ถ่ายทอดอารมณ์ ความรู้สึก ความคิดผ่านเสียง ผ่านร่างกายหรืออุปกรณ์ต่าง ๆ ฝึกฝนการเชื่อมโยงสมองและร่างกาย สร้างเสริมจินตนาการ และสุทรียภาพ</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านสุขศึกษาและพลศึกษา</span><br /><span style="color: #333399;">เรียนรู้ในการดูแลสุขภาพตนเอง ความเข้าใจในร่างกาย ความเจ็บป่วย เพื่อสามารถดูแลร่างกายและจิตใจให้มีสุขภาพที่ดี มีกิจกรรมที่ส่งเสริมความแข็งแรงของร่างกาย ผ่านการออกกําลังกาย การเล่นเกมและกีฬา เป็นเครื่องมือในการพัฒนาโดยรวมทั้งด้านรางกาย จิตใจ อารมณ์ สังคม สติปัญญา เรียนรู้การทำงานเป็นทีม การอยู่ร่วมกันกับผู้อื่น เรียนรู้ เข้าใจอารมณ์ และจัดการอารมณ์ได้อย่างเหมาะสมกับสถานการณ์</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านวิทยาศาสตร์และเทคโนโลยี</span><br /><span style="color: #333399;">เรียนรู้และทำความเข้าใจโลก ผ่านกระบวนสร้างความรู้ ตั้งแต่การหาข้อมูลต่าง ๆ เรียนรู้ผ่านองค์ความรู้เดิม การสังเกต จัดบันทึก ทำความเข้าใจ ปรากฎการณ์ เหตุกาณณ์ต่าง ๆ การนำข้อมูลความรู้มาวิเคราะห์ประมวลผล ทดสอบ ตรวจทาน และต่อยอดความคิดใหม่ ๆ ทั้งนี้กระบวนการเรียนรู้วิทยาศาสตร์เป็นการเรียนรู้โลก จึงสามารถเรียนรู้ได้ในหลากหลาย หัวข้อ หรือสาระวิชา เช่น ชีววิทยา เคมี ฟิสิกส์ นิเวศวิทยา โลก ดาราศาสตร์ อวกาศ และเทคโนโลยีต่าง ๆ เป็นต้น</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านคณิตศาตร์ และการใช้เหตุผล</span><br /><span style="color: #333399;">เรียนรู้คณิตศาสตร์ในแง่มุมต่าง ๆ </span><br /><span style="color: #333399;">1) ในฐานะเครื่องมือในชีวิตประจำวัน การแก้ไขปัญหาต่าง ๆ เช่น การคิดคำนวณ การช่างตวงวัด การหาคำตอบต่าง ๆ </span><br /><span style="color: #333399;">2) ในฐานะระบบภาษาที่เพิ่มความแม่นยำและชัดเจนให้กับภาษาธรรมชาติ ผ่านทางศัพท์และไวยากรณ์บางอย่าง สำหรับการอธิบายและศึกษาความสัมพันธ์ทั้งทางกายภาพและนามธรรม </span><br /><span style="color: #333399;">ทั้งนี้ซึ่งเป็นไปตามความสนใจของผู้เรียน</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านเกษตรและการพึ่งตนเอง</span><br /><span style="color: #333399;">เรียนรู้การจัดการกับทรัพยากรธรรมชาติ แรงงาน และทุน โดยอาศัยความรู้และประสบการณ์ เพื่อให้ได้มาซึ่งผลผลิตจากทั้งพืชและสัตว์ เสริมสร้างทักษะ การวางแผน การคำนวณทรัพยากร เรียนรู้ทำความเข้าใจสภาพภูมิอากาศและฤดูกาล ฝึกฝนทักษะการปฎิบัติงานด้านกาารเกษตร</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านเศรษฐศาสตร์และการเงิน </span><br /><span style="color: #333399;">เรียนรู้การจัดการทรัพยากรอันมีจำกัด พิจารณาถึงรูปแบบที่พฤติกรรมมนุษย์ได้เลือกในการบริหารทรัพยากรเหล่านี้ ฝึกวิเคราะห์และอธิบายวิถีที่บุคคลหรือองค์กรทำการจัดสรรทรัพยากรอันจำกัดเพื่อตอบสนองความต้องการมากมายและไม่จำกัด เรียนรู้เกี่ยวกับการเงิน การบริหารจัดการเงิน และทรัพยากรของตัวเองอย่างมีประสิทธิภาพ</span></p>
<p><span style="color: #333399;">กลุ่มประสบการณ์ด้านอาหารและโภชนาการ</span><br /><span style="color: #333399;">เรียนรู้เกี่ยวกับการทักษะทำอาหารและขนมต่าง ๆ การเลือกและความเป็นมาของวัตถุดิบ ที่สัมพันธ์กับธรรมชาติและสิ่งแวดล้อมในแต่ละท้องที่ เชื่อมโยงถึงวัฒนธรรมและระบบนิเวศที่แตกต่างกันในพื้นที่ต่าง ๆ รวมถึงการช่าง ตวงวัด คุณสมบัติที่แตกต่างกันของสสาร อุณหภูมิ แรงดัน เรียนรู้เรื่องสารอาหาร ที่ส่งผลต่อสุขภาพและการเกิดโรค ตลอดจนกระบวนการของร่างกายในการรับประทาน ,ย่อย ,ดูดซึม ,ลำเลียง และ ขับถ่าย สารอาหาร</span><br /><br /><span style="color: #333399;">กลุ่มประสบการณ์อื่น ๆ </span><br /><span style="color: #333399;">ครอบครัวสามารถสร้างกลุ่มประสบการณ์ต่าง ๆ ได้ตามความต้องการ ตามที่สอดคล้องกับวิถีชีวิต</span></p>
<p><strong>ตารางสรุปกระบวนการเรียนรู้</strong></p>
<table style="border-collapse: collapse; width: 100%; height: 194px;" border="1">
<tbody>
<tr style="height: 10px;">
<td style="width: 33.3333%; height: 10px;"><span style="color: #333399;">กลุ่มสาระการเรียนรู้/กลุ่มประสบการณ์<br /></span><span style="background-color: #ff9900; color: #000000;">(เลือกอย่างใดอย่างหนึ่ง หรือมีทั้ง 2 เช่น กลุ่มสาระคณิตศาสตร์ กลุ่มประสบการณ์ท่องเที่ยวธรรมชาติ)</span></td>
<td style="width: 33.3333%; height: 10px;"><span style="color: #333399;">เป้าหมายคุณภาพผู้เรียน ที่มุ่งหวังในชั้นปี/ช่วงชั้น/ระดับการศึกษา</span></td>
<td style="width: 33.3333%; height: 10px;"><span style="color: #333399;">กิจกรรม</span><br /><span style="color: #000000; background-color: #ff9900;">(สามารถนำมาจากตารางชีวิต/ กิจกรรมที่ทำในแต่ละวันมาปรับใส่ให้เหมาะสม/ ในทางกลับกันถ้าต้องการบรรลุเป้าหมาย หรือยากให้ลูกพัฒนาด้านใดก็กำหนดกิจกรรมให้นำไปสู่การพัฒนาด้านนั้น)</span></td>
</tr>
<tr style="height: 46px;">
<td style="width: 33.3333%; height: 46px;">
<p>&nbsp;</p>
</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
</tr>
<tr style="height: 46px;">
<td style="width: 33.3333%; height: 46px;">
<p>&nbsp;</p>
</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
</tr>
<tr style="height: 46px;">
<td style="width: 33.3333%; height: 46px;">
<p>&nbsp;</p>
</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
</tr>
<tr style="height: 46px;">
<td style="width: 33.3333%; height: 46px;">
<p>&nbsp;</p>
</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
<td style="width: 33.3333%; height: 46px;">&nbsp;</td>
</tr>
</tbody>
</table>
<p>หมายเหตุ : เป้าหมายคุณภาพผู้เรียนที่มุ่งหวังเป็นไปตามความประสงค์ของครอบครัวผู้จัดการศึกษา</p>';
	$this->page['default_8'] = '<p><span style="color: #333399;">ได้แก่ การเข้าร่วมกิจกรรมที่จัดขึ้นโดยองค์กรต่าง ๆ กิจกรรมจิตอาสา กิจกรรมศึกษาธรรมชาติ การจัดอบรม การจัดการเรียนรู้ต่าง ๆ ตามโอกาสและจังหวะเวลาที่เหมาะสม</span></p>';
	$this->page['default_9'] = '<p><span style="color: #333399;">เป็นการจัดตามวิถีชีวิตของครอบครัว  การเข้าร่วมกิจกรรมและการฝึกอบรม ผสมกับการเรียนรู้ในชั้นเรียนต่าง ๆ</p>';
	$this->page['default_10'] = '<p><strong><span style="color: #333399;">10.1 แนวทาง/วิธีการวัด และประเมินผลการเรียนรู้</span></strong><br /><span style="color: #333399;">การวัดและประเมินผลในรูปแบบการเรียนรู้ของครอบครัวใช้การประเมินผลตามสภาพจริงโดยครอบครัว ด้วยเครื่องมือที่หลากหลายดังนี้ </span><br /><span style="color: #333399;">1) การสังเกตและการจดบันทึกทั้งที่เป็นตัวหนังสือ ภาพถ่าย คลิบวิดีโอ </span><br /><span style="color: #333399;">2) การรวบรวมผลงานที่แสดงออกถึงความก้าวหน้าแต่ละด้านของผู้เรียน</span><br /><span style="color: #333399;">3) การเทียบระดับจากหนังสือเรียนที่ใช้ หรือประกาศนียบัตรต่าง ๆ </span><br /><span style="color: #333399;">4) การประเมินผู้เรียนจากบุคคลภายนอก เช่น ครูผู้สอน หรือผู้จัดกิจกรรมต่าง ๆ </span><br /><span style="color: #333399;">5) การทำแบบทดสอบ ข้อสอบ</span><br /><span style="color: #333399;">6) การสนทนา สอบถามและสัมภาษณ์ผู้เรียน</span><br /><span style="color: #333399;">ทั้งนี้การเลือกใช้เครื่องมือในการประเมินเป็นไปตามความเหมาะสมอาจจะมีการใช้หรือไม่ใช้เครื่องมือใดเครื่องมือหนึ่งได้</span></p>
<p><strong><span style="color: #333399;">10.2 การตัดสินผลการเรียน </span></strong><br /><span style="color: #333399;">1) ผู้เรียนต้องมีเวลาเรียนไม่น้อยกว่าร้อยละ ๘๐ ของเวลาเรียนทั้งหมด</span><br /><span style="color: #333399;">2) ผู้เรียนต้องได้รับการประเมินทุกตัวชี้วัด และผ่านตามเกณฑ์ที่ครอบครัวกําหนด</span><br /><span style="color: #333399;">3) ผู้เรียนต้องได้รับการตัดสินผลการเรียนทุกรายวิชา</span><br /><span style="color: #333399;">4) ผู้เรียนต้องได้รับการประเมิน และมีผลการประเมินผ่านตามเกณฑ์ที่ครอบครัวกำหนด ในการอ่าน คิดวิเคราะห์และเขียน คุณลักษณะอันพึงประสงค์ และกิจกรรมพัฒนาผู้เรียน</span></p>
<p><strong><span style="color: #333399;">10.3 ระดับผลการเรียน </span></strong><br /><span style="color: #333399;">1) ในการตัดสินเพื่อให้ระดับผลการเรียนรายกลุ่มประสบการณ์ / สาระวิชา ครอบครัว เลือกใช้ระดับคุณภาพการให้ระดับผลการเรียน 4 ระดับ คือ ดีเยี่ยม ดี ผ่าน และไม่ผ่าน </span><br /><span style="color: #333399;">ผู้เรียนมีผลการประเมินร้อยละ 80 ขึ้นไป ให้ได้รับผลการเรียน ระดับดีเยี่ยม</span><br /><span style="color: #333399;">ผู้เรียนมีผลการประเมินอยู่ระหว่างร้อยละ 65 - 79 ให้ได้รับผลการเรียน ระดับดี</span><br /><span style="color: #333399;">ผู้เรียนมีผลการประเมินอยู่ระหว่างร้อยละ 50 - 64 ให้ได้รับผลการเรียน ระดับผ่าน</span><br /><span style="color: #333399;">ผู้เรียนมีผลการประเมินต่ำกว่าร้อยละ 50 ให้ได้รับผลการเรียน ระดับปรับปรุง</span></p>
<p><span style="color: #000000; background-color: #ff9900;">(หรือเลือกอย่างใดอย่างหนึ่ง ตามตารางด้านล่าง เสร็จแล้วลบตารางทิ้ง)</span></p>
<p>&nbsp;</p>
<p><span style="color: #333399;">2) การประเมินการอ่าน คิดวิเคราะห์และเขียน และคุณลักษณะอันพึงประสงค์นั้น ให้ระดับผลการประเมินเป็น ดีเยี่ยม ดี และผ่าน</span><br /><span style="color: #333399;">3) การประเมินกิจกรรมพัฒนาผู้เรียน จะต้องพิจารณาทั้งเวลาการเข้าร่วมกิจกรรม การปฏิบัติกิจกรรมและผลงานของผู้เรียน ตามเกณฑ์ที่สถานศึกษากําหนด และให้ผลการเข้าร่วมกิจกรรมเป็น ผ่านและไม่ผ่าน</span></p>
<p><br /><strong><span style="color: #333399;">10.4 เกณฑ์การจบการศึกษา</span></strong><br /><span style="color: #333399;">1) ผู้เรียนเรียนรู้ตาม กลุ่มประสบการณ์/ สาระวิชา ได้รับการตัดสินผลการเรียนอยู่ในระดับผ่านขึ้นไป</span><br /><span style="color: #333399;">2) ผู้เรียนมีผลการประเมินการอ่าน คิดวิเคราะห์ และเขียน อยู่ในระดับผ่านขึ้นไป</span><br /><span style="color: #333399;">3) ผู้เรียนมีผลการประเมินคุณลักษณะอันพึงประสงค์ อยู่ในระดับผ่านขึ้นไป</span><br /><span style="color: #333399;">4) ผู้เรียนต้องเข้าร่วมกิจกรรมพัฒนาผู้เรียน และมีผลการประเมินอยู่ในระดับผ่านขึ้นไป</span></p>';*/
	
}
}
