<script type="text/javascript">
      var earn_month = 0; 
      var delay = 100; 
      var cur_earn  = 0;
      setInterval("startEarn()", delay);  
      function startEarn() {
	  var divmydiv = document.divmy;
      var earn_earn = document.form3.txtsum.value;
      var earn_second = earn_month / 2592000;
      cur_earn += (earn_second * delay / 1000);
	  var earn_now = (+earn_earn + +cur_earn).toFixed(11);
      document.getElementById('labelcounted').innerHTML = earn_now;
      }
      function updateEarn() { 
      earn_month = document.form2.earn_month.value;
      cur_earn = earn_earn;
	  }
	  function stopEarn() {
	  earn_earn = 0;
	  }
</script>