<html>
<meta charset="utf-8"> 
</html>
<table width="100%" border="0" colspan="0">
  <tr>
    <td width="41" height="36"><img src="../../images/defend-296585_640.png"  width="37" height="35"  alt=""/></td>
    <td width="987"><strong>Mitigation Strategies</strong>  &nbsp;</td>
    <td width="3" rowspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="94" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่องโหว่ของชนิดข้อมูล  integer ทั้งหมดเป็นผลมาจากช่วงของชนิดข้อมูลของ  integer ที่เกิดการความผิดพลาดขึ้น ยกตัวอย่างเช่น integer overflow เกิดขึ้นเมื่อมีการดำเนินงานสร้าง integer ที่อยู่นอกช่วงของชนิดข้อมูล integer นั้นและTruncation errors เกิดขึ้นเมื่อค่าที่จะถูกเก็บไว้ในของตัวแปรที่เป็นประเภทที่มีขนาดเล็กเกินไปและ Sign errors เกิดเมื่อค่านั้นเป็นค่าลบและจะถูกบันทึกในรูปแบบการลงนามที่ไม่สามารถรองรับช่วงค่านั้นได้เพราะช่องโหว่ของ integer ทั้งหมดที่มีข้อผิดพลาดจะอยู่ในช่วงของชนิดของการตรวจสอบ ถ้านำไปใช้อย่างถูกต้องจะสามารถกำจัดช่องโหว่ของ integer ทั้งหมดได้โดย
กลยุทธ์เพื่อใช้ในการจัดการความเสี่ยงและลดช่องโหว่ต่างๆในการเขียนภาษา C และ C++ ดังนี้

