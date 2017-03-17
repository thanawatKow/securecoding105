
Ext.onReady(function(){
	Ext.QuickTips.init();
	var detailEl;
	<?php include("learn.js.php"); ?>
    <?php include("example.js.php"); ?>
    <?php  include("exeracise.js.php")?>
     var tabs2 = new Ext.TabPanel({
        activeTab: 0,
        width:600,
        height:250,
        plain:true,
        defaults:{autoScroll: true},
        items:[{
        		title : '<font size=2>&nbsp;&nbsp;&nbsp;หน้าแรก</font>',
                id : 'tab-home',
                iconCls: 'tab-img-home',
                autoEl: {
                        tag: 'iframe',
                        height : '100%',
                        width : '100%',
                        src: './home.php',
                    }
            },{
                title: '<font size=2>&nbsp;&nbsp;&nbsp;บทเรียน</font>',
                layout : 'border',  
                id : 'tab-learn',
                iconCls: 'tab-img-learn',
                items : [
                    {
                        layout: 'fit',
                        id: 'layout-learn2',
                        region:'west',
                        border: false,
                        split:true,
                        margins: '6 0 6 6',
                        width: 310,
                        minSize: 100,
                        maxSize: 500,
                        items: [treePanel]
                    },
                    contentPanel
                ]
            },{
                title: '<font size=2>&nbsp;&nbsp;&nbsp;แบบทดสอบ</font>',
                id : 'tab-exam',
                iconCls: 'tab-img-exam',
               	layout : 'border',  items : [
                	{
                        layout: 'fit',
                        id: 'layout-exeracise2',
                        region:'west',
                        border:false,
                        split:true,
                        margins: '6 0 6 6',
                        width: 310,
                        minSize: 100,
                        maxSize: 500,
                        items: [treePanel_exeracise]
                    },
                    contentPanel_exeracise
                ]
                
            }
        ],
      listeners: {
            'tabchange': function(tabPanel, tab) {
				 if(tab.id=="tab-learn")
                 {
                       Ext.getCmp('content-panel').layout.setActiveItem('start-panel');
                 }
			}
       }
    });	
	
    
	
    new Ext.Viewport({
		layout: 'border',
		title: 'Ext Layout Browser',
		items: [{
			xtype: 'box',
			region: 'north',
            layout : 'fit',
			applyTo: 'header',
			height: 70
		},{
			layout: 'fit',
	    	id: 'layout-browser',
	        region:'center',
	        border: false,
	        split:true,
			margins: '2 0 5 5',
			items: [tabs2]
		}
		],
        renderTo: Ext.getBody()
    });
});
