function night_day(){
	var nd = document.querySelector('#nd')
	if (nd.value == '야간모드'){
	document.querySelector('body').style.color = 'white'
	document.querySelector('body').style.backgroundColor = 'black'
	nd.value = '주간모드'
	}

	else if (nd. value == '주간모드'){
		document.querySelector('body').style.color = 'black'
		document.querySelector('body').style.backgroundColor = 'white'
		nd.value = '야간모드'

	}
}