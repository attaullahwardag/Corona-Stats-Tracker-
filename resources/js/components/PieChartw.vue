<template>
  <div class="chartbox">
    <h1 class="h1sm"> World Summery Chart </h1>
    <div class="loader">
        <scale-loader :loading="loading" color="#108885" ></scale-loader>
    </div>
    <GChart
      type="PieChart"
      :data="[['STATUS', 'PEOPLE'],['Confirmed', summery.cases],['Deaths', summery.deaths],['Recovered', summery.recovered],['Critical', summery.critical],['Active', summery.active]]"
      :options="{colors:['#e3342f','#6c757d','#38a169','#6cb2eb','#9561e2'],}"
    />    
  </div>
</template>

<script>
import { GChart } from "vue-google-charts";
import ScaleLoader from 'vue-spinner/src/ScaleLoader.vue';
export default {
  name: "PieChartw",
  components: {
    GChart,
    ScaleLoader
  },
  data() {
    return {
      summery:[],
      loading: false,
    };
  },
  created(){
    this.loading = true
    axios
      .get(`https://corona.lmao.ninja/v2/all`)
      .then(response => {
        this.summery = response.data;
        this.loading =false;
        //console.log(response.data);
      })
      .catch(err =>{
        this.loading =false;
        this.errors.push(err);
      });
  },
};
</script>
<style  scoped>
.chartbox{
    padding: 5px;
}
.loader{
    position: absolute;
    top: 50%;
    left: 50%;
}
</style>

