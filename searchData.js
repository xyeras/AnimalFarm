
	function searchData(){
		var specificColumn=document.getElementById("specifier").value;
		var input, filter, table, tr, td, i, j, numCol, match;
		// What the user is searching for
		input = document.getElementById("searchTerm");
		// Eliminates upper/lowercase variations
		filter = input.value.toUpperCase();
		// Gets the table and makes an array of all the rows
		table = document.getElementById("table1");
		tr = table.getElementsByTagName("tr");
		//Searches the whole table if the specifier value is empty
		if(specificColumn ==0)
		{
			// number of columns in the row
			numCol = tr[0].cells.length;
			// Loop through all table rows, starts at one to ignore table head
			for (i = 1; i < tr.length; i++) {
				match = false;
				for(j = 0; j<numCol; j++){
					//if there is a match, set match to true, leave match at false if no match
					if(tr[i].cells[j].innerHTML.toUpperCase().indexOf(filter) > -1)
						match = true;
				}
				//if there is a match, it allows the row to be shown, if not the row is hidden
				if (match == true) {
					tr[i].style.display = "";
				}
				else {
					tr[i].style.display = "none";
				}
			} 
		}
		
		else //when a specific column is picked
		{
			var colNum = specificColumn-1;
			for(i = 1; i< tr.length; i++){
				//if there is a match, it allows the row to be shown, if not the row is hidden
				if (tr[i].cells[colNum].innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				}
				else {
					tr[i].style.display = "none";
				}
			} 
		}
	}