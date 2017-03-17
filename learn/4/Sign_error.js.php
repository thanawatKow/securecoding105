<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Sign error</strong>  &nbsp;</td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกิดขึ้นเมื่อมีการแปลงจาก signed integer ไปเป็น unsigned  integer  เมื่อ 
signed integer ถูกแปลงไปเป็น unsigned integer ที่มีขนาดเท่ากัน  bit pattern  จะถูกเก็บรักษาไว้ และเมื่อ signed integer ถูกแปลงไปเป็น  unsigned integer ด้วยค่าที่มีขนาดใหญ่กว่า จะมีการขยายค่านั้นก่อนที่จะมีการแปลงค่า ซึ่งทั้งสองกรณีนี่ high-order bit จะถูกตัดออกไปเป็น signed bit  ถ้าค่าของ signed  integer ไม่เป็นค่าลบ ค่านั้นก็จะไม่เปลี่ยนแปลง อย่างไรก็ตามเมื่อค่าของ signed integer เป็นค่าลบผลที่ได้มักจะเป็นค่าบวกที่มีขนาดใหญ่กว่าค่าเดิม ซึ่งแสดงตามโปรแกรม 2.14

     </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/integer/9.PNG" width="583" height="233"  alt=""/></div>
    <div id="content-img1" align="center">
      <p align="center">&nbsp;</p>
    </div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><div id="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div id="img2" align="center"></div>
         <div id="content-img2" align="center"></div></td>
   
      <td width="3"></td>
  </tr>
</table>
