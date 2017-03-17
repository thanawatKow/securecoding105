<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>&nbsp;Integer Promotions</strong></td>
    <td width="3" rowspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2"><div id="content-hearder" align="center"> <img src="../../images/learn/integer/2.jpg" width="217" height="88"  alt=""/></div></td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากตัวอย่างที่    Interger Promotions ต้องการค่าในแต่ละตัวแปร (c1 และ c2 ) เป็นค่าของ
ขนาด int  ซึ่งค่าของ int จะถูกนำมาบวกกัน และ ผลรวมจะถูกตัดทอนให้พอดีกับชนิดของ Char 
จากรูป 2.5 Interger Promotion  จะช่วยในการหลีกเลี่ยงข้อพลาดที่อาจเกิดจากการคำนวณล้นของข้อมูลได้ ซึ่งบรรทัด 5 ถึง บรรทัดที่ 7 แสดง ค่า c1 ที่บวกกับค่า c2 และ ผลของการบวกนี้จะถูกรวมไปบวกกับค่า c3 ซึ่งการบวก c1 และ c2 จะเป็นผลที่ทำให้เกิด overflow ของ signed char เพราะผลของการบวกเป็นค่าสูงสุดของ signed char แล้ว อย่างไรก็ตาม  c1,c2,c3   แต่ละตัวแปรจะถูกแปลงค่าไปเป็น Interger และผลลัพธ์ของค่านั้นถูกตัดทอนและถูกเก็บไว้ในตัวแปร cresult เพราะว่าผลลัพธ์นั้นอยู่ในช่วงของชนิด signed char และ การตัดนั้นจะไม่ทำให้ผลลัพธ์ของข้อมูลนั้นสูญหายไป  
</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/integer/3.PNG" width="568" height="243"  alt=""/></div>
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
