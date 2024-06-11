  const CACHE_NAME = 'app-cache-v1';
const urlsToCache = [
    '/CORA/',
    '/CORA/index.php',
    '/CORA/CSS/styles.css',
    '/CORA/JS/app.js',
    '/CORA/imagenes/CORA.png',
    '/CORA/imagenes/CORA.svg'
];

// Instalación del Service Worker y caché de archivos estáticos
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache);
      })
      .catch(error => {
        console.error('Falló al agregar al caché', error);
      })
  );
});

// Activación del Service Worker y limpieza de caché antigua
self.addEventListener('activate', event => {
  const cacheWhitelist = [CACHE_NAME];
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Intercepción de solicitudes de red
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        // Retorna el recurso desde el caché si está disponible
        if (response) {
          return response;
        }
        // Clona la solicitud
        const fetchRequest = event.request.clone();
        // Realiza la solicitud de red y agrega la respuesta al caché
        return fetch(fetchRequest).then(
          networkResponse => {
            // Verifica que la respuesta sea válida
            if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
              return networkResponse;
            }
            // Clona la respuesta de red
            const responseToCache = networkResponse.clone();
            caches.open(CACHE_NAME)
              .then(cache => {
                cache.put(event.request, responseToCache);
              });
            return networkResponse;
          }
        );
      })
  );
});
