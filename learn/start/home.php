<!DOCTYPE html> 
<html lang="en" class=""> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Page title - Sitename</title>         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="Description" lang="en" content="ADD SITE DESCRIPTION"> 
        <meta name="author" content="ADD AUTHOR INFORMATION"> 
        <meta name="robots" content="index, follow"> 
        <!-- icons -->         
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png"> 
        <link rel="shortcut icon" href="favicon.ico"> 
        <!-- Bootstrap Core CSS file -->         
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
        <!-- Override CSS file - add your own CSS rules -->         
        <link rel="stylesheet" href="assets/css/styles.css"> 
    </head>     
<style type="text/css">
.content-header{
	color: #314e7c;
	}

</style>   
    <!-- Page Content -->     
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-sm-12">
              <h2><font color="#66ab16">บทเรียน</font></h2>
              <div class="content-header"> 
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โดยบทเรียนของเราจะเเสดงช่องโหว่ของการเขียนโปรเเกรมเเบบต่างๆที่เกิดขึ้นในภาษา c  เเละจะเเสดงเเนวทางในการป้องกันช่องโหว่ต่างๆ นั้น โดยบทเรียนของเราจะประกอบไปด้วย 6 บทที่สำคัญดังนี้</p>
                    <p >1. Common String Manipulation Errors</p>
                    <p>2. String Vulnerabilities</p> 
              		<p>3. Pointer Subterfuge</p>  
              		<p>4. Integer Vulnerabilities</p>
                    <p>5. Formatted Output Vulnerabilities </p>
                    <p>6. File IO Vulnerabilities</p>
                    </div>                                       
          </div>             
        </div>         
        <!-- /.row -->         
        <div class="row margin-b-2"> 
        <div class="page-header">
       <front color="#99bbe8"><h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />Common String Manipulation Errors</h3></font>
        </div>
            <div class="col-sm-3"> 
              <a href="learn/1/unbound.html" target="_blank">
                <img  src="../../images/image-icon/Common String/1.jpg"alt="" width="278" height="149" class="img-responsive thumbnail"> 
                <div class="caption"> 
                  <h4><a href='learn/1/unbound.html' target="_blank">Unbounded String Copies</a></h4> 
                    <p>จะเกิดเมื่อมีการ copy ค่าจำนวนมากลงสู่ array ที่มีการ fix ขนาดเอาไว้<a href="learn/1/unbound.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3">
             <a href="learn/1/Off_by_One_Errors.html" target="_blank"> 
                <img class="img-responsive thumbnail" src="../../images/image-icon/Common String/2.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/1/Off_by_One_Errors.html" target="_blank">Off by One Errors</a></h4> 
                    <p>อีกปัญหาที่พบบ่อย กับ String ในภาษา C ที่เหมือนกับ unbounded string copies คือจะเกี่ยวข้องกับ การเขียนค่าใน array โดยจะเป็นการเขียนค่านอกขอบเขต ของ array<a href="learn/1/Off_by_One_Errors.html" target="_blank">..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3"> 
                <a href="learn/1/Null_Termination_Errors.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/Common String/3.jpg"  width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/1/Null_Termination_Errors.html" target="_blank">Null Termination</a></h4> 
                    <p> การประกาศค่าคงที่สำหรับตัวเเปร array ทั้งสามที่ไม่สามารถจัดสรรได้และไม่สามารถจัดเก็บข้อมูลนั้นได้<a href="learn/1/Null_Termination_Errors.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>  
            </div>   
             <div class="col-sm-3"> 
                <a href="learn/1/String_Truncation.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/Common String/4.jpg" width="278" height="149" alt="" > 
                <div class="caption"> 
                    <h4><a href="learn/1/String_Truncation.html" target="_blank">String Truncation</a></h4> 
                    <p>การตัด string เกิดขึ้นเมื่อ แถวอักขระ ปลายทาง มีขนาดไม่ใหญ่ พอที่จะบรรจุ เนื้อหาของ string การตัด string อาจเกิดขึ้น ในขณะที่อ่านค่าเข้ามาของผู้ใช้ หรือ การคัดลอก string<a href="learn/1/String_Truncation.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                   
            </div>             
        </div>         
        <!-- /.row -->         
        <div class="row margin-b-2">
          <div class ="page-header">  
             <h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />String Vulnerabilities </h3>    
             </div>           
            <div class="col-sm-3">
                 <a href="learn/2/Arc_Injection.html" target="_blank"> 
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/1.jpg"  width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/2/Arc_Injection.html" target="_blank">Arc Injection</a></h4> 
                    <p> การเปลี่ยนค่า return address ให้กลายเป็นฟังก์ชัน system พร้อมกับระบุค่าอาร์กิวเมนต์ของฟังก์ชันให้เป็นบัฟเฟอร์ที่ใส่เข้าไป  <a href="learn/2/Arc_Injection.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>     
            
            <div class="col-sm-3"> 
             <a href="learn/2/Buffer_Overflow.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/2.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/2/Buffer_Overflow.html" target="_blank">Buffer Overflow </a></h4> 
                    <p>การเขียนข้อมูลเกินขอบเขตที่ memory ที่ถูกกำหนดไว้ในโครงสร้างข้อมูลที่มีการจอง ไว้
