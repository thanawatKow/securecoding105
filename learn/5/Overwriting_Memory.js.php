<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong></strong>  &nbsp;<strong>Overwriting Memory</strong></td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ฟังก์ชัน Formatted output   นั้นจะมีการส่งค่าออกไปที่มีอันตราย เพราะ โปรเมอร์ส่วนใหญ่นั้นไม่รู้จักความสามารถของ Formatted output  (เช่น Formatted output สามารถเขียนค่าจำนวนเต็มไปยังที่อยู่ที่ระบุไว้โดยใช้ตัวระบุ %n ได้ ) บนแพลตฟอร์มของจำนวนเต็มและมีขนาดเท่ากัน ( เช่น IA-32 )  ความสามารถในการเขียน integer ไปยังที่อยู่โดยสามารถนำมาใช้เพื่อรันโค้ดบนระบบที่ถูกบุกรุกได้%n จะถูกสร้างขึ้นมาเพื่อช่วยจัดรูปแบบของสตริงเอาท์พุท ซึ่งมันจะเขียนจำนวนของตัวอักษรออกไปที่ตำแหน่งของ integer ที่จัดไว้ในอาร์กิวเมนต์ สำหรับตัวอย่างนี้ หลังจากรันโค้ดต่อไปนี้
     </td>
  </tr>
  <tr>
    <td colspan="2"> <div id="img1" align="center"><img src="../../images/learn/Formatted Output/8.PNG" width="456" height="97"  alt=""/></div></td>
    <td height="149">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p> ซึ่งค่า  i ที่ถูกแทนค่าเป็น 5 เพราะ ตัวอักษรที่ถูกเขียนมี 5  ตัว (h-e-l-l-o)  ก่อนที่จะแปลง %n ระบุไว้  ผู้โจมตีสามารถที่จะเขียนค่าของจำนวนเต็มไปยังตำแหน่งที่ต้องการได้  โดยอาศัยประโยชน์จากข้อบกพร่องของการรักษาความปลอดภัย  เราสามารถระบุตำแหน่งโดยใช้เทคนิค examine  memory ที่ใช้สำหรับระบุตำแหน่ง ดังตัวอย่างต่อไปนี้</p></td>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><div id="img1" align="center"><img src="../../images/learn/Formatted Output/9.PNG" width="458" height="98"  alt=""/></div></td>
    <td height="41">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><p>การเขียนค่าของ  integer พิจารณาจำนวนของตัวอักษรที่ตำแหน่ง  0x0142f5dc ในตัวอย่างนี้  ค่าที่เขียน(28) เทียบได้กับฐานสิบหก 8 ตัวบวกกับสี่ไบต์ จำนวนของตัวอักษรที่ถูกเขียนโดยฟังก์ชัน  format จะขึ้นอยู่กับ format  string ถ้าผู้โจมตีสามารถควบคุม format string ได้ ผู้โจมตีการสามารถที่จะควบคุมจำนวนของตัวอักษรที่ใช้เขียนได้ จากโปรแกรม 2.40 แสดงโค้ดที่ใช้ในการเขียน   address ของที่ตั้งของหน่วความจำที่เฉพาะเจาะจง  นี้จะสร้างรูปแบบของสตริงในรูปแบบต่อไปนี้<br>
    % width  u%n%  width u%n%  width u%n%  width u%n</p></td>
    <td height="41">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src= width="583" height="233"  alt=""/></div>
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
