$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#corporateForm').submit(function (e) {
    e.preventDefault();

    let inputAdd = $('#corporateForm input[name="address"]');
    let inputEmail = $('#corporateForm input[name="email"]');
    let inputPhone = $('#corporateForm input[name="phone"]');
    let inputFax = $('#corporateForm input[name="fax"]');
    
    let formData = {
        address: $(inputAdd).val(),
        email: $(inputEmail).val(),
        phone: $(inputPhone).val(),
        fax: $(inputFax).val(),
    }
    //console.log(formData);
    $.ajax({
        type: 'POST',
        url: '/corporateOffice/store',
        data:formData,
        success:function(data){
            console.log(data);
        },
        error: function (error) {
            console.log(error);
        }
    })
});