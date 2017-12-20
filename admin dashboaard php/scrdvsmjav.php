<script type="text/javascript">
      var dvsm_month = 0; 
      var delay_dvsm = 100;
      var curdvsm_earn  = 0;
      setInterval("stDvsm()", delay_dvsm);  
      function stDvsm() {
	  var divmydivs = document.divmy;
      var eamn_eamn = document.form14.txtSumDvsm.value;
      var dvsm_second = dvsm_month / (30 * 24 * 3600);
      curdvsm_earn += (dvsm_second * delay_dvsm / 1000);
	  var eamn_now = (+eamn_eamn + +curdvsm_earn).toFixed(11);
      document.getElementById('labeldvsm').innerHTML = eamn_now;
      }
      function Dvsmup() { 
      dvsm_month = document.form11.earn_dvsm.value;
      curdvsm_earn = eamn_eamn;
	  }
</script>
