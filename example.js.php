	 var start_example = {
        id: 'start_example_panel',
        title: 'Start Page',
        layout: 'fit',
        bodyStyle: 'padding:25px',
        autoEl: {
                tag: 'iframe',
                height : '100%',
                width : '100%',
                src: './example/start/home.php',
            }
    };
    var contentPanel_example = {
		id: 'content_example_panel',
		region: 'center', 
		layout: 'card',
		margins: '2 5 5 0',
		activeItem: 0,
		border: false,
		items: [
			// from Common_String_Manipulation_Errors.js:
			start_example
		]
	};
    var treePanel_example = new Ext.tree.TreePanel({
    	id: 'tree_panel_example',
    	//title: 'บทเรียน',
        split: true,
        height: 300,
        minSize: 150,
        autoScroll: true,
        rootVisible: false,
        lines: false,
        singleExpand: true,
        useArrows: true,
        
        loader: new Ext.tree.TreeLoader({
            dataUrl:'tree-data-example.json'
        }),
        
        root: new Ext.tree.AsyncTreeNode()

    });
    treePanel_example.on('click', function(n){
    	var sn = this.selModel.selNode || {}; 
    	if(n.leaf && n.id != sn.id){  
            Ext.getCmp('content_example_panel').layout.setActiveItem(n.id + '_panel');
    		
    	}
    });
    
	
	
