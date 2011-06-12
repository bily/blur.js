<html>
<head>
	<title>Blur.js test 1</title>
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
	/*var l = new BLUR.Line( 10 );
	l.setPosition(  new BLUR.Vector(100, 200, 0), new BLUR.Vector(-100, 200, 0)  );
	l.material = new BLUR.BasicColorMaterial( new BLUR.Color(32,178,170), 1 );
	scene.addObject(l);*/

	for( var i = 0; i < 100; ++i ) {
		var p = new BLUR.Particle( 5 );
		p.position = new BLUR.Vector( r(100,-100), r(100,-100), r(100,-100) );
		p.material = new BLUR.BasicColorMaterial( new BLUR.Color(32,178,170), 1 );
		scene.addObject(p);
	}

	setInterval(render, 10);
}

function r(max, min)
{
	return ( (Math.random() * (max-min) ) + min);
}

function render()
{
	for(var i = 0; i < scene.objects.length; ++i) {
			scene.objects[i].rotateX(1);
			if(scene.objects[i].type == 'BLUR.Particle')
				scene.objects[i].rotateY(r(5,0));
	}

	renderer.render( scene, camera );
}

init();
</script>

</body>
</html>