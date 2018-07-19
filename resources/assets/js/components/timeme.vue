<template>
	

	

	


</template>

<script>
	
export default {

		props:{
           
            post:{required:true}
        },

        mounted()
        {
            this.post = JSON.parse(this.post);
            this.postid =this.post.id;
            this.lastvisit= this.post.lastvisitdisplay;
        },

        data() {
        	
            return  {
      
	            postid:'',
	            lastvisit:'',

       		 }

        },

        
 }




</script>