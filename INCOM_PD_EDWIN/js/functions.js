	function ValidateEmptyForm(formulario){
		datos=$('#' + formulario).serialize();
		d=datos.split('&');
		vacios=0;
		for(i=0;i<d.length;i++){
			controls=d[i].split("=");
			if(controls[1]=="A"||controls[1]==""){
				vacios++;
			}
		}
		return vacios;
	}