<html>
<meta charset="utf-8"> 
<link href="unbound_embed.css" rel="stylesheet" type="text/css">
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/1.jpg" width="37" height="35"  alt=""/></td>
    <td width="818"><strong>Unbounded String Copies</strong>  &nbsp;</td>
    <td width="172">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unbounded String เกิดเมื่อมีการ copy ค่าจำนวนมากลงสู่ array ที่มีการ fix ขนาดเอาไว้</td>
    <td width="172">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="img1" align="center"><img src="../../images/learn/unbound/1.png" width="497" height="131"  alt=""/></div>
    <div id="content-img1" align="center">รูป1.1 Reading unbounded stream from  standard input</div></td>
    <td height="149">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><div id="content">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากภาพโปรแกรมอ่านค่าตัวอักษรจากอินพุตโดยใช้ฟังก์ชัน  gets()   ลงสู่ array ทีมีการกำหนดขนาดจนมีการขึ้นตัวอักษรใหม่หรือจบไฟลซึ่่งการอ่านข้อมูลจากข้อมูลจำนวนมาก  สามารถสร้างปัญหาสำหรับโปรแกรมเมอร์ได้เพราะว่าเราไม่มีทางรู้ล่วงหน้าได้ว่ามีจำนวนอักษรเท่าไรที่เราควรจัดสรรพื้นที่ให้มันซึ่งไม่มีทางเป็นไปได้ที่จะทำการจองพื้นที่ล่วงหน้าเอาไว้ได้  วิธีแก้ที่ง่ายจึงทำได้โดยการจองพื้นที่ล่วงหน้าด้วยการจองจำนวนตัวอักษรมาก ๆไว้  จากตัวอย่างโปรแกรมเมอร์คาดว่าผู้ใช้จะใส่ข้อมูลไม่เกิน  80 ตัวอักษรแต่ถ้าผู้ใช้เกิดใส่เกิน จะทำให้เกิด error ขึ้นได้ ซึ่งมันสามารถสร้าง  error ได้ง่าย ๆ เมื่อมีการใช้ ฟังก์ชัน  copy และ ฟังก์ชั่น concatenating เพราะว่า  การใช้ฟังก์ชัน strcpy()  และ strcat() จะสามารถ copy อักษรได้ไม่จำกัด ซึ่งจากรูปที่ 1.2 เราสามารถ copy และ  concat ได้เรื่อยๆ ไม่จำกัดจนเกิน 2048 ตัวอักษร </p>
        <p>&nbsp;</p>
    </div>
      <div id="img2" align="center"><img src="../../images/learn/unbound/2.png" width="540" height="145"  alt=""/></div>
         <div id="content-img2" align="center">
           <p>รูป 1.2  Unbounded string copy and concatenation</p>
           <p>&nbsp;</p>
         </div>
         <table width="100%" border="0" colspan="0">
  <tr  >
    <td width="47" ><img src="../../images/defend-296585_640.png" width="37" height="35"  alt=""/></td>
    <td width="1188"><strong>Mitigation Strategies</strong></td>
  </tr>
  <tr  >
    <td colspan="2" >
    <div align="center">
    <img src="../../images/learn/unbound/3.png" width="549" height="228"  alt=""/>
    </div></td>
    </tr>
  <tr  >
    <td colspan="2" ><div align="center">
      <p align="center">รูป 1.3 วิธีแก้ปัญหาที่ง่ายคือการใช้ฟังก์ชัน strlen() และการใช้ dynamically allocate เพื่อใช้ในการจัดการ memory </p>
    </div></td>
    </tr>
  <tr  >
    <td ><img src="../../images/12.jpg" width="37" height="35"  alt=""/></td>
    <td><strong>video</strong></td>
  </tr>
  <tr  >
    <td colspan="2" ><div align="center">
    <iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="unbound_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div></td>
    </tr>
</table>
    <div id="img4" align="center"></div></td>
   
      <td width="172"></td>
  </tr>
</table>
