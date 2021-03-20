$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#registerForm').submit(function (e) {
    e.preventDefault();

    let inputAdd = $('#registerForm input[name="address"]');
    let inputEmail = $('#registerForm input[name="email"]');
    let inputPhone = $('#registerForm input[name="phone"]');
    let inputFax = $('#registerForm input[name="fax"]');
    
    let formData = {
        address: $(inputAdd).val(),
        email: $(inputEmail).val(),
        phone: $(inputPhone).val(),
        fax: $(inputFax).val(),
    }
    //console.log(formData);
    $.ajax({
        type: 'POST',
        url: '/registerdOffice/store',
        data:formData,
        success:function(data){
            console.log(data);
        },
        error: function (error) {
            console.log(error);
        }
    })
});