<template>
    <button class="btn btn-primary" @click="count++">Count ({{count}})</button>
</template>

<script>
export default {
    data(){
        return {
            count: 0
        }
    }
}
</script>



