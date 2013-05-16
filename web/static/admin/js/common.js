$( document ).ready( function() {
    $(".defaultCheckBox").click(function() {
        window.location.href = this.src;
    });

    $(".delete").click(function() {
        if (confirm("You want to delete?")) {
            window.location.href = this.rel;
        }
    });


    /* ARTICLE */
    $("select[name^='media_id']").change(function(){
        $("#article_preview_background").html("");
        $(this).children('option:selected').each(function(){
            $("#article_preview_background").append("<img src='"+media_image_path+$(this).text()+"' width=400 />");
        });
    });
    $("select[name^='media_id']").mouseover(function(e){
        var $target = $(e.target);
        if($target.is('option')){
            $("#article_preview_background").html("<img src='"+media_image_path+$target.text()+"' width=400 />");
        }
    });
    $("select[name^='media_id']").mouseout(function(e){
        $("#article_preview_background").html("");
        $(this).children('option:selected').each(function(){
            $("#article_preview_background").append("<img src='"+media_image_path+$(this).text()+"' width=400 />");
        });
    });
    
});