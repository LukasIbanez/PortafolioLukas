document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    // Configuración de la escena de Three.js
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true });

    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);

    // Crear una esfera
    const geometry = new THREE.SphereGeometry(1, 32, 32);
    const material = new THREE.MeshBasicMaterial({ color: 0x00ff00 });
    const sphere = new THREE.Mesh(geometry, material);

    scene.add(sphere);
    camera.position.z = 5;

    // Animación de la esfera con GSAP y ScrollTrigger
    gsap.to(sphere.rotation, {
        y: 360 * Math.PI / 180, // Rotación completa en grados convertida a radianes
        scrollTrigger: {
            trigger: ".content",
            start: "top top",
            end: "bottom bottom",
            scrub: true,
        }
    });

    gsap.to(".ball", {
        y: () => window.innerHeight - 100, // Mueve la bolita hacia abajo en la ventana
        rotation: 360, // Gira la bolita 360 grados
        ease: "none", // Sin efecto de easing
        scrollTrigger: {
            trigger: ".content",
            start: "top top",
            end: "bottom bottom",
            scrub: true // Sincroniza la animación con el desplazamiento
        }
    });

    function animate() {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    }

    animate();
});
