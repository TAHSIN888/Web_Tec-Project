
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 2px solid blueviolet;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body>

    <table>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    
    </tr>
 
    <tbody id="data"></tbody>


</table>

<script>
    //call ajax
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "data.php", true);
    ajax.send();
 
    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
 
            var html = "";
            for(var a = 0; a < data.length; a++) {
                var name = data[a].name;
                var email = data[a].email;
                var subject = data[a].subject;
                var message = data[a].message;
                

                //appending at html
                html += "<tr>";
                    html += "<td>" + name + "</td>";
                    html += "<td>" + email + "</td>";
                    html += "<td>" + subject + "</td>";
                    html += "<td>" + message + "</td>";
                   
                html += "</tr>";
            }
            //replacing the 
            document.getElementById("data").innerHTML += html;
        }
    };
</script>

</body>
</html>

 
