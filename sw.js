var cacheName ='Gestion rdv';
var filesToCache = [
  '/index.php',
  '/contact.php',
  '/post.php',
  '/rdv.php',
  '/css/contact.css',
  '/css/post.css',
  '/css/rdv.css',
  '/css/scrolling-nav.css',
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */

self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
/*
self.addEventListener("fetch", (event) => {
  event.respondWith(caches.open("mon-cache").then(cache =>
      cache.match(event.request).then(cResponse => {
          if (cResponse) {
              event.waitUntil(fetch(event.request).then(fResponse =>
                  cache.put(event.request, fResponse)
              ));
              return cResponse;
          } else {
              return fetch(event.request).then(fResponse =>
                  cache.put(event.request, fResponse.clone())
                      .then(() => fResponse)
              );
          }
      })
  ));
});*/