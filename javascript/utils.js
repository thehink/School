function Log(){
	var output = '';
	for(var i = 0; i < arguments.length; ++i){
		output += ' ' + (typeof(arguments[i]) == 'object' ? JSON.stringify(arguments[i], null, 4) : arguments[i]);
	}
	output += '<br>';
	document.body.innerHTML += output;
}
