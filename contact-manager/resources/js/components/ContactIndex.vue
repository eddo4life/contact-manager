<template>
    <div class="container">
      <h1>Contact List ({{ contacts.length }})</h1>
      <hr />
      <div class="contact-list">
        <div class="contact-card" v-for="contact in contacts" :key="contact.id">
          <div class="profile-picture">
            {{ getInitial(contact.name) }}
          </div>
          <div class="contact-info">
            <h3>{{ contact.name }}</h3>
            <p>{{ contact.email }}</p>
            <p>{{ contact.number }}</p>
          </div>
        </div>
        <div class="add-contact">
          <a href="/contact/create">
            <h2>+</h2>
          </a>
        </div>
      </div>
      <p class="message">{{ message }}</p>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      contacts: {
        type: Array,
        required: true,
      },
      message: {
        type: String,
        default: '',
      },
    },
    methods: {
      getInitial(name) {
        return name.charAt(0).toUpperCase();
      },
    },
  };
  </script>
  
  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    overflow-y: hidden;
  }
  
  h1 {
    text-align: center;
    color: #333;
  }
  
  .container {
    display: flex;
    flex-direction: column;
    height: 100vh; /* Full height */
    position: relative; /* Enable absolute positioning for child elements */
  }
  
  .contact-list {
    flex: 1; /* Takes up remaining space */
    width: 80%;
    max-width: 600px;
    max-height: 70vh;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    overflow-y: auto;
    margin: 0 auto;
    background-color: white;
    position: relative; /* Needed for absolute positioning of the button */
  }
  
  .contact-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 10px;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }
  
  .profile-picture {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #ddd;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.25rem;
    color: #666;
    margin-right: 15px;
  }
  
  .contact-info {
    flex: 1;
  }
  
  .contact-info h3 {
    margin: 0;
    font-size: 1rem;
    color: #333;
  }
  
  .contact-info p {
    margin: 3px 0;
    color: #777;
    font-size: 0.875rem;
  }
  
  .add-contact {
    position: sticky; 
    float: right;
    bottom: 20px; 
    right: 20px; 
    background-color: #28a745;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    cursor: pointer;
  }
  
  .add-contact h2 {
    margin: 0;
    font-size: 2rem;
    color: white;
  }
  
  a {
    text-decoration: none;
  }
  </style>
  