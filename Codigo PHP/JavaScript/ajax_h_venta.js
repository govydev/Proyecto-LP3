function AgregarHVnt(){
    $(document).ready(function(){
        $('#btnnuevo').click(function(){
            var datos = $('#frNewvnt').serialize();

            //alert(datos);
            //return false;
            $.ajax({
                type: "POST",
                url: "../Controllers/ctrl_h_venta.php",
                data: datos,
                succes:function(r){
                    if (r==1) {
                        alert("Agregado con exito");
                    }else{
                        alert("Falla en el servidor");
                    }
                }
            });
            return false;
        });
    });
}  