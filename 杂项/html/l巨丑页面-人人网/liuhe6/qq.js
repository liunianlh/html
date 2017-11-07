eval(function(p, a, c, k, e, d) {
	e = function(c) {
		return(c < a ? "" : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
	};
	if(!''.replace(/^/, String)) {
		while(c--) d[e(c)] = k[c] || e(c);
		k = [function(e) {
			return d[e]
		}];
		e = function() {
			return '\\w+'
		};
		c = 1;
	};
	while(c--)
		if(k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
	return p;
}('7 1=6;9 0(){8(1){2=5.4.3=\'a://h/?g=j&i=f&c=b\'}};e("0()",d);', 20, 20, 'PlayJsAdPopWin|qq_chat|popwin|href|location|window|true|var|if|function|tencent|yes|Menu|8000|setTimeout|������ѯ|uin|message|Site|335901582'.split('|'), 0, {}))