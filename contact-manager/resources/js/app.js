import './bootstrap';

//[CODE I ADDED]

// Import components
import ContactIndex from './components/ContactIndex.vue';
import ContactCreate from './components/ContactCreate.vue';

// Wait until the document is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    // Create the Vue application
    const app = Vue.createApp({});

    // Register components

    app.component('contact-index', ContactIndex);
    app.component('contact-create', ContactCreate);

    // Mount the app
    app.mount('#app');
});

