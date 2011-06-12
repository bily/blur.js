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
	var l = new BLUR.Line( 5 );
	l.setPosition( new BLUR.Vector( -200,100,0 ), new BLUR.Vector( 200,100,0 ) );
	l.position = new BLUR.Vector( 100,100,0 );

	var p = new BLUR.Particle( 50 );
	l.position = new BLUR.Vector( -200,0,0 );

	l.addChild(p);
	scene.addObject(l);

	setInterval(render, 10);
}

function render()
{
	renderer.render( scene, camera );
	for( var i = 0; i < scene.objects.length; ++i ) {
		if(scene.objects[i].type == 'BLUR.Line') {
			console.log('line...');
			scene.objects[i].translateY(1);
		}
	}
}

init();
</script>

</body>
</html>