สาเหตุที่ทำให้เกิด <a href="learn/2/Buffer_Overflow.html" target="_blank">..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>     
            <div class="col-sm-3"> 
                <a href="learn/2/Code_Injection.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/3.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/2/Code_Injection.html" target="_blank">Code Injection </a></h4> 
                    <p>เป็นการแทรก code เข้าไปในระบบ ซึ่งเมื่อมีผู้ไม่หวังดีแทรกคำสั่งของระบบ (command) เข้าไปเพื่อทำให้ระบบทำงานผิดพลาด หรือการเข้าไปถึงข้อมูลที่ไม่ได้รับอนุญาต<a href="learn/2/Code_Injection.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                          
            </div>  
             <div class="col-sm-3"> 
               <a href="learn/2/Stack_Smashing.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/4.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/2/Stack_Smashing.html" target="_blank">Stack Smashing</a></h4> 
                    <p>เกิดขึ้นเมื่อ หน่วยความจำล้น เขียนทับ ข้อมูล ในหน่วยความจำที่จัดสรรไว้ ไปยัง execution stack ซึ่งสามารถทำให้มีผลกระทบร้ายแรง สำหรับความน่าเชื่อถือ และความปลอดภัย<a href="learn/2/Stack_Smashing.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                                   
        </div>        
          </div> 
        <!-- /.row -->         
        <div class="row margin-b-2"> 
            <div class="col-sm-3"> 
                <a href="learn/2/Mitigation_Strategies.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/5.jpg"  width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/2/Mitigation_Strategies.html" target="_blank">Mitigation Strategies</a></h4> 
                    <p> ภาษา C ที่ทำสำเนาข้อมูลแต่ไม่ได้มีการตรวจสอบขนาดของข้อมูลเป็นสาเหตุของข้อผิดพลาด function call strcat(), strcpy() <a href="learn/2/Mitigation_Strategies.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                                  
        </div>         
        </div>
        <!-- /.row -->         
        <div class="row margin-b-2"> 
          <div class= "page-header">
            <h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />Pointer Subterfuge</h3>
              </div>
            <div class="col-sm-3">
                <a href="learn/3/Function_Pointers.html" target="_blank"> 
                <img class="img-responsive thumbnail" src="../../images/image-icon/Point/1.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/3/Function_Pointers.html" target="_blank">Function Pointers</a></h4> 
                    <p> นอกจากกระบวนการ "เติม" ข้อมูลเพื่อให้โปรแกรมทำงานตามที่แฮกเกอร์ต้องการแล้ว ยังมีอีกกระบวนการหนึ่ง คือการเปลี่ยนการทำงานของโปรแกรมด้วยการเปลี่ยนพอยเตอร์ ที่เรียกกระบวนการนี้ว่า Pointer Subterfuge ทำได้ในกรณีที่หน่วยความจำ<a href="learn/3/Function_Pointers.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3"> 
                <a href="learn/3/Virtual_Pointers.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/Point/2.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/3/Virtual_Pointers.html" target="_blank">Virtual Pointers</a></h4> 
                    <p>C++ ช่วยให้คำจำกัดความของการทำงานเสมือนจริง ฟังก์ชันเสมือนเป็นฟังก์ชันที่สมาชิกของคลาสที่ได้รับการประกาศว่าการใช้คำสำคัญในระบบเสมือน ฟังก์ชันการทำงานอาจถูกแทนที่ด้วยฟังก์ชันที่มีชื่อเหมือนกันในคลาสที่ได้รับมา<a href="learn/3/Virtual_Pointers.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3"> 
                <a href="learn/3/Mitigation_Strategies.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/String Vul/5.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/3/Mitigation_Strategies.html" target="_blank">Mitigation Strategies</a></h4> 
                    <p>ลดกระบวนการ ที่มีช่องโหว่ส่วนหน่วยความจำ สามารถเป็นได้ทั้ง ที่สามารถเขียนได้ หรือปฏิบัติการ แต่ไม่ใช่ทั้งสองไม่ได้ทำงาน<a href="learn/3/Mitigation_Strategies.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
        </div>         
        <!-- /.row -->    
         <div class="row margin-b-2"> 
          <div class= "page-header">
            <h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />Integer Vulnerabilities</h3>
              </div>
            <div class="col-sm-3">
                <a href="learn/4/Integer_Conversions.html" target="_blank"> 
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/1.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Integer_Conversions.html" target="_blank">Integer Conversions</a></h4> 
                    <p>การแปรชนิดของตัวเลขใน C และ C ++ นั้น จะยึดหลักการตาม C99 Standard rules โดย <a href="learn/4/Integer_Conversions.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3"> 
                <a href="learn/4/Interger_Promotions.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/2.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Interger_Promotions.html" target="_blank">Interger Promotions</a></h4> 
                    <p>จากตัวอย่างที่ Interger Promotions ต้องการค่าในแต่ละตัวแปร (c1 และ c2 ) เป็นค่าของ ขนาด int ซึ่งค่าของ int จะถูกนำมาบวกกัน และ ผลรวมจะถูกตัดทอนให้พอดีกับชนิดของ Char <a href="learn/4/Interger_Promotions.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                 
            </div>             
            <div class="col-sm-3"> 
                <a href="learn/4/Conversions_from_Unsigned_Integer_Types.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/3.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Conversions_from_Unsigned_Integer_Types.html" target="_blank" >Conversions from Unsigned Integer Types</a></h4> 
                    <p>การแปลงที่เกิดขึ้นระหว่าง signed และ unsigned integer ขนาดใดๆ และอาจส่งผลทำให้ เกิดการสูญหายของข้อมูลหรือการปัญหาการตีความของข้อมูล<a href="learn/4/Conversions_from_Unsigned_Integer_Types.html" target="_blank">..อ่านเพิ่มเติม </a></p> 
                </div>   
                </div>
                 <div class="col-sm-3"> 
                <a href="learn/4/Integer_Overflow.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/4.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Integer_Overflow.html" target="_blank" >Integer Overflow</a></h4> 
                    <p>มักจะเกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่ กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด <a href="learn/4/Integer_Overflow.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                
        </div>   
        </div>
       <div class="row margin-b-2"> 
         <div class="col-sm-3"> 
                <a href="learn/4/Sign_error.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/5.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Sign_error.html" target="_blank" >Sign error</a></h4> 
                    <p>เกิดขึ้นเมื่อมีการแปลงจาก signed integer ไปเป็น unsigned integer เมื่อ signed integer<a href="learn/4/Sign_error.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                
        </div>                           
           
        <div class="col-sm-3"> 
                <a href="learn/4/Truncation_Errors.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/6.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Truncation_Errors.html" target="_blank" >Truncation Errors</a></h4> 
                    <p>เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer <a href="learn/4/Truncation_Errors.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                
        </div>  
          <div class="col-sm-3"> 
                <a href="learn/4/Integer_Operations.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/7.jpg"  width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Integer_Operations.html" target="_blank" >Integer Operations</a></h4> 
                    <p> Integer Operations สามารถส่งผลให้เกิดเงื่อนไขพิเศษ ซึ่งผลลัพธ์ของการ operation กัน นั้นอาจจะทำให้เกิดค่าที่ไม่คาดคิดได้ ซึ่งค่าที่ไม่คาดคิดนั้นอาจจะทำให้เกิดพฤติกรรมที่ไม่คาดคิดในการเขียนโปรแกรมและช่องโหว่เรื่องความปลอดภัยได้<a href="learn/4/Integer_Operations.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                
        </div>
             
        <div class="col-sm-3"> 
                <a href="learn/4/Mitigation_ Strategies.html" target="_blank">
                <img class="img-responsive thumbnail" src="../../images/image-icon/integer/8.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/4/Mitigation_ Strategies.html" target="_blank" >Mitigation Strategies</a></h4> 
                    <p>ช่องโหว่ของชนิดข้อมูล integer ทั้งหมดเป็นผลมาจากช่วงของชนิดข้อมูลของ integer ที่เกิดการความผิดพลาดขึ้น ยกตัวอย่างเช่น integer overflow เกิดขึ้นเมื่อมีการดำเนินงานสร้าง integer<a href="learn/4/Mitigation_ Strategies.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>                
        </div>            
       </div>
          <div class="row margin-b-2">
            <div class="page-header">
         <h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />Formatted Output Vulnerabilities </h3>
          </div>
           <div class="col-sm-3">
               <a href="learn/5/Formatted_Output_Functions.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/integer/9.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Formatted_Output_Functions.html" target="_blank" >Formatted Output Functions</a></h4> 
                    <p>&nbsp;Formatted output ฟังก์ชันจะถูกระบุโดยพื้นฐานของ  C99  โดยมีดังนี้ 1).fprintf() จะเขียน output ไป stream<a href="learn/5/Formatted_Output_Functions.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>   
              
               </div>
              <div class="col-sm-3">
               <a href="learn/5/Exploiting_Formatted_Output_Functions.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/Formatted/1.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Exploiting_Formatted_Output_Functions.html" target="_blank" >Exploiting Formatted
                        <p>Output Functions</p></a></h4> 
                    <p>&nbsp;ฟังก์ชัน Formatted output จะเขียนไปเป็น array character (สำหรับตัวอย่าง sprintf() )  สมมุติว่า buffer <a href="learn/5/Exploiting_Formatted_Output_Functions.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>   
               </div>
              <div class="col-sm-3">
               <a href="learn/5/Output_Streams.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/Formatted/2.jpg"width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Output_Streams.html" target="_blank">Output_Streams</a></h4> 
                    <p>&nbsp;ฟังก์ชัน   Formatted output นี่จะถูกเขียนไปใน stream แทนไฟล์(เช่น  printf()) นอกจากนี้ยังมีความเสี่ยงของ format string<a href="learn/5/Output_Streams.html" target="_blank" >..อ่านเพิ่มเติม </a>/p> 
                </div>   
               </div>
               <div class="col-sm-3">
               <a href="learn/5/Viewing_Stack_Content.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/Formatted/3.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Viewing_Stack_Content.html" target="_blank" >Viewing Stack ontent</a></h4> 
                    <p>&nbsp;ผู้โจมตีสามารถใช้ช่องโหว่ฟังก์ชัน  formatted output  ตรวจสอบข้อมูลใน memory ได้
