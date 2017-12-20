<script type="text/javascript">
      var earn_montt = 0; 
      var delay_dvs = 100; 
      var curs_earn  = 0;
      setInterval("startEarnDVS()", delay_dvs);  
      function startEarnDVS() {
	  var divmydiv = document.divmy;
      var earn_earnDVS = document.form13.txtSumDVS.value;
      var earn_secondDVS = earn_montt / (30 * 24 * 3600);
      curs_earn += (earn_secondDVS * delay_dvs / 1000);
	  var earn_nowDVS = (+earn_earnDVS + +curs_earn).toFixed(11);
      document.getElementById('labelDVS').innerHTML = earn_nowDVS;
      }
      function updateEarnDVS() { 
      earn_montt = document.formDVS.earn_montt.value;
      curs_earn = earn_earnDVS;
	  }
	  function stopEarnDVS() {
	  earn_earn = 0;
	  }
</script>