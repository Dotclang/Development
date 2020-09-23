var linkAjax = "/ajax/HumanResource/EmployeeData/";

$(document).ready(function (){
    // openPanelView();
});

// function closeAll(){
//     $(".panelContent").hide();
// }
// function openPanelSummary(){
//     closeAll();
//     $('#panelSummary').show();
// }
// function openPanelView(){
//     closeAll();
//     $('#panelView').show();
// }

function check(){
    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $.ajax({
        type: 'POST',
        url: linkAjax+"template.php",
        data:{},
        dataType: "JSON",
        async: false,
        success: function (result) {
            console.log("success");
        },
        error: function (xhr, textStatus, errorThrown) {
            //Here the status code can be retrieved like;
            xhr.status;

            //The message added to Response object in Controller can be retrieved as following.
            xhr.responseText;
            console.log("failed");
        },
    })
    .done(function(){})
    .fail(function(){$("#resetMessage").html("<span class='red'>sendEmail modul error!</span>");})
    .always(function(){});
}
