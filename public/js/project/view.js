$(function () {
    $('.deleteproject').on('click',function(){
       //e.preventDefault();
       var form = $(this).closest("form");
       console.log(form);
       console.log('clicked');
       swal({
        title: "Are you sure?",
        text: "You will not be able to recover this project!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal({
            title:"Deleted!",
            text:"Project has been deleted successfuly.",
            type:"success",
            timer: 2000,
            showConfirmButton: false
        });
        console.log(this);
        form.submit();
    });
   });
});

