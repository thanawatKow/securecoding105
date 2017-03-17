<html>
<meta charset="utf-8"> 
<link href="INTFLOW_embed.css" rel="stylesheet" type="text/css">
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>&nbsp;Integer overflow </strong></td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มักจะเกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่
กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด ซึ่ง integer overflow จะเกี่ยวข้องกับการแทนค่าข้อมูลพื้นฐานด้วย Overflow นั้นสามารถเป็นได้ทั้ง signed หรือ unsigned ซึ่ง signed overflow จะเกิดขึ้นเมื่อมีการดำเนินการไปยัง signed bit ส่วน unsigned overflow จะเกิดขึ้นเมื่อไม่สามารถแทนค่าพื้นฐานนั้นได้ จาก โปรแกรม 2.13 แสดงให้เห็นถึงผลกระทบของเกิด overflow ใน signed integer และ unsigned integer ซึ่ง  signed integer i ถูกใส่ค่าไว้สูงสุดที่  2,147,483,647 ในบรรทัดที่ 3   และเพิ่มขึ้นค่า ในบรรทัด 4. ผลการดำเนินงานจะทำให้เกิด integer overflow เกิดขึ้น และ เมื่อ   i  ถูกกำหนดค่าเป็น  -2,147,483,648 (ซึ่งเป็นค่าต่ำสุดสำหรับชนิดข้อมูล int) ผลของการดำเนินการก็จะเป็น (2,147,483,647 + 1 = -2,147,483,648) จะเห็นได้ชัดว่ามีข้อผิดพลาดทางคณิตศาสตร์เกิดขึ้น โดย  Integer overflow นอกจากจะเกิดขึ้นเมื่อมีการเพิ่มของ unsigned integer ที่มีค่าสูงสุด (บรรทัด 6-8) และ decrementing signed integer ที่มี่ค่าต่ำสุดแล้ว (บรรทัด 9-11) หรือ decrementing unsigned integer ที่ค่าต่ำสุดที่แสดงไว้บนบรรทัด 12 -14 

</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><img src="../../images/learn/integer/10.PNG" width="570" height="408"  alt=""/> </div></td>
    <td height="149">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="../../images/12.jpg" width="37" height="35"  alt=""/></td>
    <td><strong>video</strong></td>
    <td height="44">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="INTFLOW_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
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
