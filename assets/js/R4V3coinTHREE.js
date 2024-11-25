import * as THREE from 'http://localhost/Chickenpay/assets/js/three.module.js';
import { OrbitControls } from 'http://localhost/Chickenpay/assets/js/OrbitControls.js';
import { STLLoader } from 'http://localhost/Chickenpay/assets/js/STLLoader.js';

// Initialiser la scène, la caméra et le rendu
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
  75,
  window.innerWidth / window.innerHeight,
  0.1,
  1000
);
const renderer = new THREE.WebGLRenderer({
  antialias: true,
  canvas: document.getElementById("three-canvas"),
});
renderer.setSize(window.innerWidth, window.innerHeight);

// Ajouter des contrôles d'orbite
const controls = new OrbitControls(camera, renderer.domElement);
controls.minDistance = 5;
controls.maxDistance = 20;

// Ajouter une lumière ambiante
const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
scene.add(ambientLight);

// Ajouter une lumière directionnelle
const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
directionalLight.position.set(10, 10, 10).normalize();
scene.add(directionalLight);

// Fonction pour centrer et redimensionner le modèle
function centerAndScaleModel(mesh) {
  const box = new THREE.Box3().setFromObject(mesh);
  const center = box.getCenter(new THREE.Vector3());
  const size = box.getSize(new THREE.Vector3());

  mesh.position.sub(center);

  const maxDim = Math.max(size.x, size.y, size.z);
  const scale = 5 / maxDim;
  mesh.scale.multiplyScalar(scale);
}

// Charger le modèle STL
const loader = new STLLoader();
loader.load("./assets/picture/ravetokenblend.stl", function (geometry) {
  const material = new THREE.MeshPhongMaterial({ color: 0x0077ff });
  const mesh = new THREE.Mesh(geometry, material);
  
  centerAndScaleModel(mesh);
  
  scene.add(mesh);
  
  controls.target.set(0, 0, 0);
  controls.update();
});

// Positionner la caméra
camera.position.set(0, 0, 10);

// Fonction d'animation
function animate() {
  requestAnimationFrame(animate);
  controls.update();
  renderer.render(scene, camera);
}

// Démarrer l'animation
animate();

// Ajuster la taille du rendu lors du redimensionnement de la fenêtre
window.addEventListener("resize", () => {
  renderer.setSize(window.innerWidth, window.innerHeight);
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
});
