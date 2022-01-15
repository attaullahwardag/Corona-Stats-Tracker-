<template>
  <div class="main">
    <input type="text" v-model="search" class="search" placeholder="Search your Country ,eg  Afghanistan">
    <div
      id="ES"
      v-for="country in filttercountries"
      :key="country.country"
      class="country-block"
    >
    <a :href="'country/'+country.country" class="link" >
      <div class="country-flag">
        <img
          class="img"
          :src="'flags/'+country.countryInfo.iso2+'.png'"
          alt="US"
        />
      </div>
      <div class="country-text-container">
        <div class="country-name">
          {{ country.country }}
        </div>
        <div timestamp="191726" class="country-confirmed">
          <span class="sub">Confirmed </span>{{ country.cases }}
        </div>
        <div class="country-dead">
            <span class="sub">Dead </span>{{ country.deaths }}
        </div>
        <div class="country-recovered">
          <span class="sub">Recovered </span>{{ country.recovered }}
        </div>
        <div class="country-confirmedtoday">
          <span class="sub">C Today </span>{{ country.todayCases }}
        </div>
        <div class="country-deadtoday">
            <span class="sub">D Today </span>{{ country.todayDeaths }}
        </div>
      </div>
    </a>
    </div>
  </div>  
</template>
<script>
export default {
  name:"CountriesComponent",
  data() {
    return {
      countries: [],
      search:"",
      errors: [],
    };
  },
  created() {
    axios
      .get(`https://corona.lmao.ninja/v2/countries?sort=cases`)
      .then((response) => {
        this.countries = response.data;
        //console.log(response);
      })
      .catch((err) => {
        this.errors.push(err);
      });
  },
  computed:{
    filttercountries:function(){
      return this.countries.filter((country)=>{
      return country.country.toUpperCase().match(this.search.toUpperCase())
      });
    }
  }
};
</script>
<style  scoped>
.search{
    width: 345px;
    height: 3rem;
    font-size: 1rem;
    margin: 4px 0px;
    border: 1px solid #cbd5e0;
    padding: 5px;
  }
  .search:focus{
    border: 2px solid #108885;
    outline: none;
  }
  .link{
    text-decoration: none;
    color:rgb(29, 28, 28);
  }
</style>