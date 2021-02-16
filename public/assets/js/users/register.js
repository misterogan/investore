$( document ).ready(function() {
    $("#register_form").submit(function(e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: "POST",
            url: '/pengguna/daftar/submit',
            dataType: 'JSON',
            headers: {
                'X-CSRF-TOKEN': token,

            },
            data: form.serialize(), // serializes the form's elements.
            beforeSend: function(){
                $("#submit").attr('disabled');
            },
            success: function(data)
            {
               if(data.status == 'error'){
                   $.each(data.message, function(key, value){
                       console.log('Error [' + key + ']' + ' : ' + value);
                       $(".alert-message").removeClass('alert alert-danger').addClass('alert alert-danger').html(value)
                   });
               }
            }
        });


    });
});
