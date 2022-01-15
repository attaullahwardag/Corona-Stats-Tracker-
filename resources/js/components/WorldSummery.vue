
<template>
    <div class="container statsinner">
            <div class="row">
                    <div class="col-8 stats">
                        <div class="country-social bgcolor-lgrey2">
                           <span class="live"><i class="fas fa-spinner fa-spin"></i> Live</span>
                           <span class="share"> 
                             <a href="https://www.facebook.com/share.php?u=http://www.w3corona.com/" class="facebook" ><i class="fab fa-facebook"></i> </a>
                             <a href="https://api.whatsapp.com/send?text=http%3A%2F%2Fw3corona.com" class="whatsapp text-dgreen"><i class="fab fa-whatsapp"></i>  </a>
                             <a href="https://twitter.com/intent/tweet?text=&url=http://www.w3corona.com/" class="twitter"><i class="fab fa-twitter"></i>  </a>
                            </span>
                           <span class="Select">
                               <img src="images/globe.gif" class="flag">
                               <span id ="rank" class="dangerrank"> World Summery </span>
                           </span>
                        </div>    
                    </div>
                    <div class="col-4 stats">
                        <div class="total bgcolor-lviolet2">
                            <p id="active" class="number text-dviolet">{{ summery.active }}
                                <clip-loader :loading="loading" color="violet" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-dviolet bgcolor-lviolet"> Active Cases</span>
                        </div>    
                    </div>
                    <div class="col-4 stats">
                        <div class="total bgcolor-lred2">
                            <p id="total" class="number text-dred">{{ summery.cases }}
                                <clip-loader :loading="loading" color="red" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-danger bgcolor-lred"> Confirmed </span>
                        </div>    
                    </div>
                    <div class="col-4 stats ">
                        <div class="total bgcolor-lyellow2">
                            <p id="new" class="number text-danger">{{ summery.todayCases }}
                                <clip-loader :loading="loading" color="red" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-danger bgcolor-lyellow"> New Cases </span>
                        </div> 
                    </div>
                    <div class="col-4 stats">
                        <div  class="total bgcolor-lgreen2">
                            <p id="recovered" class="number text-dgreen">{{ summery.recovered }}
                                <clip-loader :loading="loading" color="green" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-dgreen bgcolor-lgreen"> Recovered </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 stats">
                        <div class="total bgcolor-lgrey2">
                            <p id="tdeaths" class="number text-dgrey">{{ summery.deaths }}
                                <clip-loader :loading="loading" color="gery" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-dgrey bgcolor-lgrey"> Total Deaths </span>
                        </div>
                    </div>
                    <div class="col-4 stats">
                        <div class="total bgcolor-lgrey2">
                            <p id="ndeaths" class="number text-dgrey">{{ summery.todayDeaths }}
                                <clip-loader :loading="loading" color="grey" size="18px"></clip-loader>
                            </p>
                            <span  class="stats-footer text-dgrey bgcolor-lgrey"> New Deaths </span>
                        </div>
                    </div>
                    <div class="col-4 stats">
                        <div class="total bgcolor-linfo2">
                            <p id="critical" class="number text-info">{{ summery.critical }}
                                <clip-loader :loading="loading" color="#6cb2eb" size="18px"></clip-loader>
                            </p>
                            <span class="stats-footer text-info bgcolor-linfo"> Critical </span>
                        </div>
                    </div>
                </div>
            </div>                
</template>


<script>
import ClipLoader from 'vue-spinner/src/ClipLoader.vue';
export default {
  name: 'WorldSummery',
  components: {
    ClipLoader
  },
  data(){
    return{
      summery:[],
      errors:[],
      loading: false,
    }
  },
  created(){
    this.loading = true
    axios
      .get(`https://corona.lmao.ninja/v2/all`)
      .then(response => {
        this.summery = response.data;
        this.loading = false;
        //console.log(response.data);
      })
      .catch(err =>{
        this.loading = false;
        this.errors.push(err);
      });
  },
}
</script>