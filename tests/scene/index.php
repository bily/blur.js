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
	var l = new BLUR.Line( 1 );
	l.setPosition( new BLUR.Vector( -200,100,0 ), new BLUR.Vector( 200,100,0 ) );
	l.material.alpha = 0.2;

	var p1 = new BLUR.Particle( 3 );
	p1.position = new BLUR.Vector( -200,100,0 );

	var p2 = new BLUR.Particle( 10 );
	p2.position = new BLUR.Vector( 200,100,0 );

	// add multiple objects at the same time.
	l.addChild([p1, p2]);

	scene.addObject(l);

	setInterval(render, 10);
}

function render()
{
	for( var i = 0; i < scene.objects.length; ++i ) {
		if(scene.objects[i].type == 'BLUR.Line')
			scene.objects[i].rotateY(1);
	}

	renderer.render( scene, camera );
}

init();
</script>

</body>
</html>