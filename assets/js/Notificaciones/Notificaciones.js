 $(document).ready(function(){ // Inicializa jQuery
           
            $("#registrar").submit(event,function(){
                event.preventDefault();//no se va al action, previene el evento
               
                $.ajax({
                    method: "POST",
                    dataType: "json",
                    data: {},
                    url: "index.php?controller=controlador&action=funtioncontroller",
                    beforeSend: function(){
                        console.log('Enviando datos');
                    },
                    success: function(data){
                       if(data){
                            swal({
                                title: "¡Buen Trabajo!",
                                text: "",
                                icon: "success",
                            }).then(function () {
                    window.location.href = "index.php?controller=controlador&action=funcioncontrolador";
                });
                        }
                    },
                    error: function(err){
                        console.log(err);
                    }

                })
            });




       
        });