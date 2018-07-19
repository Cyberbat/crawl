<template>
  
    <div style="padding-left: 35%">


        <form method="POST">


            <div>

                <label for="name"> Domain Name:</label> 

                <input type="text" name="name" id="name" v-model="name"  :placeholder= domain.name required>

            </div> 


            <div  style="width: 111% !important;margin-left: 9%;">
                <label for="language"> Language:</label> 

                <v-select
                  :options="['Chinese','Spanish','English','Hindi','Arabic','Portuguese','Turkish','Russian','Japanese','German','Italian']"
                  v-model="language" :placeholder= domain.language required
                ></v-select>

            </div> 


             <div style="padding-top: 1%">

                <label for="url"> URL:</label> 

                <input type="text" name="url" id="url" v-model="url" :placeholder= domain.url required>

            </div> 


             <div style="padding-top: 2%;padding-left: 12%">
  

               <button class="btn btn-primary btn-lg" type="button" @click = "hello()"> Submit</button>

            </div>

        </form>

    </div>

</template>

<script>
    
    export default {

        props:{
            domain:{required:true}

        },
         mounted()
        {
            this.domain = JSON.parse(this.domain);
            this.domainid =this.domain.id; 

            console.log("Hi");
        },


        data() {
            return  {

            name:'',
 
            language:'',
 
            url:'',

            domainid:'',
        
           }

        },      
         
         methods:{


            hello(){
                axios.post('/updatedom',this.$data)
                      .then(response=> window.location.href = 'http://test.app');
            }
        }
        
    }
</script>