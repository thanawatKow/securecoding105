<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Output_Streams</strong></td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                 ฟังก์ชัน   Formatted output นี่จะถูกเขียนไปใน stream แทนไฟล์(เช่น  printf()) นอกจากนี้ยังมีความเสี่ยงของ format string   จากโปรแกรม 2.36 มีช่องโหว่ของ  format string ถ้าอาร์กิวเมนต์ของผู้ใช้สามารถควบคุมได้อย่างเต็มที่หรือบางส่วนโดยผู้ใช้โปรแกรมสามารถใช้ประโยชน์จากข้อผิดพลาดนี่ในดูเนื้อหาใน stack ดูขนาดของหน่วยความจำหรือเขียนทับหน่วยความจำได้นั้นเอง

     </td>
  </tr>
  <tr>
    <td colspan="2"><div id="img1" align="center"><img src="../../images/learn/Formatted Output/4.PNG" width="543" height="139"  alt=""/></div></td>
    <td height="96">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p><strong>Crashing  a Program</strong></p></td>
    <td height="28">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่องโหว่ของ format string จะถูกค้นพบเมื่อโปรแกรมเกิดปัญหาสำหรับระบบ Unix ก็เข้าใช้เเบบ invalid pointer อาจจะทำให้เกิดสัญญาณ SIGSEGV กับกระบวนการได้ เว้นแต่จะจับและจัดการกับโปรแกรมที่ผิดปกติและทำการ dump core ได้ การเข้าถึงแบบ invalid pointer หรือ unmapped address read สามารถที่เกิดจากการเรียกผ่าน formatted output :</td>
    <td height="34">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div id="img1" align="center"><img src="../../images/learn/Formatted Output/5.PNG" width="442" height="78"  alt=""/></div></td>
    <td height="34">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การแปลงที่ %s ที่แสดงในหน่วยความจำในที่อยู่ในอาร์กิวเมนต์ที่สอดคล้องกับที่อยู่บน Stack เพราะ ไม่มี String อาร์กิวเมนต์ที่จัดมาในตัวอย่าง printf() อ่านตำแหน่งในหน่วยความจำจาก Stack จนกระทั่ง  format String หมด หรือ เกิด invalid pointer หรือ พบ unmapped address </td>
    <td height="45">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
   </td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><div id="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div id="img2" align="center"></div>
         <div id="content-img2" align="center"></div></td>
   
      <td width="3"></td>
  </tr>
</table>
