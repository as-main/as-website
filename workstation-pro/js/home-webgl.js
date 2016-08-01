
	var renderer, scene, camera, composer, circle, skelet, particle;
	
	var mouseX = 0, mouseY = 0;

window.onload = function() {
  init();
  animate();
}

function init() {
  renderer = new THREE.WebGLRenderer({ antialias: false, alpha: true });
  renderer.setPixelRatio((window.devicePixelRatio) ? window.devicePixelRatio : 1);
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.autoClear = false;
  renderer.setClearColor(0x000000, 0.0);
  document.getElementById('canvas').appendChild(renderer.domElement);

  scene = new THREE.Scene();

  camera = new THREE.PerspectiveCamera(125, window.innerWidth / window.innerHeight, 1, 1000);
  camera.position.z = 150;
  scene.add(camera);

  circle = new THREE.Object3D();
  skelet = new THREE.Object3D();
  particle = new THREE.Object3D();

  scene.add(skelet);
  scene.add(particle);

  var geometry = new THREE.TetrahedronGeometry(1, 0); // sets size of particles
  var geom = new THREE.IcosahedronGeometry(7, 1); // sets # of particles
  var geom2 = new THREE.IcosahedronGeometry(80, 1); // radius, detail

  var material = new THREE.MeshPhongMaterial({
    color: 0xffffff,
    shading: THREE.FlatShading
  });

  for (var i = 0; i < 1000; i++) {
    var mesh = new THREE.Mesh(geometry, material);
    mesh.position.set(Math.random() - 0.5, Math.random() - 0.5, Math.random() - 0.5).normalize();
    mesh.position.multiplyScalar(90 + (Math.random() * 700));
    mesh.rotation.set(Math.random() * 2, Math.random() * 2, Math.random() * 2);
    particle.add(mesh);
  }

  var mat = new THREE.MeshPhongMaterial({
    color: 0xffffff,
    shading: THREE.FlatShading
  });

  var mat2 = new THREE.MeshPhongMaterial({
    color: 0xffffff,
    wireframe: true,
    side: THREE.DoubleSide

  });
  


	// object
	var manager = new THREE.LoadingManager();
		manager.onProgress = function ( item, loaded, total ) {
		console.log( item, loaded, total );
	};

	var texture = new THREE.MeshBasicMaterial({
		wireframe: true,
	});

	var onProgress = function ( xhr ) {
		if ( xhr.lengthComputable ) {
			var percentComplete = xhr.loaded / xhr.total * 100;
			console.log( Math.round(percentComplete, 2) + '% downloaded' );
		}
	};
	
	
	var onError = function ( xhr ) {
	};


	var loader = new THREE.ImageLoader( manager );
	loader.load( '/wp-content/themes/workstation-pro/texture.jpg', function ( image ) {
		//texture.image = image;
		//texture.needsUpdate = true;
	} );


	var loader = new THREE.OBJLoader( manager );
	loader.load( '/wp-content/themes/workstation-pro/x4Quads.obj', function ( object ) {


/*
	object.traverse( function ( child ) {
		if ( child instanceof THREE.Mesh ) {
			child.material.map = texture;
		}
	});
*/

	object.position.y = - 35;
	scene.add( object );

}, onProgress, onError );


  

  var planet = new THREE.Mesh(geom, mat);
  planet.scale.x = planet.scale.y = planet.scale.z = 10;
  circle.add(planet);

  var planet2 = new THREE.Mesh(geom2, mat2);
  planet2.scale.x = planet2.scale.y = planet2.scale.z = 2;
  skelet.add(planet2);

  //var ambientLight = new THREE.AmbientLight( 0xF2C94C );
  var ambientLight = new THREE.AmbientLight( 0x000000 ); // less lighting
  scene.add(ambientLight);
  
  var lights = [];
	lights[0] = new THREE.DirectionalLight( 0xF2C94C, 1 );
	lights[0].position.set( 1, 0, 0 );
	lights[1] = new THREE.DirectionalLight( 0x11E8BB, 1 );
	lights[1].position.set( 0.75, 1, 0.5 );
	lights[2] = new THREE.DirectionalLight( 0x8200C9, 1 );
	lights[2].position.set( -0.75, -1, 0.5 );
	scene.add( lights[0] );
	scene.add( lights[1] );
	scene.add( lights[2] );
  

  window.addEventListener('resize', onWindowResize, false);

};


function onDocumentMouseMove( event ) {
	mouseX = event.clientX - window.innerWidth / 2;
	mouseY = event.clientY - window.innerHeight / 2;
}
document.addEventListener( 'mousemove', onDocumentMouseMove, false );


function onWindowResize() {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
}



var pivot = new THREE.Object3D();

function animate() {
pivot.position = scene.position;	
	particle.rotation.x += 0.0010;
	particle.rotation.y -= 0.0050;
  

  renderer.render( scene, camera )
	
	
	requestAnimationFrame( animate );

	camera.position.x += (mouseX - camera.position.x) * 0.005;
    camera.position.y += (-mouseY - camera.position.y) * 0.01;
	camera.lookAt(scene.position);


	//pivot.rotation.x += 0.00001;
	//pivot.rotation.y += 0.00001;

	//render();

}


