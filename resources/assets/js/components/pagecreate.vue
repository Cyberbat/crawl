<template>
	
	<div>
	  
        <button class="btn btn-primary" @click="seen = !seen">Create Post</button>

		<div style="margin-top: 3%">

			 <form v-if="seen" method="POST">


			            <div>

			                <label for="title"> Title Name:</label> 

			                <input type="text" name="title" v-model="title" id="title" required>

		                

           				 </div> 


           				 <div style="padding-top: 2%">

			                <label for="title"> URL:</label> 

			                <input type="text" name="url" id="url" v-model="url" required>

           				 </div>  




				<div style="padding-top: 2%;padding-left: 12%">
  

               <button class="btn btn-primary btn-lg" type="button" @click = "onSubmit()"> Post</button>

            </div>




        </form>

	</div>

	</div>	

</template>


<script>
    
var moment = require('moment');

    export default {

		props:{
           
            domain:{required:true}
        },

        mounted()
        {
            this.domain = JSON.parse(this.domain);
            this.domainid =this.domain.id; 
        },

        data() {
            return  {
            moment: moment,

            seen: false,

            title:'',

            url:'',

            domainid:'',
       		 }

        },

        methods:{


            onSubmit(){
            	

                axios.post('/addpost',this.$data)
                .then(response=> window.location.href = 'http://test.app/body/'+this.domainid);
            }
        }

    }



</script>