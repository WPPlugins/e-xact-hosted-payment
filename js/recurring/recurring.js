function recurringenabled(){
	if (document.getElementById('recurring').checked) {
        document.getElementById('recurring_billing').style.visibility = 'visible';	
    }
    else document.getElementById('recurring_billing').style.visibility = 'collapse';
}