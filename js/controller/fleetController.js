$(document).ready(function () {
    $.ajax({
        url: "api/v1/fleet.php?id=all",
        method: "GET",
        async: true

    }).done(function (response) {
        if (response === null) {
            return;
        }

        var appendText = "";
        var lastAppendText = "";

        response.forEach(function (resp) {
            appendText = appendText + "<div class=\"row\" id='" + resp["Vehicle_ID"] + "'>\n" +
                "                                    <div class=\"col-md-3 text-center\">\n" +
                "                                        <div class=\"well dash-box\"\n" +
                "                                             style=\"height:280px;width:210px;padding-left:10px;padding-right:10px;\">\n" +
                "                                            <h2 class=\"text-center\"><img src=\"" + resp['image_path'] + "\" class=\"img-thumbnail\"></h2>\n" +
                "                                            <h5 class=\"text-center\">" + resp['Car_type'] + "</h5>\n" +
                "                                            <button type=\"button\" onclick='clickedButton(" + resp['Vehicle_ID'] + ")' class=\"btn btn-primary btn-sm \">View Details</button>\n" +
                "                                        </div>\n" +
                "                                    </div>";

            lastAppendText = lastAppendText + "</div>";
        });

        $("#fleet-container").append(appendText + lastAppendText);
    });
});

function clickedButton(vehicle_id) {
    $.ajax({
        url: "api/v1/fleet.php?id="+vehicle_id,
        method: "GET",
        async: true;
    }).done(function (response) {

    })
}
