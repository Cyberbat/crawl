<template>
  
    <div style="padding-left: 35%">


        <form method="POST"  @submit.prevent="onSubmit">



            <div>

                <label for="name"> Domain Name:</label> 

                <input type="text" name="name" id="name" v-model="name" required>

            </div> 
           <div style="width: 111% !important;display: -webkit-box;padding: 0px;">
                <label for="language" style="margin-right: 15px;"> Language:</label> 

                <v-select
                  :options="['Chinese','Spanish','English','Hindi','Arabic','Portuguese','Turkish','Russian','Japanese','German','Italian']"
                  v-model="language" required
                ></v-select>

            </div> 


             <div style="padding-top: 1%">

                <label for="url"> URL:</label> 

                <input type="text" name="url" id="url" v-model="url" required>

            </div> 


             <div style="padding-top: 2%;padding-left: 12%">

               <button class="btn btn-primary btn-lg"> Submit</button>

            </div>

        </form>

    </div>

</template>

<script>
    
    export default {


        data() {
            return  {

            name:'',
 
            language:'',
 
            url:''
        
        }

        },

        methods:{


            onSubmit(){

                axios.post('/formdom',this.$data)
                .then(response=> window.location.href = 'http://test.app/');
            }
        }

        
    }
</script>

<style>

/*.v-select .dropdown-toggle {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 20%;
    display: block;
    padding: 0;
    background: none;
    border: 1px solid rgba(241, 39, 39, 0.26);
    border-radius: 4px;
    white-space: normal;
}
.form-control {
    display: block;
    width: 90px !important;
    font-size: 1rem;
    line-height: 1.5;
    color: rgb(73, 80, 87);
    background-color: rgb(255, 255, 255);
    background-clip: padding-box;
    padding: 0.375rem 0.75rem;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(206, 212, 218);
    border-image: initial;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}*/
.dropdown v-select single searchable
{
    display: block;
    width:250px !important;
}
.dropdown-toggle clearfix
{
     width: 500px;

}

    </style>