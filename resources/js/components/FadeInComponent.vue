<template>
    <MainChart class="chart"/>
    <!-- こちらの書き方でもOK -->
    <!-- <main-chart class="chart"/> -->
</template>

<script>
  import MainChart from './MainComponents/MainChart.js';
  export default {
    components: {
      MainChart,
    }
  }
</script>