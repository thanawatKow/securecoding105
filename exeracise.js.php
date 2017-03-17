
    var contentPanel_exeracise = {
		id: 'content_exeracise_panel',
		region: 'center', 
		layout: 'card',
		margins: '2 5 5 0',
		activeItem: 0,
		border: false,
		items: [
			exam1
		]
	};
    var treePanel_exeracise = new Ext.tree.TreePanel({
    	id: 'tree_panel_exeracise',
    	//title: '???????',
        split: true,
        height: 300,
        minSize: 150,
        autoScroll: true,
        rootVisible: false,
        lines: false,
        singleExpand: true,
        useArrows: true,
        loader: new Ext.tree.TreeLoader({
            dataUrl:'tree-exeracise.json'
        }),
        
        root: new Ext.tree.AsyncTreeNode()

    });
    treePanel_example.on('click', function(n){
    	var sn = this.selModel.selNode || {}; 
    	if(n.leaf && n.id != sn.id){  
            Ext.getCmp('content_exeracise_panel').layout.setActiveItem(n.id + '_panel');
    	}
    });
    
	
	
