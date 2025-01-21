<template>
  <div>
    <ul v-if="events">
      test
      {{ events.message }}

testthesrnsnjnsfdasdasd
    </ul>

    <div v-else>


      loading 
    </div>
    
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import apiClient from './plugins/axios.js';

const events = ref();

const fetchEvents = async () => {
  try {
    const response = await fetch('http://127.0.0.1:8000/api/dummy-data'); 
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    const data = await response.json(); // Parse the JSON data
    console.log(data, "Received data");
    events.value = data; // Assign data to your Vue reactive variable
  } catch (error) {
    console.error("Error fetching events:", error);
  }
};
console.log( events.value);

onMounted(fetchEvents);
</script>
