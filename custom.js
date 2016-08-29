/*Powered by WeDevelopOnline.com : created by Vikash Mishra, use it with twitter bootstrap for better looks and for better responce.
Use jquery CDN for making the functions work properly.*/


$(document).ready(function(){
		function load(){
		$.ajax({
			url:'db.php',
			method: 'POST',
			success:function(data){
				$("#load").html(data);
			}
		});
		
		};
		load();
		$(document).on('click', '.bton', function(){
			var name= $(this).data("id");
			if(confirm("Do you want to delete this row"))
			{
				$.ajax({
					url: 'delete.php',
					method: 'POST',
					data:{id:name},
					success: function(data){
						alert(data);
						load();
					}
				});
			}
		});
		
		$(document).on('click','#add', function(){
			var addName= $("#name").text();
			var addComp= $("#company").text();
			$.ajax({
				url:'insert.php',
				method:'POST',
				data: {name:addName, company:addComp},
				success:function(data){
					alert(data);
					load();
				}
			});
		});
		
		
		$(document).on('blur','.type', function(){
			var editID=$(this).data('id1');
			var editName= $(this).text();
			alert(editName);	
		})
});