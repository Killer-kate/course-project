let contayner1 = document.querySelector(".contact1");
let contayner2 = document.querySelector(".contact2");
let contayner3 = document.querySelector(".contact3");
let popUpBlock = document.querySelector(".pop-upBlock");
let popUpcontayner1 = document.querySelector(".pop-upcontayner1");
let popUpcontayner2 = document.querySelector(".pop-upcontayner2");
let popUpcontayner3 = document.querySelector(".pop-upcontayner3");
let flexContact = document.querySelector(".flexContact");
let closer = document.querySelector(".closer");
let closer2 = document.querySelector(".closer2");
let closer3 = document.querySelector(".closer3");



contayner1.onclick = function(){
  flexContact.style="display:none;";
  popUpBlock.style="display:block;";
  popUpcontayner1.style ="display:block;";
}
closer.onclick = function(){
  flexContact.style="display:block;";
  popUpBlock.style="display:none;";
  popUpcontayner1.style ="display:none;";
}


contayner2.onclick = function(){
  flexContact.style="display:none;";
  popUpBlock.style="display:block;";
  popUpcontayner2.style ="display:block;";
}
closer2.onclick = function(){
  flexContact.style="display:block;";
  popUpBlock.style="display:none;";
  popUpcontayner2.style ="display:none;";
}

contayner3.onclick = function(){
  flexContact.style="display:none;";
  popUpBlock.style="display:block;";
  popUpcontayner3.style ="display:block;";
}
closer3.onclick = function(){
  flexContact.style="display:block;";
  popUpBlock.style="display:none;";
  popUpcontayner3.style ="display:none;";
}




