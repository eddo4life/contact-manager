<template>
    <div class="create-contact">
        <h1>Add a New Contact</h1>
        <hr>

        <form action="/contact" method="POST">
            <input type="hidden" name="_token" :value="csrfToken" /> <!-- Bind CSRF token -->

            <label for="name">Name</label>
            <input type="text" name="name" id="name" v-model="name" placeholder="Enter contact name" required />

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" v-model="phone" placeholder="Enter phone number" required />

            <label for="email">Email</label>
            <input type="email" name="email" id="email" v-model="email" placeholder="Enter email address" required />

            <input type="submit" value="Add Contact" />
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            phone: '',
            email: '',
            csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Get CSRF token
        };
    },
};
</script>



<style >
.create-contact {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
    text-align: center;
}

h1 {
    color: #333;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 30px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: bold;
    color: #333;
}

input[type="text"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="email"]:focus {
    outline: none;
    border-color: #007bff;
}

input[type="submit"] {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0069d9;
}

input[type="submit"]:active {
    background-color: #0056b3;
}


</style>
