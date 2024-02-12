$('.btn').on('click',function () {
   username = $('.username').val(); 
   email = $('.email').val(); 
   password = $('.password').val();

   $.ajax({
        url : 'request_handle.php',
        type : 'POST',
        data :{
            username : username,
            email : email,
            password : password
        },
        success: function(response){
            // console.log(response);
            res = JSON.parse(response);

            $('.error').html(res.msg);
        }
    
    });

});

// $('.sbtn').on('click',function () {
//     type = $('.password').attr('type');
//     if (type=='password') {
//         $('.password').attr('type','text');
//         $('.sbtn').html("<i class='fa fa-eye' aria-hidden='true'></i>")
//     }else{
//         $('.sbtn').html("<i class='fa fa-eye-slash' aria-hidden='true'></i>")

//         $('.password').attr('type','password');
//     }
// });



// $('.hbtn').on('click',function () {
//     type = $('.password').attr('type');
//     if (type=='text') {
//         $('.password').attr('type','password');
//     };
// });




