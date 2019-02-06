$(document).ready(function () {
    $("#teacher_btn").click(function () {
        var title = $("#title").val();
        var source = $("#source").val();
        var category = $("#category").val();
        var intro = $("#intro").val();
        var time = $("#time").val();
        var date = $("#date").val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (title.length == 0) {
            document.getElementById("title").classList.add("is-invalid");
            document.getElementById("title").focus();
        } else if (source.length == 0) {
            document.getElementById("source").classList.add("is-invalid");
            document.getElementById("source").focus();
        } else if (category.length == 0) {
            document.getElementById("category").classList.add("is-invalid");
            document.getElementById("category").focus();
        } else if (intro.length == 0) {
            document.getElementById("intro").classList.add("is-invalid");
            document.getElementById("intro").focus();
        } else if (time.length == 0) {
            document.getElementById("time").classList.add("is-invalid");
            document.getElementById("time").focus();
        } else if (date.length == 0) {
            document.getElementById("date").classList.add("is-invalid");
            document.getElementById("date").focus();
        } else {
            $.get("database.php", {
                "button": "article",
                "title": title,
                "source": source,
                "category": category,
                "intro": intro,
                "time": time,
                "date": date
            }, function (data) {
                alert("Thank you for your response!");
                $("#title").val("");
                document.getElementById("title").classList.remove("is-invalid");
                $("#source").val("");
                document.getElementById("source").classList.remove("is-invalid");
                $("#category").val("");
                document.getElementById("category").classList.remove("is-invalid");
                $("#intro").val("");
                document.getElementById("intro").classList.remove("is-invalid");
                $("#time").val("");
                document.getElementById("time").classList.remove("is-invalid");
                $("#date").val("1980   -01-01");
                document.getElementById("date").classList.remove("is-invalid");
            });
        }
    });

    $("#department_btn").click(function () {
        var department = $("#department").val();
        if (department.length == 0) {
            document.getElementById("department").classList.add("is-invalid");
            document.getElementById("department").focus();
        } else {
            $.get(
                "database.php", {
                    "button": "department",
                    "department": department
                },
                function () {
                    alert("Department is succesfully registered!");;
                    location.reload(true);
                    $("#department").val("");
                    document.getElementById("department").classList.remove("is-invalid");

                }
            );
        }
    });

});