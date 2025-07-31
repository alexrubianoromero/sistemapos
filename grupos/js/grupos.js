 function traerProductosIdGrupo(idGrupo){
    alert('idgrupo'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../opciones/opciones.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=traerProductosIdGrupo"
        + "&idGrupo="+idGrupo
        // + "&tipoMov=2"
        );
    }