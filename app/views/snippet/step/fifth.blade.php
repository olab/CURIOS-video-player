<div ng-controller="FifthStep" class="step step-fifth" ng-show="stepNum > 4">
    <button ng-click="generate()" class="btn-green" id="btn-generate">Generate code</button>
    <button ng-click="outputResult()" class="btn-gray" ng-show="wasGenerated">Watch result</button>
    <span class="label-result">Code to copy/paste in your site</span>
    <textarea id="resultCode" ng-show="wasGenerated" onclick="this.focus();this.select()" readonly="readonly"></textarea>
</div>