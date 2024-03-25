let but1 = document.querySelector("#avt");
  let but2 = document.querySelector("#button2");
  let but3 = document.querySelector("#button3");
  let forma = document.querySelector(".contaynerRegister");
  let shadow = document.querySelector(".backgrounds");
  
  let win1 = document.querySelector("#window1");
  let win2 = document.querySelector("#window2");
  let winde1 = document.querySelector(".windowe");
  let winde2 = document.querySelector(".window");

  
  
  
  /*При клике на кнопку открывается форма*/
	  but1.onclick = function(){
	
	  forma.style = 'display:block';
	  shadow.classList.add('background');
	  }
	  /*При клике на зону форма закрывается */
	  /*При клике на крестик форма закрывается */
	  document.querySelector("#closer").onclick = function(){
		  forma.style = 'display:none';
		  shadow.classList.remove('background');
	  }
  
	  
  win1.onclick = function(){
	  winde1.style = 'display:block';
	  winde2.style = 'display:none';
	  
  }
  
  win2.onclick = function(){
	  winde1.style = 'display:none';
	  winde2.style = 'display:block';
	  
  }

  let m = document.getElementById('burgerMenu')
	let imageMenu = document.querySelector(".imageMenu");
  	imageMenu.onclick = function(){
		  m.style = "display:block";
		  document.querySelector('.flexBur').style = "display:flex;flex-direction:column;"

	  }























