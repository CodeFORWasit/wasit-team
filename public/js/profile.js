$(function () {

	let id_sub = $("#sub_mail");

        for_from_create()

        if (id_sub){
            id_sub.hover( ()=>{
                // IF 
                if ($("#email_c4i").val() != ""){
                    id_sub.prop('disabled', false);
                    id_sub.click(function( event ) {

                        $(this).html('<i class="fa fa-spinner fa-spin"></i>');

                     $.ajax({ 
                            type : "POST",
                            url:"create/send",
                            data: new FormData( $('form')[0] ),
                            cache: false,
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success:( data )=>{
                                if(!data.startsWith("error")){
                                    id_sub.html("ارسال")
                                    $("#from-email").remove();
                                    $("#from-body").html(data);
                                    $("#text-suc-err").text("تم ارسال هاش كود لاميلك ");
                                    // Enabled Tooltip bootstrap
                                    $('[data-toggle="tooltip"]').tooltip();

                                    for_from_create()
                                // ELSE 
                                }else{
                                    $("#text-suc-err").text(data.replace("error"," "));
                                    id_sub.html("ارسال")
                                }
                            }
                        }); // end post

                        event.preventDefault();
                    });// end function click 

                // Else    
                }else{id_sub.prop('disabled', true);}
            });
        } // end IF 

    function for_from_create(){
        $("input[id='phone']").keydown((e)=>{
            if(e.keyCode >= 0 && e.keyCode <= 57 ){
                return true
            }
            e.preventDefault();
        });

        $("#sub_create").click(function( event ) {
             
            $("#sub_create").html('<i class="fa fa-spinner fa-spin"></i>');
           
            var formdata = new FormData( $('form')[0] );

            $.ajax({ 
                type : "POST",
                url:"create/create_profile",
                data:formdata,
                cache: false,
                processData: false, // Don't process the files
                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                success:( data )=>{
                    if(data.startsWith("error")){

                        eval(data.replace("error"," "));

                    } else{ $("form").submit(); }

                    $("#sub_create").html("انشاء");
                }
            });
            // event.preventDefault();
        });// end function click 

    }

});
