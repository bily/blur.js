/*
 * Author: Harry Northover
 */

BLUR.Scene3D = function () {
	BLUR.Object3D.call();

	this.objects = [];

	this.addObject = function( object ) {
		object.parent = this;
		this.objects.push(object);
	};

	this.removeObject = function( object ) {
		var index = this.objects.indexOf(object);
		if(index != null)
			this.objects.splice(index, 1);
	};

	/*
	 * this.clear - Deletes all scene objects.
	 */
	this.clear = function() {
		for( var i = 0; i < this.objects.length; ++i )
			this.removeObject(i);
	};
};

BLUR.Scene3D.prototype = new BLUR.Object3D();
BLUR.Scene3D.prototype.constructor = BLUR.Scene3D;