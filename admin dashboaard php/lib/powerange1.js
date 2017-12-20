/**
 * Require classes.
 */

var Main = require('./main')
  , Horizontal = require('./horizontal')
  , Vertical = require('./vertical');

/**
 * Set default values.
 *
 * @api public
 */

var defaults = {
    callback: function() {}
  , decimal: false
  , disable: false
  , disableOpacity: 0.5
  , hideRange: true
  , klass: ''
  , min: 1
  , max: 1000
  , start: 1
  , step: 1
  , vertical: false
};

/**
 * Expose proper type of `Powerange`.
 */

module.exports = function(element, options) {
  options = options || {};

  for (var i in defaults) {
    if (options[i] == null) {
      options[i] = defaults[i];
    }
  }

  if (options.vertical) {
    return new Vertical(element, options);
  } else {
    return new Horizontal(element, options);
  }
};