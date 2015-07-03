<table width="100" border="1" align="center" rules="rows">
  <tbody>
     <tr  >
        <td align="center" colspan="4" ><strong>Grupo {{$grupo->id_grupo}}</strong></td>
        
        <td align="center" colspan="4" >Instituto Tecnológico de Culiacán</td>
      </tr>

    
     
      <tr >
        <td align="center"  >Aula:</td>
        <td align="center"  >{{$grupo->aula}}</td>
      </tr>
    <tr >
      <th style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;" scope="col" colspan="4" >NControl</th>
      <th style="text-align: center; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;" scope="col" colspan="4">NOMBRE</th>

    </tr>
    @foreach($alumnos as $alumno)
    <tr >
      <td style="text-align: center" colspan="4" bgcolor="gray" >{{$alumno->id_alumno}}</td>
      <td style="text-align: center" colspan="4" >{{$alumno->Nombre}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
