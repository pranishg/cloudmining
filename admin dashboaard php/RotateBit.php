<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript"
src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript" src="js/jQueryRotateCompressed.2.2.js">
</script>
<script type='text/javascript'>
      var angle = 0;
      setInterval(function BitRotate(){
        angle+=3;
        $("#bitimg").rotate(angle);
        $("#bitimg").rotate({
            angle: angle,
            center: [300,300]
        });
      },50); 
  </script>