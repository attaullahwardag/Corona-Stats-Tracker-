<template>
<div class="container ">
    <h1 class="h1sm">{{ csummery.country}} Covid-19 Corona Virus Timeline Statistics Live Dashboard</h1>
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
                    <img class="flag" :src="csummery.countryInfo.flag" :alt="csummery.countryInfo.iso2"/>
                    <span id ="rank" class="dangerrank ">{{ csummery.country}} Statistics <i class="fi-onsuxl-warning-solid fi-pulse "></i> </span>
                </span>
            </div>    
        </div>
        <div class="col-4 stats">
            <div class="total bgcolor-lviolet2">
                <p id="active" class="number text-dviolet">{{ csummery.active }}</p>
                <span class="stats-footer text-dviolet bgcolor-lviolet"> Active Cases</span>
            </div>    
        </div>
        <div class="col-4 stats">
            <div class="total bgcolor-lred2">
                <p id="total" class="number text-dred">{{ csummery.cases }}</p>
                <span class="stats-footer text-danger bgcolor-lred"> Confirmed </span>
            </div>    
        </div>
        <div class="col-4 stats ">
            <div class="total bgcolor-lyellow2">
                <p id="new" class="number text-danger">{{ csummery.todayCases }}</p>
                <span class="stats-footer text-danger bgcolor-lyellow"> New Cases </span>
            </div> 
        </div>
        <div class="col-4 stats">
            <div  class="total bgcolor-lgreen2">
                <p id="recovered" class="number text-dgreen">{{ csummery.recovered }}</p>
                <span class="stats-footer text-dgreen bgcolor-lgreen"> Recovered </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 stats">
            <div class="total bgcolor-lgrey2">
                <p id="tdeaths" class="number text-dgrey">{{ csummery.deaths }}</p>
                <span class="stats-footer text-dgrey bgcolor-lgrey"> Total Deaths </span>
            </div>
        </div>
        <div class="col-4 stats">
            <div class="total bgcolor-lgrey2">
                <p id="ndeaths" class="number text-dgrey">{{ csummery.todayDeaths }}</p>
                <span  class="stats-footer text-dgrey bgcolor-lgrey"> New Deaths </span>
            </div>
        </div>
        <div class="col-4 stats">
            <div class="total bgcolor-linfo2">
                <p id="critical" class="number text-info">{{ csummery.critical }}</p>
                <span class="stats-footer text-info bgcolor-linfo"> Critical </span>
            </div>
        </div>
    </div>
  </div>
  <div class="container statsinner margin-top">
    <div class="row max-height">
        <div class="col-lg-8 chartWrapper">
            <div class="chart-box">
                <CountryTimeline  v-bind:date="date" v-bind:conf="confirmed" v-bind:deaths="deaths" />
            </div>
        </div>
        <div class="col-lg-4">
            <PieChartc v-bind:summery="csummery" />
        </div>
    </div>
  </div>
  <div class="container statsinner margin-top">
      <div class="row">
          <div class="col-lg-8">
            <div class="countryinfo">
                <div v-if="csummery.country == 'India'" >
                    <p >
                    <h3> भारत की नवीनतम रिपोर्ट</h3>
    इस समय तक भारत में कुल संक्रमित लोगों की संख्या <span class="cases"> {{ csummery.cases }} </span> है जबकि कोरोना वायरस के कारण कुल 1079 लोग अपनी जान गंवा चुके हैं। <span class="recovered"> {{ csummery.recovered }} </span> लोग सफल बरामद हुए कोरोना वायरस। <span class="critical"> {{ csummery.critical }} </span>  भारत के नागरिक अभी भी गंभीर हालत में अस्पताल में हैं। आज दर्ज किए गए नए मामलों का <span class="cases"> {{ csummery.todayCases }} </span>  अंक जबकि <span class="deaths"> {{ csummery.todayDeaths }} </span> नई मौतों की भी सूचना है।

    भारत में कोविद -19 मृत्यु दर <span class="cases"> {{ (csummery.deaths/csummery.cases*100).toFixed(2) }}% </span> है जबकि रिकवरी दर  <span class="recovered"> {{ Math.trunc(csummery.recovered/csummery.cases*100) }}% </span> है
                    </p>
                </div>
                <div class="pakistan" v-if="param == 'Pakistan'">
                    <p>
                        <h3>پاکستان کی تازہ ترین رپورٹ</h3>
                        اس وقت تک پاکستان میں کل متاثرہ افراد کی تعداد <span class="cases"> {{ csummery.cases }} </span> ہے جبکہ کورونا وائرس کی وجہ سے کل <span class="deaths"> {{ csummery.deaths }} </span>  افراد اپنی زندگی سے ہاتھ دھو بیٹھے ہیں۔ <span class="recovered"> {{ csummery.recovered }} </span> افراد کورونا وائرس کی بیماری سے صحت یاب ہوگئے ہیں ، <span class="critical"> {{ csummery.critical }} </span> پاکستانی شہری اب بھی تشویشناک حالت میں اسپتال میں زیر علاج ہیں۔ موجودہ دن میں <span class="cases"> {{ csummery.todayCases }} </span> تعداد میں نئے کیس ریکارڈ کیے گئے جبکہ <span class="deaths"> {{ csummery.todayDeaths }} </span> نئی اموات کی بھی اطلاعات ہیں۔

    پاکستان میں کوویڈ 19 میں اموات کی شرح <span class="cases"> {{ (csummery.deaths/csummery.cases*100).toFixed(2) }}% </span> ہے جبکہ شفا یابی کی شرح <span class="recovered"> {{ Math.trunc(csummery.recovered/csummery.cases*100) }}% </span> ہے
                    </p>
                </div>
                <h3> {{ csummery.country}}'s Coronavirus Covid-19 latest Report </h3>
                <p>
                    Till this time the number of total infected people in {{ csummery.country}}  is <span class="cases"> {{ csummery.cases }} </span>
                    while total <span class="deaths"> {{ csummery.deaths }} </span> people have lost their lives due to Corona virus. <span class="recovered"> {{ csummery.recovered }} </span> people are healed form corona virus disease,
                    <span class="critical"> {{ csummery.critical }} </span> {{ csummery.country}} citizens are still in hospital in critical condition.
                    <span class="cases"> {{ csummery.todayCases }} </span> numer of new cases recorded today while <span class="deaths"> {{ csummery.todayDeaths }} </span> new deaths also reported.
                </p>
                <p> In {{ csummery.country }} Covid-19 Mortality Rate is <span class="cases"> {{ (csummery.deaths/csummery.cases*100).toFixed(2) }}% </span> while Recovery Rate is <span class="recovered"> {{ Math.trunc(csummery.recovered/csummery.cases*100) }}% </span> </p>
                <ul>
                    <li> <strong>Continent: </strong> {{ csummery.continent }}  </li>
                    <li> <strong>Country: </strong> {{ csummery.country }}  </li>
                    <li> <strong>Cases Per One Million: </strong> {{ csummery.casesPerOneMillion }}  </li>
                    <li> <strong>Deaths Per One Million: </strong> {{ csummery.deathsPerOneMillion }}  </li>
                    <li> <strong>Tests Per One Million: </strong> {{ csummery.testsPerOneMillion }}  </li>
                </ul>
                <h3>How does the novel coronavirus spread or transmit? </h3>
                <p> The virus is transmitted through direct contact with respiratory droplets of an infected person (generated through coughing and sneezing), and touching surfaces contaminated with the virus. The virus may survive on surfaces for several hours, but simple disinfectants can kill it. </p>
                <h3> What are the symptoms of novel coronavirus or Covid-19? </h3>
                <ul>
                    <li>Fever</li>
                    <li>Cough</li>
                    <li>Shortness of breath</li>
                </ul>
                <p>In more severe cases, infection can cause pneumonia or breathing difficulties. More rarely, the disease can be fatal. 

