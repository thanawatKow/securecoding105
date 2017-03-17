<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="39" hei ght="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="1005"><p><strong>Null-Termination Errors</strong></p></td>
    <td width="4" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="2">
     <div id="content" >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การประกาศค่าคงที่สำหรับตัวเเปร array ทั้งสามไม่สามารถจัดสรรได้และการจัดเก็บข้อมูล สำหรับ null-termination เป็นผลให้ ฟังก์ชั่น strcpy   (บนบรรทัด  5) เขียน อักขระ null ก่อนจบ array ทั้งนี้ขึ้นอยู่ compiler ที่จะจัดเก็บและจัดสรร storage ซึ่ง null byte  อาจ ถูกเขียนทับโดยฟังก์ชัน strcpy ที่ บรรทัด 6 ถ้า เหตุการณ์นี้เกิดขึ้น ในขณะนี้ a ชี้ ไปยัง array ของ 32 ตัวอักษร ในขณะที่ b ชี้ไปยัง array ของ 16 ตัวอักษรและทำการ  copy  ไปยัง c (บรรทัด 7)  ทำให้ฟังก์ชัน strcat ในบรรทัด ที่ 8 ที่จะเขียน ได้เกิน ขอบเขต ของ array</div></td>
  
   
  </tr>
  
  <tr>
    <td colspan="2">
    <div id="img1" align="center">
    <img src="../../images/learn/Null/1.png" width="498" height="247"  alt=""/></div></td>
    
    <td height="149">&nbsp;</td>
    
  </tr>

  <tr>
    <td colspan="2"><div id="content-img1" align="center">รูป 2.5 Null-termination defect</div>
    </td>
   
      <td width="4"></td>
  </tr>
</table>