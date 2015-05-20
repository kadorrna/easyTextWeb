/**
 * Created by kado on 5/11/15.
 */
$(function() {

    var IDs = [];
    $('[id]').each(function() {
        IDs.push(this.id);
    });

    IDs.push("TITLE");

    var id = "";

    $.getJSON("/admin/texts.json", function(data) {
        $.each(IDs, function(index, value) {
            if (data.hasOwnProperty(value)) {
                if (value == "TITLE") {
                    document.title = data[value];
                } else {
                    id = "#" + value;
                    $(id).text(data[value]);
                }
            }
        });

    });

});