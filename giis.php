<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Servicios GiiS</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
function area(){

 var s1 = document.getElementById("slct1");
       
    $.getJSON('https://script.google.com/macros/s/AKfycbygukdW3tt8sCPcFDlkMnMuNu9bH5fpt7bKV50p2bM/exec?id=11TiRffTAG7137dTrwtQ5pxgOvfC7qC1YMJNGdO_ddVI&sheet=Areas', function (data) {
 
     
      for (var i=0; i<data.Areas.length; i++ ){
       var newOption = document.createElement("option");
        newOption.value = data.Areas[i].Areas;
        newOption.innerHTML = data.Areas[i].Areas;
        s1.options.add(newOption);
    }
  interes();
  });

   
}
</script>

<style type="text/css">
  html, body {

    font-size: 14px;
    line-height: 1.4;
}
header
{
   
    background-color: #0a0f44;
    padding: 13px;
}

.texto
{
    color: white;
    font-family: 'Tangerine', serif;
    margin: 0 ;
    padding: 18px 0;
}
hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}


   .box {

    margin-bottom: 25px;
    
    }
    .justify {   
    text-align: justify;
    }
</style>


<script>
function interes(){
    var s1 = document.getElementById("slct1");
    var s2 = document.getElementById("slct2");
     s2.innerHTML = ""
 $.getJSON('https://script.google.com/macros/s/AKfycbygukdW3tt8sCPcFDlkMnMuNu9bH5fpt7bKV50p2bM/exec?id=11TiRffTAG7137dTrwtQ5pxgOvfC7qC1YMJNGdO_ddVI&sheet=BD', function (data) {
    
      for (var i=0; i<data.BD.length; i++ ){
        if (s1.value == data.BD[i].Interes ){
        var newOption = document.createElement("option");
        newOption.value = data.BD[i].Intereses;
        newOption.innerHTML = data.BD[i].Intereses;
        s2.options.add(newOption);
        }   
    }
      cargar();
  });
   
}
</script>
<script>
function cargar(){
    var explicacion = document.getElementById("explicacion");
    var oportunidad = document.getElementById("oportunidad");
    var s2 = document.getElementById("slct2");

 $.getJSON('https://script.google.com/macros/s/AKfycbygukdW3tt8sCPcFDlkMnMuNu9bH5fpt7bKV50p2bM/exec?id=11TiRffTAG7137dTrwtQ5pxgOvfC7qC1YMJNGdO_ddVI&sheet=BD', function (data) {

      for (var i=0; i<data.BD.length; i++ ){
        if (s2.value == data.BD[i].Intereses ){       
        explicacion.innerHTML = data.BD[i].Explicacion;
        oportunidad.innerHTML = data.BD[i].Oportunidad;
        mapa.innerHTML = '<iframe style="width:100%;" class="embed-responsive-item" scrolling="no" frameborder="no" src="'+data.BD[i].Mapa+'"></iframe>';
        }       
    }
    
  });

}
</script>
</head>
<body onload="area()">

        <header>
            <div class="container" >
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <img src="http://blog.pucp.edu.pe/blog/perfil/wp-content/uploads/sites/149/2017/08/giiis.png" class="img-responsive" alt="Responsive image">
                    </div>   

                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 ">
                       
                          <a href="#" class="btn btn-default btn-sm" role="button">¿Que es UBIGiiS?</a> 
                          <a href="http://www.giis.com.pe/servicios" class="btn btn-default btn-sm" role="button">Servicios</a>
                          <a href="http://www.giis.com.pe/contact" class="btn btn-default btn-sm" role="button">Contáctenos</a>                 
                    </div>
                    
                </div>
            </div>
        </header>
       
        <section> <br>
            <div class="container-fluid " >
               
                <div class="row " >                     
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                        <h4><b>Área de interés:</b></h4><hr>
                        <select class="form-control" id="slct1" name="slct1" onchange="interes()"></select>
                    <br><select class="form-control" id="slct2" name="slct2" onchange="cargar()"></select>  <hr>
                        
                       <div id="explicacion" class="justify" style="background-color: #F3F3FA; padding: 3px;"> </div><hr>
                         <h4><b>¿Oportunidad?</b></h4><hr>
                        <div id="oportunidad" class="justify" style="background-color: #F3F3FA; padding: 3px;"> </div><hr> <br>
                    <center><a href="http://blog.pucp.edu.pe/blog/perfil/" class="btn btn-primary " style="background-color: #0a0f44;" role="button">Suscríbete a nuestro Blog</a></center>
                    </div>

                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 ">
                        <div id="mapa" class="embed-responsive embed-responsive-16by9 box">   </div> 
                                          
                    </div> 

                </div>

            </div>
        </section>


</body>
</html>