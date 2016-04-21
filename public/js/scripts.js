;(function($){
    	$(".image-overlay").click(function() {
	    $("#file").click();
	});

    // $(":file").filestyle();
    

    // $('#term').autocomplete({
    //       source: function(request, response){

    //         $.ajax({
    //           url:"search/autocomplete",
    //           dataType:"json",
    //           data:{term:request.term},
    //           success: function(data){
    //             response(data);
    //             response(data.slice(0, 10));
    //           }
     
    //         });
    //       },
    //       minLength: 1,
    //       autoFocus: true,
    //       select: function(event,ui){
    //      	$('#term').val(ui.item.location);
    //       }

    // });

    //  $("#term").autocomplete({
    //     source: function(request, response){
    //         $.get("search/autocomplete", {
    //             term:request.term
    //             }, function(data){
    //             response($.map(data, function(item) {
    //                 return {
    //                     label: item.location,
    //                     value: item.id
    //                 }
    //             }))
    //         }, "json");
    //     },
    //     minLength: 1,
    //     dataType: "json",
    //     cache: false
    // });

})(jQuery);

