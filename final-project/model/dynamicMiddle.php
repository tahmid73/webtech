<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" href="./css/users.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
</body>
</html>
<script>
    var i=0;
    window.onload=showPackage();
    function showPackage() {
				$.get("../model/getPackage.php",function(data, status) {
					const pack = JSON.parse(data);
                    const size =pack.length;
					let tableData = "<body>";
						tableData += "<div class='zero'>"+
                        "<div>"+
                        "<img class='images' src='../view/css/images/homepage-bg.png' alt=''>"+
                        "</div>"+
                        "<div class='first'>"+
                        pack[i].speed+
                        "</div>"+
                        "<div class='second'>"+
                        "<a class='third'>FREEDOM</a>"+
                        "<a>Mbps</a>"+
                        "<a>Unlimited</a>"+
                        "<div>"+
                        "    <a>@</a>"+
                        "    <a class='money'>"+pack[i].cost+"</a>"+
                        "    <a class='money'>TK/month</a>"+
                        "</div>"+
                        "</div>"+
                        "</div>";
					tableData += "</body>";
                    "print"
					$("#i3").html(tableData);
                    if(i<size)
                    i++;
                    else
                    i=0;
                    setInterval(showPackage,10000);
				});
                console.log("done");
			}
function getUsers(){
  myVar
}

</script>