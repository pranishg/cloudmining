<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />

  <title>Powerange - iOS 7 style range slider</title>
  <link rel="stylesheet" href="http://abpetkov.github.io/powerange/stylesheets/demo.css" />
  <link rel="stylesheet" href="../dist/powerange.css" />
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro:400" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet" type="text/css" />
  <link href="http://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" type="text/css" />
</head>
<body>

  <div class="example">
          <h3>Checking state</h3>

          <p>Check the current value of the range slider, by looking at the value of the text input element.</p>

          <p>On click:</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> clickInput <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-click'</span>)</div>
              <div>&nbsp;&nbsp;, clickButton <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-click-button'</span>)</div>
              <br />
              <div>clickButton.addEventListener(<span class="value">'click'</span>, <span class="specials">function</span>() {</div>
              <div>&nbsp;&nbsp;<span class="single">alert</span>(clickInput.<span class="boolean">value</span>);</div>
              <div>});</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-check-click" />
            <button class="js-check-click-button button small-button">Check value</button>
          </div>

          <p>On change:</p>

          <pre>
            <div class="script">
              <div><span class="specials">var</span> changeInput <span class="sign">=</span> <span class="single">document</span>.querySelector(<span class="value">'.js-check-change'</span>);</div>
              <br />
              <div><span class="single">changeInput</span>.<span class="name">onchange</span> = <span class="specials">function</span>() {</div>
              <div>&nbsp;&nbsp;<span class="single">document</span>.<span class="specials">getElementById</span>(<span class="value">'js-display-change'</span>).innerHTML = changeInput.<span class="boolean">value</span>;</div>
              <div>};</div>
            </div>
          </pre>

          <div class="slider-wrapper">
            <input type="text" class="js-check-change" />
            <label class="display-box-label">Value:</label>
            <div id="js-display-change" class="display-box"></div>
          </div>

        </div>

          <script src="../dist/powerange.min.js"></script>
  <script type="text/javascript">

    // Basic customization.
    var cust = document.querySelector('.js-customized');
    var initCust = new Powerange(cust, { hideRange: true, klass: 'power-ranger', start: 60 });

    // Min, max, start.
    var vals = document.querySelector('.js-min-max-start');
    var initVals = new Powerange(vals, { min: 16, max: 256, start: 128 });

    // Decimal.
    var dec = document.querySelector('.js-decimal');
    var initDec = new Powerange(dec, { decimal: true, callback: displayDecimalValue, max: 50, start: 19.12 });

    function displayDecimalValue() {
      document.getElementById('js-display-decimal').innerHTML = dec.value;
    }

    // Step.
    var stp = document.querySelector('.js-step');
    var initStp = new Powerange(stp, { start: 50, step: 10 });

    // Hide range.
    var hide = document.querySelector('.js-hiderange');
    var initHideRange = new Powerange(hide, { hideRange: true, start: 70 });

    // Disabled.
    var disabled = document.querySelector('.js-disabled');
    var initDisabled = new Powerange(disabled, { disable: true, disabledOpacity: 0.75, start: 30 });

    // Vertical.
    var vert = document.querySelector('.js-vertical');
    var initVert = new Powerange(vert, { start: 80, vertical: true });

    // Checking state.
    // On click.
    var clickInput = document.querySelector('.js-check-click')
      , clickButton = document.querySelector('.js-check-click-button')
      , initClickInput = new Powerange(clickInput, { start: 20 });

    clickButton.addEventListener('click', function() {
      alert(clickInput.value);
    });

    // On change.
    var changeInput = document.querySelector('.js-check-change')
      , initChangeInput = new Powerange(changeInput, { start: 70 });

    changeInput.onchange = function() {
      document.getElementById('js-display-change').innerHTML = changeInput.value;
    };

    // Callback.
    var clbk = document.querySelector('.js-callback');
    var initClbk = new Powerange(clbk, { callback: displayValue, start: 88 });

    function displayValue() {
      document.getElementById('js-display-callback').innerHTML = clbk.value;
    }

    // Interacting with elements.
    var opct = document.querySelector('.js-opacity');
    var initOpct = new Powerange(opct, { callback: setOpacity, decimal: true, min: 0, max: 1, start: 1 });

    function setOpacity() {
      document.querySelector('.js-change-opacity').style.opacity = opct.value;
    }
  </script>
</body>
</html>