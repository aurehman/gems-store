 ( function (){
 	var app = angular.module ('store', ['strore-products']);
 
/** app.controller('StoreController', ['$http', function($http){
    var store = this;
    store.products = [];
    $http.get('products.json').success(function (data) {
      store.products = data;
    });
  }]); 
***
json error with above code
 **/

 app.controller('StoreController', function() {
 	this.product = [];
this.products = gems;
});


 var gems = [
 {
 	name: 'Dodecadehron',
 	price: 2.95,
 	description: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
 	specification: '2.5mg, Red',
 	reviews: [
 	{
 	stars: '5',
 	body: 'best products',
 	author: 'abc@xyz.com',
 	},

 	{
 		stars: '4',
 	body: 'best purchase ever',
 	author: 'abc@abc.com',
 	}

 	],
 	canPurchase: true,
 	soldOut: false,
 	images: [
 	'images/1.jpg',
 	'images/2.jpg',
 	'images/3.jpg'
 	],

 
 },
  {
 	name: 'Steelie',
 	price: 2.45,
 	description: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.',
 	specification: '2.5mg, Red',
 	canPurchase: true,
 	soldOut: false,
 	images: [
 		'images/1.jpg',
 	'images/2.jpg',
 	'images/3.jpg'
 	],

 	reviews: [
 	{
 	stars: '5',
 	body: 'best products',
 	author: 'abc@xyz.com',
 	},

 	{
 		stars: '4',
 	body: 'best purchase ever',
 	author: 'abc@abc.com',
 	}

 	],
 }
 ]



 })();