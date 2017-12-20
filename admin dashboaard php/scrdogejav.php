<script type="text/javascript">
      var doge_month = 0;
      var delay_doge = 100;
      var curdoge_earn  = 0;
      setInterval("stDoge()", delay_doge);  
      function stDoge() {
	  var divmydiv = document.divmy;
      var eadn_eadn = document.form7.txtDogeSum.value;
      var doge_second = doge_month / (30 * 24 * 3600);
      curdoge_earn += (doge_second * delay_doge / 1000);
	  var eadn_now = (+eadn_eadn + +curdoge_earn).toFixed(11);
      document.getElementById('labeldoge').innerHTML = eadn_now;
      }
      function Dogeup() {
      doge_month = document.form6.earn_doge.value;
      curdoge_earn = eadn_eadn;
	  }
	  function stopDoge() {
	  eadn_eadn = 0;
	  }
</script>
