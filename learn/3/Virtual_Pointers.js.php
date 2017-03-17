<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="64" height="36"><img src="../../images/1.jpg" width="37" height="35"  alt=""/></td>
    <td width="1089"><strong>Virtual Pointers</strong></td>
    <td width="28">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ ช่วยให้คำจำกัดความของการทำงานเสมือนจริง  ฟังก์ชันเสมือนเป็นฟังก์ชันที่สมาชิกของคลาสที่ได้รับการประกาศว่าการใช้คำสำคัญในระบบเสมือน  ฟังก์ชันการทำงานอาจถูกแทนที่ด้วยฟังก์ชันที่มีชื่อเหมือนกันในคลาสที่ได้รับมา  ตัวชี้ไปยังวัตถุคลาสที่ได้รับมาอาจถูกมอบหมายให้กับที่พักในระดับ first class และตัวชี้ให้ฟังก์ชันที่เรียกว่าผ่านตัวชี้  ไม่มีฟังก์ชันการทำงานเสมือนจริงที่มีการเรียกฟังก์ชันเรียกคลาสได้เนื่องจากมีการเชื่อมโยงกับ static  pointer เมื่อใช้ฟังก์ชันการทำงานเสมือนจริงให้คลาสที่นำมาใช้เป็นฟังก์ชันที่เรียกว่ามีการเชื่อมโยงกับประเภทแบบไดนามิกของอ็อบเจกต์</td>
    <td width="28">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรแกรม 2.10 แสดงให้เห็นถึงการทำงาน  Semantic  ของระบบเสมือนจริงที่ คลาสจะถูกกำหนดให้เป็นฐานของคลาสและประกอบด้วยฟังก์ชัน f() และ  ฟังก์ชันเสมือน g ( )  Class B คือได้มาจากทั้ง a และ override สองฟังก์ชัน 
ตัวชี้ my_b  มีฐานที่มีการประกาศคลาสใน Main () แต่ถูกกำหนดค่าโดยอ็อบเจกต์ของคลาส B ที่นำมาใช้ได้  เมื่อใช้ฟังก์ชัน nonvirtual  my_b->f() จะถูกเรียกในบรรทัดที่ 21 ให้ใช้ฟังก์ชัน f ( ) ที่เกี่ยวข้องกับ ( คลาสหลัก ) จะถูกเรียกได้  เมื่อใช้ฟังก์ชันเสมือน my_b->f()  จะถูกเรียกในบรรทัดที่ 22  ฟังก์ชัน g() ที่เกี่ยวข้องกับการที่ได้รับมาคลาส B จะถูกเรียกว่า the derived clas

    <div id="img1" align="center"><img src="../../images/learn/pointer/2.PNG" width="517" height="554"  alt=""/></div>
    <div id="content-img1" align="center"></div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ คอมไพเลอร์ส่วนใหญ่นำไปใช้โดยใช้ฟังก์ชันเสมือนฟังก์ชันเสมือนตาราง  VTBL   ที่เป็นอาร์เรย์ของ พอยน์เตอร์ VTBL ฟังก์ชันที่ถูกใช้งานที่จัดส่ง Runtime สำหรับฟังก์ชันเสมือนการเรียก  อ็อบเจกต์แต่ละอันใน VTBL ผ่านตัวชี้เสมือน  VPTR  ในส่วนหัวของอ็อบเจกต์ VTBL จะมีตัวชี้ไปยังแต่ละการนำไปใช้งานของฟังก์ชันเสมือนได้  รูป 2.4 แสดงโครงสร้างข้อมูลที่ได้จากตัวอย่าง</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><div id="img1" align="center"><img src="../../images/learn/pointer/3.PNG" width="457" height="132"  alt=""/></div>
    
         <table width="100%" border="0" colspan="0">
  <tr  >
    <td width="45" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มีความเป็นไปได้ที่จะเขียนทับในฟังก์ชันพอยน์เตอร์ VTBL หรือเพื่อเปลี่ยนไปยังจุดเชื่อมต่ออื่นเพื่อ VPTR และ VTBL ที่กำหนดเองได้  ซึ่งสามารถทำได้โดยการเขียนหรือทำให้เกิดการล้นของข้อมูลโดยตรงลงในออบเจกต์ได้ ใน บัฟเฟอร์ที่จะเขียนทับ VTBL และ  VPTR ของวัตถุและทำให้ผู้โจมตีจะทำให้เกิดการเรียกใช้ชุดคำสั่งฟังก์ชันพอยน์เตอร์ VPTR 
<p>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attacker สามารถ overwrite function pointers ใน VTBL ได้หรือ เปลี่ยน  VPTR  ชี้ไปยัง   VTBL ใหม่ Attacker ยังสามารถใช้ arbitrary memory write หรือ  buffer overflow โดยตรงบน the object</p>
</td>
    </tr>
</table>
         <div id="img4" align="center"></div>
         <div align="center">
           <p align="center">&nbsp;</p></div>
      
      
    </td>
   
      <td width="28"></td>
  </tr>
</table>