โปรแกรม 2.37 แสดงการ disassembled<a href="learn/5/Viewing_Stack_Content.html" target="_blank" >..อ่านเพิ่มเติม </a></p> 
                </div>   
               </div> 
               </div>
             <div class="row margin-b-2">
               <div class="col-sm-3">
                <a href="learn/5/Overwriting_Memory.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/Formatted/4.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Overwriting_Memory.html" target="_blank" >Overwriting Memory</a></h4> 
                    <p>&nbsp;ฟังก์ชัน Formatted output   นั้นจะมีการส่งค่าออกไปที่มีอันตราย เพราะ โปรเมอร์ส่วนใหญ่นั้นไม่รู้จักความสามารถของ Formatted output <a href="learn/5/Overwriting_Memory.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
               </div>
               <div class="col-sm-3">
                <a href="learn/5/Mitigation_Strategies.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/Formatted/5.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/5/Mitigation_Strategies.html"  target="_blank">Mitigation Strategies</a></h4> 
                    <p>&nbsp;ข้อเสนอแนะในการขจัดรูปแบบของช่องโหว่ format string คือการไม่อนุญาตให้ใช้สตริงในรูปแบบไดนามิก ถ้า format string อยู่ในรูปแบบสแตติก ช่องโหว่ของ format string ก็จะไม่เกิดขึ้น (ยกเว้นในกรณีของหน่วยความจำเกิดล้นที่มาจากแถวอักขระไม่เพียงพอ) การแก้ปัญหานี้มันเป็นไปไม่ได้เพราะ สตริงในรูปแบบไดนามิกมีการใช้อย่างแพร่หลาย<a href="learn/5/Overwriting_Memory.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
               </div>
               </div>
               
         <div class="row margin-b-2">
          <div class="page-header">
         <h3><img src="../../images/sword.jpg" width="53" height="42" align="texttop" />File IO Vulnerabilities</h3>
          </div>
          <div class="col-sm-3">
               <a href="learn/6/Time_of_Check_Time_of_Use.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/File/1.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/6/Time_of_Check_Time_of_Use.html" target="_blank">Time of Check Time of Use</a></h4> 
                    <p>&nbsp;ัวอย่างนี้จะ พิจารณาโปรแกรมลินุกซ์ ที่แสดงในโปรแกรม 2.43 access() ฟังก์ชั่นที่เรียกใช้ในบรรทัดที่ 5 <a href="learn/6/Time_of_Check_Time_of_Use.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
              
               </div>
           <div class="col-sm-3">
               <a href="learn/6/Symbolic_Linking_Exploits.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/File/2.jpg"  width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/6/Symbolic_Linking_Exploits.html" target="_blank">Symbolic Linking Exploits</a></h4> 
                    <p>&nbsp;พบมากที่สุดช่องโหว่ของ race-related file ที่เกี่ยวข้องกับกลไกของการ symbolic link ใน UNIX ซึ่ง symbolic link<a href="learn/6/Time_of_Check_Time_of_Use.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
              
               </div>
               <div class="col-sm-3">
               <a href="learn/6/Temporary_File_Open_Exploits.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/File/3.jpg" width="278" height="149" alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/6/Temporary_File_Open_Exploits.html" target="_blank" >Temporary File Open Exploits</a></h4> 
                    <p>&nbsp;โปรแกรมมักจะมีการใช้งาน temporary file  ปัญหาหลักที่มีกับ temporary file คือการที่จะไม่สามารถมั่นใจว่าในการตั้งชื่อไฟล์ให้ไม่ซ้ำกัน  temporary file<a href="learn/6/Temporary_File_Open_Exploits.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
              
               </div>
           <div class="col-sm-3">
               <a href="learn/6/Mitigation_Strategies.html" target="_blank">
                 <img class="img-responsive thumbnail" src="../../images/image-icon/File/4.jpg" width="278" height="149"alt=""> 
                <div class="caption"> 
                    <h4><a href="learn/6/Mitigation_Strategies.html" target="_blank" >Mitigation Strategies</a></h4> 
                    <p>&nbsp;ช่องโหว่ของ race condition จะอยู่ระหว่าง  race window  ดังนั้นการบรรเทาผลกระทบที่เห็นได้ชัดที่สุดคือการกำจัด race window ที่เป็นไปได้ ในส่วนนี้จะแสดงให้เห็นเทคนิคหลายจุดเพื่อกำจัด race window Checking File Properties Securely<a href="learn/6/Mitigation_Strategies.html" target="_blank" >..อ่านเพิ่มเติม</a></p> 
                </div>   
              
               </div>
               
               </div>
        <hr> 
        <footer class="margin-tb-3"> 
            <div class="row"> 
                <div class="col-lg-12"> 
                    <p></p> 
                </div>                 
            </div>             
        </footer>         
    </div>     
    <!-- /.container-fluid -->     
    <!-- JQuery scripts -->     
    <script src="assets/js/jquery-1.11.2.min.js"></script>     
    <!-- Bootstrap Core scripts -->     
    <script src="assets/js/bootstrap.min.js"></script>
</html>
