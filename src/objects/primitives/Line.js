BLUR.Line = function( t ) {
	BLUR.Object3D.call();

	this.to = new BLUR.Vector( 0, 0, 0 );
	this.thickness = t == undefined ? 1 : t;

	this.setPosition = function( from, to ) {
		this.position = from;
		this.to = to;
	};

	this.rotateX = function( am ) {
		this.position.rotateX( am );
		this.to.rotateX( am );
	};

	this.rotateY = function( am ) {
		this.position.rotateY( am );
		this.to.rotateY( am );
	};

	this.type = 'BLUR.Line';
};

BLUR.Line.prototype = new BLUR.Object3D();
BLUR.Line.prototype.constructor = BLUR.Line;