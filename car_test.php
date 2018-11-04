<!DOCTYPE html>

<body>
<ul id="list">
    <li>Helo World-1</li>
    <li>Helo World-2</li>
    <li>Helo World-3</li>
       <ul>
         <li>One</li>
         <li>Two</li>
      </ul>
 </ul> 
</body>


<script>
var ul = document.getElementById("list");
var li = document.createElement("li");
li.appendChild(document.createTextNode("Your list item text"));
ul.appendChild(li);
ul.insertBefore(li, document.getElementById("list_item_id"));

var lis = ul.getElementsByTagName("li");
var lastLi = lis[lis.length - 1];
var nestedUl = document.createElement("ul");
var nestedLi = nestedUl.appendChild(document.createElement("li"));
nestedLi.appendChild(document.createTextNode("One"));

lastLi.appendChild(nestedUl);
</script>