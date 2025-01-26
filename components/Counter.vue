<script>
export default {
    data(){
        return {
            count: 0
        }
    }
}
</script>

<template>
    <button class="btn btn-primary" @click="count++">Count ({{count}})</button>
</template>

