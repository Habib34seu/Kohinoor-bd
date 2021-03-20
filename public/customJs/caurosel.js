$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#cauroselForm').submit(function (e) {
    e.preventDefault();

    let input = $('#cauroselForm input[name="image"]');
    let formData = {
        image: $(input).val()
    }

    //console.log(formData);

    $.ajax({
        type: 'POST',
        url: '/caurosel/store',
        data:formData,
        success:function(data){
            console.log(data);
        },
        error: function (error) {
            console.log(error);
        }
    })
});