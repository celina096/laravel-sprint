<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.0
    </div>
    <strong>Copyright &copy; 2017 <a href="/home">MIS FINANZAS</a>.</strong> All rights reserved.
</footer>
<!-- jQuery -->
<script src="/plugins/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="/plugins/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/plugins/js/app.min.js"></script>

<!-- DATATABLES -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables/buttons.html5.min.js"></script>
<script src="/plugins/datatables/buttons.colVis.min.js"></script>
<script src="/plugins/datatables/jszip.min.js"></script>
<script src="/plugins/datatables/pdfmake.min.js"></script>
<script src="/plugins/datatables/vfs_fonts.js"></script>

<script src="/plugins/js/bootbox.min.js"></script>
<script src="/plugins/js/bootstrap-select.min.js"></script>

<!-- FORMATO DE MONEDA -->
<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
<script type="text/javascript">
  numeral.register('locale', 'ar', {
      delimiters: {
          thousands: '.',
          decimal: ','
      },
      currency: {
          symbol: '$'
      }
  });
  numeral.locale('ar');
</script>
<!-- OTRO FORMATO DE MONEDA -->
<script type="text/javascript">
var formatNumber = {
 separador: ".", // separador para los miles
 sepDecimal: ',', // separador para los decimales
 formatear:function (num){
 num +='';
 var splitStr = num.split('.');
 var splitLeft = splitStr[0];
 var splitRight = splitStr.length > 1 ? this.sepDecimal + splitStr[1] : '';
 var regx = /(\d+)(\d{3})/;
 while (regx.test(splitLeft)) {
 splitLeft = splitLeft.replace(regx, '$1' + this.separador + '$2');
 }
 return this.simbol + splitLeft +splitRight;
 },
 new:function(num, simbol){
 this.simbol = simbol ||'';
 return this.formatear(num);
 }
}
</script>

<script type="text/javascript">

function ajax (url, callback) {
  var request = new XMLHttpRequest()
  request.onreadystatechange = function () {
    if (this.readyState == 4) {
      if (this.status == 200) {
        callback(null, JSON.parse(this.response))
      } else {
        callback(Error(this.status))
      }
    }
  }
  request.open('GET', url)
  request.send()
};

</script>
</body>
</html>
