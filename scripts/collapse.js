window.onload = () => {
    var checkboxes = document.querySelectorAll("input[type=checkbox]");
    var labels = document.querySelectorAll("label");
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].style.display = "none";
        labels[i].style.display = "none";
    }

    document.getElementById("tags").onclick = () => {
        // find all checkboxes on page
        var checkboxes = document.querySelectorAll("input[type=checkbox]");
        var labels = document.querySelectorAll("label");
        // check if checkboxes are hidden
        if (checkboxes[0].style.display == "none") {
        // loop through checkboxes
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].style.display = "inline-block";
            labels[i].style.display = "inline-block";
        }
        } else {
        // loop through checkboxes
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].style.display = "none";
            labels[i].style.display = "none";
        }}
    }}