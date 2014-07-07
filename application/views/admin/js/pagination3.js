
$.extend($.expr[':'], {  'containsi': function(elem, i, match, array)  {    return (elem.textContent || elem.innerText || '').toLowerCase()    .indexOf((match[3] || "").toLowerCase()) >= 0;  }});

(function($){
    $.pagination = function(el, options, options){
        // To avoid scope issues, use 'base' instead of 'this'
        // to reference this class from internal events and functions.
        var base = this;
        
        // Access to jQuery and DOM versions of element
        base.$el = $(el);
        base.el = el;
        
        // Add a reverse reference to the DOM object
        base.$el.data("pagination", base);
		var search_form;
		var html;
        // html for pagination buttons and controls
              
        base.init = function(){
            
            base.options = $.extend({},$.pagination.defaultOptions, options);
            html ='<div class="pagination_info '+base.options.paginationInfoClass+'"></div><div class="pagination_controls pagination pagination-right '+base.options.paginationControlsClass+'"><ul><li><a href="#" class="pagination_first">'+base.options.firstButtonText+'</a> </li><li> <a href="#" class="pagination_prev">&larr;</a> </li><li> <a href="#" class="pagination_next">&rarr;</a> </li><li> <a href="#" class="pagination_last">'+base.options.lastButtonText+'</a></li></div><div class=\"clear"></div>' ;
       
		  	base.rows = $('tbody >tr',base.el).length;
			base.totalPages = parseInt( base.rows / base.options.itemsPerPage);
			base.actualPage = 0;	
			base.writeTopControls();
			base.writeBottomControls();
			
        		
        	
        	   
          	search_form = base.$el.parent().find('.search_pagination');		
        	
        	search_form.keydown(function(event){
					vx = $(this);
        		  setTimeout(function() {
						keyword = vx.attr("value");
						base.search(keyword);
				    }, 50);
				    						
        	});
        	
        	keyword = search_form.attr("value");
			base.search(keyword);
						
			prevLink = $('.pagination_controls .pagination_prev');
		    nextLink = $('.pagination_controls .pagination_next');
			firstLink = $('.pagination_controls .pagination_first');
		    lastLink = $('.pagination_controls .pagination_last');

			nextLink.click(function(e){
				e.preventDefault();
		    	base.moveNext();
		    	});
		    prevLink.click(function(e){
				e.preventDefault();
		    	base.movePrev();
		    	});
		    firstLink.click(function(e){
				e.preventDefault();
		    	base.moveToPage(0);
		    	});
		    lastLink.click(function(e){
				e.preventDefault();
		    	base.moveToPage(base.totalPages );
		    	});

		    	
			base.refreshView(base.options);
            // Put your initialization code here
        };
        base.writeTopControls = function(){

        	$(base.el).before('<div class="pull-right pagination_controls pagination pagination-right '+base.options.paginationControlsClass+'"><ul><li><a href="#" class="pagination_first">'+base.options.firstButtonText+'</a></li><li><a href="#" class="pagination_prev">&larr;</a></li><li> <a href="#" class="pagination_next">&rarr;</a></li><li> <a href="#" class="pagination_last">'+base.options.lastButtonText+'</a></li></div><div class=\"clear"></div><div style="clear:both;"></div>');	

        };
        base.writeBottomControls = function(){
        	
        	$(base.el).after(html);

        };
        
        base.movePrev = function(options,rows){
			if (base.actualPage > 0){
        		base.actualPage--;
				base.refreshView();
			}

        };
        base.moveNext = function(){
			if (base.actualPage < base.totalPages){
				base.actualPage++;
				base.refreshView();
			}
			        	        
        };
 		base.moveToPage = function(pageTo){
	 		base.actualPage = pageTo;
 			firstRow = pageTo * base.options.itemsPerPage;
			LastRow = firstRow + base.options.itemsPerPage - 1;
			for (i=0;i<base.rows;i++){
				if (i < firstRow || i > LastRow)
					$("tbody > tr:eq("+i+")",base.el).css("display", "none");
				else $("tbody > tr:eq("+i+")",base.el).css("display", "table-row"); 	
			}
			base.refreshPaginationInfo();
 		};
 		base.refreshPaginationInfo = function(){
 			
 				$('.pagination_info').html('<span class="label label-info">Info</span> '+base.rows+' rows. Page '+(base.actualPage+1)+' of '+(base.totalPages+1) );
 		};	
        
		base.refreshView = function(){

  			firstRow = base.actualPage * base.options.itemsPerPage;
			LastRow = firstRow + base.options.itemsPerPage ;
			$("tbody > tr",base.el).css("display", "none");
			for (i=firstRow;i<LastRow;i++){
				$("tbody > tr:eq("+i+")",base.el).css("display", "table-row"); 	
			}
			base.refreshPaginationInfo();
  		};
  		
  		base.search = function (keyword){

			if (keyword == "") base.refreshView();
			else {
				$("tbody > tr",base.el).css("display", "none");
				$('tbody tr td:containsi("' + keyword + '")').filter(function(){
						$(this).parent().css("display", "table-row"); 	
				});

			}
  		
  		};
  		
        // Run initializer
        base.init();
    };
    
    $.pagination.defaultOptions = {
 		itemsPerPage: 50,
		nextButtonText: "Next",
		prevButtonText: "Previous",
		firstButtonText: "First",
		lastButtonText: "Last",
		paginationControlsClass: "paginationControls",
		paginationInfoClass: "paginationInfo",
		search: true
		
  	};    
    $.fn.pagination = function(options, options){
        return this.each(function(){
            (new $.pagination(this, options, options));
        });
    };
    
})(jQuery);
