function urlencode(){
	var val = document.getElementById('urlencodeInput').value;
	document.getElementById('urlencodeResult').value=encodeURIComponent(val).replace(/'/g,"%27").replace(/"/g,"%22");
}

function urldecode(){
	var val = document.getElementById('urldecodeInput').value;
	document.getElementById('urldecodeResult').value=decodeURIComponent(val.replace(/\+/g,  " "));
}
