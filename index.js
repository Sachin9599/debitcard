$(document).ready(function(){

  
$("#contact").on("submit", function(e){
  e.preventDefault();
  
              var name = $("#name").val();
              var roll = $("#roll").val();
              var exp = $("#exp").val();
              var cvc = $("#cvc").val();
              
              if(name == "" || cvc == "" || exp == "" ||  roll == ""  ){
                  
                          swal({
                                title: "Alert !",
                                text: "Please fill all the details !",
                                icon: "error",
                                button: "oh !",
                              });
              }
              
              else{
              
              $.ajax({
                  url:"submit.php",
                  type: "POST",
                  data: $(this).serialize(),
                  success: function(data){
                          if(data == 1){
                          swal({
                          title: "Thank You!",
                            text: "Our team contact you soon!",
                            icon: "success",
                            button: "Ok !",
                          });
                          }
                                                  
                      $("#name").val("");
                      $("#roll").val("");
                      $("#exp").val("");
                      $("#cvc").val("");
                  }
                  
              });
              }
});
});