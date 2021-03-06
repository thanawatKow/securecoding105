<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Integer Operations</strong>  &nbsp;</td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Integer Operations สามารถส่งผลให้เกิดเงื่อนไขพิเศษ ซึ่งผลลัพธ์ของการ operation กัน
นั้นอาจจะทำให้เกิดค่าที่ไม่คาดคิดได้ ซึ่งค่าที่ไม่คาดคิดนั้นอาจจะทำให้เกิดพฤติกรรมที่ไม่คาดคิดในการเขียนโปรแกรมและช่องโหว่เรื่องความปลอดภัยได้ ซึ่งสามารถแบ่งการ operation ออกเป็นดังนี้
การบวก Integer อาจจะเป็นผลให้เกิด overflow ได้ซึ่งส่งผลให้ไม่สามารถแทนจำนวนบิต
ที่จองไว้ได้ใน integer ได้ จำนวนที่เกิดขึ้นจากจำนวนบิตที่ถูกจองไว้จะขึ้นอยู่กับสถาปัตยกรรมของเครื่องและชนิดของ operation นั่นๆ ตัวอย่างเช่น สมมติเอา char  2  ตัวมาบวกกันซึ่งสถาปัตยกรรมของเครื่องแทน char ด้วย 8 bit และ 16 bit และ int ใช้ 32 bit และ long long ใช้ 64 bit เนื่องจาก integer promotions ซึ่ง operation ของ char 2  ตัว จะถูกแปลงไปเป็น signed int จากเดิมที่เป็น signed char ก่อนที่จะนำมาบวกกัน แต่จะไม่เกิด overflow ขึ้น เพราะ SCHAR_MAX + SCHAR_MAX จะน้อยกว่า INT_MAX และ SCHAR_MIN + SCHAR_MIN จะมากกว่า INT_MIN อย่างไรก็ตาม ยังไม่มีการรับประกันว่า จะมีค่าที่ได้มาจากบวกกันเป็นประเภท int หรือ long long  เพราะ integer promotions ไม่ได้มีการดำเนินการไว้
	เป็นไปได้ที่ SCHAR_MAX + SCHAR_MAX จะเกินขนาดของ signed char เป็นผลให้เกิด Truncation Errors ระหว่างการทำการบวกกันได้ อย่างไรก็ตาม จะไม่เกิด overflow ระหว่างการบวกกันและ
Error Detection Signed และ unsigned overflow เป็นผลมาจากการทำการบวกกันที่ถูกตรวจพบและรายงานใน IA-32 รูป 2.44 แสดงชุดคำสั่ง IA-32 และ ชุดคำสั่งการ บวก และแสดง flag ที่เกี่ยวข้องกับ overflow
</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/integer/12.PNG" width="481" height="312"  alt=""/></div>
    <div id="content-img1" align="center"></div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1)  Overflow flag จะระบุ Signed Arithmetic Overflow
	 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2)  Carry flag จะระบุ Unsigned Arithmetic Overflow</p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรม 2.16  แสดงชุดคำสั่งของภาษา assembly ที่สร้างจากคอมไพเลอร์ของ Visual C++ .NET บรรทัดที่1-3 เสดงให้เห็นการบวกกันของ sign characters บรรทัดที่ 4-6 การบวกกันของ unsign characters ทั้งสอง operands ในแต่ละกรณีจะมีการใส่ค่าลงใน register ชนิด 32 bit  (eax or ecx) ซึ่งส่งผลให้ค่ามีขนาด 32 บิต (ซึ่งเป็นขนาดของ int ) บรรทัดที่ 7-8 แสดงให้เห็นการบวก unsigned int ซึ่งค่าจะมีขนาดเท่ากับ 32 บิต(ดังนั้นจะเป็น pointer dowrd) บรรทัดที่ 9-10 แสดงให้ถึงการบวกของ long long  ซึ่งคำสั่งการ บวก จะเพิ่ม low-order 32 bit และ คำสั่ง abc จะเพิ่ม high-order 32 bit และ ค่าของ carry bit  เข้าไปด้วยนั่นเอง 
</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"> <div id="img1" align="center"><img src="../../images/learn/integer/13.PNG" width="499" height="443"  alt=""/></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ก่อนเงื่อนไขของกการบวกของ  integer สามารถทำให้เกิด  overflow  ได้ ถ้า  ผลรวมของ left-head side (LHS) และ right-hand side (RHS) ของการบวกมีค่ามากกว่า UINT_MAX  ของการบวก int และ ULLONG_MAX  ของการบวก unsigned long long <br>
    รูป 2.46 แสดงการบวกของ signed integer และเงื่อนไขการเกิด overflow แบบต่างๆ</p></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><div id="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
     <div id="img1" align="center"><img src="../../images/learn/integer/14.PNG" width="436" height="203"  alt=""/></div>
         </td>
   
      <td width="3"></td>
  </tr>
</table>
