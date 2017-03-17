<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Mitigation Strategies</strong></td>
    <td width="3" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;1.<strong>Closing the Race Window</strong></td>
  </tr>
  <tr>
    <td height="33" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่องโหว่ของ race condition จะอยู่ระหว่าง  race window  ดังนั้นการบรรเทาผลกระทบที่เห็นได้ชัดที่สุดคือการกำจัด race window ที่เป็นไปได้ ในส่วนนี้จะแสดงให้เห็นเทคนิคหลายจุดเพื่อกำจัด race window 
           Checking File Properties Securely. เป็นกล่าวถึงเงื่อนไขของ TOCTOU ทั่วไปที่เป็นผลมาจากความต้องการที่จะตรวจสอบคุณสมบัติของไฟล์ ใน Linux สำหรับข้อผิดพรากทั่วไป stat () ตามด้วยการใช้ open()  และ ตามด้วย fstat() ซึ่งเป็นผลกระทบของ Window ที่คล้ายกันคือการใช้  GetFileInformationByHandle() มากกว่า  FindFirtFile()  หรือ FindFirtFileEx() 
Istat() ฟังก์ชัน  poses เป็นปัญหาที่ยาก ฟังก์ชันนี้เป็นฟังก์ชันพิเศษเพราะมันเป็นเพียงฟังก์ชัน stat Linux ที่เป็น symbolic link (เมื่อ)  ที่มากกว่าเป้าหมาย แต่ Istat ()  จะต้องนำไปใช้กับชื่อไฟล์ที่มีการอธิบายไฟล์ เป็นผลให้ Istat() จะต้องเป็นการใช้ประโยชน์ในการดูแลช่องโหว่ symlink โดยทั่วไปของ Istat () จะแสดงในโปรแกรม 2. 51 โค้ดนี่ stat  เป็นแบบ some_file แล้วเปิดไฟล์นี้ถ้ามันไม่เป็น symbolic link แต่น่าเสียดายที่ Istat() ในบรรทัดที่ 3 ตามด้วย open() บนบรรทัดที่ 7 จาก TOCTOU  เพราะ symbolic link จะได้รับการแนะนำให้รู้จักระหว่างบรรทัดเหล่านี้
    </p></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/File/9.PNG"  alt=""/></div>
</td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;กลยุทธ์การบรรเทาผลกระทบของการเรียก Istat() เพื่อความปลอดภัยเป็นขั้นตอนและวิธีการอยู่  4วิธีด้วยกัน </td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">
&nbsp;&nbsp;1. Istat() ชื่อไฟล์<br>
&nbsp;&nbsp;2. open() ไฟล์<br>
&nbsp;&nbsp;3. fstat() อธิบายไฟล์จากขั้นตอนที่ 2<br>
&nbsp;&nbsp;4. เปรียบเทียบสถานะจากขั้นตอนที่ 1  และ 3 เพื่อให้มั่นใจว่าไฟล์ที่มีเหมือนกัน <br>
โปรแกรม 2.52 แสดงให้เห็นถึงวิธีการใช้กลยุทธ์นี้ในการลดสภาพของ  TOCTOU  ที่อยู่ในรูปที่ 7-7  ซึ่งโค้ดนี้มีการปิดเงื่อนไข race window   โดยมั่นใจว่าไฟล์จะผ่านไปที่ Istat () ในบรรทัดที่  3  จะเป็นไฟล์เดียวกันกับแฟ้มที่ถูกเปิด  นี้ซึ่งมีการประกันได้เนื่องจาก fstat() ถูกนำมาใช้ในการยื่นอธิบายให้ไม่มีชื่อไฟล์ดังนั้นไฟล์ที่ผ่านไป  fstat() จะต้องเหมือนกันไปยังแฟ้มที่ถูกเปิดและ Istat() จะไม่ปฎิบัติตาม symbolic link  แต่ fstat() จะทำโดยไม่มีการเปรียบเทียบโหมด(st_mode) ในบรรทัดที่ 12 จะเพียงพอที่จะตรวจสอบ symbolic  link และ เปรียบเทียบกับ inode(st_ino) เพื่อให้แน่ใจว่าไฟล์ที่มีผ่านการฟังก์ชัน istat() แล้วและ มีไอโหนดเหมือนกับไฟล์ที่ส่งผ่านไปในฟังก์ชัน  fstat()
</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<div id="img1" align="center"><img src="../../images/learn/File/10.PNG" alt="" width="529" height="496"/></div></td>
   
      <td width="3"></td>
  </tr>
</table>
