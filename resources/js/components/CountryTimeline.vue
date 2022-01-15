
<script>
import { Line } from 'vue-chartjs'

export default {
  name:"CountryTimeline",
  props:["ctimeline","date","deaths","conf"],
  extends: Line,
  data: () => ({
        chartdata: {
        labels:[],
        datasets: [{ 
            data: [],
            label: "Confirmed",
            borderColor: "red",
            fill: false
        }, { 
            data: [10,20,300,400,500,600,800,900,10,11,125,136,147],
            label: "Deaths",
            borderColor: "black",
            fill: false
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        height: 300,
        title: {
        display: true,
        text: 'Country Timeline'
        }
    }
  }),
  created(){
    
  },
  mounted () { 
    this.chartdata.labels = this.date;
    this.chartdata.datasets[0].data = this.conf;
    this.chartdata.datasets[1].data = this.deaths;
    this.renderChart(this.chartdata, this.options)
  }
}
</script>