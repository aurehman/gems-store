<ul class="nav nav-tabs">
    <li ng-class="{active:tab===1}"><a href="#desc" ng-click="tab = 1">Description</a></li>
    <li ng-class="{active:tab === 2}"><a href="#spec" ng-click="tab = 2">Specifications</a></li>
    <li ng-class="{active:tab ===3}"><a href="#review" ng-click="tab = 3">Reviews</a></li>
    {{tab}}
</ul>