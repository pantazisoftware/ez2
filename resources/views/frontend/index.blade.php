@extends('frontend.layouts.app')

@section('title', __('Homepage'))

@section('content')
    <div class="p-2 lg:px-16">
        <div id="jumbo" x-data="{ jumbo: 0 }">
            <div id="jumbotron"
                class="w-full h-[500px] lg:h-[800px] relative rounded-bl-[50px] rounded-tr-[50px] overflow-hidden">

                <div id="jumbotron-content" id="0" x-show.transition.in.opacity.duration.1000="jumbo === 0">
                    <img class="absolute top-0 bottom-0 object-cover h-full origin-center lg:object-cover"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">
                    <div class="absolute z-0 opacity-0 -bottom-32 left-10 lg:opacity-100">
                        <svg class="fill-current w-[400px] text-white" data-aos="fade-up" data-aos-delay="1000"
                            data-aos-duration="600" data-aos-easing="ease-in-out" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                            viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve">
                            <path
                                d="M11,12c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  c2.0849609,0,3.1523438-1.2490234,4.0097656-2.2524414C22.3535156,12.5610352,22.8867188,12,23.9970703,12  c1.1074219,0,1.6396484,0.5605469,2.4853516,1.5512695c0.8564453,1.0039062,1.9228516,2.253418,4.0078125,2.253418  s3.1513672-1.2495117,4.0087891-2.2529297C35.3447266,12.5605469,35.8779297,12,36.9863281,12  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0859375,0,3.1533203-1.2495117,4.0107422-2.2529297C48.3417969,12.5605469,48.875,12,49.984375,12  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0869141,0,3.1533203-1.2490234,4.0117188-2.2529297C61.3417969,12.5605469,61.8740234,12,62.984375,12  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  s3.1533203-1.2490234,4.0107422-2.2524414C74.3408203,12.5610352,74.8740234,12,75.9853516,12  c1.1123047,0,1.6464844,0.5610352,2.4941406,1.5522461c0.8574219,1.003418,1.9257812,2.2524414,4.0126953,2.2524414  c2.0878906,0,3.1552734-1.2490234,4.0136719-2.2524414C87.3535156,12.5610352,87.8876953,12,89,12c0.5527344,0,1-0.4477539,1-1  s-0.4472656-1-1-1c-2.0878906,0-3.1552734,1.2490234-4.0136719,2.2524414  c-0.8476562,0.9912109-1.3818359,1.5522461-2.4941406,1.5522461c-1.1113281,0-1.6455078-0.5610352-2.4931641-1.5522461  C79.1416016,11.2490234,78.0732422,10,75.9853516,10c-2.0869141,0-3.1542969,1.2490234-4.0126953,2.2529297  c-0.8466797,0.9912109-1.3798828,1.5517578-2.4902344,1.5517578c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  C66.1367188,11.2490234,65.0703125,10,62.984375,10s-3.1533203,1.2490234-4.0097656,2.2524414  c-0.8476562,0.9912109-1.3808594,1.5522461-2.4912109,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  C53.1376953,11.2495117,52.0703125,10,49.984375,10c-2.0849609,0-3.1523438,1.2490234-4.0097656,2.2524414  c-0.8457031,0.9912109-1.3789062,1.5522461-2.4892578,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  C40.1396484,11.2495117,39.0722656,10,36.9863281,10c-2.0849609,0-3.1513672,1.2495117-4.0087891,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4873047,1.5517578s-1.640625-0.5605469-2.4863281-1.5517578  C27.1474609,11.2490234,26.0810547,10,23.9970703,10c-2.0859375,0-3.1533203,1.2495117-4.0107422,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4882812,1.5517578s-1.6425781-0.5605469-2.4882812-1.5517578  C14.1523438,11.2490234,13.0859375,10,11,10c-0.5527344,0-1,0.4477539-1,1S10.4472656,12,11,12z" />
                            <path
                                d="M89,28.5488281c-2.0878906,0-3.1552734,1.2490234-4.0136719,2.2524414  c-0.8476562,0.9912109-1.3818359,1.5522461-2.4941406,1.5522461c-1.1113281,0-1.6455078-0.5610352-2.4931641-1.5522461  c-0.8574219-1.003418-1.9257812-2.2524414-4.0136719-2.2524414c-2.0869141,0-3.1542969,1.2490234-4.0126953,2.2529297  c-0.8466797,0.9912109-1.3798828,1.5517578-2.4902344,1.5517578c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.0039062-1.9238281-2.2529297-4.0097656-2.2529297s-3.1533203,1.2490234-4.0097656,2.2524414  c-0.8476562,0.9912109-1.3808594,1.5522461-2.4912109,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1523438,1.2490234-4.0097656,2.2524414  c-0.8457031,0.9912109-1.3789062,1.5522461-2.4892578,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1513672,1.2495117-4.0087891,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4873047,1.5517578s-1.640625-0.5605469-2.4863281-1.5517578  c-0.8564453-1.0039062-1.9228516-2.2529297-4.0068359-2.2529297c-2.0859375,0-3.1533203,1.2495117-4.0107422,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4882812,1.5517578s-1.6425781-0.5605469-2.4882812-1.5517578  C14.1523438,29.7978516,13.0859375,28.5488281,11,28.5488281c-0.5527344,0-1,0.4477539-1,1s0.4472656,1,1,1  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  c2.0849609,0,3.1523438-1.2490234,4.0097656-2.2524414c0.8457031-0.9912109,1.3789062-1.5522461,2.4892578-1.5522461  c1.1074219,0,1.6396484,0.5605469,2.4853516,1.5512695c0.8564453,1.0039062,1.9228516,2.253418,4.0078125,2.253418  s3.1513672-1.2495117,4.0087891-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4873047-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0859375,0,3.1533203-1.2495117,4.0107422-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4882812-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0869141,0,3.1533203-1.2490234,4.0117188-2.2529297c0.8466797-0.9912109,1.3789062-1.5517578,2.4892578-1.5517578  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  s3.1533203-1.2490234,4.0107422-2.2524414c0.8476562-0.9912109,1.3808594-1.5522461,2.4921875-1.5522461  c1.1123047,0,1.6464844,0.5610352,2.4941406,1.5522461c0.8574219,1.003418,1.9257812,2.2524414,4.0126953,2.2524414  c2.0878906,0,3.1552734-1.2490234,4.0136719-2.2524414C87.3535156,31.1098633,87.8876953,30.5488281,89,30.5488281  c0.5527344,0,1-0.4477539,1-1S89.5527344,28.5488281,89,28.5488281z" />
                            <path
                                d="M89,47.0976562c-2.0878906,0-3.1552734,1.2490234-4.0136719,2.2524414  c-0.8476562,0.9912109-1.3818359,1.5522461-2.4941406,1.5522461c-1.1113281,0-1.6455078-0.5610352-2.4931641-1.5522461  c-0.8574219-1.003418-1.9257812-2.2524414-4.0136719-2.2524414c-2.0869141,0-3.1542969,1.2490234-4.0126953,2.2529297  c-0.8466797,0.9912109-1.3798828,1.5517578-2.4902344,1.5517578c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.0039062-1.9238281-2.2529297-4.0097656-2.2529297s-3.1533203,1.2490234-4.0097656,2.2524414  c-0.8476562,0.9912109-1.3808594,1.5522461-2.4912109,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1523438,1.2490234-4.0097656,2.2524414  c-0.8457031,0.9912109-1.3789062,1.5522461-2.4892578,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1513672,1.2495117-4.0087891,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4873047,1.5517578s-1.640625-0.5605469-2.4863281-1.5517578  c-0.8564453-1.0039062-1.9228516-2.2529297-4.0068359-2.2529297c-2.0859375,0-3.1533203,1.2495117-4.0107422,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4882812,1.5517578s-1.6425781-0.5605469-2.4882812-1.5517578  C14.1523438,48.3466797,13.0859375,47.0976562,11,47.0976562c-0.5527344,0-1,0.4477539-1,1s0.4472656,1,1,1  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  c2.0849609,0,3.1523438-1.2490234,4.0097656-2.2524414c0.8457031-0.9912109,1.3789062-1.5522461,2.4892578-1.5522461  c1.1074219,0,1.6396484,0.5605469,2.4853516,1.5512695c0.8564453,1.0039062,1.9228516,2.253418,4.0078125,2.253418  s3.1513672-1.2495117,4.0087891-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4873047-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0859375,0,3.1533203-1.2495117,4.0107422-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4882812-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0869141,0,3.1533203-1.2490234,4.0117188-2.2529297c0.8466797-0.9912109,1.3789062-1.5517578,2.4892578-1.5517578  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  s3.1533203-1.2490234,4.0107422-2.2524414c0.8476562-0.9912109,1.3808594-1.5522461,2.4921875-1.5522461  c1.1123047,0,1.6464844,0.5610352,2.4941406,1.5522461c0.8574219,1.003418,1.9257812,2.2524414,4.0126953,2.2524414  c2.0878906,0,3.1552734-1.2490234,4.0136719-2.2524414C87.3535156,49.6586914,87.8876953,49.0976562,89,49.0976562  c0.5527344,0,1-0.4477539,1-1S89.5527344,47.0976562,89,47.0976562z" />
                            <path
                                d="M89,65.6464844c-2.0878906,0-3.1552734,1.2490234-4.0136719,2.2524414  c-0.8476562,0.9912109-1.3818359,1.5522461-2.4941406,1.5522461c-1.1113281,0-1.6455078-0.5610352-2.4931641-1.5522461  c-0.8574219-1.003418-1.9257812-2.2524414-4.0136719-2.2524414c-2.0869141,0-3.1542969,1.2490234-4.0126953,2.2529297  c-0.8466797,0.9912109-1.3798828,1.5517578-2.4902344,1.5517578c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.0039062-1.9238281-2.2529297-4.0097656-2.2529297s-3.1533203,1.2490234-4.0097656,2.2524414  c-0.8476562,0.9912109-1.3808594,1.5522461-2.4912109,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1523438,1.2490234-4.0097656,2.2524414  c-0.8457031,0.9912109-1.3789062,1.5522461-2.4892578,1.5522461c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578  c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297c-2.0849609,0-3.1513672,1.2495117-4.0087891,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4873047,1.5517578s-1.640625-0.5605469-2.4863281-1.5517578  c-0.8564453-1.0039062-1.9228516-2.2529297-4.0068359-2.2529297c-2.0859375,0-3.1533203,1.2495117-4.0107422,2.2529297  c-0.8457031,0.9912109-1.3789062,1.5517578-2.4882812,1.5517578s-1.6425781-0.5605469-2.4882812-1.5517578  C14.1523438,66.8955078,13.0859375,65.6464844,11,65.6464844c-0.5527344,0-1,0.4477539-1,1s0.4472656,1,1,1  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  c2.0849609,0,3.1523438-1.2490234,4.0097656-2.2524414c0.8457031-0.9912109,1.3789062-1.5522461,2.4892578-1.5522461  c1.1074219,0,1.6396484,0.5605469,2.4853516,1.5512695c0.8564453,1.0039062,1.9228516,2.253418,4.0078125,2.253418  s3.1513672-1.2495117,4.0087891-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4873047-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0859375,0,3.1533203-1.2495117,4.0107422-2.2529297c0.8457031-0.9912109,1.3789062-1.5517578,2.4882812-1.5517578  c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461c0.8574219,1.003418,1.9248047,2.2524414,4.0097656,2.2524414  c2.0869141,0,3.1533203-1.2490234,4.0117188-2.2529297c0.8466797-0.9912109,1.3789062-1.5517578,2.4892578-1.5517578  c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578c0.8574219,1.0039062,1.9238281,2.2529297,4.0097656,2.2529297  s3.1533203-1.2490234,4.0107422-2.2524414c0.8476562-0.9912109,1.3808594-1.5522461,2.4921875-1.5522461  c1.1123047,0,1.6464844,0.5610352,2.4941406,1.5522461c0.8574219,1.003418,1.9257812,2.2524414,4.0126953,2.2524414  c2.0878906,0,3.1552734-1.2490234,4.0136719-2.2524414C87.3535156,68.2075195,87.8876953,67.6464844,89,67.6464844  c0.5527344,0,1-0.4477539,1-1S89.5527344,65.6464844,89,65.6464844z" />
                            <path
                                d="M89,84.1953125c-2.0878906,0-3.1552734,1.2490234-4.0136719,2.2524414C84.1386719,87.4389648,83.6044922,88,82.4921875,88  c-1.1113281,0-1.6455078-0.5610352-2.4931641-1.5522461c-0.8574219-1.003418-1.9257812-2.2524414-4.0136719-2.2524414  c-2.0869141,0-3.1542969,1.2490234-4.0126953,2.2529297C71.1259766,87.4394531,70.5927734,88,69.4824219,88  c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578c-0.8574219-1.0039062-1.9238281-2.2529297-4.0097656-2.2529297  s-3.1533203,1.2490234-4.0097656,2.2524414C58.1269531,87.4389648,57.59375,88,56.4833984,88  c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297  c-2.0849609,0-3.1523438,1.2490234-4.0097656,2.2524414C45.1289062,87.4389648,44.5957031,88,43.4853516,88  c-1.109375,0-1.6425781-0.5605469-2.4882812-1.5517578c-0.8574219-1.003418-1.9248047-2.2529297-4.0107422-2.2529297  c-2.0849609,0-3.1513672,1.2495117-4.0087891,2.2529297C32.1318359,87.4394531,31.5986328,88,30.4902344,88  s-1.640625-0.5605469-2.4863281-1.5517578c-0.8564453-1.0039062-1.9228516-2.2529297-4.0068359-2.2529297  c-2.0859375,0-3.1533203,1.2495117-4.0107422,2.2529297C19.140625,87.4394531,18.6074219,88,17.4980469,88  s-1.6425781-0.5605469-2.4882812-1.5517578C14.1523438,85.4443359,13.0859375,84.1953125,11,84.1953125  c-0.5527344,0-1,0.4477539-1,1s0.4472656,1,1,1c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578  C14.3457031,88.7509766,15.4121094,90,17.4980469,90c2.0849609,0,3.1523438-1.2490234,4.0097656-2.2524414  c0.8457031-0.9912109,1.3789062-1.5522461,2.4892578-1.5522461c1.1074219,0,1.6396484,0.5605469,2.4853516,1.5512695  C27.3388672,88.7504883,28.4052734,90,30.4902344,90s3.1513672-1.2495117,4.0087891-2.2529297  c0.8457031-0.9912109,1.3789062-1.5517578,2.4873047-1.5517578c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461  C40.3330078,88.7509766,41.4003906,90,43.4853516,90c2.0859375,0,3.1533203-1.2495117,4.0107422-2.2529297  c0.8457031-0.9912109,1.3789062-1.5517578,2.4882812-1.5517578c1.1103516,0,1.6435547,0.5610352,2.4892578,1.5522461  C53.3310547,88.7509766,54.3984375,90,56.4833984,90c2.0869141,0,3.1533203-1.2490234,4.0117188-2.2529297  c0.8466797-0.9912109,1.3789062-1.5517578,2.4892578-1.5517578c1.109375,0,1.6425781,0.5605469,2.4882812,1.5517578  C66.3300781,88.7509766,67.3964844,90,69.4824219,90s3.1533203-1.2490234,4.0107422-2.2524414  c0.8476562-0.9912109,1.3808594-1.5522461,2.4921875-1.5522461c1.1123047,0,1.6464844,0.5610352,2.4941406,1.5522461  C79.3369141,88.7509766,80.4052734,90,82.4921875,90c2.0878906,0,3.1552734-1.2490234,4.0136719-2.2524414  C87.3535156,86.7563477,87.8876953,86.1953125,89,86.1953125c0.5527344,0,1-0.4477539,1-1S89.5527344,84.1953125,89,84.1953125z" />
                        </svg>
                    </div>
                    <div class="absolute right-0 z-10 opacity-0 -top-10 lg:opacity-100">
                        <svg data-aos="fade-down" data-aos-delay="300" data-aos-duration="700" data-aos-easing="ease-in-out"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 90 112.5" class="fill-current w-[400px] text-accent"
                            style="enable-background:new 0 0 90 90;" xml:space="preserve">
                            <title>DiagonalLines3</title>
                            <polygon points="0,6.5110002 6.5110002,0 3.7490001,0 0,3.7490001 " />
                            <polygon points="0,26.4909992 26.4909992,0 23.7290001,0 0,23.7290001 " />
                            <polygon points="63.6889992,0 0,63.6889992 0,66.4509964 66.4509964,0 " />
                            <polygon points="83.6689987,0 0,83.6689987 0,86.4309998 86.4309998,0 " />
                            <polygon points="90,13.6490002 13.6490002,90 16.4109993,90 90,16.4109993 " />
                            <polygon points="90,33.6290016 33.6290016,90 36.3909988,90 90,36.3909988 " />
                            <polygon points="90,53.6090012 53.6090012,90 56.3709984,90 90,56.3709984 " />
                            <polygon points="90,73.5889969 73.5889969,90 76.3509979,90 90,76.3509979 " />
                            <polygon points="43.7089996,0 0,43.7089996 0,46.4710007 46.4710007,0 " />
                        </svg>
                    </div>
                    <div class="absolute top-0 bottom-0 z-10 p-12 tracking-tight lg:p-40 bg-primary/60">
                        <div id="animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600"
                            data-aos-easing="ease-in-out">
                            <h1 class="w-full text-5xl font-bold text-white uppercase md:w-5/6 lg:w-4/6 lg:text-8xl">
                                Financial &
                                <span class="italic lowercase highlight text-accent">operations</span> principal
                            </h1>
                            <a href="#"
                                class="inline-flex items-center px-12 py-4 my-10 space-x-2 text-sm font-bold text-white uppercase transition duration-300 ease-linear rounded-lg hover:bg-primary hover:-translate-y-3 bg-accent">Submit</a>
                        </div>

                    </div>
                </div>

                <div id="jumbotron-content" id="1" x-show.transition.in.opacity.duration.1000="jumbo === 1">
                    <img class="absolute top-0 bottom-0 object-cover w-full h-full origin-center lg:object-cover"
                        src="https://images.unsplash.com/photo-1664575599736-c5197c684128?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">

                    <div class="absolute top-0 bottom-0 z-10 w-full p-12 tracking-tight lg:p-40 bg-primary/60">
                        <div id="animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600"
                            data-aos-easing="ease-in-out">
                            <h1 class="w-full text-5xl font-bold text-white uppercase md:w-5/6 lg:w-4/6 lg:text-8xl">
                                Financial &
                                <span class="italic lowercase highlight text-accent">operations</span> principal
                            </h1>
                            <a href="#"
                                class="inline-flex items-center px-12 py-4 my-10 space-x-2 text-sm font-bold text-white uppercase transition duration-300 ease-linear rounded-lg hover:bg-primary hover:-translate-y-3 bg-accent">Submit</a>
                        </div>

                    </div>
                </div>

                <div id="jumbotron-content" id="2" x-show.transition.in.opacity.duration.1000="jumbo === 2">
                    <img class="absolute top-0 bottom-0 object-cover w-full h-full origin-center lg:object-cover"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">

                    <div class="absolute right-0 z-10 opacity-0 -top-10 lg:opacity-100">
                        <svg data-aos="fade-down" data-aos-delay="300" data-aos-duration="700" data-aos-easing="ease-in-out"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            x="0px" y="0px" viewBox="0 0 90 112.5" class="fill-current w-[400px] text-accent"
                            style="enable-background:new 0 0 90 90;" xml:space="preserve">
                            <title>DiagonalLines3</title>
                            <polygon points="0,6.5110002 6.5110002,0 3.7490001,0 0,3.7490001 " />
                            <polygon points="0,26.4909992 26.4909992,0 23.7290001,0 0,23.7290001 " />
                            <polygon points="63.6889992,0 0,63.6889992 0,66.4509964 66.4509964,0 " />
                            <polygon points="83.6689987,0 0,83.6689987 0,86.4309998 86.4309998,0 " />
                            <polygon points="90,13.6490002 13.6490002,90 16.4109993,90 90,16.4109993 " />
                            <polygon points="90,33.6290016 33.6290016,90 36.3909988,90 90,36.3909988 " />
                            <polygon points="90,53.6090012 53.6090012,90 56.3709984,90 90,56.3709984 " />
                            <polygon points="90,73.5889969 73.5889969,90 76.3509979,90 90,76.3509979 " />
                            <polygon points="43.7089996,0 0,43.7089996 0,46.4710007 46.4710007,0 " />
                        </svg>
                    </div>
                    <div class="absolute top-0 bottom-0 z-10 w-full p-12 tracking-tight lg:p-40 bg-primary/60">
                        <div id="animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600"
                            data-aos-easing="ease-in-out">
                            <h1 class="w-full text-4xl font-bold text-white uppercase md:w-5/6 lg:w-4/6 lg:text-8xl">
                                OUTSOURCED CHIEF & <br />
                                <span class="italic lowercase highlight text-accent">Financial Officer</span>
                            </h1>
                            <a href="#"
                                class="inline-flex items-center px-12 py-4 my-10 space-x-2 text-sm font-bold text-white uppercase transition duration-300 ease-linear rounded-lg hover:bg-primary hover:-translate-y-3 bg-accent">Submit</a>
                        </div>

                    </div>
                </div>

                <div id="jumbotron-content" id="3" x-show.transition.in.opacity.duration.1000="jumbo === 3">
                    <img class="absolute top-0 bottom-0 object-cover w-full h-full origin-center lg:object-cover"
                        src="https://images.unsplash.com/photo-1664575602276-acd073f104c1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">


                    <div class="absolute top-0 bottom-0 z-10 p-12 tracking-tight lg:p-40 bg-primary/60">
                        <div id="animate" data-aos="fade-right" data-aos-delay="50" data-aos-duration="600"
                            data-aos-easing="ease-in-out">
                            <h1 class="w-full text-5xl font-bold text-white uppercase md:w-5/6 lg:w-4/6 lg:text-8xl">
                                Merger & acquisition due diligence
                            </h1>
                            <a href="#"
                                class="inline-flex items-center px-12 py-4 my-10 space-x-2 text-sm font-bold text-white uppercase transition duration-300 ease-linear rounded-lg hover:bg-primary hover:-translate-y-3 bg-accent">Submit</a>
                        </div>

                    </div>
                </div>

            </div>
            <div id="jumbotron-controls"
                class="flex flex-col justify-center px-10 py-16 space-y-6 lg:space-y-0 lg:space-x-10 lg:flex-row">
                <div id="item1" x-on:click="jumbo = 0" x-bind:class="{ 'border-gray-200': jumbo === 0 }"
                    class="flex flex-row hover:cursor-pointer items-center p-6 space-x-6 border-4 border-trasparent  rounded-bl-[50px] rounded-tr-[50px]">
                    <div>
                        <p class="text-5xl font-bold text-accent">1</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-primary">Financial & <i>operations</i> Principal</p>
                    </div>
                </div>
                <div id="item2" x-on:click="jumbo = 1" x-bind:class="{ 'border-gray-200': jumbo === 1 }"
                    class="flex flex-row hover:cursor-pointer items-center p-6 space-x-6 border-4 border-trasparent  rounded-bl-[50px] rounded-tr-[50px]">

                    <div>
                        <p class="text-5xl font-bold text-accent">2</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-primary"><i>Strategy</i> & corporate Finance</p>
                    </div>
                </div>
                <div id="item3" x-on:click="jumbo = 2" x-bind:class="{ 'border-gray-200': jumbo === 2 }"
                    class="flex flex-row hover:cursor-pointer items-center p-6 space-x-6 border-4 border-trasparent  rounded-bl-[50px] rounded-tr-[50px]">

                    <div>
                        <p class="text-5xl font-bold text-accent">3</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-primary">Outsourced Chief <i>Financial Officer</i></p>
                    </div>
                </div>
                <div id="item4" x-on:click="jumbo = 3" x-bind:class="{ 'border-gray-200': jumbo === 3 }"
                    class="flex flex-row hover:cursor-pointer items-center p-6 space-x-6 border-4 border-trasparent  rounded-bl-[50px] rounded-tr-[50px]">

                    <div>
                        <p class="text-5xl font-bold text-accent">4</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-primary">Merger & acquisition due diligence</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="industries" class="bg-accent rounded-bl-[50px] rounded-tr-[50px] relative">

            <h1 class="pt-16 pb-8 font-bold text-center uppercase text-7xl text-primary">Industries</h1>
            <p class="w-3/6 mx-auto text-center text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                assumenda
                impedit cum reprehenderit commodi repudiandae similique sequi, consequatur.</p>
            <div class="grid grid-cols-12 px-20 py-32 divide-y md:divide-y-0 lg:divide-x divide-white/60">
                <div class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-24 h-24 fill-white">
                            <path fill-rule="evenodd"
                                d="M3 2.25a.75.75 0 000 1.5v16.5h-.75a.75.75 0 000 1.5H15v-18a.75.75 0 000-1.5H3zM6.75 19.5v-2.25a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v2.25a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75zM6 6.75A.75.75 0 016.75 6h.75a.75.75 0 010 1.5h-.75A.75.75 0 016 6.75zM6.75 9a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM6 12.75a.75.75 0 01.75-.75h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 6a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zm-.75 3.75A.75.75 0 0110.5 9h.75a.75.75 0 010 1.5h-.75a.75.75 0 01-.75-.75zM10.5 12a.75.75 0 000 1.5h.75a.75.75 0 000-1.5h-.75zM16.5 6.75v15h5.25a.75.75 0 000-1.5H21v-12a.75.75 0 000-1.5h-4.5zm1.5 4.5a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008zm.75 2.25a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75v-.008a.75.75 0 00-.75-.75h-.008zM18 17.25a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                clip-rule="evenodd" />
                        </svg>

                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">Industrial Manufacturing</h3>
                    <p class="py-5 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis molestias,
                        natus
                        nisi est error
                        dolores quis magnam!</p>
                </div>
                <div class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-24 h-24 fill-white">
                            <path fill-rule="evenodd"
                                d="M15.22 6.268a.75.75 0 01.968-.432l5.942 2.28a.75.75 0 01.431.97l-2.28 5.941a.75.75 0 11-1.4-.537l1.63-4.251-1.086.483a11.2 11.2 0 00-5.45 5.174.75.75 0 01-1.199.19L9 12.31l-6.22 6.22a.75.75 0 11-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l3.606 3.605a12.694 12.694 0 015.68-4.973l1.086-.484-4.251-1.631a.75.75 0 01-.432-.97z"
                                clip-rule="evenodd" />
                        </svg>


                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">Growing</h3>
                    <p class="py-5 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis molestias,
                        natus
                        nisi est error
                        dolores quis magnam!</p>
                </div>
                <div class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-24 h-24 fill-white">
                            <path fill-rule="evenodd"
                                d="M14.615 1.595a.75.75 0 01.359.852L12.982 9.75h7.268a.75.75 0 01.548 1.262l-10.5 11.25a.75.75 0 01-1.272-.71l1.992-7.302H3.75a.75.75 0 01-.548-1.262l10.5-11.25a.75.75 0 01.913-.143z"
                                clip-rule="evenodd" />
                        </svg>


                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">Instant</h3>
                    <p class="py-5 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis molestias,
                        natus
                        nisi est error
                        dolores quis magnam!</p>
                </div>
                <div class="col-span-12 p-6 md:col-span-6 lg:col-span-3" data-aos="fade-up" data-aos-duration="700">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-24 h-24 fill-white">
                            <path
                                d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
                            <path fill-rule="evenodd"
                                d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z"
                                clip-rule="evenodd" />
                        </svg>


                    </p>
                    <h3 class="pt-5 text-2xl font-bold text-primary">Always Ready</h3>
                    <p class="py-5 text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis molestias,
                        natus
                        nisi est error
                        dolores quis magnam!</p>
                </div>
            </div>
        </div>

        <div id="business" class="relative w-5/6 mx-auto">
            <h1 class="pt-32 pb-8 font-bold text-center uppercase text-7xl text-primary">Business Services</h1>
            <div class="absolute right-0 -z-10 -top-10">
                <svg id="10015.io" viewBox="0 0 1080 1080" class="w-32 h-32 rotate-45 lg:w-80 lg:h-80 opacity-40"
                    xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="svg-pattern" x="0" y="0" width="20" height="20"
                            patternUnits="userSpaceOnUse" patternTransform="translate(0, 0) rotate(0) skewX(-45)"><svg
                                width="20" height="20" viewBox="0 0 100 100">
                                <g fill="#000000" opacity="1">
                                    <rect y="60" width="20" height="100" transform="rotate(-90 0 60)">
                                    </rect>
                                </g>
                            </svg></pattern>
                    </defs>
                    <rect x="0" y="0" width="100%" height="100%" fill="rgba(255, 255, 255, 0)">
                    </rect>
                    <rect x="0" y="0" width="100%" height="100%" fill="url(#svg-pattern)"></rect>
                </svg>
            </div>
            <div id="content" x-data="{ activeTab: 0 }">

                <div id="tab-menu" class="flex flex-row justify-center my-16 space-x-10">
                    <button x-on:click="activeTab = 0" x-bind:class="{ 'bg-accent text-white': activeTab === 0 }"
                        class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Consulting</button>
                    <button x-on:click="activeTab = 1" x-bind:class="{ 'bg-accent text-white': activeTab === 1 }"
                        class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Financial</button>
                    <button x-on:click="activeTab = 2" x-bind:class="{ 'bg-accent text-white': activeTab === 2 }"
                        class="font-bold px-4 py-3 rounded-tl-[20px] rounded-br-[20px]">Other Solution</button>
                </div>

                <div id="tab-content">
                    <div id="content-1" x-show.transition.in.opacity.duration.1000="activeTab === 0">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1622463461333-611830d028bd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Business Unit
                                        Strategy
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://plus.unsplash.com/premium_photo-1683141437785-dd83524bd24d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Technical Details
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Finance
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="content-2" x-show.transition.in.opacity.duration.1000="activeTab === 1">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Management
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1551135049-8a33b5883817?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Logic
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2342&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Advisory
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="content-3" x-show.transition.in.opacity.duration.1000="activeTab === 2">
                        <div class="grid w-full grid-cols-12 gap-10 mx-auto sm:w-5/6 md:w-4/6 lg:w-full">
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Unity
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Learn
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                            <div id="card" class="col-span-12 lg:col-span-4 group">
                                <a href="" class="relative">
                                    <img class="h-64 w-full object-cover rounded-tl-[20px] rounded-br-[20px]"
                                        src="https://images.unsplash.com/photo-1597733336794-12d05021d510?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80"
                                        alt="">
                                    <h1
                                        class="absolute bottom-0 right-10 left-10 px-4 rounded-tl-[20px] bg-primary/90 group-hover:bg-accent font-black text-base md:text-xl py-4 transition duration-200 ease-linear text-white">
                                        Internet
                                    </h1>
                                </a>
                                <p class="py-5 text-center">The effort vastly improved the company’s planning and execution
                                    functions, they knew that in
                                    order to succeed in this era of technology their accounting systems needed.</p>
                                <hr class="h-1 my-3 bg-gray-200">
                                <a href=""
                                    class="inline-flex items-center justify-center w-full space-x-2 text-sm font-bold uppercase"><span>See
                                        more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="successful" class="relative rounded-tl-[50px] rounded-br-[50px] bg-primary overflow-hidden my-32">
            <img class="absolute top-0 left-0 right-0 z-0 object-cover opacity-20"
                src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                alt="">
            <h1 class="relative z-20 w-6/12 py-10 mx-auto text-3xl font-bold text-center text-white lg:text-5xl ">Doing the
                <span class="italic highlight text-accent">successful thing,</span><br />
                at the right time.
            </h1>

            <div id="scrollable" class="relative z-20 px-6 pb-16 my-16 overflow-x-scroll">

                <div class="z-20 flex overflow-x-auto">
                    <div class="flex flex-none w-full space-x-6 snap-x snap-mandatory">
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2352&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Martha Mace</p>
                                    <p class="text-white">Sales Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=988&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Gabriele Manique</p>
                                    <p class="text-white">CTO EquipTrelo</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex-none w-3/4 md:w-2/4 lg:w-1/4 snap-always snap-start">
                            <p class="font-medium text-white">When you are in the financial industry you know the image you
                                have to project
                                to people. You have
                                to be agile and authoritative;</p>
                            <div class="flex items-center space-x-2">
                                <div id="image" class="items-center flex-grow-0 w-16">
                                    <img class="object-cover w-12 h-12 rounded-bl-xl rounded-tr-xl"
                                        src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                                        alt="">
                                </div>
                                <div id="details" class="py-4">
                                    <p class="text-lg font-bold text-accent">Donald Greg</p>
                                    <p class="text-white">CEO MatterMost</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more columns as needed -->
                    </div>
                </div>


            </div>
        </div>

        <div id="features" class="w-10/12 mx-auto">
            <div class="flex flex-col space-x-10 lg:flex-row" x-data="{ features: 0 }">
                <div class="w-full lg:w-4/12">
                    <div id="tab-controls" class="flex flex-row items-center justify-center pb-10 space-x-1 text-primary">
                        <button x-on:click="features = 0" x-bind:class="{ 'bg-accent text-white': features === 0 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Research</button>
                        <button x-on:click="features = 1" x-bind:class="{ 'bg-accent text-white': features === 1 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Concept</button>
                        <button x-on:click="features = 2" x-bind:class="{ 'bg-accent text-white': features === 2 }"
                            class="px-4 py-2.5 rounded-tl-xl rounded-br-xl font-bold">Solution</button>
                    </div>
                    <div id="c-title1" x-show.transition.in.opacity.duration.1000="features === 0" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">app</span> moments</h2>
                    </div>
                    <div id="c-title2" x-show.transition.in.opacity.duration.1000="features === 1" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">remarks</span> moments</h2>
                    </div>
                    <div id="c-title3" x-show.transition.in.opacity.duration.1000="features === 2" id="title"
                        class="px-4 py-10 lg:p-0">
                        <h2 class="text-5xl font-bold text-center text-primary lg:text-left">Our notable <span
                                class="italic highlight text-accent">research</span> moments</h2>
                    </div>
                </div>
                <div class="w-full lg:w-8/12">
                    <div id="content1" x-show.transition.in.opacity.duration.1000="features === 0"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content2" x-show.transition.in.opacity.duration.1000="features === 1"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="content3" x-show.transition.in.opacity.duration.1000="features === 2"
                        class="grid grid-cols-2 gap-16">
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Instant</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Booking</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>



                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">Travel</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-2 lg:col-span-1">
                            <div class="flex flex-row space-x-2 items-strat">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>


                                </div>
                                <div id="text">
                                    <h3 class="font-bold leading-8 tracking-wide uppercase text-primary">World Wide</h3>
                                    <p class="leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem
                                        ipsum dolor sit amet
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div id="posts" class="rounded-bl-[50px] rounded-tr-[50px] overflow-hidden my-32">
            <div class="grid grid-cols-2 gap-6">
                <div class="relative col-span-2 lg:col-span-1">
                    <img class="object-cover w-full origin-center h-[500px]"
                        src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">
                    <div class="absolute w-5/6 p-10 lg:w-3/6 bottom-10 left-10 bg-accent rounded-tl-3xl rounded-br-3xl">
                        <h1 class="text-2xl font-bold tracking-tight text-white">Check our available spectrum of services
                            to help
                            subjects
                            work
                            better</h1>
                        <a href=""
                            class="inline-flex items-center py-5 space-x-2 text-sm font-medium text-white uppercase group"><span
                                class="group-hover:text-primary">See
                                more</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 transition duration-200 ease-linear group-hover:text-primary group-hover:translate-x-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg></a>
                    </div>
                </div>
                <div class="relative col-span-2 lg:col-span-1">
                    <img class="object-cover w-full origin-center h-[500px]"
                        src="https://images.unsplash.com/photo-1624066970160-a7177aa3d010?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                        alt="">
                    <div class="absolute w-5/6 p-10 lg:w-3/6 bottom-10 left-10 bg-primary rounded-tl-3xl rounded-br-3xl">
                        <h1 class="text-2xl font-bold tracking-tight text-white">Find out our innovative progress for the
                            vast majority of companies </h1>
                        <a href=""
                            class="inline-flex items-center py-5 space-x-2 text-sm font-medium text-white uppercase group"><span
                                class="group-hover:text-accent">See
                                more</span> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 transition duration-200 ease-linear group-hover:text-accent group-hover:translate-x-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="team">
            <div id="team1" class="w-9/12 mx-auto">
                <div class="flex space-x-10">
                    <div class="w-full lg:w-7/12">
                        <h2 class="text-4xl font-bold text-accent">Meet our team</h2>
                        <h1 class="text-6xl font-bold leading-snug text-primary">Andy Matt</h1>
                        <p class="text-2xl font-bold text-primary">Chief Marketing</p>
                        <p class="my-10 text-xl font-medium leading-9">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Eligendi
                            officiis minus iste rerum sequi consectetur provident deserunt voluptatibus exercitationem
                            laudantium cum, similique dolore tempore mollitia, animi alias at earum repellendus!</p>
                        <a href="#"
                            class="px-8 py-4 text-sm font-bold text-white uppercase transition duration-200 ease-linear rounded-lg bg-primary hover:bg-accent">Read
                            more</a>
                    </div>
                    <div class="hidden lg:flex lg:w-5/12">
                        <img class="rounded-tr-[50px] rounded-bl-[50px] h-[500px] w-full object-cover origin-bottom"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80"
                            alt="">
                    </div>
                </div>

            </div>
        </div>

        <div id="difference"
            class="relative rounded-bl-[50px] min-h-[500px] p-10 lg:p-20 rounded-tr-[50px] overflow-hidden my-32">
            <img class="absolute top-0 left-0 right-0 object-cover w-full h-full"
                src="https://images.unsplash.com/photo-1544725121-be3bf52e2dc8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2334&q=80"
                alt="">
            <div class="relative z-10 bg-primary rounded-bl-[50px] rounded-tr-[50px] h-full w-full">
                <div class="grid grid-cols-12 gap-6 px-12 py-16 lg:px-24 md:divide-x divide-white/20">
                    <div class="col-span-12 py-6 md:col-span-6 xl:col-span-3">
                        <h1 class="text-5xl font-bold text-center text-white md:text-left">What<br /> <span
                                class="italic highlight text-accent">makes
                                us</span><br />
                            different</h1>
                        <a href="#"
                            class="inline-flex items-center justify-center w-full px-8 py-4 my-5 font-bold tracking-tight text-white uppercase rounded-lg md:w-auto bg-accent hover:text-primary">Contact
                            us</a>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">01</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">02</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                    <div class="col-span-12 md:px-8 md:col-span-6 xl:col-span-3">
                        <p class="pb-6 text-4xl font-bold text-accent">03</p>

                        <h2 class="pb-6 text-lg font-bold text-white uppercase">Practical booking functionality</h2>
                        <p class="text-sm leading-8 text-white/50">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit.
                            Doloribus commodi ea,
                            placeat deserunt, culpa praesentium quod nobis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="building" class="py-16">
            <h1 class="w-5/6 mx-auto text-6xl font-bold text-center lg:text-7xl text-primary">Building <span
                    class="italic highlight text-accent">enduring</span> value
                through
                bold strategies</h1>
            <div class="grid w-9/12 grid-cols-12 gap-8 mx-auto my-24">
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">129</p>
                            <p class="text-sm uppercase text-primary ">Cases completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">15</p>
                            <p class="text-sm uppercase text-primary ">Consultants</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">498</p>
                            <p class="text-sm uppercase text-primary ">Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                    <div class="flex items-center space-x-4">
                        <div class="w-2 h-16 bg-accent"></div>
                        <div>
                            <p class="font-bold text-7xl text-primary">23+</p>
                            <p class="text-sm uppercase text-primary ">Awards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-form" class="rounded-bl-[50px] rounded-tr-[50px] overflow-hidden mb-32">
            <div class="grid grid-cols-12">
                <div class="relative col-span-12 lg:col-span-5">
                    <img class="absolute left-0 right-0 z-0 object-cover w-full h-full"
                        src="https://images.unsplash.com/photo-1615840287214-7ff58936c4cf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=987&q=80"
                        alt="">
                    <div class="relative top-0 left-0 right-0 z-10 object-cover h-full px-24 py-24 lg:px-32 bg-primary/80">
                        <h1 class="text-4xl font-bold text-white lg:text-6xl">
                            Schedule a <span class="italic highlight">free business</span> consultation</h1>
                        <div class="flex flex-col my-16 space-y-8">
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Address</p>
                                    <p class="font-bold text-white">1010 Avenue of the Moon
                                        New York, NY 10018 US.</p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>


                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Phone</p>
                                    <p class="font-bold text-white">+40 233 242 3312</p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center space-x-4">
                                <div id="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-accent">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>

                                </div>
                                <div id="details">
                                    <p class="text-sm font-bold uppercase text-accent">Email</p>
                                    <p class="font-bold text-white">marketing@ez.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-7 bg-accent">
                    <div class="w-full p-10 lg:p-24">
                        <form action="" autocomplete="off">
                            <div class="grid grid-cols-2 gap-16">
                                <div class="col-span-1">
                                    <label for="name"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                        </svg>

                                        <input type="text" id="name" name="name" placeholder="Your name"
                                            class="w-full text-lg font-bold bg-transparent outline-none text-primary placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="company"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                        </svg>

                                        <input autocomplete="false" type="text" id="company" name="company"
                                            placeholder="Your Company"
                                            class="text-lg w-full text-primary font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="email"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round"
                                                d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                                        </svg>



                                        <input autocomplete="false" type="email" id="email" name="email"
                                            placeholder="Your email address"
                                            class="text-lg w-full text-primary font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <label for="subject"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">


                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 text-primary group-focus:text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                                        </svg>



                                        <select name="subject" id="subject"
                                            class="text-lg text-primary w-full marker:text-white  font-bold !bg-transparent outline-none placeholder:text-primary focus:text-white group-focus:text-white active:text-white">
                                            >
                                            <option value="1">I would like to discuss</option>
                                            <option value="2">Marketing</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="w-full col-span-2">
                                    <label for="message"
                                        class="inline-flex items-center w-full py-3 space-x-3 border-b-2 border-white focus:text-white group">


                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            class="w-full text-lg font-bold bg-transparent outline-none resize-none text-primary placeholder:text-primary focus:text-white group-focus:text-white active:text-white"></textarea>

                                    </label>
                                </div>
                                <div class="col-span-1">
                                    <button
                                        class="px-8 py-4 font-bold text-white uppercase transition duration-150 ease-linear border-4 border-transparent rounded-lg hover:bg-accent hover:border-white bg-primary">Submit</button>
                                </div>
                            </div>

                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
