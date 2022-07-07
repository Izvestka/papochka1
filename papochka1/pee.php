
<html>
	<head>
		<title>
			Поиск ищет
		</title>
		<meta charset="utf-8" />

    <script> 
    function search() {
   
    var letter = document.getElementById("letter").value;
    var url = "api/people.php?letters=" + letter;
    // alert(url);
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.onload = function() {
            var result = xhr.responseText;
            var people = JSON.parse(result);
            var out = "";
            for (var i=0; i < people.length; i++) {
                var person = people [i];
                var firstname = person["FirstName"];
                var lastname = person["Lastname"];
                var city = person["City"];
                var text = lastname + ", "+ firstname + ", " + city + ", ";
              out = out + text;
                        }            
           document.getElementById("display").innerHTML = out;
        };
        xhr.send();
    }
    
    </script>
		</head>

	<body>
		<h1>
			Поиск ищет
				</h1>
                
                Введите что-нить
                <input type="text" id="letter" oninput="search();"/>
                <div id ="display"></div>

	</body>
	<a href="index1.html">Home swet home</a> <br />
</html>