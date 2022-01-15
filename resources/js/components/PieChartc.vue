
<script>
import { Pie } from 'vue-chartjs'
export default {
  name:"PieChartc",
  props:["summery"],
  extends: Pie,
  data: () => ({
    chartdata: {
      labels: ['Confirmed', 'Deaths','Recovered','Critital','Active'],
      datasets: [
        {
          label: ['Confirmed', 'Deaths','Recovered','Critital','Active'],
          backgroundColor: ['#f87979','grey','#38a169','#96e6f3','#d0a6f7'],
          data: [40,22,22,22,22]
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      title: {
        display: true,
        text: 'Analytics of CoronaVirus 2020 '
        }
    }
  }),
  created(){
    this.chartdata.datasets[0].data[0] = this.summery.cases;
    this.chartdata.datasets[0].data[1] = this.summery.deaths;
    this.chartdata.datasets[0].data[2] = this.summery.recovered;
    this.chartdata.datasets[0].data[3] = this.summery.critical;
    this.chartdata.datasets[0].data[4] = this.summery.active;
    this.options.title.text += this.summery.country;
  },
  mounted () {
    
    this.renderChart(this.chartdata, this.options)
  }
}
</script>