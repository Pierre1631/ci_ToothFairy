function checkCheckBoxes(theForm) {
	var pay1 = $("input:radio[name=template]:checked").length;
		if(pay1<=0){
			alert ('You didn\'t choose any template!');
			return false;
		}
}