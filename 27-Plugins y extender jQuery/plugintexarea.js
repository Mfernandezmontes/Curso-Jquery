/**
 * Created by adminlocal on 20/03/2015.
 */
//funcion autoejecutable
(function($){

    $.fn.textarea = function(options, callback)
    {
        var settings = {
            "num" : 300,
            "radius": null,
            "foreground" : null,
            "color": null,
            "paste": true,
            "cols":40,
            "rows": 15
        };

        if(options)
        {
            $.extend(settings, options);
        }

        $(this).attr("cols", settings["cols"]);
        $(this).attr("rows", settings["rows"]);

        $(this).css({
            "border-radius": settings["radius"],
            "background-color": settings["foreground"],
            "color": settings["color"]
        })

        $(this).after("<div><input type='text' id='contador' value='" + settings["num"] + "'" + "' readonly'/> de " + settings["num"] + "caracteres");

        $(this).keyup(function()
        {
            if($(this).val().length >= settings["num"])
            {
                $(this).val($(this).val().substring(0,settings["num"]));
                callback.call(this);
            }
            else
            {
                $("#contador").val(settings["num"] = $(this).val().length);
            }

        }).on("paste", function()
        {
            return settings["paste"];
        })

    }

   // $.textarea = $.fn.textarea;

})(jQuery)