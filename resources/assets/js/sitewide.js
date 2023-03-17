
$(document).ready(function(){


    $('.confirm-delete-btn').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            dangerMode: true,
            closeOnEsc: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
    $('.confirm-log-clear-btn').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to clear the log?",
            text: "If you clear the log, it's gone forever!",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            dangerMode: true,
            closeOnEsc: true,
            confirmButtonText: 'Yes, clear it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });

    //Initiate main datatables settings
    $('.dataTablesTable').DataTable();

});

