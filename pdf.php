<?php require_once('html2pdf/html2pdf.class.php');
   $contenido="<H2 align='center'>OPINIONES</H2>
                <hr>
               <H4>Datos Personales</H4> <ul>";
             

               if (isset($_POST["nom"])) 
               {
               	$contenido.="<li>nombre: $_POST[nom] </li>";
               }
               
                if (isset($_POST["edad"])) 
               {
               	$contenido.="<li>edad: $_POST[edad] </li>";
               }
                if (isset($_POST["correo"])) 
               {
               	$contenido.="<li>Correo Electronico: $_POST[correo] </li>";
               }
                if (isset($_POST["sexo"])) 
               {
               	$contenido.="<li>Sexo: $_POST[sexo] </li>";
               }
               $contenido.="</ul><hr>";




               $contenido.="<H4>Encuesta</H4><ul>";
              if (isset($_POST["fav"])) 
               {
               	$contenido.="<li> $_POST[fav]</li>";
               }
                if (isset($_POST["dislike"])) 
               {
                    $contenido.="<li>$_POST[dislike]</li>";
               }
              
              $contenido.="</ul><hr>";

               if (isset($_POST["comentarios"])) 
               {
               	$contenido.="$_POST[comentarios]";
               }
  $html2pdf= new HTML2PDF('P','A4','es');
   $html2pdf->WriteHTML($contenido);
   $html2pdf->Output('opiniones.pdf');
               
?>