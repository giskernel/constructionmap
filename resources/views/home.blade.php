@extends('layouts.app')

@section('content')
<div id="mainWindow" data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design:'headline'">
    <div id="header" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'top'">
        <span>Draw:<br /></span>
        <button data-dojo-type="dijit/form/Button">Point</button>
        <button data-dojo-type="dijit/form/Button">Multi Point</button>
        <button data-dojo-type="dijit/form/Button">Line</button>
        <button data-dojo-type="dijit/form/Button">Polyline</button>
        <button data-dojo-type="dijit/form/Button">Polygon</button>
        <button data-dojo-type="dijit/form/Button">Freehand Polyline</button>
        <button data-dojo-type="dijit/form/Button">Freehand Polygon</button>
        
        <button data-dojo-type="dijit/form/Button">Arrow</button>
        <button data-dojo-type="dijit/form/Button">Triangle</button>
        <button data-dojo-type="dijit/form/Button">Circle</button>
        <button data-dojo-type="dijit/form/Button">Ellipse</button>
    </div>
    <div id="map" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'center'"></div>
</div>
@endsection