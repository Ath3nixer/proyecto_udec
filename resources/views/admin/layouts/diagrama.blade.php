<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head
/*
Codigo tomado de elate y traducido por google traductor
http://www.elated.com/articles/
*/
>

<title>Estadistica Moda</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<style>
body {
  background: #fff;
  color: #333;
  font-family: "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
  font-size: 0.9em;
  padding: 20px;
}

.wideBox {
  clear: both;
  text-align: center;
  margin-bottom: 15px;
  padding: 10px;
  background: #ebedf2;
  border: 1px solid #333;
  line-height: 60%;
  width: 380px;
}

#container {
  text-align: center;
  width: 300px;
}

#chart, #chartData {
  border: 1px solid #333;
  background: #ebedf2 url("images/gradient.png") repeat-x 0 0;
}

#chart {
  display: block;
  float: left;
  cursor: pointer;
}

#chartData {
  margin-top: 20px;
  width: 200px;
  float: right;
  border-collapse: collapse;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
  -webkit-box-shadow: 0 0 1em rgba(0, 0, 0, 0.5);
  background-position: 0 -100px;
}

#chartData th, #chartData td {
  padding: 0.5em;
  border: 1px dotted #666;
  text-align: left;
}

#chartData th {
  border-bottom: 2px solid #333;
  text-transform: uppercase;
}

#chartData td {
  cursor: pointer;
}

#chartData td.highlight {
  background: #e8e8e8;
}

#chartData tr:hover td {
  background: #f0f0f0;
}

</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>

// Run the code when the DOM is ready
$( pieChart );

