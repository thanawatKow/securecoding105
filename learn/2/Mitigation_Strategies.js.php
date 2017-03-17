<html>
<meta charset="utf-8"> 
</html>
<link rel="stylesheet" href="../start/assets/css/bootstrap.min.css"> 
        <!-- Override CSS file - add your own CSS rules -->         
<link rel="stylesheet" href="../start/assets/css/styles.css"> 

<link href="strcpy_embed.css" rel="stylesheet" type="text/css">
<div align="center">
  <table width="100%" border="0" colspan="0">
    <tr>
    <p> </p>
      <td width="41" height="36"> <img src="../../images/defend-296585_640.png"  width="37" height="35"  alt=""/></td>
      <td width="988"><strong>Mitigation Strategies</strong></td>
      <td width="3" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td height="52" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภาษา C ที่ทำสำเนาข้อมูลแต่ไม่ได้มีการตรวจสอบขนาดของข้อมูลเป็นสาเหตุของข้อผิดพลาด (เช่นเดียวกับโปรแกรมเมอร์ที่ใช้ function call เหล่านี้) function call strcat(), strcpy(), sprintf(), vsprintf(), bcopy(), gets() และ scanf() สามารถนำมาใช้ประโยชน์จากช่องโหว่ได้ เนื่องจากฟังก์ชันเหล่านี้ไม่มีการตรวจสอบว่า buffer (พื้นที่ของหน่วยความจำ ใช้สำหรับเก็บข้อมูล) ที่ได้รับการจัดสรรพื้นที่ใน stack มีขนาดใหญ่เพียงพอสำหรับข้อมูลที่จะถูกทำสำเนาลงใน buffer หรือไม่ ขึ้นอยู่กับโปรแกรมเมอร์ว่าจะใช้ฟังก์ชันที่มีการตรวจสอบ(เช่น strncpy() )หรือนับจำนวนไบต์ของข้อมูล ก่อนที่จะทำสำเนาลงใน stack หรือไม่ เราจึงมีการใช้ฟังก์ชันเพื่อเข้ามาทดแทน
       <br> </br>
       
       <table class="table table-striped" width="647">
    <thead>
    <tr>
    <th># </th> 
    <th>ฟังก์ชัน</th>
    <th>ความปลอดภัย</th>
    <th>การแก้ไข </th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>strcpy</td>
    <td>ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย </td>
    <td>เปลี่ยนไปใช้ฟังก์ชั่น strncpy หรือ strlcpy</td>
    </tr>
    <tr>
    <td height="29">2</td>
    <td>memcpy</td>
    <td>ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย</td>
    <td>ทำให้ตัวแปรที่จะนำมารับค่ามีขนาดพอเพียงสำหรับการรับค่า</td>
    </tr>
    <tr>
    <td>3</td>
    <td>strcat</td>
    <td>ไม่ได้ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย</td>
    <td>เปลี่ยนไปใช้ฟังชั่น strcat หรือ strlcat แทน</td>
    </tr>
    <tr>
    <td>4</td>
    <td>strncat</td>
    <td>ง่ายต่อการใช้งานที่ไม่ถูกต้อง(เช่น การคำนวณค่าสูงสุดที่ตัวแปรสามารถรับได้)</td>
    <td>ใช้ฟังก์ชั่น strlcat หรือคำนวณค่าสูงสุดที่ตัวแปรรับได้ให้ถูกต้อง</td>
    </tr>
     <tr>
    <td>5</td>
    <td>get,_getts</td>
    <td>ไม่ได้ตรวจสอบการเกิด buffer overflow</td>
    <td>ใช้ฟังก์ชัน fgets แทน </td>
    </tr>
    </tbody>
    </table>
  
    <tr>
      <td ><img src="../../images/12.jpg" width="37" height="35"  alt=""/></td>
    <td><strong>video</strong></td>
 
    </tr>
    <tr  >
    <td colspan="2" ><div align="center"><iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="strcpy_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
   </div></td>
    </tr>
</div>
