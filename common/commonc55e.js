function formatCurrency( value, currency, decimals ) {
    if ( currency === 'BTC' ) {
        return formatBTC( value, true );
    }

    var s = parseFloat(value);
    s = s.toFixed(decimals || 2)
    return decimals ? s.replace(/0+$/g, '') : s;
}

function formatBTC( value, noTriads ) {
    var s = parseFloat(value).toFixed(8);
    s = s.replace(/0+$/, '');
    s = s.replace(/\.$/, '');

    return noTriads || +s < 1000 ? s : triads(s);
}

function triads( src_str, ch ) {
    if ( ! $.isNumeric(src_str) ) return src_str;

    var n_str = '' + src_str, x = n_str.split('.'), x1 = x[0];
    if ( x1.length < 4 ) return src_str;
    var rgx = /(\d+)(\d{3})/, x2 = x.length > 1 ? '.' + x[1] : '';

    ch = ch || '&nbsp;';
    while ( rgx.test(x1) ) {
        x1 = x1.replace( rgx, '$1' + ch + '$2' );
    }
    return x1 + x2;
}

var Obj = { };

(function(){
Obj.apply = function( dst, src, defaults ) {
    if (defaults) {
        Obj.apply( dst, defaults );
    }
    if ( src && 'object' === typeof src && dst ) {
        for ( var prop in src ) {
            dst[prop] = src[prop];
        }
    }
    return dst;
};

Obj.apply( Function.prototype, {
    createCallback: function(/* some args... */) {
        var args = arguments, meth = this;
        return function() {
            return meth.apply( window, args );
        };
    },
    createDelegate: function( scope, args, append_args ) {
        var meth = this;
        return function() {
            var call_args = args || arguments;
            if ( append_args === true ) {
                call_args = Array.prototype.slice.call( arguments, 0 );
                call_args = call_args.concat(args);
            }
            else if ( $.isNumeric(append_args) ) {
                // copy arguments first
                call_args = Array.prototype.slice.call( arguments, 0 );
                // create method call params
                var apply_args = [ append_args, 0 ].concat(args);
                // splice them in
                Array.prototype.splice.apply( call_args, apply_args );
            }
            return meth.apply( scope || window, call_args );
        };
    }
} );

Obj.apply( String, {

    format: function() {
        var s = arguments[0];
        for ( var i = 0; i < arguments.length - 1; i++ ) {
            var reg = new RegExp( '\\{' + i + '\\}', 'gm' );
            s = s.replace( reg, arguments[i + 1] );
        }
        return s;
    }

} );

window.sformat = String.format;

})();
