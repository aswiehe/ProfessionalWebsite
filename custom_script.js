$( document ).ready(function() {

    console.log( "Custom script successfully loaded." );
    
    let path = window.location.pathname;
    let file_name = get_file_name(path);
    let page_name = get_page_name(file_name);
    
    let title = "Avery Wiehe - " + page_name;
    $("title").html(title);
       
    // Enable tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    
    $("#nav_section").load("../includes/navbar.html");

    function get_file_name(path) {
        var file_name = path.split("/").pop();
        return file_name;
    }
    function get_page_name(file_name) {
        switch(file_name) {
            case "":
                var page_name = "Home";
                break;
            case "index.html":
                var page_name = "Home";
                break;
            case "site_overview.html":
                var page_name = "Site Overview";
                break;
            case "employment_history.html":
                var page_name = "Employment History";
                break;
            case "education.html":
                var page_name = "Education";
                break;
            case "download_online_resume.html":
                var page_name = "Download Online Resume";
                break;
            default:
                var page_name = "Unrecognized Filename"
                break;
        }
        return page_name;
    }

    if(page_name == "Employment History") {
        populate_employment_history();
    }

    $.ajax({
        url : "../text_files/welcome_part_one.txt",
        dataType: "text",
        success : function (data) {
            $("#welcome_text_one").html(data);
        }
    });

    $.ajax({
        url : "../text_files/welcome_part_two.txt",
        dataType: "text",
        success : function (data) {
            $("#welcome_text_two").html(data);
        }
    });

    $('btn btn-primary btn-secondary btn-info').on('click', function() {
        $(EventTarget).css('background-color', 'yellow');
    });
    $('btn btn-primary btn-secondary btn-info').on('mouseover', function() {
        $(EventTarget).css('background-color', 'yellow');
    });

    function populate_employment_history() {
        $.ajax({
            url : "../text_files/employment_history/ups_employment.txt",
            dataType: "text",
            success : function (data) {
                $("#ups_employment").html(data);
            }
        });
        $.ajax({
            url : "../text_files/employment_history/btg_employment.txt",
            dataType: "text",
            success : function (data) {
                $("#btg_employment").html(data);
            }
        });
        $.ajax({
            url : "../text_files/employment_history/citibank_employment.txt",
            dataType: "text",
            success : function (data) {
                $("#citibank_employment").html(data);
            }
        });
    }

    $("#go_to_overview").on('click', function() {
        window.location.href = "./site_overview.html";
    });

    $('#csctc_toggle').on('click', function() {
        $('#select_school_prompt').css('display', 'none');
        $('.course_list').each(function() {
            $(this).css('display', 'none');
        });
        $('#csctc_courses').slideDown("slow");
    });
    $('#gctc_toggle').on('click', function() {
        $('#select_school_prompt').css('display', 'none');
        $('.course_list').each(function() {
            $(this).css('display', 'none');
        });
        $('#gctc_courses').slideDown("slow");
    });
    $('#nku_toggle').on('click', function() {
        $('#select_school_prompt').css('display', 'none');
        $('.course_list').each(function() {
            $(this).css('display', 'none');
        });
        $('#nku_courses').slideDown("slow");
    });
});

// After page loads, this scrolls back to the top to put navbar where it should be
$(window).scrollTop(0);