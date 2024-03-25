document.addEventListener('DOMContentLoaded', () => {

   const requestURL = "../data/goods-data.json",
      request = new XMLHttpRequest(),
      cardBox = document.querySelector('.menuCatalogs');
   let cartAddedGoods = [];

   request.open('GET', requestURL);
   request.responseType = 'json';
   request.send();

   request.onload = function () {
      const goods = request.response;
      cardGenerate(goods);
      const btnsCartAdd = document.querySelectorAll('.btn-cart-add');
      btnsCartAdd.forEach(item => {
         item.addEventListener('click', (e) => {
            e.preventDefault();
            const goodsId = item.getAttribute('data-goodsId');
            if (!localStorage.getItem("cartGoods")) {
               localStorage.setItem("cartGoods", JSON.stringify(cartAddedGoods))
            } else {
               cartAddedGoods = JSON.parse(localStorage.getItem("cartGoods"));
            }

            if (cartAddedGoods.findIndex(item => item.id == goodsId) !== -1) {
               let goodsObj = cartAddedGoods.find(item => item.id == goodsId);
               goodsObj.count++;
            } else {
               const goodsObj = { id: goodsId, count: 1 };
               cartAddedGoods.push(goodsObj);
            }

            localStorage.setItem("cartGoods", JSON.stringify(cartAddedGoods))
         });
      });
   }

   let nik = document.querySelector(".user");
   if(nik ==="" || !nik){
      function cardGenerate(array) {
         for (let i = 0; i < array.length; i++) {
            const cardHtml = document.createElement('div');
            cardHtml.innerHTML =
               ` <div class="imageCatal" id="${array[i].category}">
               <form action="../php/basketNewTowar.php" method="post">
               <img class="" width="220" height="220" value="${array[i].image}" name="image" src="${array[i].image}" alt="Card image">
               <div class="card-body">
                  <input class="card-title" name="title" value="${array[i].title}">
                  <input class="card-texts" name="description" value="${array[i].description}">
                  <input class="card-text" name="coin" value="Цена: ${array[i].price} руб.">
                  <input class="card-text" name="code" value="${array[i].id}">
                  </form>
               </div>
               </div>`;
            cardBox.appendChild(cardHtml);
         }
      }
   } else{
      function cardGenerate(array) {
         for (let i = 0; i < array.length; i++) {
            const cardHtml = document.createElement('div');
            cardHtml.innerHTML =
               ` <div class="imageCatal" id="${array[i].category}">
               <form action="../php/basketNewTowar.php" method="post">
               <img class="" width="220" height="220" value="${array[i].image}" name="image" src="${array[i].image}" alt="Card image">
               <div class="card-body">
                  <input class="card-title" name="title" value="${array[i].title}">
                  <input class="card-texts" name="description" value="${array[i].description}">
                  <input class="card-text" name="coin" value="Цена: ${array[i].price} руб.">
                  <input class="card-text" name="code" value="${array[i].id}">
                  <input class="buttonBasket" id="basKet" type="submit" value="Купить">
                  </form>
               </div>
               </div>`;
            cardBox.appendChild(cardHtml);
         }
      }
   }
});

