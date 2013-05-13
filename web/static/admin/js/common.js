$( document ).ready( function() {
    $(".defaultCheckBox").click(function() {
        window.location.href = this.src;
    });

    $(".delete").click(function() {
        if (confirm("You want to delete?")) {
            window.location.href = this.rel;
        }
    });
});