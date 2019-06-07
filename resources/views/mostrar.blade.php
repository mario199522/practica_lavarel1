<!DOCTYPE html>
<html>
<head>
	<title>mostrar</title>
</head>
<body>


<form action="{{url('/ingresar')}}" method="get" accept-charset="utf-8">
	
	 {{csrf_field()}} 

    
</form>
<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula</th>
      <th scope="col">Promedio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$arreg[0]}}</td>
      <td>{{$arreg[1]}}</td>
      <td>{{$arreg[2]}}</td>
      @if($arreg[3]>=1 and $arreg[3]<4)
      <td>{{$arreg[3]}}</td>
      <td style="background-color: red">Regular</td>
      @endif

       @if($arreg[3]>=4 and $arreg[3]<6)
      <td>{{$arreg[3]}}</td>
      <td style="background-color: #E6C115">Bueno</td>
      @endif

       @if($arreg[3]>=6 and $arreg[3]<8)
      <td>{{$arreg[3]}}</td>
      <td style="background-color:#310AF9 ">Muy Bueno</td>
      @endif

      @if($arreg[3]>=8 and $arreg[3]<10)
      <td>{{$arreg[3]}}</td>
      <td style="background-color: green ">Excelente</td>
      @endif

    </tr>
  </tbody>
</table>


</body>
</html>