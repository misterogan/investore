$(document).ready(function() {

    $("#addmanagementRisk").on("click", function(event) {
        var modal = bootbox.dialog({
            message: $(".form-content").html(),
            title: "Insert New Management Risk Control",
            buttons: [
                {
                    label: "Close",
                    className: "btn btn-default pull-left",
                    callback: function() {
                        console.log("just do something on close");
                    }
                },
                {
                    label: "Save",
                    className: "btn btn-primary pull-left",
                    callback: function() {
                        submit();
                    }
                },
            ],
            show: false,
            onEscape: function() {
                modal.modal("hide");
            }
        });

        modal.modal("show");
    });

});


function submit()
{
    var management_risk = $('#management_risk','.bootbox').val();

    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        type: "POST",
        url: "/admin/management_risk/add",
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: {'management_risk': management_risk},
        dataType: 'JSON',
        success: function(data) {

            bootbox.alert(data.message);
            if (data.status === true) {
                location.reload();
            }
        },
        error: function(xhr) {
            alert(xhr.status);
        }
    });

}


function toggleCheckbox(id,status)
{
    var token = $('meta[name="csrf-token"]').attr('content');
    bootbox.dialog({
        title: "Are you sure?",
        message: "You want to <b>"+status+"</b> this item",
        buttons: {
            "cancel": {
                label: "Cancel",
                className: "btn btn-defult",
                callback: function () {
                    location.reload();
                }
            },
            "confirm": {
                label: "<i class='fa fa-check'></i> Ok",
                className: "btn btn-primary",
                callback: function () {
                    $.ajax({
                        type: "POST",
                        url: "/admin/management_risk/update",
                        headers: {
                            'X-CSRF-TOKEN': token,

                        },
                        data: {'id': id,'status':status},
                        dataType: 'JSON',
                        success: function(data) {

                            bootbox.alert(data.message);
                            if (data.status === true) {
                                location.reload();
                            }
                        },
                        error: function(xhr) {
                            alert(xhr.status);
                        }
                    });
                }
            }
        },
    });

}
