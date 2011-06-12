<html>
<head>
	<title>Blur.js :: Scene Test</title>
	<script type="text/javascript" src="../../src/Blur.js"></script>
	<script type="text/javascript" src="../../src/core/display/Color.js"></script>
	<script type="text/javascript" src="../../src/materials/BasicColorMaterial.js"></script>
	<script type="text/javascript" src="../../src/core/math/Vector.js"></script>
	<script type="text/javascript" src="../../src/core/display/Point2D.js"></script>
	<script type="text/javascript" src="../../src/core/math/Matrix4.js"></script>
	<script type="text/javascript" src="../../src/core/display/Object3D.js"></script>
	<script type="text/javascript" src="../../src/objects/primitives/Line.js"></script>
	<script type="text/javascript" src="../../src/objects/primitives/Particle.js"></script>
	<script type="text/javascript" src="../../src/camera/Camera3D.js"></script>
	<script type="text/javascript" src="../../src/scenes/Scene3D.js"></script>
	<script type="text/javascript" src="../../src/renderers/CanvasRenderer.js"></script>
</head>

<body>

<div id="canvasHolder"></div>

<script type='text/javascript'>
var camera = new BLUR.Camera3D( window.innerWidth - 20, window.innerHeight - 20);
var scene = new BLUR.Scene3D();
var renderer = new BLUR.CanvasRenderer( scene, camera );

function init() {
	var l = new BLUR.Line( 100 );
	l.setPosition( new BLUR.Vector( -100,0,0 ), new BLUR.Vector( 100,0,0 ) );

	scene.addObject(l);
	//scene.visible = false;

	setInterval(render, 10);
}

function render()
{
	renderer.render( scene, camera );
}

init();
</script>

</body>
</html>