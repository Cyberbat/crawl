<style lang="scss">
.pagination {
    justify-content: flex-end !important;
    .page-stats {
        align-items: center;
        margin-right: 5px;
    }
    i {
        color: #3273dc !important;
    }
}
</style>


<template>
	<nav class="pagination">
        <span style="padding-top: 0.6%" class="page-stats">{{pagination.from}} - {{pagination.to}} of {{pagination.total}}</span>
        <a v-if="pagination.prevPageUrl" style="background-color: grey" class="btn btn-default" @click="$emit('prev');">
            Prev
        </a>
        <a style="background-color: grey " class="btn btn-default"v-else :disabled="true">
           Prev
        </a>

        <a v-if="pagination.nextPageUrl" style="background-color: grey; margin-left:1%" class="btn btn-default" @click="$emit('next');">
            Next
        </a>
        <a class="btn btn-default" style="background-color: grey; margin-left:1%" v-else :disabled="true">
            Next
        </a>
    </nav>

   

</template>


<script>
	
	export default{



		props:['pagination']
	}

</script>