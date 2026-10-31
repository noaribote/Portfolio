import * as THREE from 'three';
import { FBXLoader } from 'three/addons/loaders/FBXLoader.js';

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);

camera.position.set(0, 0, 10);
const renderer = new THREE.WebGLRenderer({
    alpha: true,
    antialias: true
});

renderer.setSize(
    window.innerWidth,
    window.innerHeight
);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
renderer.outputColorSpace = THREE.SRGBColorSpace;
document.getElementById('event-container-halloween').appendChild(renderer.domElement);

const ambientLight = new THREE.AmbientLight(0xffffff, 2);
scene.add(ambientLight);
const directionalLight = new THREE.DirectionalLight(0xffffff, 3);
directionalLight.position.set(5, 5, 10);
scene.add(directionalLight);
let ghost = null;
let mixer = null;
let scaleAnimationStartedAt = null;
const initialScale = 0.01;
const finalScale = 0.03;
const scaleAnimationDuration = 1000;
const translateYDistancePx = 300;
const clock = new THREE.Clock();
const loader = new FBXLoader();
const container = document.getElementById('event-container-halloween');
container.style.display = 'none';

loader.load(
    '../../assets/models/RunningZombie3D.fbx',

    (fbx) => {
        ghost = fbx;
        ghost.scale.setScalar(initialScale);
        const box = new THREE.Box3().setFromObject(ghost);
        const center = box.getCenter( new THREE.Vector3() );
        ghost.position.sub(center);
        scene.add(ghost);
        container.style.display = 'block';
        scaleAnimationStartedAt = performance.now();

        if (fbx.animations.length > 0) {
            mixer = new THREE.AnimationMixer(ghost);
            const animation = fbx.animations[0];
            const action = mixer.clipAction(animation);
            action.setLoop(THREE.LoopRepeat);
            action.clampWhenFinished = false;
            action.play();
            console.log('Animation détectée :', animation.name);
            console.log('Animation lancée !');
        } else { console.warn('Aucune animation trouvée dans le .fbx'); }
    },
    undefined,
    (error) => {
        console.error('Erreur de chargement du FBX :', error);
    }
);

function animate() {
    requestAnimationFrame(animate);
    const delta = clock.getDelta();
    if (mixer) { mixer.update(delta); }

    if (ghost && scaleAnimationStartedAt !== null) {
        const progress = Math.min((performance.now() - scaleAnimationStartedAt) / scaleAnimationDuration, 1);
        const smoothProgress = progress * progress * (3 - 2 * progress);
        ghost.scale.setScalar(initialScale + (finalScale - initialScale) * smoothProgress);
        const visibleHeight = 2 * Math.tan(THREE.MathUtils.degToRad(camera.fov / 2)) * camera.position.z;
        const translateYDistance = (translateYDistancePx / window.innerHeight) * visibleHeight;
        ghost.position.y = -translateYDistance * smoothProgress;

        if (progress === 1) {
            scaleAnimationStartedAt = null;
            container.style.display = 'none';
        }
    }

    renderer.render(scene, camera);
}
animate();

window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(
        window.innerWidth,
        window.innerHeight
    );

});
