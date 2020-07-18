<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>MULTI</title>
  

</head>
<body background="red">
	<div class="container">
		<br/>
		<h2 align="center">MULTILINE INSERT</h2>
		<br>
		<div class="table-responsive">
			<table class="table table-bordered" id="crud_table">
			    <tr>
				    <th width="30%">Item Name</th>
				    <th width="10%">Item Code</th>
				    <th width="45%">Description</th>
				    <th width="10%">Price</th>
				    
			    </tr>
				<tr>
					<td contenteditable="true" class="item_name"></td>
					<td contenteditable="true" class="item_code"></td>
					<td contenteditable="true" class="item_desc"></td>
					<td contenteditable="true" class="item_price"></td>
					
					
				</tr>
			</table>
			<div style="margin-left: 1000px;">
				<button type="button" name="add" id="add" class="btn btn-success btn-xs">ADD</button>
			</div>
			<div align="center">
				<button type="button" name="save" id="save" class="btn btn-info">Save</button>
			</div>
			<br>
			<div id="inserted_item_data"></div>
		</div>
	</div>
	       


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

<script>
	$(document).ready(function(){
		var count=1;
		$('#add').click(function(){
			count=count+1;
			var html_code="<tr id'row"+count+"'>";
			html_code+="<td contenteditable='true' class='item_name'></td>";
			html_code+="<td contenteditable='true' class='item_code'></td>";
			html_code+="<td contenteditable='true' class='item_desc'></td>";
			html_code+="<td contenteditable='true' class='item_price'></td>";
			
			
			html_code+="</tr>"
			$('#crud_table').append(html_code);
		});

		$('#save').click(function(){
			var item_name=[];
			var item_code=[];
			var item_desc=[];
			var item_price=[];
			

			$('.item-name').each(function(){
				item_name.push($(this).text());
			});
			$('.item-code').each(function(){
				item_code.push($(this).text());
			});
			$('.item-desc').each(function(){
				item_desc.push($(this).text());
			});
			$('.item-price').each(function(){
				item_price.push($(this).text());
			});
			

			$.ajax({
				url:"insert.php",
				method:"POST",
				data:{item_name:item_name, item_code:item_code, item_desc:item_desc, item_price:item_price},
				success:function(data)
				{
					$("td[contentEditable='true]").text("");
					for(var i=2;i<=count;i++){
						$('tr#'+i+'').remove();	
					}
				}
			})
		});
	});
</script>