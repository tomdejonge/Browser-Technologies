function SaveItem() {
			
	var name = document.forms.myform.name.value;
	var data = document.forms.myform.data.value;
	localStorage.setItem(name, data);
	doShowAll();
	
}

function ClearAll() {
	localStorage.clear();
	doShowAll();
}

// dynamically draw the table

function doShowAll() {
	if (CheckBrowser()) {
		var key = "";
		var list = "<tr><th></th></tr>\n";
		var i = 0;
		for (i = 0; i <= localStorage.length - 1; i++) {
			key = localStorage.key(i);
			list += "<tr><td>" + key + "</td>\n<td>"
					+ localStorage.getItem(key) + "</td></tr>\n";
		}
		if (list == "<tr><th></th></tr>\n") {
			list += "<tr><td><i></i></td></tr>\n";
		}
		document.getElementById('list').innerHTML = list;
	} else {
		
	}
}



function CheckBrowser() {

	var support = document.getElementById('support');
	var no_support = document.getElementById('no_support');
	var mail = document.getElementById('mail');
	var mail_btn = document.getElementById('mail_btn');
	var save_btn = document.getElementById('save_btn');
	var items_table = document.getElementById('items_table');

	if ('localStorage' in window && window['localStorage'] !== undefined) {
		// we can use localStorage object to store data
		
		mail.className += " hidden";
		mail_btn.className += " hidden";
		no_support.className += " hidden ";
		save_btn.className += " shown ";
		items_table.className += " shown ";

		support.innerHTML = ':D LocalStorage wordt ondersteund, als je terug komt staan jouw shirts onder aan de pagina nog opgeslagen.';
		return true;
	} else {

		// no.support.innerHTML = ':( Helaas, localStorage uit staan of je browser ondersteund dit niet, dit betekend dat je favorietenlijstje niet meer is opgeslagen als je terug komt';
		alert('Cannot store design as your browser do not support local storage');
		return false;
	}
}