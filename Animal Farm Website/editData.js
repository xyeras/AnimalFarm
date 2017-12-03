function changeInput(x) {
        var val = $(x).attr('value');
        alert(val);
    	document.getElementById('submit').classList = "container center waves-effect waves-light btn-large red";
        $(x).addClass('selected').siblings().removeClass('selected');
        document.getElementById('rowNum').value = val;
}

