import Echo from 'laravel-echo';

import Pusher from 'pusher-js';

window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY, // Use import.meta.env
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER, // Use import.meta.env
//     forceTLS: true,
// });
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: 'ap2',
    forceTLS: true
  });
