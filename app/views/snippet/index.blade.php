<!doctype html>
<html ng-app="player">
    <head>
        <meta charset="UTF-8">
        <title>Player</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        {{HTML::style('css/snippet.css')}}
        {{HTML::script('js/angular/angular.min.js')}}
        {{HTML::style('css/common.css')}}
    </head>
    <body ng-controller="Main">
        <h1>
            CURIOS video mashup service
            <a href="{{URL::to('/logout')}}" id="btn-logout">Logout</a>
            <a href="{{URL::to('/snippet')}}" id="btn-reload">Create new snippet</a>
            <a href="{{URL::to('/player/cabinet')}}" id="btn-cabinet">Cabinet</a>
            <a href="{{URL::to('/lti')}}" id="btn-cabinet">LTI</a>
            <span id="upload-by-slug">
                <input type="text" ng-model="slugToUpload">
                <button id="btn-upload" ng-click="uploadBySlug()">Upload by slug</button>
            </span>
        </h1>

        <div class="body-bl">

            <div class="left-column">
                @include('snippet.step.first')
                @include('snippet.step.second')
                @include('snippet.step.third')
                @include('snippet.step.fourth')
                @include('snippet.step.fifth')
            </div>

            <div class="result-bl">
                <div id="editableScreen"
                     ng-controller="Screen"
                     ng-mousedown="focus($event)"
                     ng-mousemove="dragFocusElement($event)"
                     ng-mouseup="focusOut()"
                     ng-mouseleave="focusOut()">
                    <div id="player"></div>
                </div>
                <div id="resultScreen"></div>
            </div>
        </div>

        <script>
            var baseUrl = '{{URL::to('/')}}';
        </script>
        {{HTML::script('js/snippet.js')}}
        {{HTML::script('js/jscolor/jscolor.js')}}
    </body>
</html>