//Las funciones de datatable y ajax, las tengo en Footer

function init()
{
  // Return today's date and time
  var currentTime = new Date()
  // returns the month (from 0 to 11)
  var month = currentTime.getMonth() + 1
  // returns the day of the month (from 1 to 31)
  var day = currentTime.getDate()
  // returns the year (four digits)
  var year = currentTime.getFullYear()
  var periodo = year+"-"+month

  $("#periodo").append("<option selected value='"+periodo+"'>"+periodo+"</option>");

  var url = "tipo_gasto/"+periodo+"";
  datatable(url);

  ajax(url, function (err, response) {
        if (err) return console.error(err)

        console.log("response", response)

        var saldo = response.data.reduce(function (accum, current) {
          return accum + current.importe
        }, 0)

        document.getElementById('gasto').innerText = numeral(saldo).format('$0,0.00')
      });

};



$("#periodo").change(function(e){
var periodo = document.getElementById("periodo").value;
var url = "tipo_gasto/"+periodo+"";
var saldo =0;

    datatable(url);
    ajax(url, function (err, response) {
          if (err) return console.error(err)

          console.log("response", response)

          var saldo = response.data.reduce(function (accum, current) {
            return accum + current.importe
          }, 0)

          document.getElementById('gasto').innerText = numeral(saldo).format('$0,0.00')
        });
});

function datatable(url){

  Table=$('#tabla_datos').DataTable({
  'dataType': 'json',
  "aProcessing": true,//Activamos el procesamiento del datatables
  "aServerSide": true,//Paginación y filtrado realizados por el servidor
  dom: 'Bfrtip',//Definimos los elementos del control de tabla
  buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdf'
          ],
  "ajax":
          {
              url: url,
              type : "get",
              dataType : "json",
              error: function(e){
                  console.log("jQuery ajax", e.responseText);
              }
          },
  type : "GET",
  columns: [
    { data: 'gasto', name: 'gasto' },
    { data: 'tipo', name: 'tipo' },
    { data: 'importe', name: 'importe',render: $.fn.dataTable.render.number( ',', '.', 2 )}
  ],
  "bDestroy": true,
  "iDisplayLength": 10,//Paginación
  "order": [[ 0, "asc" ]]//Ordenar (columna,orden)
  });

};

init();
