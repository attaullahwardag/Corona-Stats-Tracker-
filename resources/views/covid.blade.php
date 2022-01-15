@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <h1 class="h1sm"> What is Covid-19 or What is Corona Virus ?? </h1> 
            <p>According WHO Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.&nbsp; Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.&nbsp; </p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
        </div>
        <div class="col-md-6">
            <img style="width:100%;" src="images/corona.png" alt="corona virus">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <h1 class="h1sm">What are the symptoms of novel coronavirus? </h1>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/temp.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="h1sm"> Fever </h1>
                  <p class="card-text">These symptoms are similar to the flu (influenza) or the common cold, which are a lot more common than novel coronavirus.</p>
                </div>
              </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/cough.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="h1sm" > Cough</h1>
                  <p class="card-text">These symptoms are similar to the flu (influenza) or the common cold, which are a lot more common than novel coronavirus.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/throught.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="h1sm" > Shortness of breath</h1>
                  <p class="card-text">In more severe cases, infection can cause pneumonia or breathing difficulties. More rarely, the disease can be fatal.</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection