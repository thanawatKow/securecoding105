<html>
<meta charset="utf-8">
<title><h1>Secure coding  ระบบฝึกหัดเขียนโค้ดให้ปลอยภัย</h1></title>

</html>

<!-- ** jquery ** -->
    <script type="text/javascript" src="work/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="canvasjs/jquery.canvasjs.min.js"></script>
    <script type="text/javascript" src="loader.js"></script>
<style type="text/css">
td,th {
	color: #314e7c;
}
</style>
<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer", {
			title:{
				text: "Chart Known exploit, Unknown exploit in c",
				horizontalAlign: "center"
			},
			axisX: {
				tickThickness: 0,
				interval: 1,
				intervalType: "year"
			},
            animationEnabled: true,
			toolTip: {
				shared: true
			},
			axisY: {
				lineThickness: 0,
				tickThickness: 0,
				interval: 20
			},
			legend:{
				verticalAlign: "center",
				horizontalAlign: "left"
			},
			data: [
			{        
				name: "Unknown exploit",
				showInLegend: true,
				type: "stackedColumn100", 
				color: "#0074D9 ",
				dataPoints: [
				{x: new Date(2008,0), y: 94},
				{x: new Date(2009,0), y: 94},
				{x: new Date(2010,0), y: 113},
				{x: new Date(2011,0), y: 70},
				{x: new Date(2012,0), y: 75},
				{x: new Date(2013,0), y: 80},
				{x: new Date(2014,0), y: 90}
				]
			},
			{        
				name: "Known exploit",
				showInLegend: true,
				type: "stackedColumn100", 
				color: "green",
				dataPoints: [
				{x: new Date(2008,0), y: 21},
				{x: new Date(2009,0), y: 33},
				{x: new Date(2010,0), y: 66},
				{x: new Date(2011,0), y: 49},
				{x: new Date(2012,0), y: 27},
				{x: new Date(2013,0), y: 24},
				{x: new Date(2014,0), y: 23}
				]
			}

			]
		});

chart.render();

var chart2 = new CanvasJS.Chart("chartContainer2",
	{
		theme: "theme2",
		title:{
			text: "Chart C Overflow Vulnerability"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: false,
			toolTipContent: "{y} %",
			dataPoints: [
				{  y: 25, indexLabel: "Integer Overflow" },
				{  y: 14, indexLabel: "Unsafe Function" },
				{  y: 28, indexLabel: "Buffer overflow" },
				{  y: 14.5, indexLabel: "Race Function"},
				{  y: 18.5, indexLabel: "Function Pointer" },
			]
		}
		]
	});
	chart2.render();
}
</script>
<table width="100%" height="821" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="0%" height="269">&nbsp;</td>
    <td width="53%" rowspan="2" align="center" valign="top"><h2><img src="images/sword-and-shield-clipart-shield-swords-20064609 copy.png" width="148" height="126"  alt=""/></h2>
      <h2>ยินดีต้อนรับ <strong style="color:#4c8e0e">Secure Coding Training System!</strong></h2>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยระบบฝึกหัดการเขียนโค้ดให้ปลอยภัยด้วยภาษา C มีจุดประสงค์ให้ผู้ใช้งานศึกษาช่องโหว่ที่เกิดในภาษา C ซึ่งช่องโหว่ที่เกิดขึ้นจะนำใช้ลักลอบเจาะมาที่เป้าหมายได้หรืออาจทำให้โปรแกรมทำงานผิดพลาดได้นั้นเอง เเละจากกราฟที่สำรวจมาเเสดงจำนวนผู้ที่รู้ช่องโหว่ที่เกิดในภาษา c เเละผู้ที่ไม่รู้ช่องโหว่ที่เกิดขึ้นในภาษา c ,มีจำนวนเเตกต่างกันมาก โดยมีจำนวนผู้ที่รู้ช่องโหว่ที่เกิดขึ้นในภาษา c นั้นมีจำนวนน้อยกว่าผู้ที่ไม่รู้จักช่องโหว่ที่เกิดขึ้นในภาษา c ดังนั้นด้วยเหตุผลนี้โปรแกรมต่างๆที่เขียนขึ้นมาโดยปราศจากการคำนึงถึงเรื่องความปลอดภัยที่จะส่งผลร้ายตามมาต่อทั้งโปรแกรมของตนเองและระบบปฏิบัติการจึงเกิดขึ้นได้เสมอ<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspดังนั้นระบบของเราจะเเสดงวิธีการเขียนโปรแกรมที่ดีเพื่อไม่ให้เกิดเหตุการณ์เหล่านั้นได้โดยขั้นตอนการศึกษานั้นเราจะศึกษาตั้งแต่การโจมตีเพื่อเรียนรู้จุดอ่อนของระบบเเละเมื่อทราบถึงกระบวนการบุกรุกแล้ว ก็เป็นขั้นตอนการป้องกันเพื่อไม่ให้ก่อให้เหตุการณ์นั้นได้อีกในอนาคต </td>
      </tr>     
      </table>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td align="right">&nbsp;</td>
          </tr>
        </table>
    </p></td>
    <td colspan="2" valign="top"><div id="chartContainer" style="height: 300px; width: 100%;"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="10%"></td>
    <td width="37%" >References: Microsoft Corporation, Software Vulnerability Exploitation Trends, Technical Report,  2015.</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr><td width="43%" rowspan="5"><div id="chartContainer2" style="height: 400px; width: 100%;"></div><table border="0" cellpadding="0" cellspacing="0">
          </table></td>
        <td width="56%"><div></div></td>
        <br>
        <td width="1%" rowspan="5"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จากกราฟจะเเสดงช่องโหว่ที่มักเกิดขึ้นบ่อยๆในการเขียนโปรเเกรมภาษา c โดยช่องโหว่ที่มักเกิดขึ้นมากที่สุดคือ จะเป็นช่องโหว่ที่เกิดขึ้นจาก Buffer Overflow คิดเป็น 28 % เเละรองลงมาก็จะเป็นช่องโหว่ที่เกิดขึ้นกับ Integer Overflow คิดเป็น 25 % เเละ รองลงมาก็จะเป็น Function Pointer คิดเป็น  18.5 % เเละ รองลงมาก็จะเป็น  Race Function คิดเเป็น 14.5 % เเละ &nbsp;&nbsp;&nbsp;Unsafe Function คิดเป็น 14 %  </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
