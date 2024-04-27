var count = 0;
document.getElementById("myButton").onclick = function(){
count++;
if (count % 2 == 0) {
document.getElementById("demo").innerHTML ="";
} 
else {
var img = document.createElement("img");
img.src = "https://memepedia.ru/wp-content/uploads/2018/09/persian_cat_room_guardian_by_anyaboz-d6gqnho.jpg";
document.getElementById("demo").appendChild(img);
}
}