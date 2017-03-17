jQuery.validator.setDefaults({
  debug: false

});

$( "#testingform" ).validate({
	  success: "valid",

  	rules: {
    	sex: 						//1.1
      	{	
      		required: true
    	},
    	age: 						//1.2
      	{	
      		required: true
    	},
    	education: 					//1.3
      	{	
      		required: true
    	},
    	career: 					//1.4
      	{	
      		required: true
    	},
    	useFacebook: 				//2
    	{				
      		required: true
    	},
    	timeuseFacebook:            //3
    	{
    		required: true	
    	},
    	interest1:                  //4
    	{
    		required: true	
    	},
    	interest2:
    	{
    		required: true	
    	},
    	interest3:
    	{
    		required: true	
    	},
    	interest4:
    	{
    		required: true	
    	},
    	interest5:
    	{
    		required: true	
    	},
    	interest6:
    	{
    		required: true	
    	},
    	interest7:
    	{
    		required: true	
    	},
    	feel1: 						//5
    	{
    		required: true	
    	},
    	feel2:
    	{
    		required: true	
    	},
    	feel3:
    	{
    		required: true	
    	},
    	feel4:
    	{
    		required: true	
    	},
    	feel5:
    	{
    		required: true	
    	},
    	feel6:
    	{
    		required: true	
    	},
    	feel7:
    	{
    		required: true	
    	},
    	page1: 						//6
    	{
    		required: true
    	},
    	page2: 						
    	{
    		required: true
    	},
    	page3: 						
    	{
    		required: true
    	},
    	event1: 					//7
    	{
    		required: true
    	},
    	event2:
    	{
    		required: true
    	},
    	event3:
    	{
    		required: true
    	},
    	location: 					//8
    	{
    		required: true
    	},
    	timelocation: 				//9
    	{
    		required: true
    	},
    	suggest: 					//10
    	{
    		required: true
    	},
    	sing: 						//11
    	{
    		required: true
    	},
    	actity:  					//12
    	{
    		required: true
    	},
    	satisfact1: 				//13			
    	{
    		required: true
    	},
    	satisfact2:
    	{
    		required: true
    	},
    	satisfact3:
    	{
    		required: true
    	},
    	satisfact4:
    	{
    		required: true
    	},
    	ptt1: 						//14
    	{
    		required: true
    	},
    	ptt2:
    	{
    		required: true
    	},
    	ptt3:
    	{
    		required: true
    	},
    	ptt4:
    	{
    		required: true
    	},
    	ptt5:
    	{
    		required: true
    	},
    	ptt6:
    	{
    		required: true
    	},
    	name:
    	{
    		required: true
    	},
    	address:
    	{
    		required: true
    	}
  	},
	messages: {
		sex: 												//1.1
	  	{
	    	required:"*กรุณาเลือกเพศ<br/>"
	  	},
	  	age: 												//1.2
	  	{
	    	required:"*กรุณาเลือกอายุ<br/>"
	  	},
	  	education: 											//1.3
	  	{
	    	required:"*กรุณาเลือกการศึกษา<br/>"
	  	},
	  	career: 											//1.4
	  	{
	    	required:"*กรุณาเลือกอาชีพ<br/>"
	  	},
	  	useFacebook: 										//2
	  	{
	    	required:"*กรุณาเลือกความถี่<br/>"
	  	},
	  	timeuseFacebook: 									//3
	  	{
	    	required:"*กรุณาเลือกช่วงเวลา<br/>"
	  	},
	  	interest1: 											//4
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest2:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest3:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest4:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest5:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest6:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	interest7:
	  	{
	    	required:"*กรุณาเลือกความสนใจ<br/>"
	  	},
	  	feel1: 												//5
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel2:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel3:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel4:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel5:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel6:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	feel7:
	  	{
	    	required:"*กรุณาเลือกความรู้สึก<br/>"
	  	},
	  	page1: 												//6
	  	{
	    	required:"*กรุณาเลือกเข้าร่วม<br/>"
	  	},
	  	page2:
	  	{
	    	required:"*กรุณาเลือกเข้าร่วม<br/>"
	  	},
	  	page3:
	  	{
	    	required:"*กรุณาเลือกเข้าร่วม<br/>"
	  	},
	  	event1: 											//7
	  	{
	  		required:"*กรุณาเลือกเข้าร่วม<br/>"	
	  	},
	  	event2:
	  	{
	  		required:"*กรุณาเลือกเข้าร่วม<br/>"	
	  	},
	  	event3:
	  	{
	  		required:"*กรุณาเลือกเข้าร่วม<br/>"	
	  	},
	  	location: 											//8
	  	{
	  		required:"*กรุณาเลือกเข้าร่วม<br/>"	
	  	},
	  	timelocation: 										//9
	  	{
	  		required:"*กรุณาเลือกระยะเวลาที่เหมาะสม<br/>"	
	  	},
	  	suggest: 											//10
	  	{
	  		required:"*กรุณาเลือกข้อคิดเห็น<br/>"	
	  	},
	  	sing: 												//11
	  	{
	  		required:"*โปรดระบุ<br/>"	
	  	},
	  	actity: 											//12
	  	{
	  		required:"*โปรดระบุ<br/>"	
	  	},
	  	satisfact1: 										//13
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	satisfact2:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	satisfact3:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	satisfact4:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt1: 												//14
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt2:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt3:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt4:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt5:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	ptt6:
	  	{
	  		required:"*กรุณาเลือกความพึงพอใจ<br/>"	
	  	},
	  	name:
	  	{
	  		required:"*กรุณาใส่ชื่อ-นามสกุล<br/>"	
	  	},
	  	address:
	  	{
	  		required:"*กรุณาใส่ที่อยู่<br/>"	
	  	}
	},
	errorPlacement: function(error, element) 
	{
	    if ( element.is(":radio") ) 
	    {
	        error.appendTo( element.parents('.container') );
	    }
	    else 
	    { // This is the default behavior
	        error.insertAfter( element );
	    }
	 }
});