These symptoms are similar to the flu (influenza) or the common cold, which are a lot more common than novel coronavirus. This is why testing is required to confirm if someone has novel coronavirus. It’s important to remember that key prevention measures are the same – frequent hand washing, and respiratory hygiene (cover your cough or sneeze with a flexed elbow or tissue, then throw away the tissue into a closed bin). Also, there is a vaccine for the flu – so remember to keep yourself and your child up to date with vaccinations.  </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="countryinfo">
              <div v-if="csummery.country == 'India'">
                <iframe width="320" height="215" src="https://www.youtube.com/embed/v-852f1PXBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div v-ele>
                  <iframe width="320" height="215" src="https://www.youtube.com/embed/BtN-goy9VOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
      </div>
  </div>
</div>                
</template>
<script>
import PieChartc from "./PieChartc.vue";
import CountryTimeline from "./CountryTimeline.vue";
export default {
  name:"SingleCountry",
  components: {
    PieChartc,
    CountryTimeline
  },
  data(){
    return{
      csummery:[],
      deaths:[],
      confirmed:[],
      date:[],
      param:[],
    }
  },
  created(){  
    var currentUrl = window.location.pathname;
    const words = currentUrl.split('/');
    this.param = words[2];  
    axios
      .get(`https://disease.sh/v2/countries/`+this.param)
      .then(response => {
        this.csummery = response.data;
        //console.log(response.data);
      })
      .catch(err =>{
        this.errors.push(err);
    });
    axios   
      .get("https://api.covid19api.com/country/"+this.param+"?from=2020-02-01T00:00:00Z&to="+new Date()+"")
      .then(response => {
        this.countrytimeline = response.data;
       //console.log(new Date());
        let data = response.data;
        for (let val in data){
            this.deaths.push(data[val].Deaths);
            this.confirmed.push(data[val].Confirmed);
            let d = (data[val].Date);
            d.split('-');
            this.date.push(d[6]+'/'+d[8]+d[9]);
        }
      })
      .catch(err =>{
        console.log(err);
    }); 
  },
}
</script>
<style  scoped>
.countryinfo{
    margin: 10px auto;
}
.cases{
    font-weight: 700;
    color: red;
}
.deaths{
    font-weight: 700;
    color: black;
}
.recovered{
    font-weight: 700;
    color: green;
}
.critical{
    font-weight: 700;
    color: #6cb2eb;
}
.pakistan{
    text-align:right;
}
</style>