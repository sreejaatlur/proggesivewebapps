function getfile(file,callback){
  var xhr= new  XMLHttpRequest();
  xhr.overrideMimeType("application/json");
  xhr.open("GET",file,true);
  xhr.onreadystatechange=function(){
    if(xhr.readyState===4 && xhr.status=="200"){
    callback(xhr.responseText);
  }
};
xhr.send(null);
}
getfile("data.json",function(text){
  var data=JSON.parse(text);
  console.log(data);
  details(data.basics);
  career(data.objec);
})
var child=document.querySelector(".child1");
function details(det) {
  var img=document.createElement("img");
  img.src=det.image;
  child.appendChild(img);
  var name= document.createElement("h3");
  name.textContent=det.name;
  child.appendChild(name);
  var number= document.createElement("h2");
  number.textContent=det.phonenumber;
  child.appendChild(number);
  var mail=document.createElement("a")
  mail.href= "mail to :atlurisreeja@gmail.com";
  mail.textContent=det.email;
  child.appendChild(mail);
  var ade= document.createElement("h3");
  ade.textContent=det.adr;
child.appendChild(ade);
  var print= document.createElement("hr");
  child.appendChild(print);
  var add=document.createElement("h4");
  add.textContent=det.address;
  child.appendChild(add);
}
var child2=document.querySelector(".child2");
function career(car) {
    var head=document.createElement("h1");
  head.textContent=car.adt;
  child2.appendChild(head);
    var line= document.createElement("hr");
  child2.appendChild(line);
  var care=document.createElement("h4");
  care.textContent=car.info;
  child2.appendChild(care);

}