function pieChart() {

  // Config settings
  var chartSizePercent = 40;                                                // El radio carta relativa a la lona ancho / alto (en porcentaje)
  var sliceBorderWidth = 0.2;                                               // Ancho (en p?xeles) del borde alrededor de cada rebanada
  var sliceBorderStyle = "#fff";                                            // El color del borde alrededor de cada rebanada
  var sliceGradientColour = "#ddd";                                         // Color a utilizar para un extremo del gradiente gr?fico
  var maxPullOutDistance = 7;                                               // A qu? distancia, en p?xeles, para tirar de las rebanadas a cabo cuando se hace clic
  var pullOutFrameStep = 2;                                                 // Cu?ntos p?xeles para mover un sector con cada fotograma de la animaci?n
  var pullOutFrameInterval = 10;                                            // Cu?nto tiempo (en ms) entre cada fotograma de la animaci?n
  var pullOutLabelPadding = 35;                                             // El espacio entre el trozo tirado de salida y su etiqueta
  var pullOutLabelFont = "bold 10px 'Trebuchet MS', Verdana, sans-serif";   // Fuente de la etiqueta rebanada extra?ble
  var pullOutValueFont = "bold 8px 'Trebuchet MS', Verdana, sans-serif";    // Valor de la fuente rebanada extra?ble
  var pullOutValuePrefix = "";                                              // Extra?ble valor rebanada prefijo
  var pullOutShadowColour = "rgba( 0, 0, 0, .5 )";                          // Color a utilizar para la sombra rebanada-nido
  var pullOutShadowOffsetX = 5;                                             // X-offset (en p?xeles) de la sombra rebanada-nido
  var pullOutShadowOffsetY = 5;                                             // Y-offset (en p?xeles) de la sombra rebanada-nido
  var pullOutShadowBlur = 5;                                                // Cantidad de desenfoque de la sombra rebanada-nido
  var pullOutBorderWidth = 2;                                               //  Ancho (en p?xeles) de la Frontera de la rebanada de pull-out
  var pullOutBorderStyle = "#333";                                          // Color de la Frontera de la rebanada de pull-out
  var chartStartAngle = -.5 * Math.PI;                                      // Iniciar el gr?fico a las 12 horas en lugar de tres

  // Declarar algunas variables para el gr?fico
  var canvas;                       // El elemento canvas en la p?gina
  var currentPullOutSlice = -1;     // La rebanada actualmente se retir? (-1 = sin cortes)
  var currentPullOutDistance = 05;  // Cu?ntos p?xeles de la rebanada, desconectados actualmente se retir? en la animaci?n
  var animationId = 0;              // Datos de gr?ficos (etiquetas, valores, y los ?ngulos)
  var chartData = [];               // Datos de gr?ficos (etiquetas, valores, y los ?ngulos)
  var chartColours = [];            // Colores Gr?fico (extra?dos de la tabla HTML)
  var totalValue = 0;               // Total de todos los valores de la tabla
  var canvasWidth;                  // Ancho del lienzo en p?xeles
  var canvasHeight;                 // Altura del lienzo en p?xeles
  var centreX;                      // Coordenada X del centro del lienzo / tabla
  var centreY;                      // Coordenada Y del centro del lienzo / tabla
  var chartRadius;                  //  Radio del gr?fico circular, en p?xeles

  // Establecer las cosas y dibujar el gr?fico
  init();


  /**
   Configurar los datos del gr?fico y los colores, as? como los gr?ficos y
   tablas clic manipuladores, y dibujar el gr?fico circular inicial
   */

  function init() {

    // Obtener el elemento canvas en la p?gina
    canvas = document.getElementById('chart');

    // Salir si el navegador no es capaz de lona
    if ( typeof canvas.getContext === 'undefined' ) return;

    // Inicializar algunas propiedades de la tela y el gr?fico
    canvasWidth = canvas.width;
    canvasHeight = canvas.height;
    //Centra el diagrama
    centreX = canvasWidth / 2;
    centreY = canvasHeight / 2;
    chartRadius = Math.min( canvasWidth, canvasHeight ) / 2 * ( chartSizePercent / 100 );

    // Coge los datos de la tabla,
    // Y asignar clic manipuladores de las celdas de datos tabla

    var currentRow = -1;
    var currentCell = 0;

    $('#chartData td').each( function() {
      currentCell++;
      if ( currentCell % 2 != 0 ) {
        currentRow++;
        chartData[currentRow] = [];
        chartData[currentRow]['label'] = $(this).text();
      } else {
       var value = parseFloat($(this).text());
       totalValue += value;
       value = value.toFixed(2);
       chartData[currentRow]['value'] = value;
      }

      // Almacenar el ?ndice rebanada en esta celda, y adjuntar un controlador de clic a ella
      $(this).data( 'slice', currentRow );
      $(this).click( handleTableClick );

      // Extraer y almacenar el color de la celda
      if ( rgb = $(this).css('color').match( /rgb\((\d+), (\d+), (\d+)/) ) {
        chartColours[currentRow] = [ rgb[1], rgb[2], rgb[3] ];
      } else if ( hex = $(this).css('color').match(/#([a-fA-F0-9]{2})([a-fA-F0-9]{2})([a-fA-F0-9]{2})/) ) {
        chartColours[currentRow] = [ parseInt(hex[1],16) ,parseInt(hex[2],16), parseInt(hex[3], 16) ];
      } else {
        alert( "Error: Colour could not be determined! Please specify table colours using the format '#xxxxxx'" );
        return;
      }

    } );

    // Ahora calcular y almacenar los ?ngulos inicial y final de cada rebanada en los datos del gr?fico

    var currentPos = 0; // La posici?n actual de la rebanada en el pastel (0-1)

    for ( var slice in chartData ) {
      chartData[slice]['startAngle'] = 2 * Math.PI * currentPos;
      chartData[slice]['endAngle'] = 2 * Math.PI * ( currentPos + ( chartData[slice]['value'] / totalValue ) );
      currentPos += chartData[slice]['value'] / totalValue;
    }

    // ?Listo! Ahora dibuja el gr?fico circular, y agregar el controlador de clic a ella
    drawChart();
    $('#chart').click ( handleChartClick );
  }


  /**
   * Proceso de rat?n hace clic en el ?rea de la gr?fica.
???*
???* Si se hizo clic en una rebanada, alternar adentro o hacia afuera.
???* Si el usuario hace clic fuera de la empanada, introduzca ning?n rebanadas de nuevo.
   *
   * @param Event The click event
   */

  function handleChartClick ( clickEvent ) {

    // Obtener la posici?n del cursor del rat?n en el momento del clic, con relaci?n a la lona
    var mouseX = clickEvent.pageX - this.offsetLeft;
    var mouseY = clickEvent.pageY - this.offsetTop;

    // Was the click inside the pie chart?
    var xFromCentre = mouseX - centreX;
    var yFromCentre = mouseY - centreY;
    var distanceFromCentre = Math.sqrt( Math.pow( Math.abs( xFromCentre ), 2 ) + Math.pow( Math.abs( yFromCentre ), 2 ) );

    if ( distanceFromCentre <= chartRadius ) {

      // S?, era el clic dentro del gr?fico.
      // Encontrar el corte que se hizo clic mediante la comparaci?n de ?ngulos con respecto al centro de la tabla.

      var clickAngle = Math.atan2( yFromCentre, xFromCentre ) - chartStartAngle;
      if ( clickAngle < 0 ) clickAngle = 2 * Math.PI + clickAngle;

      for ( var slice in chartData ) {
        if ( clickAngle >= chartData[slice]['startAngle'] && clickAngle <= chartData[slice]['endAngle'] ) {

          // Rebanada encontr?. Tire de ella o empujarla adentro, seg?n se requiera.
          toggleSlice ( slice );
          return;
        }
      }
    }

    // El usuario debe haber hecho clic fuera del pastel. Empujar y tirar de salida rebanada de nuevo.
    pushIn();
  }


  /**
   * Proceso de rat?n hace clic en el ?rea de la tabla.
???*
???* Recuperar el n?mero de sector a partir de los datos almacenados en el jQuery
???* Click en celda de la tabla, a continuaci?n, cambiar la rebanada
   *
   * @param Event The click event
   */

  function handleTableClick ( clickEvent ) {
    var slice = $(this).data('slice');
    toggleSlice ( slice );
  }


  /**
   * Empuje una rebanada adentro o hacia afuera.
???*
???* Si ya est? sac?, empujarlo. De lo contrario, tire de ella.
   *
   * @param Number The slice index (between 0 and the number of slices - 1)
   */

  function toggleSlice ( slice ) {
    if ( slice == currentPullOutSlice ) {
      pushIn();
    } else {
      startPullOut ( slice );
    }
  }


  /**
   * Empezar a tirar a cabo una rebanada de pastel.
   *
   * @param Number The slice index (between 0 and the number of slices - 1)
   */

  function startPullOut ( slice ) {

    // Salir si ya estamos sacando esta rebanada
    if ( currentPullOutSlice == slice ) return;

    // Registre el sector que estamos sacando, despejar cualquier animaci?n anterior, a continuaci?n, iniciar la animaci?n
    currentPullOutSlice = slice;
    currentPullOutDistance = 0;
    clearInterval( animationId );
    animationId = setInterval( function() { animatePullOut( slice ); }, pullOutFrameInterval );

    // Resalte la fila correspondiente en la tabla de claves
    $('#chartData td').removeClass('highlight');
    var labelCell = $('#chartData td:eq(' + (slice*2) + ')');
    var valueCell = $('#chartData td:eq(' + (slice*2+1) + ')');
    labelCell.addClass('highlight');
    valueCell.addClass('highlight');
  }


  /**
   * Dibuje un cuadro de la animaci?n de extracci?n.
   *
   * @param Number The index of the slice being pulled out
   */

  function animatePullOut ( slice ) {

    // Tire de la rebanada hacia fuera mayor
    currentPullOutDistance += pullOutFrameStep;

    // Si me he tirado nada m?s sacarlo, interrumpa la animaci?n
    if ( currentPullOutDistance >= maxPullOutDistance ) {
      clearInterval( animationId );
      return;
    }

    // Dibujar en el marco
    drawChart();
  }


  /**
   * Pulse cualquier trozo tirado por el lado de adentro.
   *
   * Restablece las variables de animaci?n y volver a dibujar el gr?fico.
   * Tambi?n un-destacados todas las filas de la tabla.
   */

  function pushIn() {
    currentPullOutSlice = -1;
    currentPullOutDistance = 0;
    clearInterval( animationId );
    drawChart();
    $('#chartData td').removeClass('highlight');
  }


  /**
   * Dibujar el gr?fico.
???*
???* Bucle a trav?s de cada parte del pastel, y dibujarlo.
   */

  function drawChart() {

    // Obtener un contexto de dibujo
    var context = canvas.getContext('2d');

    // Desactive la lona, listo para el nuevo marco
    context.clearRect ( 0, 0, canvasWidth, canvasHeight );

    // Dibuje cada rebanada de la tabla, sin esperar rebanada de extracci?n (si los hay)
    for ( var slice in chartData ) {
      if ( slice != currentPullOutSlice ) drawSlice( context, slice );
    }

    // Si hay una rebanada de extracci?n, en efecto, dibujarlo.
    // (Llamamos la rebanada de extracci?n ?ltima por lo que su sombra no consigue pintar encima.)
    if ( currentPullOutSlice != -1 ) drawSlice( context, currentPullOutSlice );
  }


  /**
   * Dibuje una divisi?n individual en la tabla.
   *
   * @param Context A canvas context to draw on
   * @param Number The index of the slice to draw
   */

  function drawSlice ( context, slice ) {

    // Calcular los ?ngulos de inicio y fin ajustados para la rebanada
    var startAngle = chartData[slice]['startAngle']  + chartStartAngle;
    var endAngle = chartData[slice]['endAngle']  + chartStartAngle;

    if ( slice == currentPullOutSlice ) {

      // Estamos tirando (o hemos tirado) esta tajada.
      // Desplazamiento desde el centro de la empanada, dibujar la etiqueta de texto,
      // y a?adir una gota de sombra.

      var midAngle = (startAngle + endAngle) / 2;
      var actualPullOutDistance = currentPullOutDistance * easeOut( currentPullOutDistance/maxPullOutDistance, .8 );
      startX = centreX + Math.cos(midAngle) * actualPullOutDistance;
      startY = centreY + Math.sin(midAngle) * actualPullOutDistance;
      context.fillStyle = 'rgb(' + chartColours[slice].join(',') + ')';
      context.textAlign = "center";
      context.font = pullOutLabelFont;
      context.fillText( chartData[slice]['label'], centreX + Math.cos(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ), centreY + Math.sin(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ) );
      context.font = pullOutValueFont;
      context.fillText( pullOutValuePrefix + chartData[slice]['value'] + " (" + ( parseInt( chartData[slice]['value'] / totalValue * 100 + .5 ) ) +  "%)", centreX + Math.cos(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ), centreY + Math.sin(midAngle) * ( chartRadius + maxPullOutDistance + pullOutLabelPadding ) + 20 );
      context.shadowOffsetX = pullOutShadowOffsetX;
      context.shadowOffsetY = pullOutShadowOffsetY;
      context.shadowBlur = pullOutShadowBlur;

    } else {

      // Este trozo no se saca, por lo saque en el centro de la empanada
      startX = centreX;
      startY = centreY;
    }

    // Configurar el relleno degradado para la divisi?n
    var sliceGradient = context.createLinearGradient( 0, 0, canvasWidth*.75, canvasHeight*.75 );
    sliceGradient.addColorStop( 0, sliceGradientColour );
    sliceGradient.addColorStop( 1, 'rgb(' + chartColours[slice].join(',') + ')' );

    // Dibujar la rebanada
    context.beginPath();
    context.moveTo( startX, startY );
    context.arc( startX, startY, chartRadius, startAngle, endAngle, false );
    context.lineTo( startX, startY );
    context.closePath();
    context.fillStyle = sliceGradient;
    context.shadowColor = ( slice == currentPullOutSlice ) ? pullOutShadowColour : "rgba( 0, 0, 0, 0 )";
    context.fill();
    context.shadowColor = "rgba( 0, 0, 0, 0 )";

    // Estilo de la Frontera de la rebanada apropiadamente
    if ( slice == currentPullOutSlice ) {
      context.lineWidth = pullOutBorderWidth;
      context.strokeStyle = pullOutBorderStyle;
    } else {
      context.lineWidth = sliceBorderWidth;
      context.strokeStyle = sliceBorderStyle;
    }

    // Dibujar el borde rebanada
    context.stroke();
  }


  /**
   * funci?n de aceleraci?n.
   *
   * Un poco de mal gusto, pero parece que funciona!
   *(Nota mental: Vuelva a leer mis libros de matem?ticas de la escuela en alg?n momento)
   *
   * @param Number The ratio of the current distance travelled to the maximum distance
   * @param Number The power (higher numbers = more gradual easing)
   * @return Number The new ratio
   */

  function easeOut( ratio, power ) {
    return ( Math.pow ( 1 - ratio, power ) + 1 );
  }

};

</script>
</head>
<body>

<div id="container">

  <div class="wideBox">
    <h1>Estadistica</h1>
  </div>

  <canvas id="chart" width="400" height="400"></canvas>

<table class="tablesorter" id="chartData"> 
<thead> 
<tr> 
    <th>Nombre</th> 
    <th>Edad</th> 
</tr> 
</thead> 
<tbody> 
<tr style="color: #02A068"> 
    <td >Smith</td> 
    <td>80</td> 
</tr> 
<tr style="color: #352168"> 
    <td >Bach</td> 
    <td>70</td> 
</tr>  
<tr style="color: #ADA068"> 
    <td >Doe</td> 
    <td>60</td> 
</tr>  
<tr style="color: #0DA0F8"> 
    <td >Conway</td> 
    <td>40</td> 
</tr>  
</tr>  
<tr style="color: #02A0A8"> 
    <td >Dewp</td> 
    <td>20</td> 
</tr>  
</tr>  
<tr style="color: #0DAF58"> 
    <td >Swit</td> 
    <td>60</td> 
</tr> 
</tr>  
<tr style="color: #ADA028"> 
    <td >Clay</td> 
    <td>50</td> 
</tr>  
</tbody> 
</table> 
</div>

</body>
</html>
<script src="jquery.js"></script>
<script src="jquery.tablesorter.min.js"></script>
