
self.addEventListener('install', async event => {
  console.log('install event');
  const cache = await caches.open(cacheName); // (1)
  await cache.addAll(staticAssets); // (2)
});

self.addEventListener('fetch', async event => {
  console.log('fetch event');
  const req = event.request;
  event.respondWith(cacheFirst(req));
});


const cacheName = 'pwa-MMIetApres';
const staticAssets = [
  '/',
  'sw.js',
  'index.php',
  'mentions.php',
  'styles/global.min.css',
  'manifest.json',
  'images',
  'scripts/global.js'
];

async function cacheFirst(req) {
  const cache = await caches.open(cacheName); // (1)
  const cachedResponse = await cache.match(req); // (2)
  return cachedResponse || fetch(req); // (3)
}
