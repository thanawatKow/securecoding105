<html>
<meta charset="utf-8"> 

<head>
 <link rel="stylesheet" type="text/css" href="../css/font.css">
      <link rel="stylesheet" href="../start/assets/css/bootstrap.min.css">
</head>
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong></strong>  &nbsp;<strong>Formatted Output  Functions </strong></td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formatted output ฟังก์ชันจะถูกระบุโดยพื้นฐานของ  C99  โดยมีดังนี้
<p>1).fprintf() จะเขียน output ไป stream โดยขึ้นอยู่กับ format string</p> 
<p>2).printf() จะเทียบได้กับ fprint()  ยกเว้น printf()  นั้น output ของ stream เป็น stdout</p>
<p>3). print() จะเทียบได้กับ fprint  ยกเว้น output ที่ถูกเขียนไว้บน array มากกว่าที่จะอยู่บน stream</p>
<p>4).snprintf() จะเทียบได้กับ   print() ยกเว้น ค่าต่ำสุดของจำนวนตัวอักษร n ถึงค่าที่เขียนระบุไว้ เช่น ถ้า n ไม่เท่ากับ 0 output  ของตัวอักษร ก็จะอยู่ไม่เกิน n-1^st</p>
<p>5).vfprintf(), vprintf(), vsprintf(), และ vsnprintf() ซึ่งเทียบได้กับ fprintf(), printf(),  print() และ snprintf() กับ รายการอาร์กิวเมนต์จจะถูกแทนโดยชนิดของอาร์กิวเมนต์ที่เป็น va_list ซึ่ง ฟังก์ชันเหล่านี่จะนำมาใช้ประโยช:น์เมื่อรายการของอาร์กิวเมนต์นั้นถูกกำหนดที่ใน runtime ใหม่</p>
</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;<strong>Format Strings</strong></td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">  Format string คือ  รูปแบบที่ใช้กำหนดลักษณะการรับข้อมูล </td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td> </td>
    <td><table class="table table-striped" width="647">
      <thead>
        <tr>
          <th>format code</th>
          <th>รูปเเบบ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>%d</td>
          <td>สำหรับการเเสดงผลตัวเลขจำนวนเต็ม(int,short,unsigned short,long unsiged long</td>
        </tr>
        <tr>
          <td>%n</td>
          <td>สำหรับการเเสดงผลตัวเลขจำนวนเต็มบวก(unsiged short,unsigned long)</td>
        </tr>
        <tr>
          <td>%o</td>
          <td>สำหรับเเสดงผลออกมาในรูปเเบบของเลขฐานเเปด</td>
        </tr>
        <tr>
          <td>%x</td>
          <td>สำหรับเเสดงผลออกมาในรูปเเเบบของเลขฐานสิบหก</td>
        </tr>
        <tr>
          <td>%f</td>
          <td>สำหรับเเสดงผลตัวเลขทศนิยม(float,double,long double)</td>
        </tr>
         <tr>
          <td>%e</td>
          <td>สำหรับการเเสดงตัวเลขทศนิยมออกมาในรูปเเบบ E(หรือ e) ยกกำลัง (float,double,long double</td>
        </tr>
        <tr>
          <td>%e</td>
          <td>สำหรับการเเสดงผลอักขระ 1  ตัว (char)</td>
        </tr>
        <tr>
          <td>%p </td>
          <td>สำหรับการเเเสดงผลตัวชี้ ตำเเหน่ง (pointer)</td>
        </tr>
      </tbody>
    </table></td>
    <td height="30">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
