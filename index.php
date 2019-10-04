<!DOCTYPE html>
<html>
<head>
	<title>File en javascrip y php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="mx-3" >
		<br>
		<div class="row  text-center">
			<h3 class="text-center">Subir un archivo con ajax y php</h3>
		</div>
		<p>El archivo se manda por ajax a un archivo subir.php </p>
		<p>y retorna nuevamente el archivo, la función esta </p>
		<p>en el input type=file onchange="subir();"</p>
		<hr>
		<div>
			<label class="">Selecciona tu archivo:</label>
			<div>
				<input type="file" name="archivo" id="archivo" onchange="subir();">
			</div>
			
		</div>
		<hr>
		<div id="imagen"></div>

	</div>

 
<script type="text/javascript">

	function subir(){

	var datos=new FormData();
	datos.append('archivo', $('#archivo')[0].files[0]);
      

      $.ajax({
        url:"subir.php",
        data:datos,
        //datatype:'json',
        method:'POST',
        processData: false,
        contentType: false,
        processData: false,
        success:function (respuesta){
        	
			var path= "img/"+respuesta; //-->Editar la ruta

			var img=document.createElement('img'); 
			img.setAttribute("src",path);
			img.setAttribute("width","300");
			img.setAttribute("height","250");

			document.getElementById("imagen").appendChild(img);
        
        }

      })

}
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="jquery-3.4.1.js"></script>
<script type="jquery-3.4.1.min"></script>
</body>
</html>