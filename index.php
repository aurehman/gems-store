<!DOCTYPE html>
<html ng-app="store">
<head>

  <!-- CSS -->
  <!-- load bootstrap (bootswatch version) -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  

</head>

<body>
<div class="container">
<h1>Gems Store</h1>
<div ng-controller="StoreController as store">
<div ng-repeat="product in store.products">
<div ng-hide="store.product.soldOut">
<div class="col-sm-7">


<h3 product-title></h3>

<p></p>
<div class="btn btn-warning" ng-show="product.canPurchase">Purchase</div>
<p></p>
<div ng-controller = "TabController as panel" ng-init="tab = 1">

     <!-- Product Tabs  -->
        <section ng-controller="TabController as tab">
          <ul class="nav nav-pills">
            <li ng-class="{ active:tab.isSet(1) }">
              <a href ng-click="tab.setTab(1)">Description</a>
            </li>
            <li ng-class="{ active:tab.isSet(2) }">
              <a href ng-click="tab.setTab(2)">Specs</a>
            </li>
            <li ng-class="{ active:tab.isSet(3) }">
              <a href ng-click="tab.setTab(3)">Reviews</a>
            </li>
          </ul>


<div class="tab-content">
    <div ng-show="tab.isSet(1)" ng-include="'product-description.php'">{{product.description}}</div>
    <div product-specs ng-show="tab.isSet(2)">{{product.specification}}</div>
    <product-reviews ng-show="tab.isSet(3)">
    <blockquote ng-repeat="review in product.reviews">Stars: {{review.stars}} <br />
    Review: {{review.body}}<br />
    Author: {{review.author}}
    </blockquote>

    <form name="reviewForm" ng-controller="ReviewController as reviewCtrl" ng-submit="reviewForm.$valid && reviewCtrl.addReview(product)" novalidate>
   

    <div class="form-group">
    <select class="form-control" ng-model="reviewCtrl.review.stars" required>
      <option value="1">1 Star</option>
      <option value="2">2 Star</option>
      <option value="3">3 Star</option>
      <option value="4">4 Star</option>
      <option value="5">5 Star</option>
    </select>
    </div>
    <div class="form-group">
    <textarea class="form-control" ng-model="reviewCtrl.review.body" required></textarea>
    </div>
    <div class="form-group">
    <label>by:</label>
    <input class="form-control" placeholder="email" type="email" ng-model="reviewCtrl.review.author" required />
    <p>Review Form is {{reviewForm.$valid}} </p>
    <input type="submit" class="btn btn-danger" />
    </div>

    </form>
    </div>
    </section>
  </div>

  
  </div>



</div>
<div class="col-sm-5">
<product-gallery>

</product-gallery>
</div>

<div class="clearer" style="clear:both;">&nbsp;</div>
<hr />
</div>

 </div>

</div>
</div>

<!-- JS -->
  <!-- load angular, ngRoute, ngAnimate -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.js"></script>
  <script src="node_modules/angular-route/angular-route.js"></script>
  <script src="node_modules/angular-animate/angular-animate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/products.js"></script>

</body>
</html>