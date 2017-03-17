<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="43" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="980"><p><strong>Off-by-One Errors</strong></p></td>
    <td width="10" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อีกปัญหาที่พบบ่อย กับ String ในภาษา  C ที่เหมือนกับ  unbounded string copies คือจะเกี่ยวข้องกับ การเขียนค่าใน array โดยจะเป็นการเขียนค่านอกขอบเขต  ของ array</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/off-error/1.png" width="521" height="247"  alt=""/></div>
    <div id="content-img1" align="center">รูป 2.4 Common off-by-one defects</div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><div id="content">
  -source character array  ( ที่ประกาศ ไว้ในบรรทัด 2) คือ 10 ไบต์ของ long  แต่ strcpy ( ) (ประกาศไว้บนบรรทัด 3)จะ copy  11 ไบต์ รวมทั้ง null terminator
        <p>-malloc ( ) ฟังก์ชัน (บรรทัด 4) จะจัดสรรหน่วยความจำ ใน heap ของความยาวของ string ของ  source ตามค่า ที่ส่งกลับโดยฟังก์ชัน strlen () ไม่นับรวม null</p>
<p>-The index value ของ  i ใน for (บนบรรทัด 5) เริ่มต้นที่ 1 แต่ ตำแหน่งแรก ใน อาร์เรย์ของภาษา C คือ 0</p>
<p>- The ending condition ของ loop(บนบรรทัด 5 ) เป็น i < = 11</p>
<p>-การกำหนด ในบรรทัด ที่ 8 ทำให้เกิดการเขียนออกนอกขอบเขตของการเขียน</p>
    </td>
   
      <td width="0"></td>
  </tr>
</table>