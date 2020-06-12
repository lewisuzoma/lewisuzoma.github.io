const downloadFormArr = {
	email: document.getElementById('downloadForm').elements[0].value
}

const jsonFormat = JSON.stringify(downloadFormArr);

function saveText(text, filename) {
	var a = document.createElement('a');
	a.setAttribute('href', 'data:text/plain;charset=utf-8,'+encodeURIComponent(text));
	a.setAttribute('download', filename);
	a.click();
}

saveText( jsonFormat, "filename.json" );