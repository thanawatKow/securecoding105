// Setup your quiz text and questions here

// NOTE: pay attention to commas, IE struggles with those bad boys

var quizJSON = {
    "info": {
        "name":    "เเบบทดสอบ",
        "main":    "<p>เเบบฝึกหัดจะประกอบไปด้วยข้อสอบทั้งหมด 20 ข้อด้วยกัน ซึ่งถามจะประกอบไปด้วยเนื้อหาเเต่ละบทรวมกัน </p>",
        "results": "",
        "level1":  "ยอดเยี่ยม",
        "level2":  "ดีมาก",
        "level3":  "ปานกลาง",
        "level4":  "ปกติ",
        "level5":  "ต่ำ" // no comma here
    },
    "questions": [
        { // Question 1 
            "q":"1.ฟังก์ชันที่ส่วนหนึ่งของโปรแกรมที่รันบนระบบ 32 x86 bit ซึ่งคอมไฟเลอร์ไม่มีการเปลี่ยนค่าลำดับของตัวแปรบนstack<p>void function(char *input)</p><p>{</p><p>&nbsp;&nbsp;int i = 1;</p><p>&nbsp;&nbsp;char buffer[8];</p><p>&nbsp;&nbsp;int j = 2;</p><p>&nbsp;&nbsp;strcpy(buffer,input);</p><p>&nbsp;&nbsp;printf(%x %x %s \n, i,j,buffer);</p><p>}</p>อะไรคือค่าน้อยสุดของความยาวของสตริงที่ส่งผ่านอินพุตพารามิเตอร์ที่ทำให้โปรแกรมเกิดการแคลช",
            "a": [
                {"option": "9",      "correct": false},
                {"option": "10",     "correct": false},
                {"option": "11",     "correct": false},
                {"option": "12",     "correct": true} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span> คำตอบคือ 12 ครับ เพราะ ตั้งแต่ สตริงมีการเก็บและล้นไปได้ถึง 13 ไบต์ และ สตริงที่จะทำให้เกิดการแคลชของโปรแกรมคือตัวแรกที่เขียนทับ EBP</p>" // no comma here
        },
        { // Question 2 - Multiple Choice, Multiple True Answers, Select Any
            "q": "ถ้า memory address ของฟังชั่น puts(“Access granted”) เป็น 0x004010B6 เราจะใส่ค่าอินพุตอย่างไรเพื่อให้โปรแกรมรับค่า password ที่ผิด(คำตอบเป็นเลขฐานสิบหกของสตริง)<p>#include <stdio.h></p><p>#include <string.h></p><p>void function(char *input)</p><p>{</p><p>&nbsp;&nbsp;int i = 1;</p><p>&nbsp;&nbsp;char buffer[8];</p><p>&nbsp;&nbsp;int j = 2;</p><p>&nbsp;&nbsp;strcpy(buffer,input);</p><p>&nbsp;&nbsp;printf(%x %x %s\n,i,j,buffer);</p><p>}</p><p>int main(int argc, char* argv[])</p><p>{</p><p> &nbsp;&nbsp;int k=3;</p><p>&nbsp;&nbsp;function(argv[1]);</p><p>if (strcmp(argv[1],secret)) {</p><p>&nbsp;&nbsp;puts(Access denied);</p><p>&nbsp;&nbsp;return -1;</p><p>}</p><p>else { </p><p>&nbsp;&nbsp;puts(Access granted);</p><p> }</p><p>&nbsp;&nbsp;return 0;</p><p></p><p>}</p>",
            "a": [
                {"option": "1.00000000000000000000000000000000b6104000 ", "correct": false},
                {"option": "2.00000000000000000000000000000000004010b6 ", "correct": false},
                {"option": "3.20202020202020202020202020202020004010b6 ", "correct": false},
                {"option": "4.2020202020202020202020202020202020b61040 ", "correct": false},
				{"option": "5.20202020202020202020202020202020b6104000 ", "correct": true} // no comma here
            ],
            "select_any": true,
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบคือ ข้อ 5. 20202020202020202020202020202020b6104000 ครับ จากสตริงนี้ ไบต์ที่ 0-7 สำหรับ ตัวแปรบัฟเฟอร์ และไบต์ 8-11 ที่เกิดการเขียนทับด้วยตัวแปร Iไบต์ที่ 12- 15 คือไบต์ที่เขียนทับพอยเตอร์ของสแต็ค(EBP)และไบต์ที่ 16- 19 คือไบต์เขียนทับ return address  ตั้งแต่สถาปัตยกรรม x86 เป็น little-endian  memory address ต้องการที่จะเก็บค่า b6104000  ในตอนที่เราใช้ strcpy เราไม่ควรใช้ null ถ้าไม่ใช้ตัวสุดท้าย</p>" // no comma here
        },
        { // Question 3 - Multiple Choice, Multiple True Answers, Select All
            "q": "void function()<p>{</p><p>&nbsp;&nbsp;&nbsp;&nbsp;int i,j,k;</p> <p>&nbsp;&nbsp;&nbsp;&nbsp;unsigned int u,v;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;i = INT_MAX; // 2147483647</p><p>&nbsp;&nbsp;&nbsp;&nbsp; i++;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;printf(i = %d, i);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;j = INT_MIN; // -2147483648  </p><p>&nbsp;&nbsp;&nbsp;&nbsp;j--;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;printf(j = %d, j);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;k = INT_MIN; // -2147483648</p><p>&nbsp;&nbsp;&nbsp;&nbsp;k = abs(k);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;printf(k = %d, k);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;u = UINT_MAX; // 4294967295</p><p>&nbsp;&nbsp;&nbsp;&nbsp;u++;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;printf(u = %u, u);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;v = 0;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;v--;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;printf(v = %u v);</p><p>}</p>ข้อไหน เป็นค่าที่ได้จากการแสดงค่าของข้อมูลจากโจทย์",
            "a": [
                {"option": "1.i = 2147483648, j = -2147483649, k = 2147483648, u = 4294967296, v = -1 ",           "correct": false},
                {"option": "2.i = -2147483648, j = 2147483647, k = 2147483648, u = 0, v = 4294967295 ",                  "correct": false},
                {"option": "3.i = 0, j = 0, k = 2147483648, u = 0, v = 4294967295 ",  "correct": false},
                {"option": "4.i = -2147483648, j = 2147483647, k = -2147483648, u = 0, v = 4294967295 ",          "correct": true},
				{"option": "5.i = -2147483648, j = 2147483647, k = 0, u = 0, v = 4294967295 ",          "correct": false}  // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบ คือ 4 .i = -2147483648, j = 2147483647, k = -2147483648, u = 0, v = 4294967295 ครับ เพราะ จากการคำนวณค่า  2’s complement ค่าของ i จะเกิดการล้นไปใน  INT_MIN และ ค่าตัวแปร j จะล้นไป INT_MAX  ฟังชั่น abs() จะคำนวณผลลัพธ์โดยการคูณอินพุตด้วย -1 ถ้ามันเป็นลบตั้งแต่ 2147483648 จะไม่แสดงใน 32 bit ของ signed integer  k จะเกิดการ overflow ลงไปใน INT_MIN ส่วน u จะเกิดการ overflow ไป 0 ตั้งแต่ UINT_MAX+1 จะไม่สามารถแสดง 32 –bit  unsigned integer สิ่งที่เหมือนกัน v จะเกิดการล้นไปยัง UINT_MAX</p>" // no comma here
        },
        { // Question 4
            "q": "ข้อใดต่อไปนี้เป็นจริงเกี่ยวกับ buffer overflow",
            "a": [
                {"option": "1.Buffer overflows บน heap ไม่สามารถ exploited สำหรับการรัน arbitrary code",    "correct": false},
                {"option": "2.ถ้า ฟังก์ชั่น มีช่องโหว่ buffer overflow โดยuser ป้อนค่าอินพุตขนาดใหญ่ ลงสู่ buffer ที่มีขนาดเล็ก เราจะสามารถแก้โดยการเพิ่มขนาด buffer ขึ้นเพื่อลดผลกระทบของ ช่องโหว่",     "correct": false},
                {"option": "3.Buffer overflows สามารถใช้ปรับเปลี่ยน state และ operation ของ ช่องโหว่ Application ใน วิธีการตรวจสอบ",      "correct": true},
                {"option": "4.ถ้า code ไม่สามารถดำเนินการบน stack (e.g. through the use of the non-execute bit or DEP),ผู้โจมตีไม่สามารถรัน arbitrary code โดยการ exploiting ด้วย buffer overflow",   "correct": false}, // no comma here
				{"option": "5.การเรียกฟังก์ชั่น free() สองครั้งใน memory address เดียวกันสามารถทำให้โปรแกรม แคลช แต่ไม่ได้เป็นสาเหตุให้เกิดการ exploitable ของ buffer overflow",   "correct": false} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ </span>เพราะ ข้อ 1. ไม่ใช่  เพราะheap-base buffer overflows สามารถทำให้การ exploit ได้ยาก แต่ผู้โจมตีก็ยังสามารถรัน arbitrary code ได้ <p>ข้อ 2.ไมใช่ เพราะ่ ในกรณีส่วนมาก ผู้โจมตีส่วนมากสามารถใส่ค่าอินพุตขนาดใหญ่มาก โดยทั่วไปจะขนาด 100 Kb หรือมากกว่านั้น ใน buffer ที่มีขนาด fix size  ถึงแม้จะมีการเพิ่มขนาด buffer size ก็ไม่สามารถช่วยอะไรได้เพราะผู้โจมตีจะเพิ่มขนาดของของ shellcode ขึ้นไปอีก</p>ข้อ 3 ใช่ เพราะ ถ้าผู้โจมตีเท่านั้นที่จะเขียนทับ local variables บน stack</p><p>ข้อ 4 ไม่ใช่ เพราะ มันเป็นเทคนิคทั่วไปที่จะสามารถหลีกเลี่ยง DEP และ  เทคนิคคล้ายๆ ยกตัวอย่างเช่น return-to-libc และ return-oriented</p><p>ข้อ 5 ไมใช่ เพราะ ในความเป็นจริง ดับเบิล free จะนำมาสู่การเกิด buffer overflow บน heap ได้</p></p>" // no comma here
        },
        { // Question 5
            "q": "อะไรที่จะทำให้การแทนที่สำหรับ a และ b สามารถสร้างความมั่นใจสำหรับฟังก์ชั่นจะทำงานได้อย่างถูกต้องสำหรับค่า data 1 และ data 2<p>const unsigned short int MAX_BUFFER_SIZE=4096;</p><p>char *mergeData(char * data1, char * data2) { </p><p>&nbsp;&nbsp;char *buffer=null;</p><p>&nbsp;&nbsp;unsigned int d1len = strlen(data1);</p><p>&nbsp;&nbsp;unsigned int d2len = strlen(data2)</p><p> if(A) { </p><p>&nbsp;&nbsp;buffer = (char *) malloc(B);</p><p>if(buffer)</p><p>&nbsp;&nbsp;sprintfs(buffer, B, %s,%s, data1,data2);</p><p>}</p><p> &nbsp;&nbsp;return buffer;}</p>",
            "a": [
                {"option": "1.d1len + d2len <= MAX_BUFFER_SIZE B: d1len + d2len ",    "correct": false},
                {"option": "2.d1len <= MAX_BUFFER_SIZE - d2len B: d1len + d2len + 1 ",     "correct": false},
				{"option": "3.(d2len + 2 <= MAX_BUFFER_SIZE) && (d1len + 2 <= MAX_BUFFER_SIZE - d2len) B: d1len + d2len + 2  ",     "correct": false} ,
				{"option": "4.d1len + d2len + 2 <= MAX_BUFFER_SIZE B: d1len + d2len + 2 ",     "correct": false},
				{"option": "5.(d2len <= MAX_BUFFER_SIZE - 2) && (d1len <= MAX_BUFFER_SIZE - d2len - 2) B: d1len + d2len + 2 ",     "correct": true}
				// no comma here
            ],
            "correct": "<p><span>ถูก ครับ</span> เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบคือ ข้อ 5. (d2len <= MAX_BUFFER_SIZE - 2) && (d1len <= MAX_BUFFER_SIZE - d2len - 2) B: d1len + d2len + 2 ครับ เพราะ มันจำเป็นที่จะมีการจองพื้นที่ของ strlen(data1)+strlen(data2)+2 bytes เพราะมันทีคอมม่าระหว่าง สตริงสองค่า ในฟังก์ชั่น sprintf และ trailing zero ต้องการจะเก็บ อย่างไรก็ตาม สำหรับ d1len ที่มีขนาดใหญ่ และ d2len ซึ่งมีขนาดเล็ก ตัวอย่างเช่น ถ้า data1 = 65534 byte และ data2= 1 byte long-d1len+d2len+2 สามารถเกิด overflow ของจำนวนน้อยกว่า MAX_BUFFER_SIZE และการผ่านการตรวจสอบดังนั้น อินพุตที่ผ่านการตรวจสอบด้วยตัวมันต้องที่จะหลีกเลี่ยง arithmetical integer overflows ในกรณีนี้ สามารถทำให้ทำงานได้โดยแยกสองอันและเช็กความปลอดภัยที่ละอัน</p>" // no comma here
        }, // no comma here
		{ // Question 5
            "q": "เมื่อการติดต่อด้วย unicode user input ในภาษาซี ละปัญหาด้านล่างต้องการที่จะนำเข้าสู่ account",
            "a": [
                {"option": "1.Unicode characters ควรจะใช้ bypass black-list filtering",    "correct": true},
                {"option": "2.ในทุกๆ การ encoding ขนาดของตัวอักษร Unicode อาจจะ แตกต่าง จากกันและกัน",     "correct": true},
				{"option": "3.ใช้ขนาดของ unicode สตริงจะแตกต่างจากขนาด size",     "correct": true},  
				{"option": "4.Unicode strings ไม่สามารถแสดงบนหน้าจอได้",     "correct": false},
				{"option": "5.ตัวควบคุมทิศทางเช่น U + 202E อาจจะเกิด exploited",     "correct": true} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ </span> ข้อ 1.Unicode characters ควรจะใช้ bypass black-list filtering ใช่ เพราะfilterin gอาจใช้ Unicode conversation routine ที่แตกต่าง กว่า การเรียกฟังชั่น<p>ข้อ 2.ในทุกๆ การ encoding ขนาดของตัวอักษร Unicode อาจจะ แตกต่าง จากกันและกัน ใช่ เพราะตัวอักษรที่แสดงความยาวหลากหลายสำหรับตัวอักษรที่แตกต่างใน UTF-8 encoding</p><p>ข้อ 3.ใช้ขนาดของ unicode สตริงจะแตกต่างจากขนาด size ใช่ เพราะ ขึ้นอยู่กับ Unicode encoding ที่จะใช้ size อาจจะสามารถขยายได้เป็นสี่เท่าของความยาว </p><p> ข้อ 4.Unicode strings ไม่สามารถแสดงบนหน้าจอได้ ไม่ใช่ เพราะ ทุกฟังชั่นสามารถมีคู่ unicode ยกตัวอย่างเช่น wprintf แทนที่ printf</p><p>ข้อ 5. ตัวควบคุมทิศทางเช่น U + 202E อาจจะเกิด exploited ใช่ เพราะ ถ้า สตริงที่ผู้ใช้ให้ concatenated ด้วยองค์ประกอบ UI ก็อาจถูกนำมาใช้เพื่อย้อนกลับไปในตัวข้อความองค์ประกอบ UI</p> </p>" // no comma here
        },// no comma here
		{// Question 6
			"q": "#define ll 12<p>char pwd[37], n[ll];</p><p>void s(char *u)</p> <p>{</p><p>&nbsp;&nbsp;strncpy(n,u,ll);</p> <p>&nbsp;&nbsp;printf(n);</p><p>}</p></p>คุณสามารถแก้ไขโค้ดด้านล่างอย่างไร",
            "a": [
                {"option": "1.char pwd[37], n[ll+1]; ",    "correct": false},
                {"option": "2.#define ll 13 ",     "correct": false},
				{"option": "3.void s(char *u) {strncpy(n,u,ll-1); printf(n);}" ,     "correct": false},  
				{"option": "4.void s(char *u) {strncpy(n,u,11); printf(“%s”, n);} ", "correct": true},
				{"option": "5.void s(char *u) {strncpy(n,u,ll-1); cout << n;} ",     "correct": true} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ </span>เข้อ 1.char pwd[37], n[ll+1]; ไมใช่ เพราะ่ นี้เป็นการแก้ไข off-by-one error  ใน strncpy  แต่ไม่สามารถแก้ไขช่องโหว่ printf <p>ข้อ 2.#define ll 13 ไม่ใช่ เพราะ ไม่มีการแก้ไข bug มีแต่การเพิ่มขนาดไซต์ <p>ข้อ 3.void s(char *u) {strncpy(n,u,ll-1); printf(n);}  ไม่ใช่ เพราะ  นี้เป็นการแก้ไข off-by-one error  ใน strncpy  แต่ไม่สามารถแก้ไขช่องโหว่ printf</p><p>ข้อ 4. void s(char *u) {strncpy(n,u,11); printf(“%s”, n);}ไช เพราะ มีการแก้ไขทั้ง off-by-one error   และ ช่องโหว่ printf แต่ยากที่เข้ารหัสจำนวนตัวอักษรที่จะคัดลอกอาจก่อให้เกิดปัญหาในอนาคต่ </p><p>ข้อ 5. void s(char *u) {strncpy(n,u,ll-1); cout << n;} ใช่ เพราะ  มีการแก้ไขทั้ง off-by-one error   และ ช่องโหว่ printf </p></p>" // no comma here
        } ,// no comma here
		{// Question 7
			"q": "ค่าไหนสำหรับพารามิเตอร์ toprint ที่ทำให้เกิดฟังก์ชั่น print out รหัสลับในโค้ดด้านล่างนี้ได้หรือไม่?<p>#define INPUT_SIZE  16</p><p>bool checkPass(char *toprint)</p><p>{</p><p>&nbsp;&nbsp;bool    result;</p><p>&nbsp;&nbsp;char input[INPUT_SIZE]=' ';</p><p>&nbsp;&nbsp;char    *secret;</p><p>&nbsp;&nbsp;secret=(char*)malloc(INPUT_SIZE);</p><p>&nbsp;&nbsp;Readfile(SecretPassword.txt,secret,INPUT_SIZE);</p><p>&nbsp;&nbsp;printf(toprint);</p><p>&nbsp;&nbsp;gets_s(input,INPUT_SIZE);</p><p>&nbsp;&nbsp;result=!strcmp(secret,input);</p><p>&nbsp;&nbsp;free(secret);</p><p>&nbsp;&nbsp;return result;</p><p>}</p>",
            "a": [
                {"option": "1.%n %08x %08x %08x %08x %08x ",    "correct": false},
                {"option": "2.%08x %08x %08x %08x %08x %s ",    "correct": true},
				{"option": "3.%s %08x %08x %08x %08x %08x " ,   "correct": false},  
				{"option": "4.%100s ",     "correct": false},
				{"option": "5.%08x %08x %08x %08x %08x %08x  ", "correct": false} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span> คำตอบที่ถูกต้องคือ ข้อ 2.%08x %08x %08x %08x %08x %s เพราะ  สี่ '% 08X get ฟังก์ชั่น  printf ในการอ่านที่ผ่านมาตัวแปรสำคัญในท้องถิ่น (' ผล ': บูลีน 4 ไบต์' อินพุตข้อมูล ': อาร์เรย์ 16 ไบต์) และ'% s 'จะดำเนินการ secret char pointer เป็นสตริง และพิมพ์เนื้อหาของมัน</p>" // no comma here
        } ,// no 
		{// Question 8
			"q": "ถ้าในโค้ดด้านล่าง toprint points ที่ '% 08X% 08X% 08X% 08X% 08X% N' อะไรคือ character ที่ผู้ใช้ต้องใส่เพื่อที่จะผ่านการตรวจสอบรหัสผ่านไม่คำนึงถึงค่ารหัสผ่านที่อ่านได้จาก SecretPassword.txt?<p>#define INPUT_SIZE  16</p><p> bool checkPass(char *toprint)</p><p>{</p><p>&nbsp;&nbsp;bool result;</p><p>&nbsp;&nbsp;char input[INPUT_SIZE]=' ';</p><p>&nbsp;&nbsp;char  *secret;</p><p>&nbsp;&nbsp;secret=(char*)malloc(INPUT_SIZE);</p><p>&nbsp;&nbsp;Readfile(SecretPassword.txt,secret,INPUT_SIZE);</p><p>&nbsp;&nbsp;printf(toprint);</p><p>&nbsp;&nbsp;gets_s(input,INPUT_SIZE);</p><p>&nbsp;&nbsp;result=!strcmp(secret,input);</p><p>&nbsp;&nbsp;free(secret);</p><p>&nbsp;&nbsp;return result;</p><p>}</p>",
            "a": [
                {"option": "1.0x08",    "correct": false},
                {"option": "2.0x0A",     "correct": false},
				{"option": "3.0x15" ,    "correct": false},  
				{"option": "4.0x28",    "correct": false},
				{"option": "5.0x2D",     "correct": true} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 5.0x2D เพราะ  % N เขียนจำนวนไบต์ที่ได้รับการเขียนออกมาลงในเป็นสตริงตัวของสแต็คพอยเตอร์ในขณะนี้ชี้ไปตำแหน่งปัจจุบัน ในกรณีนี้มี 20 ไบต์อ่านด้านบนของสแต็ค (ที่ผล 'และ' การป้อนข้อมูล 'ตัวแปร) และ 45 ตัวอักษรที่เขียนออกมา ('% 08X 'เขียน 8 ตัวอักษรและมีช่องว่าง 6)  ดังนั้น 0x2D (45 Hex) จะถูกเก็บไว้ในพื้นที่หน่วยความจำที่ถูกอ้างถึงโดย secret pointer</p>" // no comma here
        }, // no 
		{// Question 9
			"q": "Arc Injection  คืออะไร เเละทำงานได้อย่างไร ",
            "a": [
                {"option": "1.การเปลี่ยนค่า return address ให้กลายเป็นฟังก์ชัน system พร้อมกับระบุค่าอาร์กิวเมนต์ของฟังก์ชันให้เป็นบัฟเฟอร์ที่ใส่เข้าไป ทำให้แฮกเกอร์สามารถเรียกคำสั่งอะไรก็ได้",    "correct": true},
                {"option": "2.เป็นการแทรก code เข้าไปในระบบ ซึ่งเมื่อมีผู้ไม่หวังดีแทรกคำสั่งของระบบ (command) เข้าไปเพื่อทำให้ระบบทำงานผิดพลาด หรือการเข้าไปถึงข้อมูลที่ไม่ได้รับอนุญาต",     "correct": false},
				{"option": "3.การเขียนข้อมูลเกินขอบเขตที่ memory ที่ถูกกำหนดไว้ในโครงสร้างข้อมูลที่มีการจอง ไว้" ,    "correct": false},  
				{"option": "4.เกิดเมื่อมีการ copy ค่าจำนวนมากลงสู่ array ที่มีการ fix ขนาด",    "correct": false},
				{"option": "5.หน่วยความจำล้น เขียนทับ ข้อมูล ในหน่วยความจำที่จัดสรรไว้ ไปยัง execution stack ซึ่งสามารถทำให้มีผลกระทบร้ายแรง",     "correct": false} // no comma here
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 1. การเปลี่ยนค่า return address ให้กลายเป็นฟังก์ชัน system พร้อมกับระบุค่าอาร์กิวเมนต์ของฟังก์ชันให้เป็นบัฟเฟอร์ที่ใส่เข้าไป ทำให้แฮกเกอร์สามารถเรียกคำสั่งอะไรก็ได</p>" // no comma here
        },
        {// no // Question 10
		"q": "การใช้ฟังก์ชัน ฟังก์ชัน strcpy มีความปลอดภัยหรือไม่ เเละ ถ้าไม่ปลอดภัยเราสามารถใช้อะไรเพื่อลดความเสี่ยงที่เกิดขึ้นได้ ",
            "a": [
                {"option": "1.ปลอดภัย เพราะ มีการตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย",    "correct": false},
                {"option": "2.ไม่ปลอดภัย เพราะ ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย สามารถใช้  strncpy ",     "correct": true},
				{"option": "3.ปลอดภัย เพราะ ทำให้ตัวแปรที่จะนำมารับค่ามีขนาดพอเพียงสำหรับการรับค่า" ,    "correct": false},  
				{"option": "4.ไม่ปลอดภัย เพราะ ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย สามารถใช้  memcpy",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 2.ไม่ปลอยภัย เพราะ ไม่ได้ตรวจสอบการเกิด buffer overflow ขณะที่ทำสำเนาไปยังเป้าหมาย สามารถใช้  strncpy </p>" // no comma here
         }, 
		 {// Question 11
		"q": "Code Injection คืออะไร เเละ ทำงานอย่างไร",
            "a": [
                {"option": "1.เป็นการแทรก code เข้าไปในระบบ ซึ่งเมื่อมีผู้ไม่หวังดีแทรกคำสั่งของระบบ (command) เข้าไปเพื่อทำให้ระบบทำงานผิดพลาด หรือการเข้าไปถึงข้อมูลที่ไม่ได้รับอนุญาต",    "correct": true},
                {"option": "2.การเขียนข้อมูลเกินขอบเขตที่ memory ที่ถูกกำหนดไว้ในโครงสร้างข้อมูลที่มีการจอง ไว้",     "correct": false},
				{"option": "3.เกิดเมื่อมีการ copy ค่าจำนวนมากลงสู่ array ที่มีการ fix ขนาด" ,    "correct": false},  
				{"option": "4.หน่วยความจำล้น เขียนทับ ข้อมูล ในหน่วยความจำที่จัดสรรไว้ ไปยัง execution stack ซึ่งสามารถทำให้มีผลกระทบร้ายแรง",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 1.เป็นการแทรก code เข้าไปในระบบ ซึ่งเมื่อมีผู้ไม่หวังดีแทรกคำสั่งของระบบ (command) เข้าไปเพื่อทำให้ระบบทำงานผิดพลาด หรือการเข้าไปถึงข้อมูลที่ไม่ได้รับอนุญาต</p>" // no comma here
		}, 
		{ // Question 12
		"q": "Integer overflow คืออะไร เเละทำงานอย่างไร ",
            "a": [
                {"option": "1.เกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด ",    "correct": true},
                {"option": "2.เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น","correct": false},
				{"option": "3.สามารถส่งผลให้เกิดเงื่อนไขพิเศษ ซึ่งผลลัพธ์ของการ operation กัน นั้นอาจจะทำให้เกิดค่าที่ไม่คาดคิดได้ " ,    "correct": false},  
				{"option": "4.เกิดขึ้นเมื่อมีการแปลงจาก signed integer ไปเป็น unsigned  integer  เมื่อ signed integer ถูกแปลงไปเป็น unsigned integer ที่มีขนาดเท่ากัน  bit pattern  จะถูกเก็บรักษาไว้",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 1.เกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด</p>" // no comma here
        }, 
		{ // Question 13
		"q": "Sign Error คืออะไร เเละทำงานอย่างไร ",
            "a": [
                {"option": "1.เกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด",    "correct": false},
                {"option": "2.เกิดขึ้นเมื่อมีการแปลงจาก signed integer ไปเป็น unsigned  integer  เมื่อ signed integer ถูกแปลงไปเป็น unsigned integer ที่มีขนาดเท่ากัน  bit pattern  จะถูกเก็บรักษาไว้",     "correct": true},
				{"option": "3.สามารถส่งผลให้เกิดเงื่อนไขพิเศษ ซึ่งผลลัพธ์ของการ operation กัน นั้นอาจจะทำให้เกิดค่าที่ไม่คาดคิดได้" ,    "correct": false},  
				{"option": "4.เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 2.เกิดขึ้นเมื่อมีการแปลงจาก signed integer ไปเป็น unsigned  integer  เมื่อ signed integer ถูกแปลงไปเป็น unsigned integer ที่มีขนาดเท่ากัน  bit pattern  จะถูกเก็บรักษาไว้ </p>" // no comma here
        }, 
		{ // Question 14
		"q": "Truncation Errors คืออะไร เเละทำงานอย่างไร",
            "a": [
                {"option": "1.เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น",    "correct": false},
                {"option": "2.สามารถส่งผลให้เกิดเงื่อนไขพิเศษ ซึ่งผลลัพธ์ของการ operation กัน นั้นอาจจะทำให้เกิดค่าที่ไม่คาดคิดได้",     "correct": false},
				{"option": "3.เกิดขึ้นเมื่อ จำนวน integer มีค่าเกินกว่าค่าสูงสุดของค่า integer ที่กำหนดไว้หรือลดลงเกินกว่าค่าต่ำสุด" ,    "correct": false},  
				{"option": "4.เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น",    "correct": true},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 4.เกิดขึ้นเมื่อ integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น</p>" // no comma here
		},
		{ // Question 15
		"q": "จากโปรเเกรมต่อไปนี้ ค่าของ u มีค่าเท่าไร เเละ เพราะอะไรถึงเป็นเช่นนั้น <p>&nbsp;&nbsp;&nbsp;int i = -3;</p><p>&nbsp;&nbsp;&nbsp;int unsigned short u;</p><p>&nbsp;&nbsp;&nbsp;int u = i;</p><p>&nbsp;&nbsp;&nbsp;int printf(u = %hu\n, u);</p>",
            "a": [
                {"option": "1.6552 เพราะ เกิดจาก truncation error",    "correct": false},
                {"option": "2.6553 เพราะ เกิดจาก Integer Overflow ",     "correct": false},
				{"option": "3.65533 เพราะ เกิดจาก Sign error" ,    "correct": true},  
				{"option": "4.512  เพราะ เกิดจากค่าของตัวเเปร i",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 3. 65533 เพราะ เกิด Sign error เพราะ เมื่อ signed integer ถูกแปลงไปเป็น  unsigned integer ด้วยค่าที่มีขนาดใหญ่กว่า จะมีการขยายค่านั้นก่อนที่จะมีการแปลงค่า </p>" // no comma here
        },
		{ // Question 16
		"q": "จากโปรเเกรมต่อไปนี้ ค่าของ i ทั้งสองค่ามีค่าเท่าไร เเละ เพราะ อะไรถึงเป็นเช่นนั้น<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int unsigned short int u = 32768;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int short int i;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i = u;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int printf(i = %d\n, i);</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int u = 65535;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i = u;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int printf(i = %d\n, i); </p>",
            "a": [
                {"option": "1.i=-32768 i= -1 เพราะ เกิดจาก  truncation error",    "correct": true},
                {"option": "2.i=32768  i= 1 เพราะ เกิดจาก Integer Overflow ",     "correct": true},
				{"option": "3.i=-32768 i= 1 เพราะ เกิดจาก Sign Error" ,    "correct": false},  
				{"option": "4.i=32768 i=-1 เพราะ เกิดจาก integer ถูกแปลงเป็น integer ที่มีขนาดเล็กและค่าดั้งเดิมของ integer จะอยู่นอกช่วงของชนิดข้อมูล integer ที่มีขนาดเล็กนั้น",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 1.i=-32768 i= -1 เพราะ เกิดจาก  truncation error ซึ่งเกิดจากการ เมื่อค่า unsinged ถูกแปลงไปเป็นค่า signed ที่มีความยาวเท่ากัน ตัว bit pattern  จะถูกเก็บรักษาไว้ซึ่งเป็นสาเหตุที่ high-order bit จะถูกแปลงไปเป็น sign bit จากผลดังกล่าวทำให้ ค่าสูงสุดของ signed integer จะถูกแปลงไปเป็นค่าลบนั้นเอง</p>" // no comma here
        }, 
		{ // Question 17
		"q": "ในโค้ดที่เเสดงนี้สามารถทำเกิด buffer overflow เเละ sign error ได้ เราสามารถเเก้โค้ดได้อย่างไรบ้าง เพื่อเป็นการตรวจสอบเเละป้องกันการเกิด overflow ได้ <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.#define BUFF_SIZE 10</p><p>2.int main(int argc, char* argv[]){ </p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.int len; </p> <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.char buf[BUFF_SIZE];</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.len = atoi(argv[1]); </p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.if (len < BUFF_SIZE){</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.memcpy(buf, argv[2], len);</p><p>8.}</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.else</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.printf(Too much data\n);</p>  ",
            "a": [
                {"option": "1.เเก้ไข บรรทัดที่ 6. if ((0 < len) && (len < BUFF_SIZE) )",    "correct": false},
                {"option": "2.เเก้ไข บรรทัดที่ 3 unsigned int len ;",     "correct": false},
				{"option": "3.เเก้ไข บรรทัดที่ 6. if ((0 >len) && (len < BUFF_SIZE) ) เเละ เเก้ไข บรรทัดที่ 3 unsigned int len ;" ,    "correct": false},  
				{"option": "4.เเก้ไข บรรทัดที่ 6. if ((0 <len) && (len < BUFF_SIZE) ) เเละ เเก้ไข บรรทัดที่ 3 unsigned int len ;",    "correct": true},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect":"<p><span>ผิด ครับ</span>คำตอบที่ถูกต้องคือ ข้อที่ 4 เเก้ไขบรรทัดที่ 6  0>len && len < BUFF_SIZE จะช่วยตรวจสอบขนาดของ array เพื่อป้องการเกิด overflow ได้ เเละ เเก้ไขบรรทัดที่ 3 unsigned int len เพื่อป้องการเกิดเงื่อนไขที่เกิดจากตัวที่เป็น signed ได้</p>"
        }, 
		{ // Question 18
		"q": "จากโค้ดต่อไปนี้ ใส่ string กี่ไบต์เเล้วจะทำให้เกิด overflow ได้เเละสามารถป้องได้อย่างไร <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buffer[512];</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buffer, Wrong command: %s\n, user);</p>",
            "a": [
                {"option": "1.สั้นกว่า 480 ไบต์ เเละ สามารถเเก้ไขโดยการใส่ format string  %.400s",    "correct": false},
                {"option": "2.ใส่ 490 ไบต์ เเละ สามารถเเก้ไขโดยการใส่ format string %.300s",     "correct": false},
				{"option": "3.ยาวกว่า 496 ไบต์ เเละ สามารถเเก้ไขโดยการใส่ format string %.400s" ,    "correct": true},  
				{"option": "4.ยาวกว่า 496 ไบต์ เเละ สามารถเเก้ไขโดยการใส่ format string %300s",    "correct": false},
            ],
            "correct": "<p><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 3.ยาวกว่า 496 ไบต์ เพราะ มีการจองพื้นที่ไว้ 512 ไบต์ ดังนั้น จะได้เป็น 512 ไบต์-16ไบต์-null อีก  1 ไบต์ เเละสามารถเเก้ไขโดยการ fix การรับค่าจาก format string  โดยใส่เป็น %.400s  </p>" // no comma here
        }, 
	    { // Question 19
		"q": "Race Conditions คืออะไร ",
            "a": [
                {"option": "1.สภาวะที่โปรเซส 2 โปรเซส ที่ต้องการใช้ทรัพยากรที่แชร์ไว้พร้อมกัน ในเวลาเดียวกัน ทำให้ผลลัพธ์อาจจะเกิดการผิดพลาดขึ้นได้ขึ้นอยู่กับว่าโปรเซสใดทำเสร็จก่อนง",    "correct": false},
                {"option": "2.การป้องกันไม่ให้โปรเซสอื่นเข้ามาครองครองทรัพยากรได้ในขณะที่โปรเซสอื่นครอบครองอยู่",     "correct": true},
				{"option": "3.symbolic link ที่เป็นรายการของไดเรกทอรี่ที่ใช้อ้างอิงแฟ้มเป้าหมายหรือไดเร็กทอรี่ " ,    "correct": false},  
				{"option": "4.เป็นกระบวนการที่จะไม่สามารถมั่นใจว่าในการตั้งชื่อไฟล์ให้ไม่ซ้ำกันได้้ ",    "correct": false},
            ],
            "correct": "<p><span><span>ถูกต้อง</span>เก่งมากๆๆ เลย ครับ </p>",
            "incorrect": "<p><span>ผิด ครับ</span>คำตอบที่ถูกคือ ข้อ 1.สภาวะที่โปรเซส 2 โปรเซส ที่ต้องการใช้ทรัพยากรที่แชร์ไว้พร้อมกัน ในเวลาเดียวกัน ทำให้ผลลัพธ์อาจจะเกิดการผิดพลาดขึ้นได้ขึ้นอยู่กับว่าโปรเซสใดทำเสร็จก่อน</p>" // no comma here
        }, 
		
		
		
    ]
};
