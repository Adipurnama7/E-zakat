self.addEventListener('install', event => {
    console.log('[Service Worker] Installing...');
});

self.addEventListener('activate', event => {
    console.log('[Service Worker] Activating...');
});

self.addEventListener('fetch', event => {
    console.log(`[Service Worker] Fetching resource: ${event.request.url}`);
});