</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td height="21">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><h4>1.Range Checking</h4> </td>
    <td height="32">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คุณอาจจะคาดหวังว่าภาระการตรวจสอบในภาษา C และ C++ ในเรื่องของช่วงของ integer นั้นจะเป็นหน้าที่ของโปรแกรมเมอร์เดียว  ยกตัวอย่างเช่น  การตรวจสอบว่าค่าของ integer นั้นอยู่ในช่วงที่เหมาะสมก่อนที่นำใช้กับ index ของ array จาก โปรแกรม 2.21 เป็นช่องโหว่ของ sign-error ตัวอย่างจะแสดงให้เห็นค่าของช่วง(integer ที่เป็นลบ) สามารถนำมาใช้เพื่อหลีกเลี่ยงการตรวจสอบขอบเขตบนของ array และก่อเกิด buffer overflow ได้</td>
    <td height="51">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div id="img-rangecheak1" align="center"><img src="../../images/learn/integer/5.png" width="537" height="340"></div></td>
    <td height="118">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยเราสามารถใช้  Range  Checking มาช่วยแก้ปัญหาที่เกิดขึ้นได้จาก โปรแกรม 2.22 มีการใช้ implicit  type checking และ Explicit range check  ผลของการทำ Implicit type check  จะอยู่บนบรรทัด 3 โดย len เป็น unsigned integer โดยทั่วไปแล้วมันเป็นการดีที่เก็บเป็นชนิดข้อมูลแบบ unsigned  integer สำหรับ indices และ ขนาด และ loop  เพราะว่าไม่ควรที่จะให้มันเป็นค่าลบ บนบรรทัดที่ 7 เรียกใช้ฟังก์ชัน memcpy() จะถูกป้องกันโดยการทำ   explicit range บนบรรทัดที่ 6  ใช้สำหรับทดสอบค่าทั้งสองว่าโดยการเช็คค่าของ len มากกว่า 0  และเช็ดค่าของ len ว่าน้อยกว่าขนาดของ BUFF_SIZE ที่จองไว้หรือเปล่าเพื่อป้องกันการเกิด Overflow </p></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<div id="img-rangecheak" align="center"><img src="../../images/learn/integer/5.jpg" width="540" height="338"></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การใช้การเช็ดทั้งสองแบบ   implicit และ  explicit อาจจะเป็นวิธีการที่มากพอแล้วแต่เราควรที่จะมีความระมัดระวังมากกว่านี้เช่น  การเช็ค ค่าที่มาจากภายนอกควรมีการกำหนดค่าหรือสkมารถบอกได้ว่าเป็น  upper bound หรือ lower bound</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><strong>2.Strong type </strong></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิธีหนึ่งที่จะช่วยตรวจสอบชนิดของตัวแปรที่ดีคือการใช้ชนิดของตัวแปรที่เหมาะสม  เช่นการใช้ชนิด unsigned สามารถที่จะบอกได้ว่าตัวแปรนั้นจะไม่มีค่าลบ เพื่อป้องกันไม่ให้เกิด overflow  Strong type ควรที่จะใช้เพราะว่าจะทำให้คอมไพเลอร์มีประสิทธิภาพมากขึ้นในการระบุปัญหาต่างๆที่เกิดขึ้น<br>
    ตัวอย่าง  ของการใช้ Strong type  การประกาศตัวแปร integer ที่ใช้เก็บ อุณหภูมิ  ของน้ำ โดยใช้ สเกลของ Fahrenheit </p></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<div id="img-rangecheak3" align="center"><img src="../../images/learn/integer/6.PNG" width="524" height="190"></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพียงพอที่จะใช้แทนค่าอุณหภูมิของน้ำซึ่งอยู่ในช่วงจาก  32 ดีกรี Fahrenheit(จุดเยือกแข็ง)  ถึง 212 ดีกรีFahrenheit(จุดเดือด)ทำให้ป้องกันการเกิด  overflow  ได้ </td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">3.<strong>Compiler Checks</strong></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visual C++ .NET  2003 จะมีการเตือนค่าของ integer ที่ใช้ที่มีค่าเล็กเกินไป  (C4244) เช่นการเตือนขั้นที่ 1 อาจจะบอกว่า  ถ้า_int64  มีการใส่ค่าใน  unsigned integer การเตือนขั้นที่ 3 และ  4 อาจเตือนด้วยข้อความว่า &ldquo;ข้อมูลอาจจะสูญหายได้&rdquo; ถ้ามีการแปลง  integer ไปเป็นค่าที่เล็กกว่า <br>
    สำหรับตัวอย่าง  ตามที่มีการเตือนในขั้นที่ 4 </p></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<div id="img-rangecheak3" align="center"><img src="../../images/learn/integer/7.PNG" width="526" height="185"></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Visual  C++ .NET 2003 จะมีการเช็คในขณะ runtime เพื่อจับ  truncation error  ของ integer ที่มีการใส่ค่าน้อยกว่าตัวแปรนั้นเป็นผลให้ค่านั้นสูญหายนั้นเอง  /RTCc compiler จะมีการจับ flag error และจะสร้างผลการรายงานความผิดพลาดมาให้  Visual C++ จะการนำค่าของ runtime_check  ซึ่งมันสามารถที่จะไม่ใช้ หรือ  คืนค่าในการตั้งค่า  /RTC  แต่มันไม่สามารถนำค่า flag  เพื่อใช้สำหรับจับ runtime error อื่นได้เช่น overflow</p></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><strong>4.Safe Integer Operations</strong></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การดำเนินงานของ  integer  อาจจะส่งผลให้เกิดเงื่อนไขที่ผิดพลาดได้และอาจเกิดการสูญหายได้วิธีแรกที่ใช้ในการป้องกันช่องโหว่  integer  ควรจะตรวจสอบช่วง  integer </p>
    <div><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Explicitly Range check</p>
	      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Implicitly Range check</p> 
</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;มันเป็นการยากที่จะรับประกันว่าได้ว่าปัจจัยต่างๆที่ไม่สามารถจัดการได้นั้นอาจจะนำมาซึ่งข้อผิดพลาดที่เกิดขึ้นกับโปรแกรมบางส่วนได้
วิธีป้องกันจะใช้ safe integer  ไลบรารี่ สำหรับการดำเนินการทั้งหมดที่ทำใน integer
ตัวอย่าง ใน ภาษา  C จะมี compatible  library
	        ซึ่งเขียนโดย Michael Howard ของ Microsoft
	       -สามารถตรวจจับเงื่อนไข integer overflow  โดย IA-32 ที่ระบุไว้ใน กลไก
จากโปรแกรม 2.26  บรรทัดที่ 2 จะใช้ UAdd () ช่วยในตรวจสอบตามความเหมาะสมสำหรับเงื่อนไขที่ผิดพลาด
</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><div id="img-rangecheak3" align="center"><img src="../../images/learn/integer/8.PNG" width="540" height="308"></div>
      <div id="img2" align="center"></div>
         <div id="content-img2" align="center"></div></td>
   
      <td width="3"></td>
  </tr>
</table>
