<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <title>JavaScript And JSON</title>
</head>
<body>

<h2>Links: Accessing from JSON Objects in an Array</h2>

<ul id="links">



</ul>

<script>

var info = {
"full_name" : "Ray Villalobos",
"title" : "Staff Author",
"links" : [
        {"blog"     : "http://iviewsource.com"},
        {"facebook" : "http://facebook.com/iviewsource"},
        {"youtube"  : "http://www.youtube.com/planetoftheweb"},
        {"podcast"  : "http://feeds.feedburner.com/authoredcontent"},
        {"twitter"  : "http://twitter.com/planetoftheweb"}
    ]
};




var output;
var i;

for(i=0; i<= info.links.length; i++){
    for(key in info.links[i]){
        if(info.links[i].hasOwnProperty(key)){
            output += '<li>' + '<a href="' + info.links[i][key] + '">' + key + '</a>'; 

            output += '</li>'

        }


    }
}

var update = document.getElementById('links');
update.innerHTML = output;




</script>
</body>
</html>