<html>
<meta charset="utf-8"> 
</html>
<link type="text/css" rel="stylesheet" href="css\stacksmashing\layout_stack.css">
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="40" height="36"><img src="../../images/1.jpg"  width="37" height="35"  alt=""/></td>
    <td width="988"><strong>Code Injection</strong></td>
    <td width="3" rowspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="52" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นการแทรก code เข้าไปในระบบ ซึ่งเมื่อมีผู้ไม่หวังดีแทรกคำสั่งของระบบ (command) เข้าไปเพื่อทำให้ระบบทำงานผิดพลาด หรือการเข้าไปถึงข้อมูลที่ไม่ได้รับอนุญาต
	รหัสผ่านที่คุณจะได้รับโปรแกรมที่แสดงในรูป 2.2 จะแสดงการถูกนำไปใช้ประโยชน์ในการเรียกใช้ชุดคำสั่งที่สร้างขึ้นเองได้  เวลานี้โปรแกรมถูกคอมไพล์ของ Red Hat Linux 9.0 โดยใช้ GCC  ข้อบกพร่องสามารถเข้าไปในโปรแกรมผ่านไฟล์ข้อมูล Binary ( ตามที่แสดงในรูป 2.2 ) จากไฟล์โดยใช้การเปลี่ยนทิศทางเป็นดังนี้ :
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% ./BufferOverflow < exploit.bin
</td>
  </tr>
  <tr>
    <td height="16" colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/2.png" width="697" height="100" ></div>
    <div id="content-img1" align="center">รูป 2.2 Contents of binary file exploit.bin containing shellcode</div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><div id="content">
    <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไฟล์ข้อมูลแบบ Binary ที่ไม่สามารถมีบรรทัดใหม่หรืออักขระ NULL จนไบต์สุดท้ายเนื่องมาจากการใช้ประโยชน์จากฟังก์ชันสตริงที่มักจะขึ้นอยู่กับการที่ใช้ฟังก์ชัน  gets ( )  โดยการเรียกฟังก์ชัน gets () แปลความหมายเป็นอักขระ Null เป็นสตริงอักขระและการยุติการอ่านข้อมูลบรรทัดใหม่จนกว่าจะมีอักขระหรือเงื่อนไขที่มีการตรวจพบ process 
    </div>
      <div id="img2" align="center"></div>
         <div id="content-img2" align="center"></div>
      
      
    </td>
   
      <td width="3"></td>
  </tr>
</table>
