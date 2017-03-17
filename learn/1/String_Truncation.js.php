<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="40" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="1004"><strong>String Truncation</strong>&nbsp;</td>
    <td width="4" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกิดขึ้นเมื่อ ทำการตัด String เเล้ว แถวอักขระ ปลายทาง มีขนาดไม่ใหญ่ พอที่จะบรรจุ เนื้อหาของ string  การตัด String Truncation อาจเกิดขึ้น ในขณะที่อ่านค่าเข้ามาของผู้ใช้ หรือ การคัดลอก string  ได้และมักจะเป็นผลมาจาก โปรแกรมเมอร์ พยายามที่จะป้องกัน หน่วยความจำที่เกิดจากการล้นซึ่งจำเป็นต้องตัด  string  ซึ่งทำให้เกิดการสูญเสียของข้อมูลและ ในบางกรณี สามารถนำไปสู่ ช่องโหว่ของซอฟต์แวร์ได้ String Errors without Functions มีหลาย ฟังก์ชันด้วยกัน ยกตัวอย่างเช่น strcpy(), strcat(), gets(), streadd(), strecpy(), และ strtrns() มันเป็น ไปได้ที่จะ ทำการดำเนินการกับ string ที่ไม่ปลอดภัย ได้โดยไม่ต้อง เรียก ฟังก์ชันซึ่่งแสดงให้เห็นใน ตัวอย่างของ โปรแกรม C ที่มี ข้อบกพร่อง ที่เกิดจากการ ดำเนินการคัดลอก string แต่ไม่ได้มีการเรียกใช้ฟังก์ชันไลบรารี่ของ string ใด ๆ ดังแสดงในรูปต่อไปนี้</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="img" align="center"><img src="../../images/learn/String/1.png" width="454" height="248"  alt=""/></div>
    <div id="content-img1" align="center">รูป2.1 Defective string manipulation code</div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"></td>
   
      <td width="4"></td>
  </tr>
</table>
