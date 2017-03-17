	//view start home page
    var start = {
        id: 'start-panel',
        title: 'Start Page',
        layout: 'fit',
        bodyStyle: 'padding:25px',
        autoEl: {
                tag: 'iframe',
                height : '100%',
                width : '100%',
                src: './learn/start/home.php',
            }
    };
    var contentPanel = {
		id: 'content-panel',
		region: 'center', 
		layout: 'card',
		margins: '2 5 5 0',
		activeItem: 0,
		border: false,
		items: [
			// from Common_String_Manipulation_Errors:
		start,introdution,Unbounded_String_Copies,Off_by_One_Errors,Null_Termination_Errors,String_Truncation
            //form String_Vulnerabilities:
           ,Buffer_Overflow,Stack_Smashing,Code_Injection,Arc_Injection,Mitigation_Strategies1
           //from  Pointer_Subterfuge:
           ,Function_Pointers,Virtual_Pointers,Mitigation_Strategies2
           //from  Integer Vulnerabilities:
           ,Integer_Conversions,Interger_Promotions,Conversions_from_Unsigned_Integer_Types,Integer_Overflow,Sign_error,Truncation_Errors
           ,Mitigation_Strategies3,Integer_Operations
           //from Formatted Output:
           ,Formatted_Output_Functions,Exploiting_Formatted_Output_Functions,Output_Streams,Viewing_Stack_Content,Overwriting_Memory,Mitigation_Strategies4
           //form File I/O :
           ,Time_of_Check_Time_of_Use,Files_as_Locks_and_File_Locking,Symbolic_Linking_Exploits,Temporary_File_Open_Exploits,Mitigation_Strategies5
		]
	};
	// Go ahead and create the TreePanel now so that we can use it below
    var treePanel = new Ext.tree.TreePanel({
    	id: 'tree-panel',
    	//title: 'บทเรียน',
        split: true,
        height: 300,
        minSize: 150,
        autoScroll: true,  
        // tree-specific configs:
        rootVisible: false,
        lines: false,
        singleExpand: true,
        useArrows: true,
        loader: new Ext.tree.TreeLoader({
            dataUrl:'tree-data.json'
        }),
        root: new Ext.tree.AsyncTreeNode()

    });
    
	// Assign the changeLayout function to be called on tree node click.
    treePanel.on('click', function(n){
    	var sn = this.selModel.selNode || {}; // selNode is null on initial selection
    	if(n.leaf && n.id != sn.id){  // ignore clicks on folders and currently selected node 
            Ext.getCmp('content-panel').layout.setActiveItem(n.id + '_panel');
    		
    	}
    });
    
	
	
