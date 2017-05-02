// Creating For Validation

function start() {
	document.getElementById("submit").addEventListener("click",result,false);
	document.getElementById("clear").addEventListener("click",function(){location.reload();},false);
}
function result(){
	var adult=document.getElementById("ticketAdult").value;
	var child=document.getElementById("ticketChild").value;
	var senior=document.getElementById("ticketSenior").value;
	//to get droplist option to variable x
	var x = document.getElementById("parking"); 
	// the value in droplist option index to variable parking
	var parking = x.options[x.selectedIndex].value;
	
	//if-else case for the ticket Reservation
	//Number isNaN to validate the input is number 
		if(!isNaN (adult)){
			if(!isNaN(child)){
				if(!isNaN(senior)){
					var total = (adult*40) + (child*20) + (senior*30);
					var tax = (total % 10);
					document.getElementById("subtotal").innerHTML=" Your Sub-Total is $" + total+tax;
				}else{
				document.getElementById("subtotal").innerHTML="Please Enter a Number";
				}
			}else{
			document.getElementById("subtotal").innerHTML="Please Enter a Number";
			}
		}else{
			document.getElementById("subtotal").innerHTML="Please Enter a Number";
		}
		//results is displayed in subtotal id
		
		//total from tickets is add to selected parking option to get final total amount. 
		if(parking!='')
		{
			total1=(tax)+(total)+parseInt(parking);
			document.getElementById("totalResult").innerHTML=" Total Amount is $" + total1;
		}
			//result is displayed in total id.
}
	
//}


window.addEventListener("load", start, false);