<html>
<meta charset="utf-8"> 

<link href="truncation_embed.css" rel="stylesheet" type="text/css">
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Truncation Errors </strong>  &nbsp;</td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้นและ ปกติ low-order bit ค่าเดิมจะถูกเก็บรักษาไว้และhigh-order bit ก็จะหายไป เมื่อค่า unsinged ถูกแปลงไปเป็นค่า signed ที่มีความยาวเท่ากัน ตัว bit pattern  จะถูกเก็บรักษาไว้ซึ่งเป็นสาเหตุที่ high-order bit จะถูกแปลงไปเป็น sign bit จากผลดังกล่าวทำให้ ค่าสูงสุดของ signed integer จะถูกแปลงไปเป็นค่าลบ ดังแสดงในโปรแรม 2.15 แสดง Truncation Errors และไม่เกิด signed error เพราะข้อมูลมีชนิด  signed  ซึ่งมีหนึ่งบิตน้อยกว่าที่จะแทนในผลลัพธ์ได้ 
  </tr>
  <tr>
    <td colspan="2"><div align="center"><img src="../../images/learn/integer/11.PNG" width="579" height="266"  alt=""/></div></td>
    <td height="149">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="../../images/12.jpg" width="37" height="35"  alt=""/></td>
    <td><strong>video</strong></td>
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="truncation_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

 </td>
    <td height="21">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><div id="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div id="img2" align="center"></div>
         <div id="content-img2" align="center"></div></td>
   
      <td width="3"></td>
  </tr>
</table>
