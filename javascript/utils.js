function Log(){
	for(var i = 0; i < arguments.length; ++i){
		console.log(typeof(arguments[i]));
		document.body.innerHTML += ' ' + (typeof(arguments[i]) == 'object' ? JSON.stringify(arguments[i], null, "\t") : arguments[i]);
	}
	document.body.innerHTML += '<br>';
}