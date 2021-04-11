$(document).ready(function(){
                $('.edit').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: '/ajax',
                        type: 'post',
                        data: {id: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#edit-modal').modal('show'); 
                        }
                    });
                });
            });

$(document).ready(function(){
                $('.view').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: '/detail',
                        type: 'post',
                        data: {id: userid},
                        success: function(response){ 
                            $('.modal-body-view').html(response); 
                            $('#view-modal').modal('show'); 
                        }
                    });
                });
            });





$(document).ready(function(){
   $("#submitForm").on("change", function(){
      var formData = new FormData(this);
      var files = $('#file')[0].files[0];
      var person = $('#personID').text();
      var filename = $('input[type=file]').val().replace(/.*(\/|\\)/, '');
      formData.append('file', files)
      formData.append('person', person);
      $.ajax({
         url  : "upload",
         type : "POST",
         cache: false,
         contentType : false, // you can also use multipart/form-data replace of false
         processData: false,
         data: formData,
         success:function(response){
            $("#profile").attr("src","images/"+person+'/'+filename);
            
         },
         error:function(response){
          alert("Failed to upload images");
         }
      });
   });
});