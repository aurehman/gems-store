(function () {
var app = angular.module('strore-products', []);

app.controller('TabController', function(){
    this.tab = 1;

    this.setTab = function(newValue){
      this.tab = newValue;
    };

    this.isSet = function(tabName){
      return this.tab === tabName;
    };
  });

app.controller('ReviewController', function () {
this.review = {}

this.addReview = function (product) {
product.reviews.push(this.review);
this.review = {};
};

});

app.directive('productTitle', function (){
return {
	restrict: 'A',
	templateUrl: 'product-title.php'
};
});

  app.directive('productGallery', function(){
    return {
      restrict: 'E',
      templateUrl: 'product-gallery.php',
      controller: function(){
        this.current = 0;
    this.setCurrent = function(imageNumber){
      this.current = imageNumber || 0;
    };
        
      },
      controllerAs: 'gallery'
    };
  });



})();